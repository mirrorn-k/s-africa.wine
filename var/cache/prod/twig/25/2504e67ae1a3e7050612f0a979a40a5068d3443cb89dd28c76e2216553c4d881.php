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

/* __string_template__2aa780671a2ce3f1d2e13c2d0201f8fe1b5760e793a324ea0b86c0aebef4d1d2 */
class __TwigTemplate_19a25a4a2a9cbc0b389be2b04630ffc5313183b572b7d8330502e8a3c7229e10 extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        // line 13
        $context["body_class"] = "product_page";
        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__2aa780671a2ce3f1d2e13c2d0201f8fe1b5760e793a324ea0b86c0aebef4d1d2", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "    <script>
        eccube.productsClassCategories = {
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["Product"]) {
            // line 19
            echo "            \"";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, false, 19), "js"), "html", null, true);
            echo "\": ";
            echo $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getClassCategoriesAsJson($context["Product"]);
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 19) == false)) {
                echo ", ";
            }
            // line 20
            echo "            ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "        };

        \$(function() {

            // 表示件数を変更
            \$('.disp-number').change(function() {
                var dispNumber = \$(this).val();
                \$('#disp_number').val(dispNumber);
                \$('#pageno').val(1);
                \$(\"#form1\").submit();
            });

            // 並び順を変更
            \$('.order-by').change(function() {
                var orderBy = \$(this).val();
                \$('#orderby').val(orderBy);
                \$('#pageno').val(1);
                \$(\"#form1\").submit();
            });

            \$('.add-cart').on('click', function(e) {
                var \$form = \$(this).parents('li').find('form');

                // 個数フォームのチェック
                var \$quantity = \$form.parent().find('.quantity');
                if (\$quantity.val() < 1) {
                    \$quantity[0].setCustomValidity('";
        // line 47
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("1以上で入力してください。"), "html", null, true);
        echo "');
                    setTimeout(function() {
                        loadingOverlay('hide');
                    }, 100);
                    return true;
                } else {
                    \$quantity[0].setCustomValidity('');
                }
                e.preventDefault();
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
                        url: '";
        // line 75
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("block_cart");
        echo "',
                        type: 'GET',
                        dataType: 'html'
                    }).done(function(html) {
                        \$('.ec-headerRole__cart').html(html);
                    });
                }).fail(function(data) {
                    alert('";
        // line 82
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

    // line 92
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 93
        echo "    ";
        if ((((((((((twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "id", [], "any", false, false, false, 93) == 67) || (twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "id", [], "any", false, false, false, 93) == 68)) || (twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "id", [], "any", false, false, false, 93) == 69)) || (twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "id", [], "any", false, false, false, 93) == 70)) || (twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "id", [], "any", false, false, false, 93) == 71)) || (twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "id", [], "any", false, false, false, 93) == 72)) || (twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "id", [], "any", false, false, false, 93) == 73)) || (twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "id", [], "any", false, false, false, 93) == 74)) || (twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "id", [], "any", false, false, false, 93) == 75))) {
            // line 94
            echo "    
    <style>
        .ec-layoutRole__main {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
        }

        #category_extension_b_header_contents,
        .ec-shelfRole {
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
        }

        @media (min-width: 768px) {

            #category_extension_b_header_contents,
            .ec-shelfRole {
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%;
            }
        }
        @media only screen and (min-width: 768px) {

            .ec-shelfGrid .ec-shelfGrid__item {
                padding: 0 16px;
                width: 50%;
            }
        }
        .ec-shelfGrid .ec-shelfGrid__item-image {
            border-bottom: none;
            padding-bottom: 10px;
            margin-bottom: 16px;
        }
    </style>

    ";
            // line 133
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["search_form"] ?? null), "category_id", [], "any", false, false, false, 133), "vars", [], "any", false, false, false, 133), "errors", [], "any", false, false, false, 133)) > 0)) {
                // line 134
                echo "        <div class=\"ec-searchnavRole\">
            <p class=\"errormsg text-danger\">";
                // line 135
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご指定のカテゴリは存在しません"), "html", null, true);
                echo "</p>
        </div>
    ";
            } else {
                // line 138
                echo "    
        ";
                // line 139
                if ((twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "totalItemCount", [], "any", false, false, false, 139) > 0)) {
                    // line 140
                    echo "            <div class=\"ec-shelfRole\" id=\"brandPage\">
                <p class=\"m_15\" style=\"border-bottom: 2px solid #966c26;\">";
                    // line 141
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "name", [], "any", false, false, false, 141), "html", null, true);
                    echo "に合うおすすめのワイン</p>
                <ul class=\"ec-shelfGrid m_25\">
                    ";
                    // line 143
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["Product"]) {
                        // line 144
                        echo "                        <li class=\"ec-shelfGrid__item\">
                            <a href=\"";
                        // line 145
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, false, 145)]), "html", null, true);
                        echo "\">
                                <p class=\"ec-shelfGrid__item-image\">
                                    <img src=\"";
                        // line 147
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct(twig_get_attribute($this->env, $this->source, $context["Product"], "main_list_image", [], "any", false, false, false, 147)), "save_image"), "html", null, true);
                        echo "\">
                                </p>
                                <p>";
                        // line 149
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "name", [], "any", false, false, false, 149), "html", null, true);
                        echo "</p>
                                ";
                        // line 150
                        if (twig_get_attribute($this->env, $this->source, $context["Product"], "description_list", [], "any", false, false, false, 150)) {
                            // line 151
                            echo "                                    <p>";
                            echo nl2br(twig_get_attribute($this->env, $this->source, $context["Product"], "description_list", [], "any", false, false, false, 151));
                            echo "</p>
                                ";
                        }
                        // line 153
                        echo "                                <p class=\"price02-default\"style=\"display:inline-block;\">
                                    ";
                        // line 154
                        if (twig_get_attribute($this->env, $this->source, $context["Product"], "hasProductClass", [], "any", false, false, false, 154)) {
                            // line 155
                            echo "                                        ";
                            if ((twig_get_attribute($this->env, $this->source, $context["Product"], "getPrice02Min", [], "any", false, false, false, 155) == twig_get_attribute($this->env, $this->source, $context["Product"], "getPrice02Max", [], "any", false, false, false, 155))) {
                                // line 156
                                echo "                                            ";
                                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["Product"], "getPrice02IncTaxMin", [], "any", false, false, false, 156)), "html", null, true);
                                echo "
                                        ";
                            } else {
                                // line 158
                                echo "                                            ";
                                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["Product"], "getPrice02IncTaxMin", [], "any", false, false, false, 158)), "html", null, true);
                                echo " ～ ";
                                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["Product"], "getPrice02IncTaxMax", [], "any", false, false, false, 158)), "html", null, true);
                                echo "
                                        ";
                            }
                            // line 160
                            echo "                                    ";
                        } else {
                            // line 161
                            echo "                                        ";
                            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["Product"], "getPrice02IncTaxMin", [], "any", false, false, false, 161)), "html", null, true);
                            echo "
                                    ";
                        }
                        // line 163
                        echo "                                </p>\t\t\t\t\t\t\t\t\t";
                        if (( !(null === twig_get_attribute($this->env, $this->source, $context["Product"], "discountRateMin", [], "any", false, false, false, 163)) && (twig_get_attribute($this->env, $this->source, $context["Product"], "discountRateMin", [], "any", false, false, false, 163) > 0))) {
                            // line 164
                            echo "\t\t\t\t\t\t\t\t\t";
                            // line 165
                            echo "\t\t\t\t\t\t\t\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, $context["Product"], "hasProductClass", [], "any", false, false, false, 165)) {
                                // line 166
                                if ((twig_get_attribute($this->env, $this->source, $context["Product"], "discountRateMin", [], "any", false, false, false, 166) == twig_get_attribute($this->env, $this->source, $context["Product"], "discountRateMax", [], "any", false, false, false, 166))) {
                                    // line 167
                                    echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"price_off ec-font-bold\">(";
                                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "discountRateMin", [], "any", false, false, false, 167), "html", null, true);
                                    echo "%OFF)</span>
\t\t\t\t\t\t\t\t\t\t\t";
                                } else {
                                    // line 169
                                    echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"price_off ec-font-bold show\">(";
                                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "discountRateMin", [], "any", false, false, false, 169), "html", null, true);
                                    echo "% ～ ";
                                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "discountRateMax", [], "any", false, false, false, 169), "html", null, true);
                                    echo "%OFF)</span>
\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 171
                                echo "\t\t\t\t\t\t\t\t\t\t";
                            } else {
                                // line 172
                                echo "<span class=\"price_off ec-font-bold\">(";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "discountRateMin", [], "any", false, false, false, 172), "html", null, true);
                                echo "%OFF)</span>
\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 174
                            echo "\t\t\t\t\t\t\t\t\t";
                        }
                        // line 175
                        echo "                            </a>

                        </li>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Product'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 179
                    echo "                </ul>
            </div>
        ";
                }
                // line 182
                echo "    ";
            }
        } else {
            // line 184
            echo "
    ";
            // line 185
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["search_form"] ?? null), "category_id", [], "any", false, false, false, 185), "vars", [], "any", false, false, false, 185), "errors", [], "any", false, false, false, 185)) > 0)) {
                // line 186
                echo "        <div class=\"ec-searchnavRole\">
            <p class=\"errormsg text-danger\">";
                // line 187
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご指定のカテゴリは存在しません"), "html", null, true);
                echo "</p>
        </div>
    ";
            } else {
                // line 190
                echo "    
        <div class=\"ec-searchnavRole\">
            <form name=\"form1\" id=\"form1\" method=\"get\" action=\"?\">
                ";
                // line 193
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["search_form"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 194
                    echo "                    <input type=\"hidden\" id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "vars", [], "any", false, false, false, 194), "id", [], "any", false, false, false, 194), "html", null, true);
                    echo "\"
                           name=\"";
                    // line 195
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "vars", [], "any", false, false, false, 195), "full_name", [], "any", false, false, false, 195), "html", null, true);
                    echo "\"
                           ";
                    // line 196
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "vars", [], "any", false, false, false, 196), "value", [], "any", false, false, false, 196))) {
                        echo "value=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "vars", [], "any", false, false, false, 196), "value", [], "any", false, false, false, 196), "html", null, true);
                        echo "\" ";
                    }
                    echo "/>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 198
                echo "            </form>
            <div class=\"ec-searchnavRole__topicpath\">
                <ol class=\"ec-topicpath\">
                    <li class=\"ec-topicpath__item\"><a href=\"";
                // line 201
                echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("全て"), "html", null, true);
                echo "</a>
                    </li>
                    ";
                // line 203
                if ( !(null === ($context["Category"] ?? null))) {
                    // line 204
                    echo "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "path", [], "any", false, false, false, 204));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["Path"]) {
                        // line 205
                        echo "                            <li class=\"ec-topicpath__divider\">|</li>
                            <li class=\"ec-topicpath__item";
                        // line 206
                        if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 206)) {
                            echo "--active";
                        }
                        echo "\"><a
                                        href=\"";
                        // line 207
                        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
                        echo "?category_id=";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Path"], "id", [], "any", false, false, false, 207), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Path"], "name", [], "any", false, false, false, 207), "html", null, true);
                        echo "</a>
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Path'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 210
                    echo "                    ";
                }
                // line 211
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["search_form"] ?? null), "vars", [], "any", false, false, false, 211), "value", [], "any", false, false, false, 211) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["search_form"] ?? null), "vars", [], "any", false, false, false, 211), "value", [], "any", false, false, false, 211), "name", [], "any", false, false, false, 211))) {
                    // line 212
                    echo "                        <li class=\"ec-topicpath__divider\">|</li>
                        <li class=\"ec-topicpath__item\">";
                    // line 213
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("「%name%」の検索結果", ["%name%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["search_form"] ?? null), "vars", [], "any", false, false, false, 213), "value", [], "any", false, false, false, 213), "name", [], "any", false, false, false, 213)]), "html", null, true);
                    echo "</li>
                    ";
                }
                // line 215
                echo "                </ol>
            </div>
            <div class=\"ec-searchnavRole__infos\">
                <div class=\"ec-searchnavRole__counter\">
                    ";
                // line 219
                if ((twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "totalItemCount", [], "any", false, false, false, 219) > 0)) {
                    // line 220
                    echo "                        ";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("<span class=\"ec-font-bold\">%count%件</span><span>の商品が見つかりました</span>", ["%count%" => twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "totalItemCount", [], "any", false, false, false, 220)]);
                    echo "
                    ";
                } else {
                    // line 222
                    echo "                        <span>";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お探しの商品は見つかりませんでした"), "html", null, true);
                    echo "</span>
                    ";
                }
                // line 224
                echo "                </div>
                ";
                // line 225
                if ((twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "totalItemCount", [], "any", false, false, false, 225) > 0)) {
                    // line 226
                    echo "                    <div class=\"ec-searchnavRole__actions\">
                        <div class=\"ec-select\">
                            ";
                    // line 228
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["disp_number_form"] ?? null), 'widget', ["id" => "", "attr" => ["class" => "disp-number"]]);
                    echo "
                            ";
                    // line 229
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["order_by_form"] ?? null), 'widget', ["id" => "", "attr" => ["class" => "order-by"]]);
                    echo "
                        </div>
                    </div>
                ";
                }
                // line 233
                echo "            </div>
        </div>
        ";
                // line 235
                if ((twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "totalItemCount", [], "any", false, false, false, 235) > 0)) {
                    // line 236
                    echo "            <div class=\"ec-shelfRole\">
                <ul class=\"ec-shelfGrid\">
                    ";
                    // line 238
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? null));
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
                    foreach ($context['_seq'] as $context["_key"] => $context["Product"]) {
                        // line 239
                        echo "                        <li class=\"ec-shelfGrid__item\">
                            <a href=\"";
                        // line 240
                        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, false, 240)]), "html", null, true);
                        echo "\">
                                <p class=\"ec-shelfGrid__item-image\">
                                    <img src=\"";
                        // line 242
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct(twig_get_attribute($this->env, $this->source, $context["Product"], "main_list_image", [], "any", false, false, false, 242)), "save_image"), "html", null, true);
                        echo "\">
                                </p>
                                <p>";
                        // line 244
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "name", [], "any", false, false, false, 244), "html", null, true);
                        echo "</p>
                                ";
                        // line 245
                        if (twig_get_attribute($this->env, $this->source, $context["Product"], "description_list", [], "any", false, false, false, 245)) {
                            // line 246
                            echo "                                    <p>";
                            echo nl2br(twig_get_attribute($this->env, $this->source, $context["Product"], "description_list", [], "any", false, false, false, 246));
                            echo "</p>
                                ";
                        }
                        // line 248
                        echo "                                <p class=\"price02-default\">
                                    ";
                        // line 249
                        if (twig_get_attribute($this->env, $this->source, $context["Product"], "hasProductClass", [], "any", false, false, false, 249)) {
                            // line 250
                            echo "                                        ";
                            if ((twig_get_attribute($this->env, $this->source, $context["Product"], "getPrice02Min", [], "any", false, false, false, 250) == twig_get_attribute($this->env, $this->source, $context["Product"], "getPrice02Max", [], "any", false, false, false, 250))) {
                                // line 251
                                echo "                                            ";
                                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["Product"], "getPrice02IncTaxMin", [], "any", false, false, false, 251)), "html", null, true);
                                echo "
                                        ";
                            } else {
                                // line 253
                                echo "                                            ";
                                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["Product"], "getPrice02IncTaxMin", [], "any", false, false, false, 253)), "html", null, true);
                                echo " ～ ";
                                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["Product"], "getPrice02IncTaxMax", [], "any", false, false, false, 253)), "html", null, true);
                                echo "
                                        ";
                            }
                            // line 255
                            echo "                                    ";
                        } else {
                            // line 256
                            echo "                                        ";
                            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["Product"], "getPrice02IncTaxMin", [], "any", false, false, false, 256)), "html", null, true);
                            echo "
                                    ";
                        }
                        // line 258
                        echo "                                </p>\t\t\t\t\t\t\t\t\t";
                        if (( !(null === twig_get_attribute($this->env, $this->source, $context["Product"], "discountRateMin", [], "any", false, false, false, 258)) && (twig_get_attribute($this->env, $this->source, $context["Product"], "discountRateMin", [], "any", false, false, false, 258) > 0))) {
                            // line 259
                            echo "\t\t\t\t\t\t\t\t\t";
                            // line 260
                            echo "\t\t\t\t\t\t\t\t\t\t";
                            if (twig_get_attribute($this->env, $this->source, $context["Product"], "hasProductClass", [], "any", false, false, false, 260)) {
                                // line 261
                                if ((twig_get_attribute($this->env, $this->source, $context["Product"], "discountRateMin", [], "any", false, false, false, 261) == twig_get_attribute($this->env, $this->source, $context["Product"], "discountRateMax", [], "any", false, false, false, 261))) {
                                    // line 262
                                    echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"price_off ec-font-bold\">(";
                                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "discountRateMin", [], "any", false, false, false, 262), "html", null, true);
                                    echo "%OFF)</span>
\t\t\t\t\t\t\t\t\t\t\t";
                                } else {
                                    // line 264
                                    echo "\t\t\t\t\t\t\t\t\t\t\t<span class=\"price_off ec-font-bold show\">(";
                                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "discountRateMin", [], "any", false, false, false, 264), "html", null, true);
                                    echo "% ～ ";
                                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "discountRateMax", [], "any", false, false, false, 264), "html", null, true);
                                    echo "%OFF)</span>
\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                // line 266
                                echo "\t\t\t\t\t\t\t\t\t\t";
                            } else {
                                // line 267
                                echo "<span class=\"price_off ec-font-bold\">(";
                                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "discountRateMin", [], "any", false, false, false, 267), "html", null, true);
                                echo "%OFF)</span>
\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 269
                            echo "\t\t\t\t\t\t\t\t\t";
                        }
                        // line 270
                        echo "                            </a>
                            
                            ";
                        // line 272
                        echo twig_include($this->env, $context, "Product/customer_price_list.twig");
                        echo "

                            ";
                        // line 274
                        if (twig_get_attribute($this->env, $this->source, $context["Product"], "stock_find", [], "any", false, false, false, 274)) {
                            // line 275
                            echo "                                ";
                            $context["form"] = (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["forms"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, false, 275)] ?? null) : null);
                            // line 276
                            echo "                                <form name=\"form";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, false, 276), "html", null, true);
                            echo "\" id=\"productForm";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, false, 276), "html", null, true);
                            echo "\" action=\"";
                            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_add_cart", ["id" => twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, false, 276)]), "html", null, true);
                            echo "\" method=\"post\">
                                    <div class=\"ec-productRole__actions\">
                                        ";
                            // line 278
                            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id1", [], "any", true, true, false, 278)) {
                                // line 279
                                echo "                                            <div class=\"ec-select\">
                                                ";
                                // line 280
                                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id1", [], "any", false, false, false, 280), 'widget');
                                echo "
                                                ";
                                // line 281
                                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id1", [], "any", false, false, false, 281), 'errors');
                                echo "
                                            </div>
                                            ";
                                // line 283
                                if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id2", [], "any", true, true, false, 283)) {
                                    // line 284
                                    echo "                                                <div class=\"ec-select\">
                                                    ";
                                    // line 285
                                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id2", [], "any", false, false, false, 285), 'widget');
                                    echo "
                                                    ";
                                    // line 286
                                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id2", [], "any", false, false, false, 286), 'errors');
                                    echo "
                                                </div>
                                            ";
                                }
                                // line 289
                                echo "                                        ";
                            }
                            // line 290
                            echo "                                        <div class=\"ec-numberInput\"><span>";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("数量"), "html", null, true);
                            echo "</span>
                                            ";
                            // line 291
                            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "quantity", [], "any", false, false, false, 291), 'widget', ["attr" => ["class" => "quantity"]]);
                            echo "
                                            ";
                            // line 292
                            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "quantity", [], "any", false, false, false, 292), 'errors');
                            echo "
                                        </div>
                                    </div>
                                    ";
                            // line 295
                            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'rest');
                            echo "
                                </form>
                                <div class=\"ec-productRole__btn\">
                                    <button type=\"submit\" class=\"ec-blockBtn--action add-cart\" data-cartid=\"";
                            // line 298
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, false, 298), "html", null, true);
                            echo "\" form=\"productForm";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, false, 298), "html", null, true);
                            echo "\">
                                        ";
                            // line 299
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("カートに入れる"), "html", null, true);
                            echo "
                                    </button>
                                </div>
                            ";
                        } else {
                            // line 303
                            echo "                                <div class=\"ec-productRole__btn\">
                                    <button type=\"button\" class=\"ec-blockBtn--action\" disabled=\"disabled\">
                                        ";
                            // line 305
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("只今品切れ中です"), "html", null, true);
                            echo "
                                    </button>
                                </div>
                            ";
                        }
                        // line 309
                        echo "                        </li>
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
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Product'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 311
                    echo "                </ul>
            </div>
            <div class=\"ec-modal\">
                <input type=\"checkbox\" id=\"ec-modal-checkbox\" class=\"checkbox\">
                <div class=\"ec-modal-overlay\">
                    <label for=\"ec-modal-checkbox\" class=\"ec-modal-overlay-close\"></label>
                    <div class=\"ec-modal-wrap\">
                        <label for=\"ec-modal-checkbox\" class=\"ec-modal-close\"><span class=\"ec-icon\"><img src=\"";
                    // line 318
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/cross-dark.svg"), "html", null, true);
                    echo "\" alt=\"\"/></span></label>
                        <div id=\"ec-modal-header\" class=\"text-center\">";
                    // line 319
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("カートに追加しました。"), "html", null, true);
                    echo "</div>
                        <div class=\"ec-modal-box\">
                            <div class=\"ec-role\">
                                <label for=\"ec-modal-checkbox\" class=\"ec-inlineBtn--cancel\">";
                    // line 322
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お買い物を続ける"), "html", null, true);
                    echo "</label>
                                <a href=\"";
                    // line 323
                    echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("cart");
                    echo "\" class=\"ec-inlineBtn--action\">";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("カートへ進む"), "html", null, true);
                    echo "</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"ec-pagerRole\">
                ";
                    // line 330
                    $this->loadTemplate("pager.twig", "__string_template__2aa780671a2ce3f1d2e13c2d0201f8fe1b5760e793a324ea0b86c0aebef4d1d2", 330)->display(twig_array_merge($context, ["pages" => twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "paginationData", [], "any", false, false, false, 330)]));
                    // line 331
                    echo "            </div>
        ";
                }
                // line 333
                echo "    ";
            }
        }
    }

    public function getTemplateName()
    {
        return "__string_template__2aa780671a2ce3f1d2e13c2d0201f8fe1b5760e793a324ea0b86c0aebef4d1d2";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  801 => 333,  797 => 331,  795 => 330,  783 => 323,  779 => 322,  773 => 319,  769 => 318,  760 => 311,  745 => 309,  738 => 305,  734 => 303,  727 => 299,  721 => 298,  715 => 295,  709 => 292,  705 => 291,  700 => 290,  697 => 289,  691 => 286,  687 => 285,  684 => 284,  682 => 283,  677 => 281,  673 => 280,  670 => 279,  668 => 278,  658 => 276,  655 => 275,  653 => 274,  648 => 272,  644 => 270,  641 => 269,  635 => 267,  632 => 266,  624 => 264,  618 => 262,  616 => 261,  613 => 260,  611 => 259,  608 => 258,  602 => 256,  599 => 255,  591 => 253,  585 => 251,  582 => 250,  580 => 249,  577 => 248,  571 => 246,  569 => 245,  565 => 244,  560 => 242,  555 => 240,  552 => 239,  535 => 238,  531 => 236,  529 => 235,  525 => 233,  518 => 229,  514 => 228,  510 => 226,  508 => 225,  505 => 224,  499 => 222,  493 => 220,  491 => 219,  485 => 215,  480 => 213,  477 => 212,  474 => 211,  471 => 210,  450 => 207,  444 => 206,  441 => 205,  423 => 204,  421 => 203,  414 => 201,  409 => 198,  397 => 196,  393 => 195,  388 => 194,  384 => 193,  379 => 190,  373 => 187,  370 => 186,  368 => 185,  365 => 184,  361 => 182,  356 => 179,  347 => 175,  344 => 174,  338 => 172,  335 => 171,  327 => 169,  321 => 167,  319 => 166,  316 => 165,  314 => 164,  311 => 163,  305 => 161,  302 => 160,  294 => 158,  288 => 156,  285 => 155,  283 => 154,  280 => 153,  274 => 151,  272 => 150,  268 => 149,  263 => 147,  258 => 145,  255 => 144,  251 => 143,  246 => 141,  243 => 140,  241 => 139,  238 => 138,  232 => 135,  229 => 134,  227 => 133,  186 => 94,  183 => 93,  179 => 92,  166 => 82,  156 => 75,  125 => 47,  97 => 21,  83 => 20,  75 => 19,  58 => 18,  54 => 16,  50 => 15,  45 => 11,  43 => 13,  36 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__2aa780671a2ce3f1d2e13c2d0201f8fe1b5760e793a324ea0b86c0aebef4d1d2", "");
    }
}
