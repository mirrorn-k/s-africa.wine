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

/* Product/detail.twig */
class __TwigTemplate_6bba7dbb4263c8addf994fdf07b38c371b378aab97c4d6638404ec9e5812db0f extends \Eccube\Twig\Template
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
        return "product_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        $context["body_class"] = "product_page";
        // line 11
        $this->parent = $this->loadTemplate("product_frame.twig", "Product/detail.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
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
    }

    // line 95
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 96
        echo "    <script>
        eccube.classCategories = ";
        // line 97
        echo $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getClassCategoriesAsJson(($context["Product"] ?? null));
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
            echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id2", [], "any", false, false, false, 110), "vars", [], "any", false, false, false, 110), "value", [], "any", false, false, false, 110));
            echo "
        );
        ";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 112
($context["form"] ?? null), "classcategory_id1", [], "any", true, true, false, 112)) {
            // line 113
            echo "        eccube.checkStock(\$('#form1'), ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "id", [], "any", false, false, false, 113), "html", null, true);
            echo ", ";
            echo json_encode(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id1", [], "any", false, false, false, 113), "vars", [], "any", false, false, false, 113), "value", [], "any", false, false, false, 113));
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
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("block_cart");
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
    }

    // line 211
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 212
        echo "    <div class=\"ec-productRole\">
        <div class=\"ec-grid2\">
            <div class=\"ec-grid2__cell\">
                <div class=\"ec-sliderItemRole\">
                    <div class=\"item_visual\">
                        ";
        // line 217
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "ProductImage", [], "any", false, false, false, 217));
        $context['_iterated'] = false;
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
            // line 218
            echo "                            <div class=\"slide-item\"><img alt=\"";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "name", [], "any", false, false, false, 218) . "_") . twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 218)), "html", null, true);
            echo "\" src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["ProductImage"], "save_image"), "html", null, true);
            echo "\"></div>
                        ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 220
            echo "                            <div class=\"slide-item\"><img alt=\"";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "name", [], "any", false, false, false, 220) . "_") . twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 220)), "html", null, true);
            echo "\" src=\"";
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "ProductImage", [], "any", false, false, false, 224));
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
            echo "\"><img alt=\"";
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "name", [], "any", false, false, false, 225) . "_") . twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 225)), "html", null, true);
            echo "\" src=\"";
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "ProductCategories", [], "any", false, false, false, 230));
        foreach ($context['_seq'] as $context["_key"] => $context["ProductCategory"]) {
            // line 231
            echo "      ";
            if (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ProductCategory"], "Category", [], "any", false, false, false, 231), "id", [], "any", false, false, false, 231) == 51) || (twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "id", [], "any", false, false, false, 231) == ($context["empty"] ?? null)))) {
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
        if (($context["hasCategory"] ?? null)) {
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
                        <h1 class=\"ec-headingTitle\">";
        // line 245
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "name", [], "any", false, false, false, 245), "html", null, true);
        echo "</h1>
                    </div>
                    
                    <div class=\"ec-productRole__description ec-productRole__description--top\">";
        // line 248
        echo nl2br(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "description_detail", [], "any", false, false, false, 248));
        echo "
";
        // line 249
        if (($context["hasCategory"] ?? null)) {
        } else {
            // line 251
            echo "            <small>※商品画像のヴィンテージと実際のヴィンテージが違う場合がございます。</small>
";
        }
        // line 253
        echo "                    </div>
                    ";
        // line 255
        echo "                    ";
        if (twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "hasProductClass", [], "any", false, false, false, 255)) {
            // line 256
            echo "<div class=\"ec-productRole__priceRegular\">
                            ";
            // line 257
            if (( !(null === twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "getPrice01Min", [], "any", false, false, false, 257)) && (twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "getPrice01IncTaxMin", [], "any", false, false, false, 257) == twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "getPrice01IncTaxMax", [], "any", false, false, false, 257)))) {
                // line 258
                echo "                                <span class=\"ec-productRole__priceRegularPrice\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.product.normal_price"), "html", null, true);
                echo "：<span class=\"price01-default\">";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "getPrice01IncTaxMin", [], "any", false, false, false, 258)), "html", null, true);
                echo "</span></span>
                                <span class=\"ec-productRole__priceRegularTax\">";
                // line 259
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.tax_include"), "html", null, true);
                echo "</span>
                            ";
            } elseif (( !(null === twig_get_attribute($this->env, $this->source,             // line 260
($context["Product"] ?? null), "getPrice01Min", [], "any", false, false, false, 260)) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "getPrice01Max", [], "any", false, false, false, 260)))) {
                // line 261
                echo "                                <span class=\"ec-productRole__priceRegularPrice\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.product.normal_price"), "html", null, true);
                echo "：<span class=\"price01-default\">";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "getPrice01IncTaxMin", [], "any", false, false, false, 261)), "html", null, true);
                echo "～ ";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "getPrice01IncTaxMax", [], "any", false, false, false, 261)), "html", null, true);
                echo "</span></span>
                                <span class=\"ec-productRole__priceRegularTax\">";
                // line 262
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.tax_include"), "html", null, true);
                echo "</span>
                            ";
            }
            // line 264
            echo "                        </div>
                    ";
        } else {
            // line 266
            echo "                        ";
            if ( !(null === twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "getPrice01Max", [], "any", false, false, false, 266))) {
                // line 267
                echo "                            <span class=\"ec-productRole__priceRegularPrice\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("front.product.normal_price"), "html", null, true);
                echo "：";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "getPrice01IncTaxMin", [], "any", false, false, false, 267)), "html", null, true);
                echo "</span>
                            <span class=\"ec-productRole__priceRegularTax\">";
                // line 268
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.tax_include"), "html", null, true);
                echo "</span>
                        ";
            }
            // line 270
            echo "                    ";
        }
        // line 271
        echo "                    ";
        // line 272
        echo "                    <div class=\"ec-productRole__price cf\">
                        ";
        // line 273
        if (twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "hasProductClass", [], "any", false, false, false, 273)) {
            // line 274
            if ((twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "getPrice02IncTaxMin", [], "any", false, false, false, 274) == twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "getPrice02IncTaxMax", [], "any", false, false, false, 274))) {
                // line 275
                echo "                                <div class=\"ec-price fl\">
                                    <span class=\"ec-price__price price02-default\">";
                // line 276
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "getPrice02IncTaxMin", [], "any", false, false, false, 276)), "html", null, true);
                echo "</span>
                                    <span class=\"ec-price__tax\">";
                // line 277
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.tax_include"), "html", null, true);
                echo "</span>
                                </div>
                            ";
            } else {
                // line 280
                echo "                                <div class=\"ec-price fl\">
                                    <span class=\"ec-price__price price02-default\">";
                // line 281
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "getPrice02IncTaxMin", [], "any", false, false, false, 281)), "html", null, true);
                echo " ～ ";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "getPrice02IncTaxMax", [], "any", false, false, false, 281)), "html", null, true);
                echo "</span>
                                    <span class=\"ec-price__tax\">";
                // line 282
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.tax_include"), "html", null, true);
                echo "</span>
                                </div>
                            ";
            }
            // line 285
            echo "                        ";
        } else {
            // line 286
            echo "                            <div class=\"ec-price fl\">
                                <span class=\"ec-price__price\">";
            // line 287
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "getPrice02IncTaxMin", [], "any", false, false, false, 287)), "html", null, true);
            echo "</span>
                                <span class=\"ec-price__tax\">";
            // line 288
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.tax_include"), "html", null, true);
            echo "</span>
                            </div>
                        ";
        }
        // line 291
        echo "                    </div>
                    ";
        // line 293
        echo "                    ";
        echo twig_include($this->env, $context, "Product/customer_price_detail.twig");
        echo "
                    ";
        // line 294
        if (twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "option_favorite_product", [], "any", false, false, false, 294)) {
            // line 295
            echo "                        <form action=\"";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_add_favorite", ["id" => twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "id", [], "any", false, false, false, 295)]), "html", null, true);
            echo "\" method=\"post\">
                            <div class=\"fr\">
                                ";
            // line 297
            if ((($context["is_favorite"] ?? null) == false)) {
                // line 298
                echo "                                    <button type=\"submit\" id=\"favorite\" class=\"ec-blockBtn--wishlist\">
                                        ";
                // line 299
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("♡"), "html", null, true);
                echo "
                                    </button>
                                ";
            } else {
                // line 302
                echo "                                    <button type=\"submit\" id=\"favorite\" class=\"ec-blockBtn--wishlist\"
                                            disabled=\"disabled\">";
                // line 303
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("♥"), "html", null, true);
                echo "
                                    </button>
                                ";
            }
            // line 306
            echo "                            </div>
                        </form>
                        ";
        }
        // line 309
        echo "                    ";
        // line 310
        echo "                    <!--";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "ProductCategories", [], "any", false, false, false, 310))) {
            // line 311
            echo "                        <div class=\"ec-productRole__category\">
                            <div>";
            // line 312
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("関連カテゴリ"), "html", null, true);
            echo "</div>
                            ";
            // line 313
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "ProductCategories", [], "any", false, false, false, 313));
            foreach ($context['_seq'] as $context["_key"] => $context["ProductCategory"]) {
                // line 314
                echo "                                <ul>
                                    <li>
                                        ";
                // line 316
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ProductCategory"], "Category", [], "any", false, false, false, 316), "path", [], "any", false, false, false, 316));
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
                    // line 317
                    echo "                                            <a href=\"";
                    echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
                    echo "?category_id=";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 317), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Category"], "name", [], "any", false, false, false, 317), "html", null, true);
                    echo "</a>";
                    if ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 317) == false)) {
                        // line 318
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
                // line 320
                echo "                                    </li>
                                </ul>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductCategory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 323
            echo "                        </div>
                    ";
        }
        // line 324
        echo "-->
                    <form action=\"";
        // line 325
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_add_cart", ["id" => twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "id", [], "any", false, false, false, 325)]), "html", null, true);
        echo "\" method=\"post\" id=\"form1\" name=\"form1\">
                        ";
        // line 326
        if (twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "stock_find", [], "any", false, false, false, 326)) {
            // line 327
            echo "                            <div class=\"ec-productRole__actions\">
                                ";
            // line 328
            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id1", [], "any", true, true, false, 328)) {
                // line 329
                echo "                                    <div class=\"ec-select\">
                                        ";
                // line 330
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id1", [], "any", false, false, false, 330), 'widget');
                echo "
                                        ";
                // line 331
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id1", [], "any", false, false, false, 331), 'errors');
                echo "
                                    </div>
                                    ";
                // line 333
                if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id2", [], "any", true, true, false, 333)) {
                    // line 334
                    echo "                                        <div class=\"ec-select\">
                                            ";
                    // line 335
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id2", [], "any", false, false, false, 335), 'widget');
                    echo "
                                            ";
                    // line 336
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id2", [], "any", false, false, false, 336), 'errors');
                    echo "
                                        </div>
                                    ";
                }
                // line 339
                echo "                                ";
            }
            // line 340
            echo "                            </div>
                    <div>
                            <div class=\"ec-numberInput\"><span>";
            // line 342
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("数量"), "html", null, true);
            echo "</span>
                                    ";
            // line 343
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "quantity", [], "any", false, false, false, 343), 'widget');
            echo "
                                    ";
            // line 344
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "quantity", [], "any", false, false, false, 344), 'errors');
            echo "
                            </div>
                            <div class=\"ec-productRole__btn\">
                                <button type=\"submit\" class=\"ec-blockBtn--action add-cart\">
                                    ";
            // line 348
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("カートに入れる"), "html", null, true);
            echo "
                                </button>
                            </div>
                            
                        </div>
                        ";
        } else {
            // line 354
            echo "                            <div class=\"ec-productRole__btn\">
                                <button type=\"button\" class=\"ec-blockBtn--action\" disabled=\"disabled\">
                                    ";
            // line 356
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ただいま品切れ中です。"), "html", null, true);
            echo "
                                </button>
                            </div>
                        ";
        }
        // line 360
        echo "                        ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
        echo "
                    </form>
                    <div class=\"ec-modal\">
                        <input type=\"checkbox\" id=\"ec-modal-checkbox\" class=\"checkbox\">
                        <div class=\"ec-modal-overlay\">
                            <label for=\"ec-modal-checkbox\" class=\"ec-modal-overlay-close\"></label>
                            <div class=\"ec-modal-wrap\">
                                <label for=\"ec-modal-checkbox\" class=\"ec-modal-close\"><span class=\"ec-icon\"><img src=\"";
        // line 367
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/cross-dark.svg"), "html", null, true);
        echo "\" alt=\"\"/></span></label>
                                <div id=\"ec-modal-header\" class=\"text-center\">";
        // line 368
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("カートに追加しました。"), "html", null, true);
        echo "</div>
                                <div class=\"ec-modal-box\">
                                    <div class=\"ec-role\">
                                        <label for=\"ec-modal-checkbox\" class=\"ec-inlineBtn--cancel\">";
        // line 371
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お買い物を続ける"), "html", null, true);
        echo "</label>
                                        <a href=\"";
        // line 372
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("cart");
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
        // line 382
        if (twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "freearea", [], "any", false, false, false, 382)) {
            // line 383
            echo "                 ";
            echo twig_include($this->env, $context, twig_template_from_string($this->env, twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "freearea", [], "any", false, false, false, 383)));
            echo "
        ";
        }
        // line 385
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "Product/detail.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  818 => 385,  812 => 383,  810 => 382,  795 => 372,  791 => 371,  785 => 368,  781 => 367,  770 => 360,  763 => 356,  759 => 354,  750 => 348,  743 => 344,  739 => 343,  735 => 342,  731 => 340,  728 => 339,  722 => 336,  718 => 335,  715 => 334,  713 => 333,  708 => 331,  704 => 330,  701 => 329,  699 => 328,  696 => 327,  694 => 326,  690 => 325,  687 => 324,  683 => 323,  675 => 320,  660 => 318,  651 => 317,  634 => 316,  630 => 314,  626 => 313,  622 => 312,  619 => 311,  616 => 310,  614 => 309,  609 => 306,  603 => 303,  600 => 302,  594 => 299,  591 => 298,  589 => 297,  583 => 295,  581 => 294,  576 => 293,  573 => 291,  567 => 288,  563 => 287,  560 => 286,  557 => 285,  551 => 282,  545 => 281,  542 => 280,  536 => 277,  532 => 276,  529 => 275,  527 => 274,  525 => 273,  522 => 272,  520 => 271,  517 => 270,  512 => 268,  505 => 267,  502 => 266,  498 => 264,  493 => 262,  484 => 261,  482 => 260,  478 => 259,  471 => 258,  469 => 257,  466 => 256,  463 => 255,  460 => 253,  456 => 251,  453 => 249,  449 => 248,  443 => 245,  440 => 244,  434 => 239,  430 => 237,  426 => 235,  420 => 234,  417 => 233,  414 => 232,  411 => 231,  406 => 230,  404 => 229,  400 => 227,  379 => 225,  362 => 224,  358 => 222,  347 => 220,  329 => 218,  311 => 217,  304 => 212,  300 => 211,  287 => 201,  277 => 194,  247 => 167,  242 => 164,  233 => 158,  229 => 156,  227 => 155,  224 => 154,  215 => 148,  211 => 146,  209 => 145,  177 => 115,  169 => 113,  167 => 112,  162 => 110,  159 => 109,  157 => 108,  143 => 97,  140 => 96,  136 => 95,  55 => 16,  51 => 15,  46 => 11,  44 => 13,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Product/detail.twig", "/home/anotherworld/www/s-africa.wine/app/template/default/Product/detail.twig");
    }
}
