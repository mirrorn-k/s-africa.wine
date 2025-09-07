-- PluginManager::update() function of EC-CUBE 4.0.3 has a bug that can update table based on entity
-- So we need to run this alter before update from version 1.0.0 manually
ALTER TABLE `plg_tax_management_config`
	ADD COLUMN `discount_rate_flag` TINYINT(1) NOT NULL DEFAULT '0' COMMENT '0:非表示 - not display discount rate\r\n1:表示-display discount rate\r\n' AFTER `name`,
	ADD COLUMN `include_tax_flag` TINYINT(1) NOT NULL DEFAULT '1' COMMENT '0: 税抜き - not include tax\r\n1: 税込み - include tax' AFTER `discount_rate_flag`;
ALTER TABLE `plg_tax_management_config`
	DROP COLUMN `name`;
INSERT INTO `plg_tax_management_config` (`discount_rate_flag`, `include_tax_flag`) VALUES ('0', '1');