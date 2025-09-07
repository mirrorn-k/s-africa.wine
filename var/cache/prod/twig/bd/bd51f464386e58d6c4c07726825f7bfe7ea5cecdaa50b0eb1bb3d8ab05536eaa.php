<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @admin/Product/class_name.twig */
class __TwigTemplate_91b8dedbc99b0f5990a105d4198dfbcaaf05f21ab597aa752ca47dd8930ce8a5 extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'sub_title' => [$this, 'block_sub_title'],
            'stylesheet' => [$this, 'block_stylesheet'],
            'javascript' => [$this, 'block_javascript'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return "@admin/default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        $context["menus"] = [0 => "product", 1 => "class_name"];
        // line 18
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Product/class_name.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.class_management"), "html", null, true);
    }

    // line 16
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_management"), "html", null, true);
    }

    // line 19
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "    <style type=\"text/css\">
        .list-group-item:hover {
            z-index: inherit;
        }
    </style>
";
    }

    // line 27
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery.ui/jquery.ui.core.min.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery.ui/jquery.ui.widget.min.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery.ui/jquery.ui.mouse.min.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery.ui/jquery.ui.sortable.min.js", "admin"), "html", null, true);
        echo "\"></script>
    <script>
        \$(function() {
            var oldSortNos = [];
            // 画面の中のsortNo一覧を保持
            \$('.sortable-item').each(function() {
                oldSortNos.push(this.dataset.sortNo);
            });
            // rsort
            oldSortNos.sort(function(a, b) {
                return a - b;
            }).reverse();

            \$('.sortable-container').sortable({
                items: '> .sortable-item',
                cursor: 'move',
                update: function(e, ui) {
                    \$('body').append(\$('<div class=\"modal-backdrop show\"></div>'));
                    updateSortNo();
                }
            });

            var updateSortNo = function() {
                // 並び替え後にsortNoを更新
                var newSortNos = {};
                var i = 0;
                \$('.sortable-item').each(function() {
                    newSortNos[this.dataset.classNameId] = oldSortNos[i];
                    i++;
                });

                \$.ajax({
                    url: '";
        // line 63
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_class_name_sort_no_move");
        echo "',
                    type: 'POST',
                    data: newSortNos
                }).done(function() {
                    // remove class disable
                    \$('a.up.disabled').removeClass('disabled');
                    \$('a.down.disabled').removeClass('disabled');
                    // First element
                    \$('.sortable-item > li:nth-child(2) > div > div.col-auto.text-right > a.up').addClass('disabled');
                }).always(function() {
                    redrawDisableAllows();
                    \$('.modal-backdrop').remove();
                });
            };

            // 最初と最後の↑↓を再描画
            var redrawDisableAllows = function() {
                var items = \$('.sortable-item');
                items.find('a.up').removeClass('disabled');
                items.find('a.down').removeClass('disabled');
                items.first().find('a.up').addClass('disabled');
                items.last().find('a.down').addClass('disabled');
            };

            \$('.sortable-item a.up').click(function(e) {
                e.preventDefault();
                var current = \$(this).parents('.list-group-item');
                current.prev().before(current);
                \$('body').append(\$('<div class=\"modal-backdrop show\"></div>'));
                updateSortNo();
            });

            \$('.sortable-item a.down').click(function(e) {
                e.preventDefault();
                var current = \$(this).parents('.list-group-item');
                current.next().after(current);
                \$('body').append(\$('<div class=\"modal-backdrop show\"></div>'));
                updateSortNo();
            });

            // 編集
            \$('.sortable-item').on('click', 'a.action-edit', function(e) {
                e.preventDefault();
                var current = \$(this).parents('li');
                current.find('.mode-view').addClass('d-none');
                current.find('.mode-edit').removeClass('d-none');
            });
            // 編集キャンセル
            \$('.sortable-item').on('click', 'button.action-edit-cancel', function(e) {
                e.preventDefault();
                var current = \$(this).parents('li');
                current.find('[data-origin-value]').each(function(e) {
                    \$(this).val(\$(this).attr('data-origin-value'));
                });
                current.find('.mode-view').removeClass('d-none');
                current.find('.mode-edit').addClass('d-none');
            });

            // 編集時, エラーがあれば入力欄を表示.
            \$('.sortable-item').find('.is-invalid').each(function(e) {
                var current = \$(this).parents('li');
                current.find('.mode-view').addClass('d-none');
                current.find('.mode-edit').removeClass('d-none');
            });

            // 削除モーダルのhrefとmessageの変更
            \$('#DeleteModal').on('shown.bs.modal', function(event) {
                var target = \$(event.relatedTarget);
                // hrefの変更
                \$(this).find('[data-method=\"delete\"]').attr('href', target.data('url'));

                // messageの変更
                \$(this).find('p.modal-message').text(target.data('message'));
            });
        });
    </script>

";
    }

    // line 142
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 143
        echo "    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-body p-0\">
                        <div class=\"card rounded border-0\">
                            <ul class=\"list-group list-group-flush sortable-container\">
                                <li class=\"list-group-item\">
                                    <form role=\"form\" class=\"form-row\" name=\"form1\" id=\"form1\" method=\"post\" action=\"";
        // line 151
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_class_name");
        echo "\">
                                        <div class=\"col-auto align-self-center\"><span>";
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.class_name"), "html", null, true);
        echo "</span></div>
                                        <div class=\"col-3 mr-2\">
                                            ";
        // line 154
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, false, 154), 'widget');
        echo "
                                            ";
        // line 155
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 155), 'widget');
        echo "
                                            ";
        // line 156
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 156), 'errors');
        echo "
                                        </div>
                                        <div class=\"col-auto align-self-center\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.backend_name"), "html", null, true);
        echo "\">
                                            <span>";
        // line 159
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.class_name__backend_name"), "html", null, true);
        echo "</span>
                                            <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                        </div>
                                        <div class=\"col-3\">
                                            ";
        // line 163
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "backend_name", [], "any", false, false, false, 163), 'widget');
        echo "
                                            ";
        // line 164
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "backend_name", [], "any", false, false, false, 164), 'errors');
        echo "
                                        </div>
                                        <div class=\"col-auto\">
                                            <button class=\"btn btn-ec-regular\" type=\"submit\">";
        // line 167
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.create__new"), "html", null, true);
        echo "</button>
                                        </div>
                                    </form>
                                </li>
                                <li class=\"list-group-item\">
                                    <div class=\"row\">
                                        <div class=\"col-auto\"><strong>&nbsp;</strong></div>
                                        <div class=\"col-auto\"><strong>";
        // line 174
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.id"), "html", null, true);
        echo "</strong></div>
                                        <div class=\"col-1\"><strong>";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.class_management"), "html", null, true);
        echo "</strong></div>
                                    </div>
                                </li>
                                ";
        // line 178
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ClassNames"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["ClassName"]) {
            // line 179
            echo "                                    <li id=\"ex-class_name-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ClassName"], "id", [], "any", false, false, false, 179), "html", null, true);
            echo "\" class=\"list-group-item sortable-item\" data-class-name-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ClassName"], "id", [], "any", false, false, false, 179), "html", null, true);
            echo "\" data-sort-no=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ClassName"], "sortNo", [], "any", false, false, false, 179), "html", null, true);
            echo "\">
                                        <div class=\"row justify-content-around mode-view\">
                                            <div class=\"col-auto d-flex align-items-center\"><i class=\"fa fa-bars text-ec-gray\"></i></div>
                                            <div class=\"col-auto d-flex align-items-center\">";
            // line 182
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ClassName"], "id", [], "any", false, false, false, 182), "html", null, true);
            echo "</div>
                                            <div class=\"col d-flex align-items-center\">
                                                <a href=\"";
            // line 184
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_class_category", ["class_name_id" => twig_get_attribute($this->env, $this->source, $context["ClassName"], "id", [], "any", false, false, false, 184)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ClassName"], "name", [], "any", false, false, false, 184), "html", null, true);
            echo "［";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.class_name__backend_name"), "html", null, true);
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.separator__colon"), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ClassName"], "backend_name", [], "any", false, false, false, 184), "html", null, true);
            echo "］ (";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ClassName"], "ClassCategories", [], "any", false, false, false, 184)), "html", null, true);
            echo ")</a>
                                            </div>
                                            <div class=\"col-auto text-right\">
                                                <a class=\"btn btn-ec-actionIcon mr-2 up ";
            // line 187
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 187)) {
                echo "disabled";
            }
            echo "\" href=\"\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.up"), "html", null, true);
            echo "\">
                                                    <i class=\"fa fa-arrow-up fa-lg text-secondary\"></i>
                                                </a>
                                                <a class=\"btn btn-ec-actionIcon mr-2 down ";
            // line 190
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 190)) {
                echo "disabled";
            }
            echo "\" href=\"\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.down"), "html", null, true);
            echo "\">
                                                    <i class=\"fa fa-arrow-down fa-lg text-secondary\"></i>
                                                </a>
                                                <a class=\"btn btn-ec-actionIcon mr-2 action-edit\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
            // line 193
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.edit"), "html", null, true);
            echo "\">
                                                    <i class=\"fa fa-pencil fa-lg text-secondary\"></i>
                                                </a>
                                                <div class=\"d-inline-block mr-2\" data-tooltip=\"true\"
                                                     data-placement=\"top\" title=\"";
            // line 197
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
            echo "\">
                                                    ";
            // line 198
            $context["classCategories"] = twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["ClassName"], "ClassCategories", [], "any", false, false, false, 198));
            // line 199
            echo "                                                    <a class=\"btn btn-ec-actionIcon";
            if ((($context["classCategories"] ?? null) > 0)) {
                echo " disabled";
            }
            echo "\"
                                                       ";
            // line 200
            if ((($context["classCategories"] ?? null) == 0)) {
                echo "data-toggle=\"modal\" data-target=\"#DeleteModal\"
                                                       data-url=\"";
                // line 201
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_class_name_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["ClassName"], "id", [], "any", false, false, false, 201)]), "html", null, true);
                echo "\"
                                                       data-message=\"";
                // line 202
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__message", ["%name%" => twig_get_attribute($this->env, $this->source, $context["ClassName"], "name", [], "any", false, false, false, 202)]), "html", null, true);
                echo "\"";
            }
            echo ">
                                                        <i class=\"fa fa-close fa-lg text-secondary\"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <form class=\"form-row d-none mode-edit\" method=\"post\" action=\"";
            // line 208
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_class_name");
            echo "\">
                                            ";
            // line 209
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["forms"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["ClassName"], "id", [], "any", false, false, false, 209)] ?? null) : null), "_token", [], "any", false, false, false, 209), 'widget');
            echo "
                                            <div class=\"col-auto align-self-center\"><span>";
            // line 210
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.class_name"), "html", null, true);
            echo "</span></div>
                                            <div class=\"col-auto align-items-center\">
                                                ";
            // line 212
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["forms"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["ClassName"], "id", [], "any", false, false, false, 212)] ?? null) : null), "name", [], "any", false, false, false, 212), 'widget', ["attr" => ["data-origin-value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["forms"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["ClassName"], "id", [], "any", false, false, false, 212)] ?? null) : null), "name", [], "any", false, false, false, 212), "vars", [], "any", false, false, false, 212), "value", [], "any", false, false, false, 212)]]);
            echo "
                                                ";
            // line 213
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["forms"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["ClassName"], "id", [], "any", false, false, false, 213)] ?? null) : null), "name", [], "any", false, false, false, 213), 'errors');
            echo "
                                            </div>
                                            <div class=\"col-auto align-self-center\"><span>";
            // line 215
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.class_name__backend_name"), "html", null, true);
            echo "</span></div>
                                            <div class=\"col-auto align-items-center\">
                                                ";
            // line 217
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["forms"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["ClassName"], "id", [], "any", false, false, false, 217)] ?? null) : null), "backend_name", [], "any", false, false, false, 217), 'widget', ["attr" => ["data-origin-value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["forms"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["ClassName"], "id", [], "any", false, false, false, 217)] ?? null) : null), "backend_name", [], "any", false, false, false, 217), "vars", [], "any", false, false, false, 217), "value", [], "any", false, false, false, 217)]]);
            echo "
                                                ";
            // line 218
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e = ($context["forms"] ?? null)) && is_array($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e) || $__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e instanceof ArrayAccess ? ($__internal_01c35b74bd85735098add188b3f8372ba465b232ab8298cb582c60f493d3c22e[twig_get_attribute($this->env, $this->source, $context["ClassName"], "id", [], "any", false, false, false, 218)] ?? null) : null), "backend_name", [], "any", false, false, false, 218), 'errors');
            echo "
                                            </div>
                                            <div class=\"col-auto align-items-center\">
                                                <button class=\"btn btn-ec-conversion\" type=\"submit\">";
            // line 221
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.decision"), "html", null, true);
            echo "</button>
                                            </div>
                                            <div class=\"col-auto align-items-center\">
                                                <button class=\"btn btn-ec-sub action-edit-cancel\" type=\"button\">";
            // line 224
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
            echo "</button>
                                            </div>
                                        </form>
                                    </li>
                                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ClassName'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 229
        echo "                            </ul>
                            <!-- 削除モーダル -->
                            <div class=\"modal fade\" id=\"DeleteModal\" tabindex=\"-1\" role=\"dialog\"
                                 aria-labelledby=\"DeleteModal\" aria-hidden=\"true\">
                                <div class=\"modal-dialog\" role=\"document\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header\">
                                            <h5 class=\"modal-title font-weight-bold\">
                                                ";
        // line 237
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__title"), "html", null, true);
        echo "
                                            </h5>
                                            <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                <span aria-hidden=\"true\">×</span>
                                            </button>
                                        </div>
                                        <div class=\"modal-body text-left\">
                                            <p class=\"text-left modal-message\"><!-- jsでメッセージを挿入 --></p>
                                        </div>
                                        <div class=\"modal-footer\">
                                            <button class=\"btn btn-ec-sub\" type=\"button\" data-dismiss=\"modal\">
                                                ";
        // line 248
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
        echo "
                                            </button>
                                            <a class=\"btn btn-ec-delete\" href=\"#\" ";
        // line 250
        echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
        echo "
                                               data-method=\"delete\" data-confirm=\"false\">
                                                ";
        // line 252
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
        echo "
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <p>";
        // line 261
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.drag_and_drop_description"), "html", null, true);
        echo "</p>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@admin/Product/class_name.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  507 => 261,  495 => 252,  490 => 250,  485 => 248,  471 => 237,  461 => 229,  442 => 224,  436 => 221,  430 => 218,  426 => 217,  421 => 215,  416 => 213,  412 => 212,  407 => 210,  403 => 209,  399 => 208,  388 => 202,  384 => 201,  380 => 200,  373 => 199,  371 => 198,  367 => 197,  360 => 193,  350 => 190,  340 => 187,  326 => 184,  321 => 182,  310 => 179,  293 => 178,  287 => 175,  283 => 174,  273 => 167,  267 => 164,  263 => 163,  256 => 159,  252 => 158,  247 => 156,  243 => 155,  239 => 154,  234 => 152,  230 => 151,  220 => 143,  216 => 142,  134 => 63,  99 => 31,  95 => 30,  91 => 29,  86 => 28,  82 => 27,  73 => 20,  69 => 19,  62 => 16,  55 => 15,  50 => 11,  48 => 18,  46 => 13,  39 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Product/class_name.twig", "/home/anotherworld/www/s-africa.wine/src/Eccube/Resource/template/admin/Product/class_name.twig");
    }
}
