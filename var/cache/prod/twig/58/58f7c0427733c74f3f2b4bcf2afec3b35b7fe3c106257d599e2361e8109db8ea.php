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

/* @admin/Product/tag.twig */
class __TwigTemplate_cf44fadb751037eab8913929e7b5aca4f394b68760980885f1fc33bea965cf60 extends \Eccube\Twig\Template
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
        $context["menus"] = [0 => "product", 1 => "product_tag"];
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Product/tag.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.tag_management"), "html", null, true);
    }

    // line 16
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_management"), "html", null, true);
    }

    // line 18
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "    <style>
        .list-group-item:hover {
            z-index: inherit;
        }
    </style>
";
    }

    // line 25
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 26
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery.ui/jquery.ui.core.min.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery.ui/jquery.ui.widget.min.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery.ui/jquery.ui.mouse.min.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/jquery.ui/jquery.ui.sortable.min.js", "admin"), "html", null, true);
        echo "\"></script>
    <script>
        \$(function() {
            // 初期表示時のsort noを保持.
            var oldSortNos = [];
            \$('.sortable-item').each(function() {
                oldSortNos.push(this.dataset.sortNo);
            });
            oldSortNos.sort(function(a, b) {
                return a - b;
            }).reverse();
            // 並び替え後にsort noを更新
            var updateSortNo = function() {
                var newSortNos = {};
                var i = 0;
                \$('.sortable-item').each(function() {
                    newSortNos[this.dataset.id] = oldSortNos[i];
                    i++;
                });
                \$.ajax({
                    url: '";
        // line 49
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_tag_sort_no_move");
        echo "',
                    type: 'POST',
                    data: newSortNos
                }).always(function() {
                    \$(\".modal-backdrop\").remove();
                });
            };
            // 最初と最後の↑↓を再描画
            var redrawDisableAllows = function() {
                var items = \$('.sortable-item');
                items.find('a').removeClass('disabled');
                items.first().find('a.action-up').addClass('disabled');
                items.last().find('a.action-down').addClass('disabled');
            };
            // オーバレイ後, 表示順の更新を行う
            var moveSortNo = function() {
                \$('body').append(\$('<div class=\"modal-backdrop show\"></div>'));
                updateSortNo();
                redrawDisableAllows();
            };
            // Drag and Drop
            \$('.sortable-container').sortable({
                items: '> .sortable-item',
                cursor: 'move',
                update: function(e, ui) {
                    moveSortNo();
                }
            });
            // Up
            \$('.sortable-item').on('click', 'a.action-up', function(e) {
                e.preventDefault();
                var current = \$(this).parents(\"li\");
                if (current.prev().hasClass('sortable-item')) {
                    current.prev().before(current);
                    moveSortNo();
                }
            });
            // Down
            \$('.sortable-item').on('click', 'a.action-down', function(e) {
                e.preventDefault();
                var current = \$(this).parents(\"li\");
                if (current.next().hasClass('sortable-item')) {
                    current.next().after(current);
                    moveSortNo();
                }
            });

            // 編集
            \$('.sortable-item').on('click', 'a.action-edit', function(e) {
                e.preventDefault();
                var current = \$(this).parents(\"li\");
                current.find('.mode-view').addClass('d-none');
                current.find('.mode-edit').removeClass('d-none');
            });

            // 編集キャンセル
            \$('.sortable-item').on('click', 'button.action-edit-cancel', function(e) {
                e.preventDefault();
                var current = \$(this).parents(\"li\");
                current.find('[data-origin-value]').each(function(e) {
                    \$(this).val(\$(this).attr('data-origin-value'));
                });
                current.find('.mode-view').removeClass('d-none');
                current.find('.mode-edit').addClass('d-none');
            });
            // 編集時, エラーがあれば入力欄を表示.
            \$('.sortable-item').find('.is-invalid').each(function(e) {
                var current = \$(this).parents(\"li\");
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

    // line 134
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 135
        echo "    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <div class=\"card rounded border-0 mb-4\">
                    <div class=\"card-body p-0\">
                        <div class=\"card rounded border-0\">
                            <ul class=\"list-group list-group-flush sortable-container\">
                                <li class=\"list-group-item\">
                                    <form role=\"form\" class=\"form-row\" method=\"post\" action=\"";
        // line 143
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_tag");
        echo "\">
                                        ";
        // line 144
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, false, 144), 'widget');
        echo "
                                        <div class=\"col-auto align-items-center\">
                                            ";
        // line 146
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 146), 'widget');
        echo "
                                            ";
        // line 147
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 147), 'errors');
        echo "
                                        </div>
                                        <div class=\"col-auto align-items-center\">
                                            <button class=\"btn btn-ec-regular\" type=\"submit\">
                                                ";
        // line 151
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.create__new"), "html", null, true);
        echo "
                                            </button>
                                        </div>

                                        ";
        // line 156
        echo "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 156), "eccube_form_options", [], "any", false, false, false, 156), "auto_render", [], "any", false, false, false, 156)) {
                // line 157
                echo "                                            ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 157), "eccube_form_options", [], "any", false, false, false, 157), "form_theme", [], "any", false, false, false, 157)) {
                    // line 158
                    echo "                                                ";
                    $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($context["f"], [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 158), "eccube_form_options", [], "any", false, false, false, 158), "form_theme", [], "any", false, false, false, 158)], true);
                    // line 159
                    echo "                                                ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'row');
                    echo "
                                            ";
                } else {
                    // line 161
                    echo "                                                <div class=\"col-auto align-items-center\">
                                                    <div>
                                                        <span>";
                    // line 163
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 163), "label", [], "any", false, false, false, 163)), "html", null, true);
                    echo "</span>
                                                        ";
                    // line 164
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'widget');
                    echo "
                                                        ";
                    // line 165
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'errors');
                    echo "
                                                    </div>
                                                </div>
                                            ";
                }
                // line 169
                echo "                                        ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 170
        echo "                                    </form>
                                </li>
                                <li class=\"list-group-item\">
                                    <div class=\"row\">
                                        <div class=\"col-auto\"><strong>&nbsp;</strong></div>
                                        <div class=\"col-auto\"><strong>";
        // line 175
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.id"), "html", null, true);
        echo "</strong></div>
                                        <div class=\"col-1\"><strong>";
        // line 176
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.tag"), "html", null, true);
        echo "</strong></div>
                                    </div>
                                </li>
                                ";
        // line 179
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Tags"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["Tag"]) {
            // line 180
            echo "                                    <li id=\"ex-tag-";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Tag"], "id", [], "any", false, false, false, 180), "html", null, true);
            echo "\" class=\"list-group-item sortable-item\" data-id=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Tag"], "id", [], "any", false, false, false, 180), "html", null, true);
            echo "\"
                                        data-sort-no=\"";
            // line 181
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Tag"], "sortNo", [], "any", false, false, false, 181), "html", null, true);
            echo "\">
                                        <div class=\"row justify-content-around mode-view\">
                                            <div class=\"col-auto d-flex align-items-center\"><i class=\"fa fa-bars text-ec-gray\"></i></div>
                                            <div class=\"col-auto d-flex align-items-center\">";
            // line 184
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Tag"], "id", [], "any", false, false, false, 184), "html", null, true);
            echo "</div>
                                            <div class=\"col d-flex align-items-center\"><a>";
            // line 185
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Tag"], "name", [], "any", false, false, false, 185), "html", null, true);
            echo "</a>
                                            </div>
                                            <div class=\"col-auto text-right\">
                                                <a class=\"btn btn-ec-actionIcon mr-2 action-up";
            // line 188
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "first", [], "any", false, false, false, 188)) {
                echo " disabled";
            }
            echo "\" href=\"#\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.up"), "html", null, true);
            echo "\">
                                                    <i class=\"fa fa-arrow-up fa-lg text-secondary\"></i>
                                                </a>
                                                <a class=\"btn btn-ec-actionIcon mr-2 action-down";
            // line 191
            if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 191)) {
                echo " disabled";
            }
            echo "\" href=\"#\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.down"), "html", null, true);
            echo "\">
                                                    <i class=\"fa fa-arrow-down fa-lg text-secondary\"></i>
                                                </a>
                                                <a class=\"btn btn-ec-actionIcon mr-2 action-edit\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
            // line 194
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.edit"), "html", null, true);
            echo "\">
                                                    <i class=\"fa fa-pencil fa-lg text-secondary\"></i>
                                                </a>
                                                <div class=\"d-inline-block mr-2\" data-tooltip=\"true\"
                                                     data-placement=\"top\" title=\"";
            // line 198
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
            echo "\">
                                                    <a class=\"btn btn-ec-actionIcon\" data-toggle=\"modal\" data-target=\"#DeleteModal\"
                                                       data-url=\"";
            // line 200
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_tag_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["Tag"], "id", [], "any", false, false, false, 200)]), "html", null, true);
            echo "\"
                                                       data-message=\"";
            // line 201
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__message", ["%name%" => twig_get_attribute($this->env, $this->source, $context["Tag"], "name", [], "any", false, false, false, 201)]), "html", null, true);
            echo "\">
                                                        <i class=\"fa fa-close fa-lg text-secondary\"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <form class=\"form-row d-none mode-edit\" method=\"post\" action=\"";
            // line 207
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_tag");
            echo "\">
                                            ";
            // line 208
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["forms"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["Tag"], "id", [], "any", false, false, false, 208)] ?? null) : null), "_token", [], "any", false, false, false, 208), 'widget');
            echo "
                                            <div class=\"col-auto align-items-center\">
                                                ";
            // line 210
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["forms"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["Tag"], "id", [], "any", false, false, false, 210)] ?? null) : null), "name", [], "any", false, false, false, 210), 'widget', ["attr" => ["data-origin-value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["forms"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["Tag"], "id", [], "any", false, false, false, 210)] ?? null) : null), "name", [], "any", false, false, false, 210), "vars", [], "any", false, false, false, 210), "value", [], "any", false, false, false, 210)]]);
            echo "
                                                ";
            // line 211
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["forms"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["Tag"], "id", [], "any", false, false, false, 211)] ?? null) : null), "name", [], "any", false, false, false, 211), 'errors');
            echo "
                                            </div>

                                            ";
            // line 215
            echo "                                            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["forms"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["Tag"], "id", [], "any", false, false, false, 215)] ?? null) : null));
            foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 215), "eccube_form_options", [], "any", false, false, false, 215), "auto_render", [], "any", false, false, false, 215)) {
                    // line 216
                    echo "                                                ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 216), "eccube_form_options", [], "any", false, false, false, 216), "form_theme", [], "any", false, false, false, 216)) {
                        // line 217
                        echo "                                                    ";
                        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($context["f"], [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 217), "eccube_form_options", [], "any", false, false, false, 217), "form_theme", [], "any", false, false, false, 217)], true);
                        // line 218
                        echo "                                                    ";
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'row');
                        echo "
                                                ";
                    } else {
                        // line 220
                        echo "                                                    <div class=\"col-auto align-items-center\">
                                                        <div>
                                                            <span>";
                        // line 222
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 222), "label", [], "any", false, false, false, 222)), "html", null, true);
                        echo "</span>
                                                            ";
                        // line 223
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'widget');
                        echo "
                                                            ";
                        // line 224
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'errors');
                        echo "
                                                        </div>
                                                    </div>
                                                ";
                    }
                    // line 228
                    echo "                                            ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 229
            echo "
                                            <div class=\"col-auto align-items-center\">
                                                <button class=\"btn btn-ec-conversion\" type=\"submit\">";
            // line 231
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.decision"), "html", null, true);
            echo "</button>
                                            </div>
                                            <div class=\"col-auto align-items-center\">
                                                <button class=\"btn btn-ec-sub action-edit-cancel\" type=\"button\">";
            // line 234
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 239
        echo "                            </ul>
                            <!-- 削除モーダル -->
                            <div class=\"modal fade\" id=\"DeleteModal\" tabindex=\"-1\" role=\"dialog\"
                                 aria-labelledby=\"DeleteModal\" aria-hidden=\"true\">
                                <div class=\"modal-dialog\" role=\"document\">
                                    <div class=\"modal-content\">
                                        <div class=\"modal-header\">
                                            <h5 class=\"modal-title font-weight-bold\">
                                                ";
        // line 247
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
        // line 258
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
        echo "
                                            </button>
                                            <a class=\"btn btn-ec-delete\" href=\"#\" ";
        // line 260
        echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
        echo "
                                               data-method=\"delete\" data-confirm=\"false\">
                                                ";
        // line 262
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
        // line 271
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.drag_and_drop_description"), "html", null, true);
        echo "</p>
            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "@admin/Product/tag.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  533 => 271,  521 => 262,  516 => 260,  511 => 258,  497 => 247,  487 => 239,  468 => 234,  462 => 231,  458 => 229,  451 => 228,  444 => 224,  440 => 223,  436 => 222,  432 => 220,  426 => 218,  423 => 217,  420 => 216,  414 => 215,  408 => 211,  404 => 210,  399 => 208,  395 => 207,  386 => 201,  382 => 200,  377 => 198,  370 => 194,  360 => 191,  350 => 188,  344 => 185,  340 => 184,  334 => 181,  327 => 180,  310 => 179,  304 => 176,  300 => 175,  293 => 170,  286 => 169,  279 => 165,  275 => 164,  271 => 163,  267 => 161,  261 => 159,  258 => 158,  255 => 157,  249 => 156,  242 => 151,  235 => 147,  231 => 146,  226 => 144,  222 => 143,  212 => 135,  208 => 134,  120 => 49,  97 => 29,  93 => 28,  89 => 27,  84 => 26,  80 => 25,  71 => 19,  67 => 18,  60 => 16,  53 => 15,  48 => 11,  46 => 13,  39 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Product/tag.twig", "/home/anotherworld/www/s-africa.wine/src/Eccube/Resource/template/admin/Product/tag.twig");
    }
}
