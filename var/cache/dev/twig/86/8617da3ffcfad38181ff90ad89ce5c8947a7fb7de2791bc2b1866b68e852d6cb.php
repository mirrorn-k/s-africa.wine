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

/* __string_template__b1c38e493ec70f2243af4e12a77b4a556c062d0390fa75a5802aff82fb3c7766 */
class __TwigTemplate_0b9dc2491a39dd694a67d03a9a397bc92b3232df5d13c351eb23a3b5d66e5e5f extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__b1c38e493ec70f2243af4e12a77b4a556c062d0390fa75a5802aff82fb3c7766"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__b1c38e493ec70f2243af4e12a77b4a556c062d0390fa75a5802aff82fb3c7766"));

        // line 13
        $context["body_class"] = "product_page";
        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__b1c38e493ec70f2243af4e12a77b4a556c062d0390fa75a5802aff82fb3c7766", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 15
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        // line 16
        echo "    <script>
        eccube.productsClassCategories = {
            ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 18, $this->source); })()));
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
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("block_cart");
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
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 92
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 93
        echo "    ";
        if ((((((((((twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 93, $this->source); })()), "id", [], "any", false, false, false, 93) == 67) || (twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 93, $this->source); })()), "id", [], "any", false, false, false, 93) == 68)) || (twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 93, $this->source); })()), "id", [], "any", false, false, false, 93) == 69)) || (twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 93, $this->source); })()), "id", [], "any", false, false, false, 93) == 70)) || (twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 93, $this->source); })()), "id", [], "any", false, false, false, 93) == 71)) || (twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 93, $this->source); })()), "id", [], "any", false, false, false, 93) == 72)) || (twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 93, $this->source); })()), "id", [], "any", false, false, false, 93) == 73)) || (twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 93, $this->source); })()), "id", [], "any", false, false, false, 93) == 74)) || (twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 93, $this->source); })()), "id", [], "any", false, false, false, 93) == 75))) {
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
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["search_form"]) || array_key_exists("search_form", $context) ? $context["search_form"] : (function () { throw new RuntimeError('Variable "search_form" does not exist.', 133, $this->source); })()), "category_id", [], "any", false, false, false, 133), "vars", [], "any", false, false, false, 133), "errors", [], "any", false, false, false, 133)) > 0)) {
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
                if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 139, $this->source); })()), "totalItemCount", [], "any", false, false, false, 139) > 0)) {
                    // line 140
                    echo "            <div class=\"ec-shelfRole\" id=\"brandPage\">
                <p class=\"m_15\" style=\"border-bottom: 2px solid #966c26;\">";
                    // line 141
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 141, $this->source); })()), "name", [], "any", false, false, false, 141), "html", null, true);
                    echo "に合うおすすめのワイン</p>
                <ul class=\"ec-shelfGrid m_25\">
                    ";
                    // line 143
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 143, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["Product"]) {
                        // line 144
                        echo "                        <li class=\"ec-shelfGrid__item\">
                            <a href=\"";
                        // line 145
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, false, 145)]), "html", null, true);
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
                                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["Product"], "getPrice02Min", [], "any", false, false, false, 156)), "html", null, true);
                                echo "
                                        ";
                            } else {
                                // line 158
                                echo "                                            ";
                                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["Product"], "getPrice02Min", [], "any", false, false, false, 158)), "html", null, true);
                                echo " ～ ";
                                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["Product"], "getPrice02Max", [], "any", false, false, false, 158)), "html", null, true);
                                echo "
                                        ";
                            }
                            // line 160
                            echo "                                    ";
                        } else {
                            // line 161
                            echo "                                        ";
                            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["Product"], "getPrice02Min", [], "any", false, false, false, 161)), "html", null, true);
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
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["search_form"]) || array_key_exists("search_form", $context) ? $context["search_form"] : (function () { throw new RuntimeError('Variable "search_form" does not exist.', 185, $this->source); })()), "category_id", [], "any", false, false, false, 185), "vars", [], "any", false, false, false, 185), "errors", [], "any", false, false, false, 185)) > 0)) {
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
                $context['_seq'] = twig_ensure_traversable((isset($context["search_form"]) || array_key_exists("search_form", $context) ? $context["search_form"] : (function () { throw new RuntimeError('Variable "search_form" does not exist.', 193, $this->source); })()));
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
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("全て"), "html", null, true);
                echo "</a>
                    </li>
                    ";
                // line 203
                if ( !(null === (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 203, $this->source); })()))) {
                    // line 204
                    echo "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 204, $this->source); })()), "path", [], "any", false, false, false, 204));
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
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
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
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["search_form"]) || array_key_exists("search_form", $context) ? $context["search_form"] : (function () { throw new RuntimeError('Variable "search_form" does not exist.', 211, $this->source); })()), "vars", [], "any", false, false, false, 211), "value", [], "any", false, false, false, 211) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["search_form"]) || array_key_exists("search_form", $context) ? $context["search_form"] : (function () { throw new RuntimeError('Variable "search_form" does not exist.', 211, $this->source); })()), "vars", [], "any", false, false, false, 211), "value", [], "any", false, false, false, 211), "name", [], "any", false, false, false, 211))) {
                    // line 212
                    echo "                        <li class=\"ec-topicpath__divider\">|</li>
                        <li class=\"ec-topicpath__item\">";
                    // line 213
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("「%name%」の検索結果", ["%name%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["search_form"]) || array_key_exists("search_form", $context) ? $context["search_form"] : (function () { throw new RuntimeError('Variable "search_form" does not exist.', 213, $this->source); })()), "vars", [], "any", false, false, false, 213), "value", [], "any", false, false, false, 213), "name", [], "any", false, false, false, 213)]), "html", null, true);
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
                if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 219, $this->source); })()), "totalItemCount", [], "any", false, false, false, 219) > 0)) {
                    // line 220
                    echo "                        ";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("<span class=\"ec-font-bold\">%count%件</span><span>の商品が見つかりました</span>", ["%count%" => twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 220, $this->source); })()), "totalItemCount", [], "any", false, false, false, 220)]);
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
                if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 225, $this->source); })()), "totalItemCount", [], "any", false, false, false, 225) > 0)) {
                    // line 226
                    echo "                    <div class=\"ec-searchnavRole__actions\">
                        <div class=\"ec-select\">
                            ";
                    // line 228
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["disp_number_form"]) || array_key_exists("disp_number_form", $context) ? $context["disp_number_form"] : (function () { throw new RuntimeError('Variable "disp_number_form" does not exist.', 228, $this->source); })()), 'widget', ["id" => "", "attr" => ["class" => "disp-number"]]);
                    echo "
                            ";
                    // line 229
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["order_by_form"]) || array_key_exists("order_by_form", $context) ? $context["order_by_form"] : (function () { throw new RuntimeError('Variable "order_by_form" does not exist.', 229, $this->source); })()), 'widget', ["id" => "", "attr" => ["class" => "order-by"]]);
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
                if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 235, $this->source); })()), "totalItemCount", [], "any", false, false, false, 235) > 0)) {
                    // line 236
                    echo "            <div class=\"ec-shelfRole\">
                <ul class=\"ec-shelfGrid\">
                    ";
                    // line 238
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 238, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["Product"]) {
                        // line 239
                        echo "                        <li class=\"ec-shelfGrid__item\">
                            <a href=\"";
                        // line 240
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, false, 240)]), "html", null, true);
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
                                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["Product"], "getPrice02Min", [], "any", false, false, false, 251)), "html", null, true);
                                echo "
                                        ";
                            } else {
                                // line 253
                                echo "                                            ";
                                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["Product"], "getPrice02Min", [], "any", false, false, false, 253)), "html", null, true);
                                echo " ～ ";
                                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["Product"], "getPrice02Max", [], "any", false, false, false, 253)), "html", null, true);
                                echo "
                                        ";
                            }
                            // line 255
                            echo "                                    ";
                        } else {
                            // line 256
                            echo "                                        ";
                            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["Product"], "getPrice02Min", [], "any", false, false, false, 256)), "html", null, true);
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
                        if (twig_get_attribute($this->env, $this->source, $context["Product"], "stock_find", [], "any", false, false, false, 272)) {
                            // line 273
                            echo "                                ";
                            $context["form"] = twig_get_attribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 273, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, false, 273), [], "array", false, false, false, 273);
                            // line 274
                            echo "                                <form name=\"form";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, false, 274), "html", null, true);
                            echo "\" id=\"productForm";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, false, 274), "html", null, true);
                            echo "\" action=\"";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_add_cart", ["id" => twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, false, 274)]), "html", null, true);
                            echo "\" method=\"post\">
                                    <div class=\"ec-productRole__actions\">
                                        ";
                            // line 276
                            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id1", [], "any", true, true, false, 276)) {
                                // line 277
                                echo "                                            <div class=\"ec-select\">
                                                ";
                                // line 278
                                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 278, $this->source); })()), "classcategory_id1", [], "any", false, false, false, 278), 'widget');
                                echo "
                                                ";
                                // line 279
                                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 279, $this->source); })()), "classcategory_id1", [], "any", false, false, false, 279), 'errors');
                                echo "
                                            </div>
                                            ";
                                // line 281
                                if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id2", [], "any", true, true, false, 281)) {
                                    // line 282
                                    echo "                                                <div class=\"ec-select\">
                                                    ";
                                    // line 283
                                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 283, $this->source); })()), "classcategory_id2", [], "any", false, false, false, 283), 'widget');
                                    echo "
                                                    ";
                                    // line 284
                                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 284, $this->source); })()), "classcategory_id2", [], "any", false, false, false, 284), 'errors');
                                    echo "
                                                </div>
                                            ";
                                }
                                // line 287
                                echo "                                        ";
                            }
                            // line 288
                            echo "                                        <div class=\"ec-numberInput\"><span>";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("数量"), "html", null, true);
                            echo "</span>
                                            ";
                            // line 289
                            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 289, $this->source); })()), "quantity", [], "any", false, false, false, 289), 'widget', ["attr" => ["class" => "quantity"]]);
                            echo "
                                            ";
                            // line 290
                            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 290, $this->source); })()), "quantity", [], "any", false, false, false, 290), 'errors');
                            echo "
                                        </div>
                                    </div>
                                    ";
                            // line 293
                            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 293, $this->source); })()), 'rest');
                            echo "
                                </form>
                                <div class=\"ec-productRole__btn\">
                                    <button type=\"submit\" class=\"ec-blockBtn--action add-cart\" data-cartid=\"";
                            // line 296
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, false, 296), "html", null, true);
                            echo "\" form=\"productForm";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, false, 296), "html", null, true);
                            echo "\">
                                        ";
                            // line 297
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("カートに入れる"), "html", null, true);
                            echo "
                                    </button>
                                </div>
                            ";
                        } else {
                            // line 301
                            echo "                                <div class=\"ec-productRole__btn\">
                                    <button type=\"button\" class=\"ec-blockBtn--action\" disabled=\"disabled\">
                                        ";
                            // line 303
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ただいま品切れ中です。"), "html", null, true);
                            echo "
                                    </button>
                                </div>
                            ";
                        }
                        // line 307
                        echo "                        </li>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Product'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 309
                    echo "                </ul>
            </div>
            <div class=\"ec-modal\">
                <input type=\"checkbox\" id=\"ec-modal-checkbox\" class=\"checkbox\">
                <div class=\"ec-modal-overlay\">
                    <label for=\"ec-modal-checkbox\" class=\"ec-modal-overlay-close\"></label>
                    <div class=\"ec-modal-wrap\">
                        <label for=\"ec-modal-checkbox\" class=\"ec-modal-close\"><span class=\"ec-icon\"><img src=\"";
                    // line 316
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/cross-dark.svg"), "html", null, true);
                    echo "\" alt=\"\"/></span></label>
                        <div id=\"ec-modal-header\" class=\"text-center\">";
                    // line 317
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("カートに追加しました。"), "html", null, true);
                    echo "</div>
                        <div class=\"ec-modal-box\">
                            <div class=\"ec-role\">
                                <label for=\"ec-modal-checkbox\" class=\"ec-inlineBtn--cancel\">";
                    // line 320
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お買い物を続ける"), "html", null, true);
                    echo "</label>
                                <a href=\"";
                    // line 321
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("cart");
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
                    // line 328
                    $this->loadTemplate("pager.twig", "__string_template__b1c38e493ec70f2243af4e12a77b4a556c062d0390fa75a5802aff82fb3c7766", 328)->display(twig_array_merge($context, ["pages" => twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 328, $this->source); })()), "paginationData", [], "any", false, false, false, 328)]));
                    // line 329
                    echo "            </div>
        ";
                }
                // line 331
                echo "    ";
            }
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__b1c38e493ec70f2243af4e12a77b4a556c062d0390fa75a5802aff82fb3c7766";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  805 => 331,  801 => 329,  799 => 328,  787 => 321,  783 => 320,  777 => 317,  773 => 316,  764 => 309,  757 => 307,  750 => 303,  746 => 301,  739 => 297,  733 => 296,  727 => 293,  721 => 290,  717 => 289,  712 => 288,  709 => 287,  703 => 284,  699 => 283,  696 => 282,  694 => 281,  689 => 279,  685 => 278,  682 => 277,  680 => 276,  670 => 274,  667 => 273,  665 => 272,  661 => 270,  658 => 269,  652 => 267,  649 => 266,  641 => 264,  635 => 262,  633 => 261,  630 => 260,  628 => 259,  625 => 258,  619 => 256,  616 => 255,  608 => 253,  602 => 251,  599 => 250,  597 => 249,  594 => 248,  588 => 246,  586 => 245,  582 => 244,  577 => 242,  572 => 240,  569 => 239,  565 => 238,  561 => 236,  559 => 235,  555 => 233,  548 => 229,  544 => 228,  540 => 226,  538 => 225,  535 => 224,  529 => 222,  523 => 220,  521 => 219,  515 => 215,  510 => 213,  507 => 212,  504 => 211,  501 => 210,  480 => 207,  474 => 206,  471 => 205,  453 => 204,  451 => 203,  444 => 201,  439 => 198,  427 => 196,  423 => 195,  418 => 194,  414 => 193,  409 => 190,  403 => 187,  400 => 186,  398 => 185,  395 => 184,  391 => 182,  386 => 179,  377 => 175,  374 => 174,  368 => 172,  365 => 171,  357 => 169,  351 => 167,  349 => 166,  346 => 165,  344 => 164,  341 => 163,  335 => 161,  332 => 160,  324 => 158,  318 => 156,  315 => 155,  313 => 154,  310 => 153,  304 => 151,  302 => 150,  298 => 149,  293 => 147,  288 => 145,  285 => 144,  281 => 143,  276 => 141,  273 => 140,  271 => 139,  268 => 138,  262 => 135,  259 => 134,  257 => 133,  216 => 94,  213 => 93,  203 => 92,  184 => 82,  174 => 75,  143 => 47,  115 => 21,  101 => 20,  93 => 19,  76 => 18,  72 => 16,  62 => 15,  51 => 11,  49 => 13,  36 => 11,);
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

{% block javascript %}
    <script>
        eccube.productsClassCategories = {
            {% for Product in pagination %}
            \"{{ Product.id|escape('js') }}\": {{ class_categories_as_json(Product)|raw }}{% if loop.last == false %}, {% endif %}
            {% endfor %}
        };

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
                    \$quantity[0].setCustomValidity('{{ '1以上で入力してください。'|trans }}');
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
                        url: '{{ url('block_cart') }}',
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
    {% if Category.id == 67 or Category.id == 68 or Category.id == 69 or Category.id == 70 or Category.id == 71 or Category.id == 72 or Category.id == 73 or Category.id == 74 or Category.id == 75 %}
    
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

    {% if search_form.category_id.vars.errors|length > 0 %}
        <div class=\"ec-searchnavRole\">
            <p class=\"errormsg text-danger\">{{ 'ご指定のカテゴリは存在しません'|trans }}</p>
        </div>
    {% else %}
    
        {% if pagination.totalItemCount > 0 %}
            <div class=\"ec-shelfRole\" id=\"brandPage\">
                <p class=\"m_15\" style=\"border-bottom: 2px solid #966c26;\">{{ Category.name }}に合うおすすめのワイン</p>
                <ul class=\"ec-shelfGrid m_25\">
                    {% for Product in pagination %}
                        <li class=\"ec-shelfGrid__item\">
                            <a href=\"{{ url('product_detail', {'id': Product.id}) }}\">
                                <p class=\"ec-shelfGrid__item-image\">
                                    <img src=\"{{ asset(Product.main_list_image|no_image_product, 'save_image') }}\">
                                </p>
                                <p>{{ Product.name }}</p>
                                {% if Product.description_list %}
                                    <p>{{ Product.description_list|raw|nl2br }}</p>
                                {% endif %}
                                <p class=\"price02-default\"style=\"display:inline-block;\">
                                    {% if Product.hasProductClass %}
                                        {% if Product.getPrice02Min == Product.getPrice02Max %}
                                            {{ Product.getPrice02Min|price }}
                                        {% else %}
                                            {{ Product.getPrice02Min|price }} ～ {{ Product.getPrice02Max|price }}
                                        {% endif %}
                                    {% else %}
                                        {{ Product.getPrice02Min|price }}
                                    {% endif %}
                                </p>\t\t\t\t\t\t\t\t\t{% if Product.discountRateMin is not null and Product.discountRateMin > 0%}
\t\t\t\t\t\t\t\t\t{# 割引率0以下or100以上の場合表示しない #}
\t\t\t\t\t\t\t\t\t\t{% if Product.hasProductClass -%}
\t\t\t\t\t\t\t\t\t\t\t{% if Product.discountRateMin == Product.discountRateMax %}
\t\t\t\t\t\t\t\t\t\t\t<span class=\"price_off ec-font-bold\">({{ Product.discountRateMin }}%OFF)</span>
\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<span class=\"price_off ec-font-bold show\">({{ Product.discountRateMin }}% ～ {{ Product.discountRateMax }}%OFF)</span>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t{% else -%}
\t\t\t\t\t\t\t\t\t\t\t<span class=\"price_off ec-font-bold\">({{ Product.discountRateMin }}%OFF)</span>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t{% endif %}
                            </a>

                        </li>
                    {% endfor %}
                </ul>
            </div>
        {% endif %}
    {% endif %}
{% else %}

    {% if search_form.category_id.vars.errors|length > 0 %}
        <div class=\"ec-searchnavRole\">
            <p class=\"errormsg text-danger\">{{ 'ご指定のカテゴリは存在しません'|trans }}</p>
        </div>
    {% else %}
    
        <div class=\"ec-searchnavRole\">
            <form name=\"form1\" id=\"form1\" method=\"get\" action=\"?\">
                {% for item in search_form %}
                    <input type=\"hidden\" id=\"{{ item.vars.id }}\"
                           name=\"{{ item.vars.full_name }}\"
                           {% if item.vars.value is not empty %}value=\"{{ item.vars.value }}\" {% endif %}/>
                {% endfor %}
            </form>
            <div class=\"ec-searchnavRole__topicpath\">
                <ol class=\"ec-topicpath\">
                    <li class=\"ec-topicpath__item\"><a href=\"{{ url('product_list') }}\">{{ '全て'|trans }}</a>
                    </li>
                    {% if Category is not null %}
                        {% for Path in Category.path %}
                            <li class=\"ec-topicpath__divider\">|</li>
                            <li class=\"ec-topicpath__item{% if loop.last %}--active{% endif %}\"><a
                                        href=\"{{ url('product_list') }}?category_id={{ Path.id }}\">{{ Path.name }}</a>
                            </li>
                        {% endfor %}
                    {% endif %}
                    {% if search_form.vars.value and search_form.vars.value.name %}
                        <li class=\"ec-topicpath__divider\">|</li>
                        <li class=\"ec-topicpath__item\">{{ '「%name%」の検索結果'|trans({ '%name%': search_form.vars.value.name }) }}</li>
                    {% endif %}
                </ol>
            </div>
            <div class=\"ec-searchnavRole__infos\">
                <div class=\"ec-searchnavRole__counter\">
                    {% if pagination.totalItemCount > 0 %}
                        {{ '<span class=\"ec-font-bold\">%count%件</span><span>の商品が見つかりました</span>'|trans({ '%count%': pagination.totalItemCount })|raw }}
                    {% else %}
                        <span>{{ 'お探しの商品は見つかりませんでした'|trans }}</span>
                    {% endif %}
                </div>
                {% if pagination.totalItemCount > 0 %}
                    <div class=\"ec-searchnavRole__actions\">
                        <div class=\"ec-select\">
                            {{ form_widget(disp_number_form, {'id': '', 'attr': {'class': 'disp-number'}}) }}
                            {{ form_widget(order_by_form, {'id': '', 'attr': {'class': 'order-by'}}) }}
                        </div>
                    </div>
                {% endif %}
            </div>
        </div>
        {% if pagination.totalItemCount > 0 %}
            <div class=\"ec-shelfRole\">
                <ul class=\"ec-shelfGrid\">
                    {% for Product in pagination %}
                        <li class=\"ec-shelfGrid__item\">
                            <a href=\"{{ url('product_detail', {'id': Product.id}) }}\">
                                <p class=\"ec-shelfGrid__item-image\">
                                    <img src=\"{{ asset(Product.main_list_image|no_image_product, 'save_image') }}\">
                                </p>
                                <p>{{ Product.name }}</p>
                                {% if Product.description_list %}
                                    <p>{{ Product.description_list|raw|nl2br }}</p>
                                {% endif %}
                                <p class=\"price02-default\">
                                    {% if Product.hasProductClass %}
                                        {% if Product.getPrice02Min == Product.getPrice02Max %}
                                            {{ Product.getPrice02Min|price }}
                                        {% else %}
                                            {{ Product.getPrice02Min|price }} ～ {{ Product.getPrice02Max|price }}
                                        {% endif %}
                                    {% else %}
                                        {{ Product.getPrice02Min|price }}
                                    {% endif %}
                                </p>\t\t\t\t\t\t\t\t\t{% if Product.discountRateMin is not null and Product.discountRateMin > 0%}
\t\t\t\t\t\t\t\t\t{# 割引率0以下or100以上の場合表示しない #}
\t\t\t\t\t\t\t\t\t\t{% if Product.hasProductClass -%}
\t\t\t\t\t\t\t\t\t\t\t{% if Product.discountRateMin == Product.discountRateMax %}
\t\t\t\t\t\t\t\t\t\t\t<span class=\"price_off ec-font-bold\">({{ Product.discountRateMin }}%OFF)</span>
\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t<span class=\"price_off ec-font-bold show\">({{ Product.discountRateMin }}% ～ {{ Product.discountRateMax }}%OFF)</span>
\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t{% else -%}
\t\t\t\t\t\t\t\t\t\t\t<span class=\"price_off ec-font-bold\">({{ Product.discountRateMin }}%OFF)</span>
\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t{% endif %}
                            </a>

                            {% if Product.stock_find %}
                                {% set form = forms[Product.id] %}
                                <form name=\"form{{ Product.id }}\" id=\"productForm{{ Product.id }}\" action=\"{{ url('product_add_cart', {id:Product.id}) }}\" method=\"post\">
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
                                        <div class=\"ec-numberInput\"><span>{{ '数量'|trans }}</span>
                                            {{ form_widget(form.quantity, {'attr': {'class': 'quantity'}}) }}
                                            {{ form_errors(form.quantity) }}
                                        </div>
                                    </div>
                                    {{ form_rest(form) }}
                                </form>
                                <div class=\"ec-productRole__btn\">
                                    <button type=\"submit\" class=\"ec-blockBtn--action add-cart\" data-cartid=\"{{ Product.id }}\" form=\"productForm{{ Product.id }}\">
                                        {{ 'カートに入れる'|trans }}
                                    </button>
                                </div>
                            {% else %}
                                <div class=\"ec-productRole__btn\">
                                    <button type=\"button\" class=\"ec-blockBtn--action\" disabled=\"disabled\">
                                        {{ 'ただいま品切れ中です。'|trans }}
                                    </button>
                                </div>
                            {% endif %}
                        </li>
                    {% endfor %}
                </ul>
            </div>
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
            <div class=\"ec-pagerRole\">
                {% include \"pager.twig\" with {'pages': pagination.paginationData} %}
            </div>
        {% endif %}
    {% endif %}
{% endif %}
{% endblock %}", "__string_template__b1c38e493ec70f2243af4e12a77b4a556c062d0390fa75a5802aff82fb3c7766", "");
    }
}
