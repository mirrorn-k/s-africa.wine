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

/* @admin/Product/product.twig */
class __TwigTemplate_ac1a8941eb707304fbcd69a681aa16e5ca39275e35e11c911a04e6eabca8dcf8 extends \Eccube\Twig\Template
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
        $context["menus"] = [0 => "product", 1 => "product_edit"];
        // line 18
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Product/product.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_registration"), "html", null, true);
    }

    // line 16
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_management"), "html", null, true);
    }

    // line 20
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/fileupload/jquery.fileupload.css", "admin"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/fileupload/jquery.fileupload-ui.css", "admin"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css\">
    <style>
        #thumb div {
            float: left;
            margin: 4px
        }

        .ui-state-highlight {
            height: 70px;
            width: 70px;
            border: dashed 1px #ccc;
            background: #fff;
        }
    </style>
";
    }

    // line 39
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 40
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/fileupload/vendor/jquery.ui.widget.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/fileupload/jquery.iframe-transport.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/fileupload/jquery.fileupload.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/fileupload/jquery.fileupload-process.js", "admin"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/vendor/fileupload/jquery.fileupload-validate.js", "admin"), "html", null, true);
        echo "\"></script>
    <script>var bootstrapTooltip = \$.fn.tooltip.noConflict();</script>
    <script src=\"https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js\"></script>
    <script>
        \$.fn.tooltip = bootstrapTooltip;
        \$(document).on('drop dragover', function(e) {
            e.preventDefault();
        });
        \$(function() {
            // Todo: fix drag&drop style
            \$(\"#thumb\").sortable({
                cursor: 'move',
                opacity: 0.7,
                placeholder: 'ui-state-highlight',
                update: function(event, ui) {
                    updateSortNo();
                }
            });
            ";
        // line 62
        if ((($context["has_class"] ?? null) == false)) {
            // line 63
            echo "            if (\$(\"#";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", [], "any", false, false, false, 63), "stock_unlimited", [], "any", false, false, false, 63), "vars", [], "any", false, false, false, 63), "id", [], "any", false, false, false, 63), "html", null, true);
            echo "\").prop(\"checked\")) {
                \$(\"#";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", [], "any", false, false, false, 64), "stock", [], "any", false, false, false, 64), "vars", [], "any", false, false, false, 64), "id", [], "any", false, false, false, 64), "html", null, true);
            echo "\").attr(\"disabled\", \"disabled\").val('');
            } else {
                \$(\"#";
            // line 66
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", [], "any", false, false, false, 66), "stock", [], "any", false, false, false, 66), "vars", [], "any", false, false, false, 66), "id", [], "any", false, false, false, 66), "html", null, true);
            echo "\").removeAttr(\"disabled\");
            }
            \$(\"#";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", [], "any", false, false, false, 68), "stock_unlimited", [], "any", false, false, false, 68), "vars", [], "any", false, false, false, 68), "id", [], "any", false, false, false, 68), "html", null, true);
            echo "\").on(\"click change\", function() {
                if (\$(this).prop(\"checked\")) {
                    \$(\"#";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", [], "any", false, false, false, 70), "stock", [], "any", false, false, false, 70), "vars", [], "any", false, false, false, 70), "id", [], "any", false, false, false, 70), "html", null, true);
            echo "\").attr(\"disabled\", \"disabled\").val('');
                } else {
                    \$(\"#";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", [], "any", false, false, false, 72), "stock", [], "any", false, false, false, 72), "vars", [], "any", false, false, false, 72), "id", [], "any", false, false, false, 72), "html", null, true);
            echo "\").removeAttr(\"disabled\");
                }
            });
            ";
        }
        // line 76
        echo "            var proto_img = '<div class=\"c-form__fileUploadThumbnail\" style=\"background-image:url(\\'__path__\\');\">' +
                '<a class=\"delete-image\"><i class=\"fa fa-times\" aria-hidden=\"true\"></i></a>' +
                '</div>';
            var proto_add = '";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "add_images", [], "any", false, false, false, 79), "vars", [], "any", false, false, false, 79), "prototype", [], "any", false, false, false, 79), 'widget');
        echo "';
            var proto_del = '";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete_images", [], "any", false, false, false, 80), "vars", [], "any", false, false, false, 80), "prototype", [], "any", false, false, false, 80), 'widget');
        echo "';
            ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "images", [], "any", false, false, false, 81));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 82
            echo "            var \$img = \$(proto_img.replace(/__path__/g, '";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["image"], "vars", [], "any", false, false, false, 82), "value", [], "any", false, false, false, 82), "save_image"), "html", null, true);
            echo "'));
            var \$widget = \$('";
            // line 83
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["image"], 'widget');
            echo "');
            \$widget.val('";
            // line 84
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["image"], "vars", [], "any", false, false, false, 84), "value", [], "any", false, false, false, 84), "html", null, true);
            echo "');
            \$(\"#thumb\").append(\$img.append(\$widget));
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "add_images", [], "any", false, false, false, 87));
        foreach ($context['_seq'] as $context["_key"] => $context["add_image"]) {
            // line 88
            echo "            var \$img = \$(proto_img.replace(/__path__/g, '";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["add_image"], "vars", [], "any", false, false, false, 88), "value", [], "any", false, false, false, 88), "temp_image"), "html", null, true);
            echo "'));
            var \$widget = \$('";
            // line 89
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["add_image"], 'widget');
            echo "');
            \$widget.val('";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["add_image"], "vars", [], "any", false, false, false, 90), "value", [], "any", false, false, false, 90), "html", null, true);
            echo "');
            \$(\"#thumb\").append(\$img.append(\$widget));
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['add_image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delete_images", [], "any", false, false, false, 93));
        foreach ($context['_seq'] as $context["_key"] => $context["delete_image"]) {
            // line 94
            echo "            \$(\"#thumb\").append('";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["delete_image"], 'widget');
            echo "');
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['delete_image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        echo "            var hideThumbnail = function() {
                if (\$(\"#thumb div\").length > 0) {
                    \$(\"#icon_no_image\").css(\"display\", \"none\");
                    \$('#message').html(\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.drag_and_drop_description"), "html", null, true);
        echo "\");
                } else {
                    \$(\"#icon_no_image\").css(\"display\", \"\");
                    \$('#message').empty();
                }
            };
            // Todo: fix update sort by drag&drop
            var updateSortNo = function() {
                \$(\"#thumb div\").each(function(index) {
                    \$(this).find(\".sort_no_images\").remove();
                    filename = \$(this).find(\"input[type='hidden']\").val();
                    \$sortNo = \$('<input type=\"hidden\" class=\"sort_no_images\" name=\"sort_no_images[]\" />');
                    \$sortNo.val(filename + '//' + parseInt(index + 1));
                    \$(this).append(\$sortNo);
                });
            };
            hideThumbnail();
            updateSortNo();
            // Delete of images
            var count_del = 0;
            \$(\"#thumb\").on(\"click\", '.delete-image', function() {
                var \$new_delete_image = \$(proto_del.replace(/__name__/g, count_del));
                var thumbnail = \$(this).parents('div.c-form__fileUploadThumbnail');
                var src = \$(thumbnail).find('input').val();
                \$new_delete_image.val(src);
                \$(\"#thumb\").append(\$new_delete_image);
                \$(thumbnail).remove();
                hideThumbnail();
                updateSortNo();
                count_del++;
            });
            var count_add = ";
        // line 130
        echo twig_escape_filter($this->env, _twig_default_filter(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "add_images", [], "any", false, false, false, 130)), 0), "html", null, true);
        echo ";
            \$('#";
        // line 131
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "product_image", [], "any", false, false, false, 131), "vars", [], "any", false, false, false, 131), "id", [], "any", false, false, false, 131), "html", null, true);
        echo "').fileupload({
                url: \"";
        // line 132
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_image_add");
        echo "\",
                type: \"post\",
                sequentialUploads: true,
                dataType: 'json',
                dropZone: \$('#upload-zone'),
                done: function(e, data) {
                    \$('.progress').hide();
                    \$.each(data.result.files, function(index, file) {
                        var path = '";
        // line 140
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("", "temp_image"), "html", null, true);
        echo "' + file;
                        var \$img = \$(proto_img.replace(/__path__/g, path));
                        var \$new_img = \$(proto_add.replace(/__name__/g, count_add));
                        \$new_img.val(file);
                        \$child = \$img.append(\$new_img);
                        \$('#thumb').append(\$child);
                        count_add++;
                    });
                    hideThumbnail();
                    updateSortNo();
                },
                fail: function(e, data) {
                    alert(\"";
        // line 152
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.upload_error"), "html", null, true);
        echo "\");
                },
                always: function(e, data) {
                    \$('.progress').hide();
                    \$('.progress .progress-bar').width('0%');
                },
                start: function(e, data) {
                    \$('.progress').show();
                },
                acceptFileTypes: /(\\.|\\/)(gif|jpe?g|png)\$/i,
                maxFileSize: 10000000,
                maxNumberOfFiles: 10,
                progressall: function(e, data) {
                    var progress = parseInt(data.loaded / data.total * 100, 10);
                    \$('.progress .progress-bar').css(
                        'width',
                        progress + '%'
                    );
                },
                processalways: function(e, data) {
                    if (data.files.error) {
                        alert(\"";
        // line 173
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.upload_error"), "html", null, true);
        echo "\");
                    }
                }
            });
            // 画像アップロード
            \$('#file_upload').on('click', function() {
                \$('#";
        // line 179
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "product_image", [], "any", false, false, false, 179), "vars", [], "any", false, false, false, 179), "id", [], "any", false, false, false, 179), "html", null, true);
        echo "').click();
            });

            var mainTags = \$('#allTags');
            var adminProductTag = \$('#admin_product_Tag');
            \$('input', adminProductTag).each(function() {
                if (\$(this).is(':checked')) {
                    \$('button[data-tag-id=\"' + \$(this).val() + '\"]').removeClass('btn-outline-secondary').addClass('btn-outline-primary');
                }
            });
            mainTags.on('click', 'button.btn', function() {
                var btnTag = \$(this);
                var tagId = btnTag.data('tag-id');
                if (btnTag.hasClass('btn-outline-primary')) {
                    btnTag.removeClass('btn-outline-primary').addClass('btn-outline-secondary');
                    \$('input[value=\"' + tagId + '\"]', mainTags).prop('checked', false);
                } else {
                    btnTag.removeClass('btn-outline-secondary').addClass('btn-outline-primary');
                    \$('input[value=\"' + tagId + '\"]', mainTags).prop('checked', true);
                }
            });

            var confirmFormChange = function(form, target, modal) {
                var returnLink = form.find('input[type=\"hidden\"][name*=\"return_link\"]'),
                    saveBtn = modal.find('a[data-action=\"save\"]'),
                    cancelBtn = modal.find('a[data-action=\"cancel\"]');
                modal.on('hidden.bs.modal', function() {
                    returnLink.val('');
                });
                saveBtn.on('click', function() {
                    returnLink.val(\$(this).data('return-link'));
                    form.submit();
                });
                target.on('click', function() {
                    modal.find('.modal-body .screen-name').text(\$(this).attr('title'));
                    modal.modal('show');
                    saveBtn.data('return-link', \$(this).attr('href'));
                    cancelBtn.attr('href', \$(this).attr('href'));
                    return false;
                });
            };
            confirmFormChange(\$('#form1'), \$('a[data-action=\"confirm\"]'), \$('#confirmFormChangeModal'))
        });

        // searchWordの実行
        \$('#search-category').on('input', function () {
            searchWord(\$(this).val(), \$('.category-li'));
        });
    </script>
";
    }

    // line 230
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 231
        echo "    <!-- 移動確認モーダル-->
    <div class=\"modal fade\" id=\"confirmFormChangeModal\" tabindex=\"-1\" role=\"dialog\"
         aria-labelledby=\"confirmFormChangeModal\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">";
        // line 237
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_title"), "html", null, true);
        echo "</h5>
                    <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">×</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    <p class=\"screen-name\"></p>
                </div>
                <div class=\"modal-footer\">
                    <a class=\"btn btn-ec-conversion\" data-action=\"save\" href=\"javascript:void(0)\">
                        ";
        // line 247
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_save_and_move"), "html", null, true);
        echo "
                    </a>
                    <a class=\"btn btn-ec-sub\" data-action=\"cancel\" href=\"javascript:void(0)\">
                        ";
        // line 250
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_move_only"), "html", null, true);
        echo "
                    </a>
                </div>
            </div>
        </div>
    </div>
    <form role=\"form\" name=\"form1\" id=\"form1\" method=\"post\" action=\"\" novalidate enctype=\"multipart/form-data\">
        ";
        // line 257
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, false, 257), 'widget');
        echo "
        ";
        // line 258
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "return_link", [], "any", false, false, false, 258), 'widget');
        echo "
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\">
                                    <span class=\"card-title\">
                                        ";
        // line 268
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product__card_title"), "html", null, true);
        echo "
                                    </span>
                                    </div>
                                </div>
                                <div class=\"col-4 text-right\">
                                    <a data-toggle=\"collapse\" href=\"#basicConfig\" aria-expanded=\"false\"
                                       aria-controls=\"basicConfig\">
                                        <i class=\"fa fa-angle-up fa-lg\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"basicConfig\">
                            <div class=\"card-body\">
                                ";
        // line 282
        if (twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "id", [], "any", false, false, false, 282)) {
            // line 283
            echo "                                    <div class=\"row\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
            // line 285
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.product_id"), "html", null, true);
            echo "\">
                                                <span>";
            // line 286
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_id"), "html", null, true);
            echo "</span>
                                                <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                            </div>
                                        </div>
                                        <div class=\"col\">
                                            <p>";
            // line 291
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "id", [], "any", false, false, false, 291), "html", null, true);
            echo "</p>
                                        </div>
                                    </div>
                                ";
        }
        // line 295
        echo "                                <div class=\"row\">
                                    <div class=\"col-3\">
                                        <div class=\"d-inline-block\">
                                            <span>";
        // line 298
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.name"), "html", null, true);
        echo "</span>
                                            <span class=\"badge badge-primary ml-1\">
                                                ";
        // line 300
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "
                                            </span>
                                        </div>
                                    </div>
                                    <div class=\"col mb-2\">
                                        ";
        // line 305
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 305), 'widget');
        echo "
                                        ";
        // line 306
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 306), 'errors');
        echo "
                                    </div>
                                </div>
                                ";
        // line 309
        if ((($context["has_class"] ?? null) == false)) {
            // line 310
            echo "                                    <div class=\"row\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
            // line 312
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.sale_type"), "html", null, true);
            echo "\">
                                                <span>";
            // line 313
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.sale_type"), "html", null, true);
            echo "</span>
                                                <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                                <span class=\"badge badge-primary ml-1\">
                                                    ";
            // line 316
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
            echo "
                                                </span>
                                            </div>
                                        </div>
                                        <div class=\"col mb-2\">
                                            ";
            // line 321
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", [], "any", false, false, false, 321), "sale_type", [], "any", false, false, false, 321), 'widget');
            echo "
                                        </div>
                                    </div>
                                ";
        }
        // line 325
        echo "                                <div class=\"row\">
                                    <div class=\"col-3\">
                                        <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 327
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.image"), "html", null, true);
        echo "\">
                                            <span>";
        // line 328
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.image"), "html", null, true);
        echo "</span>
                                            <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                            <br>";
        // line 330
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.image_size"), "html", null, true);
        echo "
                                        </div>
                                    </div>
                                    <div class=\"col mb-2\">
                                        <div class=\"progress\" style=\"display: none;\">
                                            <div class=\"progress-bar progress-bar-striped progress-bar-animated\" role=\"progressbar\" aria-valuenow=\"0\" aria-valuemin=\"0\" aria-valuemax=\"100\"></div>
                                        </div>
                                        <div id=\"thumb\" class=\"c-form__fileUploadThumbnails clearfix\"></div>
                                        <p id=\"message\"></p>
                                        <div id=\"upload-zone\" class=\"media py-5 border-ec-dashed mb-2 rounded\">
                                            <div class=\"media-body\">
                                                <i class=\"fa fa-cloud-upload fa-3x text-ec-lightGray mx-3 align-middle\" aria-hidden=\"true\"></i>
                                                ";
        // line 342
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.drag_and_drop_image_description"), "html", null, true);
        echo "
                                                ";
        // line 343
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "product_image", [], "any", false, false, false, 343), 'widget', ["attr" => ["accept" => "image/*", "style" => "display:none;"]]);
        echo "
                                                ";
        // line 344
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "product_image", [], "any", false, false, false, 344), 'errors');
        echo "
                                                <a class=\"btn btn-ec-regular mr-2\" onclick=\"\$('#admin_product_product_image').click()\">
                                                    ";
        // line 346
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.file_select"), "html", null, true);
        echo "
                                                </a>
                                            </div><!-- /.media-body -->
                                        </div><!-- /.media -->
                                    </div>
                                </div>
                                <div class=\"row\">
                                    <div class=\"col-3\">
                                        <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                             title=\"";
        // line 355
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.description_detail"), "html", null, true);
        echo "\">
                                            <span>";
        // line 356
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.description_detail"), "html", null, true);
        echo "</span>
                                            <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                        </div>
                                    </div>
                                    <div class=\"col\">
                                        ";
        // line 361
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "description_detail", [], "any", false, false, false, 361), 'widget', ["attr" => ["rows" => "8"]]);
        echo "
                                        ";
        // line 362
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "description_detail", [], "any", false, false, false, 362), 'errors');
        echo "
                                        <div class=\"d-inline-block mb-2\" data-toggle=\"collapse\" href=\"#addComment\"
                                             role=\"button\" aria-expanded=\"false\" aria-controls=\"addComment\">
                                            <a>
                                                <i class=\"fa fa-plus-square-o font-weight-bold mr-1\"></i>
                                                <span class=\"font-weight-bold text-ec-black\">
                                                    ";
        // line 368
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.description_list__add"), "html", null, true);
        echo "
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"collapse ec-collapse\" id=\"addComment\">
                                    <div class=\"row bg-ec-formGray pt-3 mb-2\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                                 title=\"";
        // line 378
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.description_list"), "html", null, true);
        echo "\">
                                                <span>";
        // line 379
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.description_list"), "html", null, true);
        echo "</span>
                                                <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                            </div>
                                        </div>
                                        <div class=\"col mb-4\">
                                            <div>
                                                ";
        // line 385
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "description_list", [], "any", false, false, false, 385), 'widget', ["attr" => ["rows" => "4"]]);
        echo "
                                                ";
        // line 386
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "description_list", [], "any", false, false, false, 386), 'errors');
        echo "
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                ";
        // line 391
        if ((($context["has_class"] ?? null) == false)) {
            // line 392
            echo "                                    <div class=\"row\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\">
                                                <span>";
            // line 395
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.sale_price"), "html", null, true);
            echo "</span>
                                                <span class=\"badge badge-primary ml-1\">
                                                    ";
            // line 397
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
            echo "
                                                </span>
                                            </div>
                                        </div>
                                        <div class=\"col mb-2\">
                                            <div>
                                                ";
            // line 403
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", [], "any", false, false, false, 403), "price02", [], "any", false, false, false, 403), 'widget');
            echo "
                                                ";
            // line 404
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", [], "any", false, false, false, 404), "price02", [], "any", false, false, false, 404), 'errors');
            echo "
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                                 title=\"";
            // line 411
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.normal_price"), "html", null, true);
            echo "\">
                                                <span>";
            // line 412
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.normal_price"), "html", null, true);
            echo "</span>
                                                <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                            </div>
                                        </div>
                                        <div class=\"col mb-2\">
                                            <div>
                                                ";
            // line 418
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", [], "any", false, false, false, 418), "price01", [], "any", false, false, false, 418), 'widget');
            echo "
                                                ";
            // line 419
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", [], "any", false, false, false, 419), "price01", [], "any", false, false, false, 419), 'errors');
            echo "
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\">
                                                <span>";
            // line 426
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.stock"), "html", null, true);
            echo "</span>
                                                <span class=\"badge badge-primary ml-1\">
                                                    ";
            // line 428
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
            echo "
                                                </span>
                                            </div>
                                        </div>
                                        <div class=\"col\">
                                            <div>
                                                ";
            // line 434
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", [], "any", false, false, false, 434), "stock", [], "any", false, false, false, 434), 'widget');
            echo "
                                                ";
            // line 435
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", [], "any", false, false, false, 435), "stock", [], "any", false, false, false, 435), 'errors');
            echo "
                                                ";
            // line 437
            echo "                                                ";
            // line 438
            echo "                                                ";
            // line 439
            echo "                                                ";
            // line 440
            echo "                                                ";
            // line 441
            echo "                                                ";
            // line 442
            echo "                                                ";
            // line 443
            echo "                                                ";
            // line 444
            echo "                                                ";
            // line 445
            echo "                                                ";
            // line 446
            echo "                                                ";
            // line 447
            echo "                                                ";
            // line 448
            echo "                                                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", [], "any", false, false, false, 448), "stock_unlimited", [], "any", false, false, false, 448), 'widget');
            echo "
                                            </div>
                                        </div>
                                    </div>
                                ";
        }
        // line 453
        echo "                                <div class=\"row\">
                                    <div class=\"col-3\">
                                        <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                             title=\"";
        // line 456
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.search_word"), "html", null, true);
        echo "\">
                                            <span>";
        // line 457
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.search_word"), "html", null, true);
        echo "</span>
                                            <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                        </div>
                                    </div>
                                    <div class=\"col mb-2\">
                                        <div>
                                            ";
        // line 463
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "search_word", [], "any", false, false, false, 463), 'widget');
        echo "
                                            ";
        // line 464
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "search_word", [], "any", false, false, false, 464), 'errors');
        echo "
                                        </div>
                                    </div>
                                </div>

                                ";
        // line 469
        if ((($context["has_class"] ?? null) == false)) {
            // line 470
            echo "                                    <div class=\"row\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                                 title=\"";
            // line 473
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.product_code"), "html", null, true);
            echo "\">
                                                <span>";
            // line 474
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_code"), "html", null, true);
            echo "</span>
                                                <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                            </div>
                                        </div>
                                        <div class=\"col mb-2\">
                                            <div>
                                                ";
            // line 480
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", [], "any", false, false, false, 480), "code", [], "any", false, false, false, 480), 'widget');
            echo "
                                                ";
            // line 481
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", [], "any", false, false, false, 481), "code", [], "any", false, false, false, 481), 'errors');
            echo "
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                                 title=\"";
            // line 488
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.sale_limit"), "html", null, true);
            echo "\">
                                                <span>";
            // line 489
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.sale_limit"), "html", null, true);
            echo "</span>
                                                <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                            </div>
                                        </div>
                                        <div class=\"col mb-2\">
                                            <div>
                                                ";
            // line 495
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", [], "any", false, false, false, 495), "sale_limit", [], "any", false, false, false, 495), 'widget');
            echo "
                                                ";
            // line 496
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", [], "any", false, false, false, 496), "sale_limit", [], "any", false, false, false, 496), 'errors');
            echo "
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"row\">
                                        <div class=\"col-3\">
                                            <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                                 title=\"";
            // line 503
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.delivery_duration"), "html", null, true);
            echo "\">
                                                <span>";
            // line 504
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.delivery_duration"), "html", null, true);
            echo "</span>
                                                <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                            </div>
                                        </div>
                                        <div class=\"col mb-2\">
                                            <div>
                                                ";
            // line 510
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", [], "any", false, false, false, 510), "delivery_duration", [], "any", false, false, false, 510), 'widget');
            echo "
                                                ";
            // line 511
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", [], "any", false, false, false, 511), "delivery_duration", [], "any", false, false, false, 511), 'errors');
            echo "
                                            </div>
                                        </div>
                                    </div>

                                    ";
            // line 516
            if (twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "option_product_delivery_fee", [], "any", false, false, false, 516)) {
                // line 517
                echo "                                        <div class=\"row\">
                                            <div class=\"col-3\">
                                                <div class=\"d-inline-block\">
                                                    <span>";
                // line 520
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.delivery_fee"), "html", null, true);
                echo "</span>
                                                </div>
                                            </div>
                                            <div class=\"col mb-2\">
                                                <div>
                                                    ";
                // line 525
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", [], "any", false, false, false, 525), "delivery_fee", [], "any", false, false, false, 525), 'widget');
                echo "
                                                    ";
                // line 526
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", [], "any", false, false, false, 526), "delivery_fee", [], "any", false, false, false, 526), 'errors');
                echo "
                                                </div>
                                            </div>
                                        </div>
                                    ";
            }
            // line 531
            echo "                                    ";
            if (twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "option_product_tax_rule", [], "any", false, false, false, 531)) {
                // line 532
                echo "                                        <div class=\"row\">
                                            <div class=\"col-3\">
                                                <div class=\"d-inline-block\">
                                                    <span>";
                // line 535
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.tax_rate"), "html", null, true);
                echo "</span>
                                                </div>
                                            </div>
                                            <div class=\"col mb-2\">
                                                <div>
                                                    ";
                // line 540
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", [], "any", false, false, false, 540), "tax_rate", [], "any", false, false, false, 540), 'widget');
                echo "
                                                    ";
                // line 541
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", [], "any", false, false, false, 541), "tax_rate", [], "any", false, false, false, 541), 'errors');
                echo "
                                                </div>
                                            </div>
                                        </div>
                                    ";
            }
            // line 546
            echo "                                ";
        }
        // line 547
        echo "
                                ";
        // line 549
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 549), "eccube_form_options", [], "any", false, false, false, 549), "auto_render", [], "any", false, false, false, 549)) {
                // line 550
                echo "                                    ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 550), "eccube_form_options", [], "any", false, false, false, 550), "form_theme", [], "any", false, false, false, 550)) {
                    // line 551
                    echo "                                        ";
                    $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($context["f"], [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 551), "eccube_form_options", [], "any", false, false, false, 551), "form_theme", [], "any", false, false, false, 551)], true);
                    // line 552
                    echo "                                        ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'row');
                    echo "
                                    ";
                } else {
                    // line 554
                    echo "                                        <div class=\"row\">
                                            <div class=\"col-3\">
                                                <span>";
                    // line 556
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 556), "label", [], "any", false, false, false, 556)), "html", null, true);
                    echo "</span>
                                            </div>
                                            <div class=\"col mb-2\">
                                                <div>
                                                    ";
                    // line 560
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'widget');
                    echo "
                                                    ";
                    // line 561
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'errors');
                    echo "
                                                </div>
                                            </div>
                                        </div>
                                    ";
                }
                // line 566
                echo "                                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 567
        echo "
                                ";
        // line 568
        if ((($context["has_class"] ?? null) == false)) {
            // line 569
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", [], "any", false, false, false, 569));
            foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 569), "eccube_form_options", [], "any", false, false, false, 569), "auto_render", [], "any", false, false, false, 569)) {
                    // line 570
                    echo "                                        ";
                    if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 570), "eccube_form_options", [], "any", false, false, false, 570), "form_theme", [], "any", false, false, false, 570)) {
                        // line 571
                        echo "                                            ";
                        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($context["f"], [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 571), "eccube_form_options", [], "any", false, false, false, 571), "form_theme", [], "any", false, false, false, 571)], true);
                        // line 572
                        echo "                                            ";
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'row');
                        echo "
                                        ";
                    } else {
                        // line 574
                        echo "                                            <div class=\"row\">
                                                <div class=\"col-3\">
                                                    <span>";
                        // line 576
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 576), "label", [], "any", false, false, false, 576)), "html", null, true);
                        echo "</span>
                                                </div>
                                                <div class=\"col mb-2\">
                                                    <div>
                                                        ";
                        // line 580
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'widget');
                        echo "
                                                        ";
                        // line 581
                        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'errors');
                        echo "
                                                    </div>
                                                </div>
                                            </div>
                                        ";
                    }
                    // line 586
                    echo "                                    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 587
            echo "                                ";
        }
        // line 588
        echo "
                            </div>
                        </div>
                    </div>
                    ";
        // line 592
        if ( !(null === ($context["id"] ?? null))) {
            // line 593
            echo "                        <div class=\"card rounded border-0 mb-4\">
                            <div class=\"card-header\">
                                <div class=\"row\">
                                    <div class=\"col-8\">
                                        <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                             title=\"";
            // line 598
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.product_class"), "html", null, true);
            echo "\">
                                        <span class=\"card-title\">
                                            ";
            // line 600
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_class__card_title"), "html", null, true);
            echo "
                                            <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                        </span>
                                        </div>
                                    </div>
                                    <div class=\"col-4 text-right\">
                                        <a data-toggle=\"collapse\" href=\"#standardConfig\" aria-expanded=\"false\"
                                           aria-controls=\"standardConfig\">
                                            <i class=\"fa fa-angle-up fa-lg\"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class=\"collapse show ec-cardCollapse\" id=\"standardConfig\">
                                <div class=\"card-body\">
                                    ";
            // line 615
            if ((($context["has_class"] ?? null) == true)) {
                // line 616
                echo "                                        <table class=\"table table-striped\">
                                            <thead class=\"table-active\">
                                            <th class=\"pl-3 pt-2 pb-2\">";
                // line 618
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.class_category1__short"), "html", null, true);
                echo "</th>
                                            <th class=\"pt-2 pb-2\">";
                // line 619
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.class_category2__short"), "html", null, true);
                echo "</th>
                                            <th class=\"pt-2 pb-2\">";
                // line 620
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_code__short"), "html", null, true);
                echo "</th>
                                            <th class=\"pt-2 pb-2\">";
                // line 621
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.stock"), "html", null, true);
                echo "</th>
                                            <th class=\"pr-3 pt-2 pb-2\">";
                // line 622
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.price"), "html", null, true);
                echo "</th>
                                            </thead>
                                            <tbody>
                                            ";
                // line 625
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "ProductClasses", [], "any", false, false, false, 625));
                foreach ($context['_seq'] as $context["_key"] => $context["Class"]) {
                    // line 626
                    echo "                                                ";
                    if ((twig_get_attribute($this->env, $this->source, $context["Class"], "visible", [], "any", false, false, false, 626) == 1)) {
                        // line 627
                        echo "                                                    <tr>
                                                        <td class=\"pl-3\">";
                        // line 628
                        if (twig_get_attribute($this->env, $this->source, $context["Class"], "hasClassCategory1", [], "any", false, false, false, 628)) {
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Class"], "ClassCategory1", [], "any", false, false, false, 628), "name", [], "any", false, false, false, 628), "html", null, true);
                        }
                        echo "</td>
                                                        <td>";
                        // line 629
                        if (twig_get_attribute($this->env, $this->source, $context["Class"], "hasClassCategory2", [], "any", false, false, false, 629)) {
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Class"], "ClassCategory2", [], "any", false, false, false, 629), "name", [], "any", false, false, false, 629), "html", null, true);
                        }
                        echo "</td>
                                                        <td>";
                        // line 630
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Class"], "code", [], "any", false, false, false, 630), "html", null, true);
                        echo "</td>
                                                        <td>";
                        // line 631
                        if (twig_get_attribute($this->env, $this->source, $context["Class"], "stock_unlimited", [], "any", false, false, false, 631)) {
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.stock_unlimited__short"), "html", null, true);
                        } else {
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Class"], "stock", [], "any", false, false, false, 631), "html", null, true);
                        }
                        echo "</td>
                                                        <td class=\"pr-3\">";
                        // line 632
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["Class"], "price02", [], "any", false, false, false, 632)), "html", null, true);
                        echo "</td>
                                                    </tr>
                                                ";
                    }
                    // line 635
                    echo "                                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Class'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 636
                echo "                                            </tbody>
                                        </table>
                                    ";
            }
            // line 639
            echo "
                                    <div class=\"d-block text-center text-center\">
                                        <a href=\"";
            // line 641
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("admin_product_product_class", ["id" => ($context["id"] ?? null)]), "html", null, true);
            echo "\" class=\"btn btn-ec-regular\" data-action=\"confirm\"
                                           title=\"";
            // line 642
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_message", ["%name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_class_registration")]), "html", null, true);
            // line 644
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_class__confirm_of_product"), "html", null, true);
            echo "</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
        }
        // line 650
        echo "                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                         title=\"";
        // line 655
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.free_area"), "html", null, true);
        echo "\">
                                        <span class=\"card-title\">";
        // line 656
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.free_area__card_title"), "html", null, true);
        echo "</span>
                                        <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                    </div>
                                </div>
                                <div class=\"col-4 text-right\">
                                    <a data-toggle=\"collapse\" href=\"#freeArea\" aria-expanded=\"false\"
                                       aria-controls=\"freeArea\">
                                        <i class=\"fa fa-angle-up fa-lg\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"freeArea\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col-3\">
                                        <span>";
        // line 672
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.free_area"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col-9\">
                                        <div>
                                            ";
        // line 676
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "free_area", [], "any", false, false, false, 676), 'widget', ["id" => "wysiwyg-area", "attr" => ["rows" => "8"]]);
        echo "
                                            ";
        // line 677
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "free_area", [], "any", false, false, false, 677), 'errors');
        echo "
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class=\"c-contentsArea__secondaryCol\">
                <div class=\"c-secondaryCol\">
                    ";
        // line 689
        if ( !(null === ($context["id"] ?? null))) {
            // line 690
            echo "                        <div class=\"card rounded border-0 mb-4\">
                            <div class=\"collapse show ec-cardCollapse\" id=\"preview\">
                                <div class=\"card-body\">
                                    <div class=\"d-block text-center\">
                                        <a class=\"btn btn-block btn-ec-regular\"
                                           target=\"_blank\"
                                           href=\"";
            // line 696
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_detail", ["id" => ($context["id"] ?? null)]), "html", null, true);
            echo "\"
                                           title=\"";
            // line 697
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.preview"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.preview"), "html", null, true);
            echo "</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ";
        }
        // line 703
        echo "                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\">
                                        <span class=\"card-title\">";
        // line 708
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.category__product_card_title"), "html", null, true);
        echo "</span>
                                    </div>
                                </div>
                                <div class=\"col-4 text-right\">
                                    <a data-toggle=\"collapse\" href=\"#category\" aria-expanded=\"false\"
                                       aria-controls=\"category\">
                                        <i class=\"fa fa-angle-up fa-lg\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"category\">
                            <div class=\"card-body\">
                                <div class=\"mb-3\">
                                    <div class=\"form-row\">
                                        <div class=\"col\">
                                            <div class=\"input-group\">
                                                <div class=\"input-group-prepend\">
                                                    <span class=\"input-group-text\" id=\"basic-addon1\">
                                                            <i class=\"fa fa-search\"></i>
                                                    </span>
                                                </div>
                                                <input id=\"search-category\" class=\"form-control\" type=\"search\"
                                                       placeholder=\"";
        // line 731
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.search_category"), "html", null, true);
        echo "\"
                                                       aria-label=\"Search\">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                ";
        // line 750
        echo "
                                <div class=\"c-directoryTree--register rounded border mb-3 p-3\">
                                    ";
        // line 752
        $macros["renderMacro"] = $this;
        // line 753
        echo "                                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["TopCategories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["TopCategory"]) {
            // line 754
            echo "                                        <ul class=\"list-unstyled\">
                                            ";
            // line 755
            echo twig_call_macro($macros["renderMacro"], "macro_tree", [($context["ChoicedCategoryIds"] ?? null), $context["TopCategory"], twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Category", [], "any", false, false, false, 755)], 755, $context, $this->getSourceContext());
            echo "
                                        </ul>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['TopCategory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 758
        echo "                                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Category", [], "any", false, false, false, 758), 'errors');
        echo "
                                </div>
                                <div class=\"d-block text-center\">
                                    <a class=\"btn btn-block btn-ec-regular\"
                                       data-action=\"confirm\"
                                       href=\"";
        // line 763
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("admin_product_category");
        echo "\"
                                       title=\"";
        // line 764
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_message", ["%name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.category_management")]), "html", null, true);
        // line 765
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.move_to_category"), "html", null, true);
        echo "</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\">
                                        <span class=\"card-title\">
                                            ";
        // line 776
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.tag__product_card_title"), "html", null, true);
        echo "
                                        </span>
                                    </div>
                                </div>
                                <div class=\"col-4 text-right\">
                                    <a data-toggle=\"collapse\" href=\"#tag\" aria-expanded=\"false\" aria-controls=\"tag\">
                                        <i class=\"fa fa-angle-up fa-lg\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class=\"collapse show ec-cardCollapse\" id=\"tag\">
                            <div class=\"card-body\">
                                ";
        // line 790
        if ((twig_length_filter($this->env, ($context["Tags"] ?? null)) > 0)) {
            // line 791
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["Tags"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["Tag"]) {
                // line 792
                echo "                                        <div class=\"d-inline-block mb-2 mr-2\">
                                            <button class=\"btn btn-outline-primary\" type=\"button\">";
                // line 793
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Tag"], "name", [], "any", false, false, false, 793), "html", null, true);
                echo "</button>
                                        </div>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 796
            echo "                                ";
        }
        // line 797
        echo "
                                <div class=\"d-block mb-3\" data-toggle=\"collapse\" href=\"#allTags\" role=\"button\"
                                     aria-expanded=\"false\" aria-controls=\"allTags\">
                                    <a>
                                        <i class=\"fa fa-plus-square-o font-weight-bold mr-1\"></i>
                                        <span class=\"font-weight-bold\">";
        // line 802
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.save_tag"), "html", null, true);
        echo "</span>
                                    </a>
                                </div>
                                <div class=\"collapse p-3 bg-ec-lightGray mb-3 ec-collapse\" id=\"allTags\">
                                    <div class=\"d-none\">
                                        ";
        // line 807
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Tag", [], "any", false, false, false, 807), 'widget');
        echo "
                                    </div>
                                    ";
        // line 809
        if ((twig_length_filter($this->env, ($context["TagsList"] ?? null)) > 0)) {
            // line 810
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["TagsList"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["Tag"]) {
                // line 811
                echo "                                            <div class=\"d-inline-block mb-2 mr-2\">
                                                <button class=\"btn btn-outline-secondary\" type=\"button\"
                                                        data-tag-id=\"";
                // line 813
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Tag"], "id", [], "any", false, false, false, 813), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Tag"], "name", [], "any", false, false, false, 813), "html", null, true);
                echo "</button>
                                            </div>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Tag'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 816
            echo "                                    ";
        }
        // line 817
        echo "
                                    <div class=\"d-block mb-3\" data-toggle=\"collapse\" href=\"#allTags\" role=\"button\"
                                         aria-expanded=\"false\" aria-controls=\"allTags\"></div>
                                </div>

                                <div class=\"d-block text-center\">
                                    <a href=\"";
        // line 823
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("admin_product_tag");
        echo "\"
                                       class=\"btn btn-block btn-ec-regular\"
                                       data-action=\"confirm\"
                                       title=\"";
        // line 826
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_message", ["%name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.tag_management")]), "html", null, true);
        // line 827
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.move_to_tag"), "html", null, true);
        echo "</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <span class=\"card-title\">";
        // line 836
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.create_date__card_title"), "html", null, true);
        echo "</span>
                                </div>
                                <div class=\"col-4 text-right\">
                                    <a data-toggle=\"collapse\" href=\"#update\" aria-expanded=\"false\"
                                       aria-controls=\"update\">
                                        <i class=\"fa fa-angle-up fa-lg\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"update\">
                            <div class=\"card-body\">
                                <div class=\"row mb-2\">
                                    <div class=\"col\">
                                        <i class=\"fa fa-flag mr-1\"></i>
                                        <span>";
        // line 851
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.create_date"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col\">
                                        <span>：";
        // line 854
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_min($this->env, twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "create_date", [], "any", false, false, false, 854)), "html", null, true);
        echo "</span>
                                    </div>
                                </div>
                                <div class=\"row mb-2\">
                                    <div class=\"col\">
                                        <i class=\"fa fa-refresh mr-1\"></i>
                                        <span>";
        // line 860
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.update_date"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col\">
                                        <span>：";
        // line 863
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_min($this->env, twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "update_date", [], "any", false, false, false, 863)), "html", null, true);
        echo "</span>
                                    </div>
                                </div>
                                <div class=\"row mb-2\">
                                    <div class=\"col\">
                                        <i class=\"fa fa-user mr-1\"></i>
                                        <span>";
        // line 869
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.last_updater"), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col\">
                                        <span>：";
        // line 872
        ((twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "Creator", [], "any", false, false, false, 872)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "Creator", [], "any", false, false, false, 872), "name", [], "any", false, false, false, 872), "html", null, true))) : (print ("")));
        echo "</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\"
                                         title=\"";
        // line 883
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.product.shop_memo"), "html", null, true);
        echo "\">
                                        <span class=\"card-title\">
                                            ";
        // line 885
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.shop_memo"), "html", null, true);
        echo "
                                            <i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class=\"col-4 text-right\">
                                    <a data-toggle=\"collapse\" href=\"#shopMemo\" aria-expanded=\"false\"
                                       aria-controls=\"shopMemo\">
                                        <i class=\"fa fa-angle-up fa-lg\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"shopMemo\">
                            <div class=\"card-body\">
                                ";
        // line 900
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "note", [], "any", false, false, false, 900), 'widget', ["attr" => ["rows" => "8"]]);
        echo "
                                ";
        // line 901
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "note", [], "any", false, false, false, 901), 'errors');
        echo "
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"c-conversionArea\">
            <div class=\"c-conversionArea__container\">
                <div class=\"row justify-content-between align-items-center\">
                    <div class=\"col-6\">
                        <div class=\"c-conversionArea__leftBlockItem\">
                            <a class=\"c-baseLink\" href=\"";
        // line 913
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("admin_product_page", ["page_no" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, true, false, 913), "get", [0 => "eccube.admin.product.search.page_no"], "method", true, true, false, 913)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", [], "any", false, true, false, 913), "get", [0 => "eccube.admin.product.search.page_no"], "method", false, false, false, 913), "1")) : ("1"))]), "html", null, true);
        echo "\"
                               data-action=\"confirm\" title=\"";
        // line 914
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_message", ["%name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_list")]), "html", null, true);
        echo "\">
                                <i class=\"fa fa-backward\" aria-hidden=\"true\"></i><span>";
        // line 915
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_list"), "html", null, true);
        echo "</span>
                            </a>
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div id=\"ex-conversion-action\" class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                ";
        // line 922
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Status", [], "any", false, false, false, 922), 'widget');
        echo "
                                ";
        // line 923
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Status", [], "any", false, false, false, 923), 'errors');
        echo "
                            </div>
                            <div class=\"col-auto\">
                                <button class=\"btn btn-ec-conversion px-5\" type=\"submit\">";
        // line 926
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.registration"), "html", null, true);
        echo "</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
";
    }

    // line 738
    public function macro_tree($__ChoicedIds__ = null, $__Category__ = null, $__form__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "ChoicedIds" => $__ChoicedIds__,
            "Category" => $__Category__,
            "form" => $__form__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 739
            echo "                                    ";
            $macros["selfMacro"] = $this;
            // line 740
            echo "                                    <li class=\"c-directoryTree--registerItem category-li\">
                                        <input type=\"checkbox\" id=\"admin_product_category_";
            // line 741
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "id", [], "any", false, false, false, 741), "html", null, true);
            echo "\" name=\"admin_product[Category][]\" value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "id", [], "any", false, false, false, 741), "html", null, true);
            echo "\" ";
            if (twig_in_filter(twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "id", [], "any", false, false, false, 741), ($context["ChoicedIds"] ?? null))) {
                echo "checked";
            }
            echo ">
                                        <label for=\"admin_product_category_";
            // line 742
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "id", [], "any", false, false, false, 742), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "name", [], "any", false, false, false, 742), "html", null, true);
            echo "</label>
                                        <ul class=\"list-unstyled\">
                                            ";
            // line 744
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "children", [], "any", false, false, false, 744));
            foreach ($context['_seq'] as $context["child"] => $context["ChildCategory"]) {
                // line 745
                echo "                                                ";
                echo twig_call_macro($macros["selfMacro"], "macro_tree", [($context["ChoicedIds"] ?? null), $context["ChildCategory"], ($context["form"] ?? null)], 745, $context, $this->getSourceContext());
                echo "
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['child'], $context['ChildCategory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 747
            echo "                                        </ul>
                                    </li>
                                ";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@admin/Product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1706 => 747,  1697 => 745,  1693 => 744,  1686 => 742,  1676 => 741,  1673 => 740,  1670 => 739,  1655 => 738,  1642 => 926,  1636 => 923,  1632 => 922,  1622 => 915,  1618 => 914,  1614 => 913,  1599 => 901,  1595 => 900,  1577 => 885,  1572 => 883,  1558 => 872,  1552 => 869,  1543 => 863,  1537 => 860,  1528 => 854,  1522 => 851,  1504 => 836,  1491 => 827,  1489 => 826,  1483 => 823,  1475 => 817,  1472 => 816,  1461 => 813,  1457 => 811,  1452 => 810,  1450 => 809,  1445 => 807,  1437 => 802,  1430 => 797,  1427 => 796,  1418 => 793,  1415 => 792,  1410 => 791,  1408 => 790,  1391 => 776,  1376 => 765,  1374 => 764,  1370 => 763,  1361 => 758,  1352 => 755,  1349 => 754,  1344 => 753,  1342 => 752,  1338 => 750,  1328 => 731,  1302 => 708,  1295 => 703,  1284 => 697,  1280 => 696,  1272 => 690,  1270 => 689,  1255 => 677,  1251 => 676,  1244 => 672,  1225 => 656,  1221 => 655,  1214 => 650,  1204 => 644,  1202 => 642,  1198 => 641,  1194 => 639,  1189 => 636,  1183 => 635,  1177 => 632,  1169 => 631,  1165 => 630,  1159 => 629,  1153 => 628,  1150 => 627,  1147 => 626,  1143 => 625,  1137 => 622,  1133 => 621,  1129 => 620,  1125 => 619,  1121 => 618,  1117 => 616,  1115 => 615,  1097 => 600,  1092 => 598,  1085 => 593,  1083 => 592,  1077 => 588,  1074 => 587,  1067 => 586,  1059 => 581,  1055 => 580,  1048 => 576,  1044 => 574,  1038 => 572,  1035 => 571,  1032 => 570,  1026 => 569,  1024 => 568,  1021 => 567,  1014 => 566,  1006 => 561,  1002 => 560,  995 => 556,  991 => 554,  985 => 552,  982 => 551,  979 => 550,  973 => 549,  970 => 547,  967 => 546,  959 => 541,  955 => 540,  947 => 535,  942 => 532,  939 => 531,  931 => 526,  927 => 525,  919 => 520,  914 => 517,  912 => 516,  904 => 511,  900 => 510,  891 => 504,  887 => 503,  877 => 496,  873 => 495,  864 => 489,  860 => 488,  850 => 481,  846 => 480,  837 => 474,  833 => 473,  828 => 470,  826 => 469,  818 => 464,  814 => 463,  805 => 457,  801 => 456,  796 => 453,  787 => 448,  785 => 447,  783 => 446,  781 => 445,  779 => 444,  777 => 443,  775 => 442,  773 => 441,  771 => 440,  769 => 439,  767 => 438,  765 => 437,  761 => 435,  757 => 434,  748 => 428,  743 => 426,  733 => 419,  729 => 418,  720 => 412,  716 => 411,  706 => 404,  702 => 403,  693 => 397,  688 => 395,  683 => 392,  681 => 391,  673 => 386,  669 => 385,  660 => 379,  656 => 378,  643 => 368,  634 => 362,  630 => 361,  622 => 356,  618 => 355,  606 => 346,  601 => 344,  597 => 343,  593 => 342,  578 => 330,  573 => 328,  569 => 327,  565 => 325,  558 => 321,  550 => 316,  544 => 313,  540 => 312,  536 => 310,  534 => 309,  528 => 306,  524 => 305,  516 => 300,  511 => 298,  506 => 295,  499 => 291,  491 => 286,  487 => 285,  483 => 283,  481 => 282,  464 => 268,  451 => 258,  447 => 257,  437 => 250,  431 => 247,  418 => 237,  410 => 231,  406 => 230,  352 => 179,  343 => 173,  319 => 152,  304 => 140,  293 => 132,  289 => 131,  285 => 130,  251 => 99,  246 => 96,  237 => 94,  232 => 93,  223 => 90,  219 => 89,  214 => 88,  209 => 87,  200 => 84,  196 => 83,  191 => 82,  187 => 81,  183 => 80,  179 => 79,  174 => 76,  167 => 72,  162 => 70,  157 => 68,  152 => 66,  147 => 64,  142 => 63,  140 => 62,  119 => 44,  115 => 43,  111 => 42,  107 => 41,  102 => 40,  98 => 39,  78 => 22,  73 => 21,  69 => 20,  62 => 16,  55 => 15,  50 => 11,  48 => 18,  46 => 13,  39 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Product/product.twig", "/home/anotherworld/www/s-africa.wine/src/Eccube/Resource/template/admin/Product/product.twig");
    }
}
