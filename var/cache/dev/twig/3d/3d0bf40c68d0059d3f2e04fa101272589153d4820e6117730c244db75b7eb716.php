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

/* __string_template__5d21ee3b59313ae79076dc80a195a5bcf568e1746595d92110cde4352ee8d82f */
class __TwigTemplate_8a8e5339e0822215da04b3668f73fae0912f782adaf06ccb88bfb1b2d2be4f04 extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheet' => [$this, 'block_stylesheet'],
            'javascript' => [$this, 'block_javascript'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__5d21ee3b59313ae79076dc80a195a5bcf568e1746595d92110cde4352ee8d82f"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__5d21ee3b59313ae79076dc80a195a5bcf568e1746595d92110cde4352ee8d82f"));

        // line 13
        $context["body_class"] = "product_page";
        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__5d21ee3b59313ae79076dc80a195a5bcf568e1746595d92110cde4352ee8d82f", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 15
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 16
        echo "    <style>

        .slick-slider {
            margin-bottom: 30px;
        }

        .slick-dots {
            position: absolute;
            bottom: -45px;
            display: block;
            width: 100%;
            padding: 0;
            list-style: none;
            text-align: center;
        }

        .slick-dots li {
            position: relative;
            display: inline-block;
            width: 20px;
            height: 20px;
            margin: 0 5px;
            padding: 0;

            cursor: pointer;
        }

        .slick-dots li button {
            font-size: 0;
            line-height: 0;
            display: block;
            width: 20px;
            height: 20px;
            padding: 5px;
            cursor: pointer;
            color: transparent;
            border: 0;
            outline: none;
            background: transparent;
        }

        .slick-dots li button:hover,
        .slick-dots li button:focus {
            outline: none;
        }

        .slick-dots li button:hover:before,
        .slick-dots li button:focus:before {
            opacity: 1;
        }

        .slick-dots li button:before {
            content: \" \";
            line-height: 20px;
            position: absolute;
            top: 0;
            left: 0;
            width: 12px;
            height: 12px;
            text-align: center;
            opacity: .25;
            background-color: black;
            border-radius: 50%;

        }

        .slick-dots li.slick-active button:before {
            opacity: .75;
            background-color: black;
        }

        .slick-dots li button.thumbnail img {
            width: 0;
            height: 0;
        }

    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 95
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 96
        echo "    <script>
        eccube.classCategories = ";
        // line 97
        echo $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getClassCategoriesAsJson((isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 97, $this->source); })()));
        echo ";

        // 規格2に選択肢を割り当てる。
        function fnSetClassCategories(form, classcat_id2_selected) {
            var \$form = \$(form);
            var product_id = \$form.find('input[name=product_id]').val();
            var \$sele1 = \$form.find('select[name=classcategory_id1]');
            var \$sele2 = \$form.find('select[name=classcategory_id2]');
            eccube.setClassCategories(\$form, product_id, \$sele1, \$sele2, classcat_id2_selected);
        }

        ";
        // line 108
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id2", [], "any", true, true, false, 108)) {
            // line 109
            echo "        fnSetClassCategories(
            \$('#form1'), ";
            // line 110
            echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), "classcategory_id2", [], "any", false, false, false, 110), "vars", [], "any", false, false, false, 110), "value", [], "any", false, false, false, 110));
            echo "
        );
        ";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 112
($context["form"] ?? null), "classcategory_id1", [], "any", true, true, false, 112)) {
            // line 113
            echo "        eccube.checkStock(\$('#form1'), ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 113, $this->source); })()), "id", [], "any", false, false, false, 113), "html", null, true);
            echo ", ";
            echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), "classcategory_id1", [], "any", false, false, false, 113), "vars", [], "any", false, false, false, 113), "value", [], "any", false, false, false, 113));
            echo ", null);
        ";
        }
        // line 115
        echo "    </script>
    <script>
        \$(function() {
            // bfcache無効化
            \$(window).bind('pageshow', function(event) {
                if (event.originalEvent.persisted) {
                    location.reload(true);
                }
            });

            \$('.item_visual').slick({
                dots: false,
                arrows: false,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        dots: true
                    }
                }]
            });

            \$('.slideThumb').on('click', function() {
                var index = \$(this).attr('data-index');
                \$('.item_visual').slick('slickGoTo', index, false);
            })
        });
    </script>
    <script>
        \$(function() {
            \$('.add-cart').on('click', function(event) {
                ";
        // line 145
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id1", [], "any", true, true, false, 145)) {
            // line 146
            echo "                // 規格1フォームの必須チェック
                if (\$('#classcategory_id1').val() == '__unselected' || \$('#classcategory_id1').val() == '') {
                    \$('#classcategory_id1')[0].setCustomValidity('";
            // line 148
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("項目が選択されていません"), "html", null, true);
            echo "');
                    return true;
                } else {
                    \$('#classcategory_id1')[0].setCustomValidity('');
                }
                ";
        }
        // line 154
        echo "
                ";
        // line 155
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id2", [], "any", true, true, false, 155)) {
            // line 156
            echo "                // 規格2フォームの必須チェック
                if (\$('#classcategory_id2').val() == '__unselected' || \$('#classcategory_id2').val() == '') {
                    \$('#classcategory_id2')[0].setCustomValidity('";
            // line 158
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("項目が選択されていません"), "html", null, true);
            echo "');
                    return true;
                } else {
                    \$('#classcategory_id2')[0].setCustomValidity('');
                }
                ";
        }
        // line 164
        echo "
                // 個数フォームのチェック
                if (\$('#quantity').val() < 1) {
                    \$('#quantity')[0].setCustomValidity('";
        // line 167
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("1以上で入力してください。"), "html", null, true);
        echo "');
                    return true;
                } else {
                    \$('#quantity')[0].setCustomValidity('');
                }

                event.preventDefault();
                \$form = \$('#form1');
                \$.ajax({
                    url: \$form.attr('action'),
                    type: \$form.attr('method'),
                    data: \$form.serialize(),
                    dataType: 'json',
                    beforeSend: function(xhr, settings) {
                        // Buttonを無効にする
                        \$('.add-cart').prop('disabled', true);
                    }
                }).done(function(data) {
                    // レスポンス内のメッセージをalertで表示
                    \$.each(data.messages, function() {
                        \$('#ec-modal-header').html(this);
                    });

                    \$('#ec-modal-checkbox').prop('checked', true);

                    // カートブロックを更新する
                    \$.ajax({
                        url: \"";
        // line 194
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("block_cart");
        echo "\",
                        type: 'GET',
                        dataType: 'html'
                    }).done(function(html) {
                        \$('.ec-headerRole__cart').html(html);
                    });
                }).fail(function(data) {
                    alert('";
        // line 201
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("カートへの追加に失敗しました。"), "html", null, true);
        echo "');
                }).always(function(data) {
                    // Buttonを有効にする
                    \$('.add-cart').prop('disabled', false);
                });
            });
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 211
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 212
        echo "    <div class=\"ec-productRole\">
        <div class=\"ec-grid2\">
            <div class=\"ec-grid2__cell\">
                <div class=\"ec-sliderItemRole\">
                    <div class=\"item_visual\">
                        ";
        // line 217
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 217, $this->source); })()), "ProductImage", [], "any", false, false, false, 217));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["ProductImage"]) {
            // line 218
            echo "                            <div class=\"slide-item\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["ProductImage"], "save_image"), "html", null, true);
            echo "\"></div>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 220
            echo "                            <div class=\"slide-item\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct(""), "save_image"), "html", null, true);
            echo "\"/></div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductImage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 222
        echo "                    </div>
                    <div class=\"item_nav\">
                        ";
        // line 224
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 224, $this->source); })()), "ProductImage", [], "any", false, false, false, 224));
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
        foreach ($context['_seq'] as $context["_key"] => $context["ProductImage"]) {
            // line 225
            echo "                            <div class=\"slideThumb\" data-index=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 225), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["ProductImage"], "save_image"), "html", null, true);
            echo "\"></div>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductImage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 227
        echo "                    </div>

 ";
        // line 229
        $context["hasCategory"] = false;
        // line 230
        echo " ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 230, $this->source); })()), "ProductCategories", [], "any", false, false, false, 230));
        foreach ($context['_seq'] as $context["_key"] => $context["ProductCategory"]) {
            // line 231
            echo "      ";
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ProductCategory"], "Category", [], "any", false, false, false, 231), "id", [], "any", false, false, false, 231) == 51) || (twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 231, $this->source); })()), "id", [], "any", false, false, false, 231) == (isset($context["empty"]) || array_key_exists("empty", $context) ? $context["empty"] : (function () { throw new RuntimeError('Variable "empty" does not exist.', 231, $this->source); })())))) {
                // line 232
                echo "         ";
                $context["hasCategory"] = true;
                // line 233
                echo "      ";
            }
            // line 234
            echo " ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductCategory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 235
        echo " ";
        if ((isset($context["hasCategory"]) || array_key_exists("hasCategory", $context) ? $context["hasCategory"] : (function () { throw new RuntimeError('Variable "hasCategory" does not exist.', 235, $this->source); })())) {
        } else {
            // line 237
            echo "            <small>※商品画像のヴィンテージと実際のヴィンテージが違う場合がございます。</small>
";
        }
        // line 239
        echo "                </div>
            </div>
            <div class=\"ec-grid2__cell\">
                <div class=\"ec-productRole__profile\">
                    ";
        // line 244
        echo "                    <div class=\"ec-productRole__title\">
                        <h2 class=\"ec-headingTitle\">";
        // line 245
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 245, $this->source); })()), "name", [], "any", false, false, false, 245), "html", null, true);
        echo "</h2>
                    </div>
                    
                    <div class=\"ec-productRole__description ec-productRole__description--top\">";
        // line 248
        echo nl2br(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 248, $this->source); })()), "description_detail", [], "any", false, false, false, 248));
        echo "
";
        // line 249
        if ((isset($context["hasCategory"]) || array_key_exists("hasCategory", $context) ? $context["hasCategory"] : (function () { throw new RuntimeError('Variable "hasCategory" does not exist.', 249, $this->source); })())) {
        } else {
            // line 251
            echo "            <small>※商品画像のヴィンテージと実際のヴィンテージが違う場合がございます。</small>
";
        }
        // line 253
        echo "                    </div>
                    ";
        // line 255
        if (twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 255, $this->source); })()), "hasProductClass", [], "any", false, false, false, 255)) {
            // line 256
            echo "<div class=\"ec-productRole__priceRegular\">
        ";
            // line 257
            if (( !(null === twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 257, $this->source); })()), "getPrice01Min", [], "any", false, false, false, 257)) && (twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 257, $this->source); })()), "getPrice01IncTaxMin", [], "any", false, false, false, 257) == twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 257, $this->source); })()), "getPrice01IncTaxMax", [], "any", false, false, false, 257)))) {
                // line 258
                echo "            <span class=\"ec-productRole__priceRegularPrice\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("通常価格"), "html", null, true);
                echo "：<span class=\"price01-default\">";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 258, $this->source); })()), "getPrice01IncTaxMin", [], "any", false, false, false, 258)), "html", null, true);
                echo "</span></span>
            <span class=\"ec-productRole__priceRegularTax\">";
                // line 259
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("税込"), "html", null, true);
                echo "</span>
        ";
            } elseif (( !(null === twig_get_attribute($this->env, $this->source,             // line 260
(isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 260, $this->source); })()), "getPrice01Min", [], "any", false, false, false, 260)) &&  !(null === twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 260, $this->source); })()), "getPrice01Max", [], "any", false, false, false, 260)))) {
                // line 261
                echo "            <span class=\"ec-productRole__priceRegularPrice\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("通常価格"), "html", null, true);
                echo "：<span class=\"price01-default\">";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 261, $this->source); })()), "getPrice01IncTaxMin", [], "any", false, false, false, 261)), "html", null, true);
                echo " ～ ";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 261, $this->source); })()), "getPrice01IncTaxMax", [], "any", false, false, false, 261)), "html", null, true);
                echo "</span></span>
            <span class=\"ec-productRole__priceRegularTax\">";
                // line 262
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("税込"), "html", null, true);
                echo "</span>
        ";
            }
            // line 264
            echo "    </div>
";
        } else {
            // line 266
            echo "    ";
            if ( !(null === twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 266, $this->source); })()), "getPrice01Max", [], "any", false, false, false, 266))) {
                // line 267
                echo "        <span class=\"ec-productRole__priceRegularPrice\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("通常価格"), "html", null, true);
                echo "：";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 267, $this->source); })()), "getPrice01IncTaxMin", [], "any", false, false, false, 267)), "html", null, true);
                echo "</span>
        <span class=\"ec-productRole__priceRegularTax\">";
                // line 268
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("税込"), "html", null, true);
                echo "</span>
    ";
            }
        }
        // line 272
        echo "<div class=\"ec-productRole__price\">
    ";
        // line 274
        echo "    <div class=\"ec-price\">
    ";
        // line 275
        if (( !(null === twig_get_attribute($this->env, $this->source, (isset($context["TaxManagementConfig"]) || array_key_exists("TaxManagementConfig", $context) ? $context["TaxManagementConfig"] : (function () { throw new RuntimeError('Variable "TaxManagementConfig" does not exist.', 275, $this->source); })()), "isIncludeTaxFlag", [], "any", false, false, false, 275)) && (twig_get_attribute($this->env, $this->source, (isset($context["TaxManagementConfig"]) || array_key_exists("TaxManagementConfig", $context) ? $context["TaxManagementConfig"] : (function () { throw new RuntimeError('Variable "TaxManagementConfig" does not exist.', 275, $this->source); })()), "isIncludeTaxFlag", [], "any", false, false, false, 275) == false))) {
            // line 276
            if (twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 276, $this->source); })()), "hasProductClass", [], "any", false, false, false, 276)) {
                // line 277
                if ((twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 277, $this->source); })()), "getPrice02Min", [], "any", false, false, false, 277) == twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 277, $this->source); })()), "getPrice02Max", [], "any", false, false, false, 277))) {
                    // line 278
                    echo "                <span class=\"ec-price__price price02-default-no-tax\">";
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 278, $this->source); })()), "getPrice02Max", [], "any", false, false, false, 278)), "html", null, true);
                    echo "</span>
                <span class=\"ec-price__tax ec-price__price price02-default\">(";
                    // line 279
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 279, $this->source); })()), "getPrice02IncTaxMin", [], "any", false, false, false, 279)), "html", null, true);
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("税込"), "html", null, true);
                    echo ")</span>
            ";
                } else {
                    // line 281
                    echo "                <span class=\"ec-price__price price02-default-no-tax\">";
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 281, $this->source); })()), "getPrice02Min", [], "any", false, false, false, 281)), "html", null, true);
                    echo " ～ ";
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 281, $this->source); })()), "getPrice02Max", [], "any", false, false, false, 281)), "html", null, true);
                    echo " </span>
                <span class=\"ec-price__tax ec-price__price price02-default\">(";
                    // line 282
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 282, $this->source); })()), "getPrice02IncTaxMin", [], "any", false, false, false, 282)), "html", null, true);
                    echo " ～ ";
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 282, $this->source); })()), "getPrice02IncTaxMax", [], "any", false, false, false, 282)), "html", null, true);
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("税込"), "html", null, true);
                    echo ")</span>
            ";
                }
                // line 284
                echo "        ";
            } else {
                // line 285
                echo "<span class=\"ec-price__price price02-default-no-tax\">";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 285, $this->source); })()), "getPrice02Min", [], "any", false, false, false, 285)), "html", null, true);
                echo "</span>
            <span class=\"ec-price__tax ec-price__price price02-default\">(";
                // line 286
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 286, $this->source); })()), "getPrice02IncTaxMin", [], "any", false, false, false, 286)), "html", null, true);
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("税込"), "html", null, true);
                echo ")</span>
        ";
            }
        } else {
            // line 289
            if (twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 289, $this->source); })()), "hasProductClass", [], "any", false, false, false, 289)) {
                // line 290
                if ((twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 290, $this->source); })()), "getPrice02Min", [], "any", false, false, false, 290) == twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 290, $this->source); })()), "getPrice02Max", [], "any", false, false, false, 290))) {
                    // line 291
                    echo "                <span class=\"ec-price__price price02-default\">";
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 291, $this->source); })()), "getPrice02IncTaxMin", [], "any", false, false, false, 291)), "html", null, true);
                    echo "</span>
                <span class=\"ec-price__tax\">";
                    // line 292
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("税込"), "html", null, true);
                    echo "</span>
            ";
                } else {
                    // line 294
                    echo "                <span class=\"ec-price__price price02-default\">";
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 294, $this->source); })()), "getPrice02IncTaxMin", [], "any", false, false, false, 294)), "html", null, true);
                    echo " ～ ";
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 294, $this->source); })()), "getPrice02IncTaxMax", [], "any", false, false, false, 294)), "html", null, true);
                    echo "</span>
                <span class=\"ec-price__tax\">";
                    // line 295
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("税込"), "html", null, true);
                    echo "</span>
            ";
                }
                // line 297
                echo "        ";
            } else {
                // line 298
                echo "<span class=\"ec-price__price price02-default\">";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 298, $this->source); })()), "getPrice02IncTaxMin", [], "any", false, false, false, 298)), "html", null, true);
                echo "</span>
            <span class=\"ec-price__tax\">";
                // line 299
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("税込"), "html", null, true);
                echo "</span>
        ";
            }
        }
        // line 302
        echo "<!--割引率-->
    ";
        // line 303
        if (( !(null === twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 303, $this->source); })()), "discountRateMin", [], "any", false, false, false, 303)) && (twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 303, $this->source); })()), "discountRateMin", [], "any", false, false, false, 303) > 0))) {
            // line 304
            echo "    ";
            // line 305
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 305, $this->source); })()), "hasProductClass", [], "any", false, false, false, 305)) {
                // line 306
                if ((twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 306, $this->source); })()), "discountRateMin", [], "any", false, false, false, 306) == twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 306, $this->source); })()), "discountRateMax", [], "any", false, false, false, 306))) {
                    // line 307
                    echo "            <span class=\"price_off\" style=\"font-size: 80%; display: inline-block; background: #DE5D50; line-height: 1; color: #FFF; margin-top: 3px; border-radius: 5px; vertical-align: top; padding: 5px; font-weight: bold;\">
            ";
                    // line 308
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 308, $this->source); })()), "discountRateMin", [], "any", false, false, false, 308), "html", null, true);
                    echo "%OFF
            </span>
            ";
                } else {
                    // line 311
                    echo "            <span class=\"price_off\" style=\"font-size: 80%; display: inline-block; background: #DE5D50; line-height: 1; color: #FFF; margin-top: 3px; border-radius: 5px; vertical-align: top; padding: 5px; font-weight: bold;\">
            ";
                    // line 312
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 312, $this->source); })()), "discountRateMin", [], "any", false, false, false, 312), "html", null, true);
                    echo "% ～ ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 312, $this->source); })()), "discountRateMax", [], "any", false, false, false, 312), "html", null, true);
                    echo "%OFF
            </span>
            ";
                }
                // line 315
                echo "        ";
            } else {
                // line 316
                echo "<span class=\"price_off\" style=\"font-size: 80%; display: inline-block; background: #DE5D50; line-height: 1; color: #FFF; margin-top: 3px; border-radius: 5px; vertical-align: top; padding: 5px; font-weight: bold;\">
            ";
                // line 317
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 317, $this->source); })()), "discountRateMin", [], "any", false, false, false, 317), "html", null, true);
                echo "%OFF
            </span>
        ";
            }
            // line 320
            echo "    ";
        }
        // line 321
        echo "    </div>
</div>
";
        // line 324
        echo "                    
                    ";
        // line 325
        if (twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 325, $this->source); })()), "option_favorite_product", [], "any", false, false, false, 325)) {
            // line 326
            echo "                        <form action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_add_favorite", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 326, $this->source); })()), "id", [], "any", false, false, false, 326)]), "html", null, true);
            echo "\" method=\"post\">
                            <div class=\"fr\">
                                ";
            // line 328
            if (((isset($context["is_favorite"]) || array_key_exists("is_favorite", $context) ? $context["is_favorite"] : (function () { throw new RuntimeError('Variable "is_favorite" does not exist.', 328, $this->source); })()) == false)) {
                // line 329
                echo "                                    <button type=\"submit\" id=\"favorite\" class=\"ec-blockBtn--wishlist\">
                                        ";
                // line 330
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("♡"), "html", null, true);
                echo "
                                    </button>
                                ";
            } else {
                // line 333
                echo "                                    <button type=\"submit\" id=\"favorite\" class=\"ec-blockBtn--wishlist\"
                                            disabled=\"disabled\">";
                // line 334
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("♥"), "html", null, true);
                echo "
                                    </button>
                                ";
            }
            // line 337
            echo "                            </div>
                        </form>
                        ";
        }
        // line 340
        echo "                    ";
        // line 341
        echo "                    <!--";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 341, $this->source); })()), "ProductCategories", [], "any", false, false, false, 341))) {
            // line 342
            echo "                        <div class=\"ec-productRole__category\">
                            <div>";
            // line 343
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("関連カテゴリ"), "html", null, true);
            echo "</div>
                            ";
            // line 344
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 344, $this->source); })()), "ProductCategories", [], "any", false, false, false, 344));
            foreach ($context['_seq'] as $context["_key"] => $context["ProductCategory"]) {
                // line 345
                echo "                                <ul>
                                    <li>
                                        ";
                // line 347
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ProductCategory"], "Category", [], "any", false, false, false, 347), "path", [], "any", false, false, false, 347));
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
                foreach ($context['_seq'] as $context["_key"] => $context["Category"]) {
                    // line 348
                    echo "                                            <a href=\"";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
                    echo "?category_id=";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 348), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Category"], "name", [], "any", false, false, false, 348), "html", null, true);
                    echo "</a>";
                    if ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 348) == false)) {
                        // line 349
                        echo "                                            <span>＞</span>";
                    }
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 351
                echo "                                    </li>
                                </ul>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductCategory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 354
            echo "                        </div>
                    ";
        }
        // line 355
        echo "-->
                    <form action=\"";
        // line 356
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_add_cart", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 356, $this->source); })()), "id", [], "any", false, false, false, 356)]), "html", null, true);
        echo "\" method=\"post\" id=\"form1\" name=\"form1\">
                        ";
        // line 357
        if (twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 357, $this->source); })()), "stock_find", [], "any", false, false, false, 357)) {
            // line 358
            echo "                            <div class=\"ec-productRole__actions\">
                                ";
            // line 359
            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id1", [], "any", true, true, false, 359)) {
                // line 360
                echo "                                    <div class=\"ec-select\">
                                        ";
                // line 361
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 361, $this->source); })()), "classcategory_id1", [], "any", false, false, false, 361), 'widget');
                echo "
                                        ";
                // line 362
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 362, $this->source); })()), "classcategory_id1", [], "any", false, false, false, 362), 'errors');
                echo "
                                    </div>
                                    ";
                // line 364
                if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id2", [], "any", true, true, false, 364)) {
                    // line 365
                    echo "                                        <div class=\"ec-select\">
                                            ";
                    // line 366
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 366, $this->source); })()), "classcategory_id2", [], "any", false, false, false, 366), 'widget');
                    echo "
                                            ";
                    // line 367
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 367, $this->source); })()), "classcategory_id2", [], "any", false, false, false, 367), 'errors');
                    echo "
                                        </div>
                                    ";
                }
                // line 370
                echo "                                ";
            }
            // line 371
            echo "                            </div>
                    <div>
                            <div class=\"ec-numberInput\"><span>";
            // line 373
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("数量"), "html", null, true);
            echo "</span>
                                    ";
            // line 374
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 374, $this->source); })()), "quantity", [], "any", false, false, false, 374), 'widget');
            echo "
                                    ";
            // line 375
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 375, $this->source); })()), "quantity", [], "any", false, false, false, 375), 'errors');
            echo "
                            </div>
                            <div class=\"ec-productRole__btn\">
                                <button type=\"submit\" class=\"ec-blockBtn--action add-cart\">
                                    ";
            // line 379
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("カートに入れる"), "html", null, true);
            echo "
                                </button>
                            </div>
                            
                        </div>
                        ";
        } else {
            // line 385
            echo "                            <div class=\"ec-productRole__btn\">
                                <button type=\"button\" class=\"ec-blockBtn--action\" disabled=\"disabled\">
                                    ";
            // line 387
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ただいま品切れ中です。"), "html", null, true);
            echo "
                                </button>
                            </div>
                        ";
        }
        // line 391
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 391, $this->source); })()), 'rest');
        echo "
                    </form>
                    <div class=\"ec-modal\">
                        <input type=\"checkbox\" id=\"ec-modal-checkbox\" class=\"checkbox\">
                        <div class=\"ec-modal-overlay\">
                            <label for=\"ec-modal-checkbox\" class=\"ec-modal-overlay-close\"></label>
                            <div class=\"ec-modal-wrap\">
                                <label for=\"ec-modal-checkbox\" class=\"ec-modal-close\"><span class=\"ec-icon\"><img src=\"";
        // line 398
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/cross-dark.svg"), "html", null, true);
        echo "\" alt=\"\"/></span></label>
                                <div id=\"ec-modal-header\" class=\"text-center\">";
        // line 399
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("カートに追加しました。"), "html", null, true);
        echo "</div>
                                <div class=\"ec-modal-box\">
                                    <div class=\"ec-role\">
                                        <label for=\"ec-modal-checkbox\" class=\"ec-inlineBtn--cancel\">";
        // line 402
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お買い物を続ける"), "html", null, true);
        echo "</label>
                                        <a href=\"";
        // line 403
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("cart");
        echo "\" class=\"ec-inlineBtn--action\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("カートへ進む"), "html", null, true);
        echo "</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div class=\"freearea\">
        ";
        // line 413
        if (twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 413, $this->source); })()), "freearea", [], "any", false, false, false, 413)) {
            // line 414
            echo "                 ";
            echo twig_include($this->env, $context, twig_template_from_string($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 414, $this->source); })()), "freearea", [], "any", false, false, false, 414)));
            echo "
        ";
        }
        // line 416
        echo "        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__5d21ee3b59313ae79076dc80a195a5bcf568e1746595d92110cde4352ee8d82f";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  916 => 416,  910 => 414,  908 => 413,  893 => 403,  889 => 402,  883 => 399,  879 => 398,  868 => 391,  861 => 387,  857 => 385,  848 => 379,  841 => 375,  837 => 374,  833 => 373,  829 => 371,  826 => 370,  820 => 367,  816 => 366,  813 => 365,  811 => 364,  806 => 362,  802 => 361,  799 => 360,  797 => 359,  794 => 358,  792 => 357,  788 => 356,  785 => 355,  781 => 354,  773 => 351,  758 => 349,  749 => 348,  732 => 347,  728 => 345,  724 => 344,  720 => 343,  717 => 342,  714 => 341,  712 => 340,  707 => 337,  701 => 334,  698 => 333,  692 => 330,  689 => 329,  687 => 328,  681 => 326,  679 => 325,  676 => 324,  672 => 321,  669 => 320,  663 => 317,  660 => 316,  657 => 315,  649 => 312,  646 => 311,  640 => 308,  637 => 307,  635 => 306,  632 => 305,  630 => 304,  628 => 303,  625 => 302,  619 => 299,  614 => 298,  611 => 297,  606 => 295,  599 => 294,  594 => 292,  589 => 291,  587 => 290,  585 => 289,  578 => 286,  573 => 285,  570 => 284,  562 => 282,  555 => 281,  549 => 279,  544 => 278,  542 => 277,  540 => 276,  538 => 275,  535 => 274,  532 => 272,  526 => 268,  519 => 267,  516 => 266,  512 => 264,  507 => 262,  498 => 261,  496 => 260,  492 => 259,  485 => 258,  483 => 257,  480 => 256,  478 => 255,  475 => 253,  471 => 251,  468 => 249,  464 => 248,  458 => 245,  455 => 244,  449 => 239,  445 => 237,  441 => 235,  435 => 234,  432 => 233,  429 => 232,  426 => 231,  421 => 230,  419 => 229,  415 => 227,  396 => 225,  379 => 224,  375 => 222,  366 => 220,  358 => 218,  353 => 217,  346 => 212,  336 => 211,  317 => 201,  307 => 194,  277 => 167,  272 => 164,  263 => 158,  259 => 156,  257 => 155,  254 => 154,  245 => 148,  241 => 146,  239 => 145,  207 => 115,  199 => 113,  197 => 112,  192 => 110,  189 => 109,  187 => 108,  173 => 97,  170 => 96,  160 => 95,  73 => 16,  63 => 15,  52 => 11,  50 => 13,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("{#
This file is part of EC-CUBE

Copyright(c) EC-CUBE CO.,LTD. All Rights Reserved.

http://www.ec-cube.co.jp/

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.
#}
{% extends 'default_frame.twig' %}

{% set body_class = 'product_page' %}

{% block stylesheet %}
    <style>

        .slick-slider {
            margin-bottom: 30px;
        }

        .slick-dots {
            position: absolute;
            bottom: -45px;
            display: block;
            width: 100%;
            padding: 0;
            list-style: none;
            text-align: center;
        }

        .slick-dots li {
            position: relative;
            display: inline-block;
            width: 20px;
            height: 20px;
            margin: 0 5px;
            padding: 0;

            cursor: pointer;
        }

        .slick-dots li button {
            font-size: 0;
            line-height: 0;
            display: block;
            width: 20px;
            height: 20px;
            padding: 5px;
            cursor: pointer;
            color: transparent;
            border: 0;
            outline: none;
            background: transparent;
        }

        .slick-dots li button:hover,
        .slick-dots li button:focus {
            outline: none;
        }

        .slick-dots li button:hover:before,
        .slick-dots li button:focus:before {
            opacity: 1;
        }

        .slick-dots li button:before {
            content: \" \";
            line-height: 20px;
            position: absolute;
            top: 0;
            left: 0;
            width: 12px;
            height: 12px;
            text-align: center;
            opacity: .25;
            background-color: black;
            border-radius: 50%;

        }

        .slick-dots li.slick-active button:before {
            opacity: .75;
            background-color: black;
        }

        .slick-dots li button.thumbnail img {
            width: 0;
            height: 0;
        }

    </style>
{% endblock %}

{% block javascript %}
    <script>
        eccube.classCategories = {{ class_categories_as_json(Product)|raw }};

        // 規格2に選択肢を割り当てる。
        function fnSetClassCategories(form, classcat_id2_selected) {
            var \$form = \$(form);
            var product_id = \$form.find('input[name=product_id]').val();
            var \$sele1 = \$form.find('select[name=classcategory_id1]');
            var \$sele2 = \$form.find('select[name=classcategory_id2]');
            eccube.setClassCategories(\$form, product_id, \$sele1, \$sele2, classcat_id2_selected);
        }

        {% if form.classcategory_id2 is defined %}
        fnSetClassCategories(
            \$('#form1'), {{ form.classcategory_id2.vars.value|json_encode|raw }}
        );
        {% elseif form.classcategory_id1 is defined %}
        eccube.checkStock(\$('#form1'), {{ Product.id }}, {{ form.classcategory_id1.vars.value|json_encode|raw }}, null);
        {% endif %}
    </script>
    <script>
        \$(function() {
            // bfcache無効化
            \$(window).bind('pageshow', function(event) {
                if (event.originalEvent.persisted) {
                    location.reload(true);
                }
            });

            \$('.item_visual').slick({
                dots: false,
                arrows: false,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        dots: true
                    }
                }]
            });

            \$('.slideThumb').on('click', function() {
                var index = \$(this).attr('data-index');
                \$('.item_visual').slick('slickGoTo', index, false);
            })
        });
    </script>
    <script>
        \$(function() {
            \$('.add-cart').on('click', function(event) {
                {% if form.classcategory_id1 is defined %}
                // 規格1フォームの必須チェック
                if (\$('#classcategory_id1').val() == '__unselected' || \$('#classcategory_id1').val() == '') {
                    \$('#classcategory_id1')[0].setCustomValidity('{{ '項目が選択されていません'|trans }}');
                    return true;
                } else {
                    \$('#classcategory_id1')[0].setCustomValidity('');
                }
                {% endif %}

                {% if form.classcategory_id2 is defined %}
                // 規格2フォームの必須チェック
                if (\$('#classcategory_id2').val() == '__unselected' || \$('#classcategory_id2').val() == '') {
                    \$('#classcategory_id2')[0].setCustomValidity('{{ '項目が選択されていません'|trans }}');
                    return true;
                } else {
                    \$('#classcategory_id2')[0].setCustomValidity('');
                }
                {% endif %}

                // 個数フォームのチェック
                if (\$('#quantity').val() < 1) {
                    \$('#quantity')[0].setCustomValidity('{{ '1以上で入力してください。'|trans }}');
                    return true;
                } else {
                    \$('#quantity')[0].setCustomValidity('');
                }

                event.preventDefault();
                \$form = \$('#form1');
                \$.ajax({
                    url: \$form.attr('action'),
                    type: \$form.attr('method'),
                    data: \$form.serialize(),
                    dataType: 'json',
                    beforeSend: function(xhr, settings) {
                        // Buttonを無効にする
                        \$('.add-cart').prop('disabled', true);
                    }
                }).done(function(data) {
                    // レスポンス内のメッセージをalertで表示
                    \$.each(data.messages, function() {
                        \$('#ec-modal-header').html(this);
                    });

                    \$('#ec-modal-checkbox').prop('checked', true);

                    // カートブロックを更新する
                    \$.ajax({
                        url: \"{{ url('block_cart') }}\",
                        type: 'GET',
                        dataType: 'html'
                    }).done(function(html) {
                        \$('.ec-headerRole__cart').html(html);
                    });
                }).fail(function(data) {
                    alert('{{ 'カートへの追加に失敗しました。'|trans }}');
                }).always(function(data) {
                    // Buttonを有効にする
                    \$('.add-cart').prop('disabled', false);
                });
            });
        });
    </script>
{% endblock %}

{% block main %}
    <div class=\"ec-productRole\">
        <div class=\"ec-grid2\">
            <div class=\"ec-grid2__cell\">
                <div class=\"ec-sliderItemRole\">
                    <div class=\"item_visual\">
                        {% for ProductImage in Product.ProductImage %}
                            <div class=\"slide-item\"><img src=\"{{ asset(ProductImage, 'save_image') }}\"></div>
                        {% else %}
                            <div class=\"slide-item\"><img src=\"{{ asset(''|no_image_product, 'save_image') }}\"/></div>
                        {% endfor %}
                    </div>
                    <div class=\"item_nav\">
                        {% for ProductImage in Product.ProductImage %}
                            <div class=\"slideThumb\" data-index=\"{{ loop.index0 }}\"><img src=\"{{ asset(ProductImage, 'save_image') }}\"></div>
                        {% endfor %}
                    </div>

 {% set hasCategory = false %}
 {% for ProductCategory in Product.ProductCategories %}
      {% if ProductCategory.Category.id == 51 or Category.id == empty %}
         {% set hasCategory = true %}
      {% endif %}
 {% endfor %}
 {% if hasCategory %}
{% else %}
            <small>※商品画像のヴィンテージと実際のヴィンテージが違う場合がございます。</small>
{% endif %}
                </div>
            </div>
            <div class=\"ec-grid2__cell\">
                <div class=\"ec-productRole__profile\">
                    {# 商品名 #}
                    <div class=\"ec-productRole__title\">
                        <h2 class=\"ec-headingTitle\">{{ Product.name }}</h2>
                    </div>
                    
                    <div class=\"ec-productRole__description ec-productRole__description--top\">{{ Product.description_detail|raw|nl2br }}
{% if hasCategory %}
{% else %}
            <small>※商品画像のヴィンテージと実際のヴィンテージが違う場合がございます。</small>
{% endif %}
                    </div>
                    {# 通常価格 #}
{% if Product.hasProductClass -%}
    <div class=\"ec-productRole__priceRegular\">
        {% if Product.getPrice01Min is not null and Product.getPrice01IncTaxMin == Product.getPrice01IncTaxMax %}
            <span class=\"ec-productRole__priceRegularPrice\">{{ '通常価格'|trans }}：<span class=\"price01-default\">{{ Product.getPrice01IncTaxMin|price }}</span></span>
            <span class=\"ec-productRole__priceRegularTax\">{{ '税込'|trans }}</span>
        {% elseif Product.getPrice01Min is not null and Product.getPrice01Max is not null %}
            <span class=\"ec-productRole__priceRegularPrice\">{{ '通常価格'|trans }}：<span class=\"price01-default\">{{ Product.getPrice01IncTaxMin|price }} ～ {{ Product.getPrice01IncTaxMax|price }}</span></span>
            <span class=\"ec-productRole__priceRegularTax\">{{ '税込'|trans }}</span>
        {% endif %}
    </div>
{% else %}
    {% if Product.getPrice01Max is not null %}
        <span class=\"ec-productRole__priceRegularPrice\">{{ '通常価格'|trans }}：{{ Product.getPrice01IncTaxMin|price }}</span>
        <span class=\"ec-productRole__priceRegularTax\">{{ '税込'|trans }}</span>
    {% endif %}
{% endif %}
{# 販売価格 #}
<div class=\"ec-productRole__price\">
    {# 税抜き価格 #}
    <div class=\"ec-price\">
    {% if TaxManagementConfig.isIncludeTaxFlag is not null and TaxManagementConfig.isIncludeTaxFlag == false -%}
        {% if Product.hasProductClass -%}
            {% if Product.getPrice02Min == Product.getPrice02Max %}
                <span class=\"ec-price__price price02-default-no-tax\">{{ Product.getPrice02Max|price }}</span>
                <span class=\"ec-price__tax ec-price__price price02-default\">({{ Product.getPrice02IncTaxMin|price }}{{ '税込'|trans }})</span>
            {% else %}
                <span class=\"ec-price__price price02-default-no-tax\">{{ Product.getPrice02Min|price }} ～ {{ Product.getPrice02Max|price }} </span>
                <span class=\"ec-price__tax ec-price__price price02-default\">({{ Product.getPrice02IncTaxMin|price }} ～ {{ Product.getPrice02IncTaxMax|price }}{{ '税込'|trans }})</span>
            {% endif %}
        {% else -%}
            <span class=\"ec-price__price price02-default-no-tax\">{{ Product.getPrice02Min|price }}</span>
            <span class=\"ec-price__tax ec-price__price price02-default\">({{ Product.getPrice02IncTaxMin|price }}{{ '税込'|trans }})</span>
        {% endif -%}
    {% else -%}
        {% if Product.hasProductClass -%}
            {% if Product.getPrice02Min == Product.getPrice02Max %}
                <span class=\"ec-price__price price02-default\">{{ Product.getPrice02IncTaxMin|price }}</span>
                <span class=\"ec-price__tax\">{{ '税込'|trans }}</span>
            {% else %}
                <span class=\"ec-price__price price02-default\">{{ Product.getPrice02IncTaxMin|price }} ～ {{ Product.getPrice02IncTaxMax|price }}</span>
                <span class=\"ec-price__tax\">{{ '税込'|trans }}</span>
            {% endif %}
        {% else -%}
            <span class=\"ec-price__price price02-default\">{{ Product.getPrice02IncTaxMin|price }}</span>
            <span class=\"ec-price__tax\">{{ '税込'|trans }}</span>
        {% endif -%}
    {% endif -%}
    <!--割引率-->
    {% if Product.discountRateMin is not null and Product.discountRateMin > 0 %}
    {# 割引率0以下or100以上の場合表示しない #}
        {% if Product.hasProductClass -%}
            {% if Product.discountRateMin == Product.discountRateMax %}
            <span class=\"price_off\" style=\"font-size: 80%; display: inline-block; background: #DE5D50; line-height: 1; color: #FFF; margin-top: 3px; border-radius: 5px; vertical-align: top; padding: 5px; font-weight: bold;\">
            {{ Product.discountRateMin }}%OFF
            </span>
            {% else %}
            <span class=\"price_off\" style=\"font-size: 80%; display: inline-block; background: #DE5D50; line-height: 1; color: #FFF; margin-top: 3px; border-radius: 5px; vertical-align: top; padding: 5px; font-weight: bold;\">
            {{ Product.discountRateMin }}% ～ {{ Product.discountRateMax }}%OFF
            </span>
            {% endif %}
        {% else -%}
            <span class=\"price_off\" style=\"font-size: 80%; display: inline-block; background: #DE5D50; line-height: 1; color: #FFF; margin-top: 3px; border-radius: 5px; vertical-align: top; padding: 5px; font-weight: bold;\">
            {{ Product.discountRateMin }}%OFF
            </span>
        {% endif %}
    {% endif %}
    </div>
</div>
{# 商品コード #}
                    
                    {% if BaseInfo.option_favorite_product %}
                        <form action=\"{{ url('product_add_favorite', {id:Product.id}) }}\" method=\"post\">
                            <div class=\"fr\">
                                {% if is_favorite == false %}
                                    <button type=\"submit\" id=\"favorite\" class=\"ec-blockBtn--wishlist\">
                                        {{ '♡'|trans }}
                                    </button>
                                {% else %}
                                    <button type=\"submit\" id=\"favorite\" class=\"ec-blockBtn--wishlist\"
                                            disabled=\"disabled\">{{ '♥'|trans }}
                                    </button>
                                {% endif %}
                            </div>
                        </form>
                        {% endif %}
                    {# 関連カテゴリ #}
                    <!--{% if Product.ProductCategories is not empty %}
                        <div class=\"ec-productRole__category\">
                            <div>{{ '関連カテゴリ'|trans }}</div>
                            {% for ProductCategory in Product.ProductCategories %}
                                <ul>
                                    <li>
                                        {% for Category in ProductCategory.Category.path %}
                                            <a href=\"{{ url('product_list') }}?category_id={{ Category.id }}\">{{ Category.name }}</a> {%- if loop.last == false %}
                                            <span>＞</span>{% endif -%}
                                        {% endfor %}
                                    </li>
                                </ul>
                            {% endfor %}
                        </div>
                    {% endif %}-->
                    <form action=\"{{ url('product_add_cart', {id:Product.id}) }}\" method=\"post\" id=\"form1\" name=\"form1\">
                        {% if Product.stock_find %}
                            <div class=\"ec-productRole__actions\">
                                {% if form.classcategory_id1 is defined %}
                                    <div class=\"ec-select\">
                                        {{ form_widget(form.classcategory_id1) }}
                                        {{ form_errors(form.classcategory_id1) }}
                                    </div>
                                    {% if form.classcategory_id2 is defined %}
                                        <div class=\"ec-select\">
                                            {{ form_widget(form.classcategory_id2) }}
                                            {{ form_errors(form.classcategory_id2) }}
                                        </div>
                                    {% endif %}
                                {% endif %}
                            </div>
                    <div>
                            <div class=\"ec-numberInput\"><span>{{ '数量'|trans }}</span>
                                    {{ form_widget(form.quantity) }}
                                    {{ form_errors(form.quantity) }}
                            </div>
                            <div class=\"ec-productRole__btn\">
                                <button type=\"submit\" class=\"ec-blockBtn--action add-cart\">
                                    {{ 'カートに入れる'|trans }}
                                </button>
                            </div>
                            
                        </div>
                        {% else %}
                            <div class=\"ec-productRole__btn\">
                                <button type=\"button\" class=\"ec-blockBtn--action\" disabled=\"disabled\">
                                    {{ 'ただいま品切れ中です。'|trans }}
                                </button>
                            </div>
                        {% endif %}
                        {{ form_rest(form) }}
                    </form>
                    <div class=\"ec-modal\">
                        <input type=\"checkbox\" id=\"ec-modal-checkbox\" class=\"checkbox\">
                        <div class=\"ec-modal-overlay\">
                            <label for=\"ec-modal-checkbox\" class=\"ec-modal-overlay-close\"></label>
                            <div class=\"ec-modal-wrap\">
                                <label for=\"ec-modal-checkbox\" class=\"ec-modal-close\"><span class=\"ec-icon\"><img src=\"{{ asset('assets/icon/cross-dark.svg') }}\" alt=\"\"/></span></label>
                                <div id=\"ec-modal-header\" class=\"text-center\">{{ 'カートに追加しました。'|trans }}</div>
                                <div class=\"ec-modal-box\">
                                    <div class=\"ec-role\">
                                        <label for=\"ec-modal-checkbox\" class=\"ec-inlineBtn--cancel\">{{ 'お買い物を続ける'|trans }}</label>
                                        <a href=\"{{ url('cart') }}\" class=\"ec-inlineBtn--action\">{{ 'カートへ進む'|trans }}</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <div class=\"freearea\">
        {% if Product.freearea %}
                 {{ include(template_from_string(Product.freearea)) }}
        {% endif %}
        </div>
    </div>
{% endblock %}", "__string_template__5d21ee3b59313ae79076dc80a195a5bcf568e1746595d92110cde4352ee8d82f", "");
    }
}
