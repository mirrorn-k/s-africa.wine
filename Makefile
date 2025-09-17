# ===== Settings =====
DC            ?= docker compose
APP_SERVICE   ?= ec-cube
DB_SERVICE    ?= mysql

# DB credentials (docker-compose.yml と合わせる)
MYSQL_DB      ?= eccubedb
MYSQL_USER    ?= dbuser
MYSQL_PASS    ?= secret
MYSQL_ROOT    ?= root
MYSQL_ROOTPW  ?= root

# 既定の SQL ダンプ（存在しなければスキップ）: make setup FILE=path/to.sql でも可
FILE          ?= sql/anotherworld_safrica_ec.sql

# 使うプラグイン（DBに合わせて TaxManagement/CustomerRank のバージョンを固定）
PLUGIN_PACKAGES = \
  'ec-cube/CategoryExtensionB:^1.0' \
  'ec-cube/GmoEpsilon4:1.0.8' \
  'ec-cube/Recommend4:^4.0' \
  'ec-cube/RelatedProduct4:^4.0' \
  'ec-cube/SSProductDetailPage:^1.0' \
  'ec-cube/SitemapXmlGenerator:^1.0' \
  'ec-cube/TaxManagement:1.0.0' \
  'ec-cube/customerrank:1.1.4'

PLUGIN_CODES = \
  CategoryExtensionB \
  GmoEpsilon4 \
  Recommend4 \
  RelatedProduct4 \
  SSProductDetailPage \
  SitemapXmlGenerator \
  TaxManagement \
  CustomerRank

# ===== Top-level =====
.PHONY: setup build up upd-build

## 初回セットアップ全部（ビルド→起動→DB待機→ダンプ投入→権限→プラグイン導入＆有効化→キャッシュ）
setup: build up wait-db maybe-db-import fix-perms plugins cache
	@echo ">> setup done."

## 画像ビルド
build:
	$(DC) build

## 起動
up-prod:
	$(DC) -f docker-compose.yml up -d

up:
	$(DC) up -d

## ビルド付きで起動
upd-build:
	$(DC) up -d --build


# ===== DB =====
.PHONY: wait-db maybe-db-import db-import

## DB 起動待ち
wait-db:
	@echo ">> waiting for MySQL..."
	@$(DC) exec -T $(DB_SERVICE) sh -lc 'until mysqladmin ping -h 127.0.0.1 -u$(MYSQL_ROOT) -p$(MYSQL_ROOTPW) --silent; do sleep 2; done'
	@echo ">> MySQL is up."

## ダンプファイルがあれば取り込む（なければスキップ）
maybe-db-import:
	@if [ -f "$(FILE)" ]; then \
	  $(MAKE) db-import FILE="$(FILE)"; \
	else \
	  echo ">> skip db-import (FILE not found): $(FILE)"; \
	fi

## 明示的にダンプ取り込み（手動用）
db-import:
	@test -f "$(FILE)" || (echo "SQL file not found: $(FILE)"; exit 1)
	@echo ">> importing $(FILE) into $(MYSQL_DB)"
	@$(DC) exec -T $(DB_SERVICE) sh -lc 'mysql -u$(MYSQL_USER) -p$(MYSQL_PASS) $(MYSQL_DB)' < $(FILE)
	@echo ">> import done."


# ===== EC-CUBE =====
.PHONY: fix-perms cache plugins plugins-install plugins-enable

## 必要ディレクトリ＆権限
fix-perms:
	@$(DC) exec $(APP_SERVICE) bash -lc '\
	  set -e; cd /var/www/html; \
	  mkdir -p var/logs var/cache var/tmp html/upload html/user_data; \
	  chown -R www-data:www-data var html/upload html/user_data; \
	  ls -ld var var/logs | cat \
	'

## キャッシュ再生成（CLIでもメモリ広め）
cache:
	@$(DC) exec $(APP_SERVICE) bash -lc '\
	  cd /var/www/html; \
	  php -d opcache.enable_cli=1 -d memory_limit=-1 bin/console cache:clear --no-warmup; \
	  php -d opcache.enable_cli=1 -d memory_limit=-1 bin/console cache:warmup \
	'

## プラグインまとめ（インストール→有効化）
plugins: plugins-install plugins-enable

## プラグインを eccube コマンドで導入（Composer1 前提）
plugins-install:
	@$(DC) exec $(APP_SERVICE) bash -lc '\
	  set -e; cd /var/www/html; \
	  for p in $(PLUGIN_PACKAGES); do \
	    echo ">> installing $$p"; \
	    php bin/console eccube:composer:require "$$p"; \
	  done; \
	  composer dump-autoload -o \
	'

## プラグインを順番に有効化（毎回キャッシュ更新）
plugins-enable:
	@$(DC) exec $(APP_SERVICE) bash -lc '\
	  set -e; cd /var/www/html; \
	  for c in $(PLUGIN_CODES); do \
	    echo ">> enable $$c"; \
	    php bin/console eccube:plugin:enable --code="$$c" || true; \
	    php -d memory_limit=-1 bin/console cache:clear --no-warmup; \
	    php -d memory_limit=-1 bin/console cache:warmup; \
	  done \
	'


# ===== Utilities =====
.PHONY: logs shell mysql down restart

logs:
	$(DC) logs -f $(APP_SERVICE)

shell:
	$(DC) exec $(APP_SERVICE) bash

mysql:
	$(DC) exec $(DB_SERVICE) sh -lc 'mysql -u$(MYSQL_USER) -p$(MYSQL_PASS) $(MYSQL_DB)'

down:
	$(DC) down

restart:
	$(DC) restart $(APP_SERVICE)


# ===== Delete =====
.PHONY: reset-app reset-db

reset-app:
	$(DC) stop $(APP_SERVICE)
	- docker volume rm $$($(DC) ps -q $(APP_SERVICE) | xargs -I{} docker inspect {} -f '{{range .Mounts}}{{if eq .Type "volume"}}{{.Name}} {{end}}{{end}}')
	$(DC) up -d $(APP_SERVICE)

reset-db:
	$(DC) stop $(DB_SERVICE)
	- docker volume rm $$($(DC) ps -q $(DB_SERVICE) | xargs -I{} docker inspect {} -f '{{range .Mounts}}{{if eq .Type "volume"}}{{.Name}} {{end}}{{end}}')
	$(DC) up -d $(DB_SERVICE)