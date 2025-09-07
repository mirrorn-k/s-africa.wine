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

/* Product/list.twig */
class __TwigTemplate_94c740138a11df68b1482469a83a12b89de42c75608294d2f898511805c74a2f extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Product/list.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Product/list.twig"));

        // line 13
        $context["body_class"] = "product_page";
        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "Product/list.twig", 11);
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
                        echo "                                <p class=\"price02-default\">
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
                        echo "                                </p>
                            </a>

                        </li>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Product'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 168
                    echo "                </ul>
            </div>
        ";
                }
                // line 171
                echo "    ";
            }
        } else {
            // line 173
            echo "
    ";
            // line 174
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["search_form"]) || array_key_exists("search_form", $context) ? $context["search_form"] : (function () { throw new RuntimeError('Variable "search_form" does not exist.', 174, $this->source); })()), "category_id", [], "any", false, false, false, 174), "vars", [], "any", false, false, false, 174), "errors", [], "any", false, false, false, 174)) > 0)) {
                // line 175
                echo "        <div class=\"ec-searchnavRole\">
            <p class=\"errormsg text-danger\">";
                // line 176
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ご指定のカテゴリは存在しません"), "html", null, true);
                echo "</p>
        </div>
    ";
            } else {
                // line 179
                echo "    
        <div class=\"ec-searchnavRole\">
            <form name=\"form1\" id=\"form1\" method=\"get\" action=\"?\">
                ";
                // line 182
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["search_form"]) || array_key_exists("search_form", $context) ? $context["search_form"] : (function () { throw new RuntimeError('Variable "search_form" does not exist.', 182, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 183
                    echo "                    <input type=\"hidden\" id=\"";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "vars", [], "any", false, false, false, 183), "id", [], "any", false, false, false, 183), "html", null, true);
                    echo "\"
                           name=\"";
                    // line 184
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "vars", [], "any", false, false, false, 184), "full_name", [], "any", false, false, false, 184), "html", null, true);
                    echo "\"
                           ";
                    // line 185
                    if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "vars", [], "any", false, false, false, 185), "value", [], "any", false, false, false, 185))) {
                        echo "value=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "vars", [], "any", false, false, false, 185), "value", [], "any", false, false, false, 185), "html", null, true);
                        echo "\" ";
                    }
                    echo "/>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 187
                echo "            </form>
            <div class=\"ec-searchnavRole__topicpath\">
                <ol class=\"ec-topicpath\">
                    <li class=\"ec-topicpath__item\"><a href=\"";
                // line 190
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("全て"), "html", null, true);
                echo "</a>
                    </li>
                    ";
                // line 192
                if ( !(null === (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 192, $this->source); })()))) {
                    // line 193
                    echo "                        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 193, $this->source); })()), "path", [], "any", false, false, false, 193));
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
                        // line 194
                        echo "                            <li class=\"ec-topicpath__divider\">|</li>
                            <li class=\"ec-topicpath__item";
                        // line 195
                        if (twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 195)) {
                            echo "--active";
                        }
                        echo "\"><a
                                        href=\"";
                        // line 196
                        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
                        echo "?category_id=";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Path"], "id", [], "any", false, false, false, 196), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Path"], "name", [], "any", false, false, false, 196), "html", null, true);
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
                    // line 199
                    echo "                    ";
                }
                // line 200
                echo "                    ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["search_form"]) || array_key_exists("search_form", $context) ? $context["search_form"] : (function () { throw new RuntimeError('Variable "search_form" does not exist.', 200, $this->source); })()), "vars", [], "any", false, false, false, 200), "value", [], "any", false, false, false, 200) && twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["search_form"]) || array_key_exists("search_form", $context) ? $context["search_form"] : (function () { throw new RuntimeError('Variable "search_form" does not exist.', 200, $this->source); })()), "vars", [], "any", false, false, false, 200), "value", [], "any", false, false, false, 200), "name", [], "any", false, false, false, 200))) {
                    // line 201
                    echo "                        <li class=\"ec-topicpath__divider\">|</li>
                        <li class=\"ec-topicpath__item\">";
                    // line 202
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("「%name%」の検索結果", ["%name%" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["search_form"]) || array_key_exists("search_form", $context) ? $context["search_form"] : (function () { throw new RuntimeError('Variable "search_form" does not exist.', 202, $this->source); })()), "vars", [], "any", false, false, false, 202), "value", [], "any", false, false, false, 202), "name", [], "any", false, false, false, 202)]), "html", null, true);
                    echo "</li>
                    ";
                }
                // line 204
                echo "                </ol>
            </div>
            <div class=\"ec-searchnavRole__infos\">
                <div class=\"ec-searchnavRole__counter\">
                    ";
                // line 208
                if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 208, $this->source); })()), "totalItemCount", [], "any", false, false, false, 208) > 0)) {
                    // line 209
                    echo "                        ";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("<span class=\"ec-font-bold\">%count%件</span><span>の商品が見つかりました</span>", ["%count%" => twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 209, $this->source); })()), "totalItemCount", [], "any", false, false, false, 209)]);
                    echo "
                    ";
                } else {
                    // line 211
                    echo "                        <span>";
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お探しの商品は見つかりませんでした"), "html", null, true);
                    echo "</span>
                    ";
                }
                // line 213
                echo "                </div>
                ";
                // line 214
                if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 214, $this->source); })()), "totalItemCount", [], "any", false, false, false, 214) > 0)) {
                    // line 215
                    echo "                    <div class=\"ec-searchnavRole__actions\">
                        <div class=\"ec-select\">
                            ";
                    // line 217
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["disp_number_form"]) || array_key_exists("disp_number_form", $context) ? $context["disp_number_form"] : (function () { throw new RuntimeError('Variable "disp_number_form" does not exist.', 217, $this->source); })()), 'widget', ["id" => "", "attr" => ["class" => "disp-number"]]);
                    echo "
                            ";
                    // line 218
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["order_by_form"]) || array_key_exists("order_by_form", $context) ? $context["order_by_form"] : (function () { throw new RuntimeError('Variable "order_by_form" does not exist.', 218, $this->source); })()), 'widget', ["id" => "", "attr" => ["class" => "order-by"]]);
                    echo "
                        </div>
                    </div>
                ";
                }
                // line 222
                echo "            </div>
        </div>
        ";
                // line 224
                if ((twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 224, $this->source); })()), "totalItemCount", [], "any", false, false, false, 224) > 0)) {
                    // line 225
                    echo "            <div class=\"ec-shelfRole\">
                <ul class=\"ec-shelfGrid\">
                    ";
                    // line 227
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 227, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["Product"]) {
                        // line 228
                        echo "                        <li class=\"ec-shelfGrid__item\">
                            <a href=\"";
                        // line 229
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_detail", ["id" => twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, false, 229)]), "html", null, true);
                        echo "\">
                                <p class=\"ec-shelfGrid__item-image\">
                                    <img src=\"";
                        // line 231
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct(twig_get_attribute($this->env, $this->source, $context["Product"], "main_list_image", [], "any", false, false, false, 231)), "save_image"), "html", null, true);
                        echo "\">
                                </p>
                                <p>";
                        // line 233
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "name", [], "any", false, false, false, 233), "html", null, true);
                        echo "</p>
                                ";
                        // line 234
                        if (twig_get_attribute($this->env, $this->source, $context["Product"], "description_list", [], "any", false, false, false, 234)) {
                            // line 235
                            echo "                                    <p>";
                            echo nl2br(twig_get_attribute($this->env, $this->source, $context["Product"], "description_list", [], "any", false, false, false, 235));
                            echo "</p>
                                ";
                        }
                        // line 237
                        echo "                                <p class=\"price02-default\">
                                    ";
                        // line 238
                        if (twig_get_attribute($this->env, $this->source, $context["Product"], "hasProductClass", [], "any", false, false, false, 238)) {
                            // line 239
                            echo "                                        ";
                            if ((twig_get_attribute($this->env, $this->source, $context["Product"], "getPrice02Min", [], "any", false, false, false, 239) == twig_get_attribute($this->env, $this->source, $context["Product"], "getPrice02Max", [], "any", false, false, false, 239))) {
                                // line 240
                                echo "                                            ";
                                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["Product"], "getPrice02IncTaxMin", [], "any", false, false, false, 240)), "html", null, true);
                                echo "
                                        ";
                            } else {
                                // line 242
                                echo "                                            ";
                                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["Product"], "getPrice02IncTaxMin", [], "any", false, false, false, 242)), "html", null, true);
                                echo " ～ ";
                                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["Product"], "getPrice02IncTaxMax", [], "any", false, false, false, 242)), "html", null, true);
                                echo "
                                        ";
                            }
                            // line 244
                            echo "                                    ";
                        } else {
                            // line 245
                            echo "                                        ";
                            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["Product"], "getPrice02IncTaxMin", [], "any", false, false, false, 245)), "html", null, true);
                            echo "
                                    ";
                        }
                        // line 247
                        echo "                                </p>
                            </a>

                            ";
                        // line 250
                        if (twig_get_attribute($this->env, $this->source, $context["Product"], "stock_find", [], "any", false, false, false, 250)) {
                            // line 251
                            echo "                                ";
                            $context["form"] = twig_get_attribute($this->env, $this->source, (isset($context["forms"]) || array_key_exists("forms", $context) ? $context["forms"] : (function () { throw new RuntimeError('Variable "forms" does not exist.', 251, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, false, 251), [], "array", false, false, false, 251);
                            // line 252
                            echo "                                <form name=\"form";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, false, 252), "html", null, true);
                            echo "\" id=\"productForm";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, false, 252), "html", null, true);
                            echo "\" action=\"";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_add_cart", ["id" => twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, false, 252)]), "html", null, true);
                            echo "\" method=\"post\">
                                    <div class=\"ec-productRole__actions\">
                                        ";
                            // line 254
                            if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id1", [], "any", true, true, false, 254)) {
                                // line 255
                                echo "                                            <div class=\"ec-select\">
                                                ";
                                // line 256
                                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 256, $this->source); })()), "classcategory_id1", [], "any", false, false, false, 256), 'widget');
                                echo "
                                                ";
                                // line 257
                                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 257, $this->source); })()), "classcategory_id1", [], "any", false, false, false, 257), 'errors');
                                echo "
                                            </div>
                                            ";
                                // line 259
                                if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id2", [], "any", true, true, false, 259)) {
                                    // line 260
                                    echo "                                                <div class=\"ec-select\">
                                                    ";
                                    // line 261
                                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 261, $this->source); })()), "classcategory_id2", [], "any", false, false, false, 261), 'widget');
                                    echo "
                                                    ";
                                    // line 262
                                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 262, $this->source); })()), "classcategory_id2", [], "any", false, false, false, 262), 'errors');
                                    echo "
                                                </div>
                                            ";
                                }
                                // line 265
                                echo "                                        ";
                            }
                            // line 266
                            echo "                                        <div class=\"ec-numberInput\"><span>";
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("数量"), "html", null, true);
                            echo "</span>
                                            ";
                            // line 267
                            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 267, $this->source); })()), "quantity", [], "any", false, false, false, 267), 'widget', ["attr" => ["class" => "quantity"]]);
                            echo "
                                            ";
                            // line 268
                            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 268, $this->source); })()), "quantity", [], "any", false, false, false, 268), 'errors');
                            echo "
                                        </div>
                                    </div>
                                    ";
                            // line 271
                            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 271, $this->source); })()), 'rest');
                            echo "
                                </form>
                                <div class=\"ec-productRole__btn\">
                                    <button type=\"submit\" class=\"ec-blockBtn--action add-cart\" data-cartid=\"";
                            // line 274
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, false, 274), "html", null, true);
                            echo "\" form=\"productForm";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, false, 274), "html", null, true);
                            echo "\">
                                        ";
                            // line 275
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("カートに入れる"), "html", null, true);
                            echo "
                                    </button>
                                </div>
                            ";
                        } else {
                            // line 279
                            echo "                                <div class=\"ec-productRole__btn\">
                                    <button type=\"button\" class=\"ec-blockBtn--action\" disabled=\"disabled\">
                                        ";
                            // line 281
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ただいま品切れ中です。"), "html", null, true);
                            echo "
                                    </button>
                                </div>
                            ";
                        }
                        // line 285
                        echo "                        </li>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Product'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 287
                    echo "                </ul>
            </div>
            <div class=\"ec-modal\">
                <input type=\"checkbox\" id=\"ec-modal-checkbox\" class=\"checkbox\">
                <div class=\"ec-modal-overlay\">
                    <label for=\"ec-modal-checkbox\" class=\"ec-modal-overlay-close\"></label>
                    <div class=\"ec-modal-wrap\">
                        <label for=\"ec-modal-checkbox\" class=\"ec-modal-close\"><span class=\"ec-icon\"><img src=\"";
                    // line 294
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/cross-dark.svg"), "html", null, true);
                    echo "\" alt=\"\"/></span></label>
                        <div id=\"ec-modal-header\" class=\"text-center\">";
                    // line 295
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("カートに追加しました。"), "html", null, true);
                    echo "</div>
                        <div class=\"ec-modal-box\">
                            <div class=\"ec-role\">
                                <label for=\"ec-modal-checkbox\" class=\"ec-inlineBtn--cancel\">";
                    // line 298
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お買い物を続ける"), "html", null, true);
                    echo "</label>
                                <a href=\"";
                    // line 299
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
                    // line 306
                    $this->loadTemplate("pager.twig", "Product/list.twig", 306)->display(twig_array_merge($context, ["pages" => twig_get_attribute($this->env, $this->source, (isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 306, $this->source); })()), "paginationData", [], "any", false, false, false, 306)]));
                    // line 307
                    echo "            </div>
        ";
                }
                // line 309
                echo "    ";
            }
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "Product/list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  735 => 309,  731 => 307,  729 => 306,  717 => 299,  713 => 298,  707 => 295,  703 => 294,  694 => 287,  687 => 285,  680 => 281,  676 => 279,  669 => 275,  663 => 274,  657 => 271,  651 => 268,  647 => 267,  642 => 266,  639 => 265,  633 => 262,  629 => 261,  626 => 260,  624 => 259,  619 => 257,  615 => 256,  612 => 255,  610 => 254,  600 => 252,  597 => 251,  595 => 250,  590 => 247,  584 => 245,  581 => 244,  573 => 242,  567 => 240,  564 => 239,  562 => 238,  559 => 237,  553 => 235,  551 => 234,  547 => 233,  542 => 231,  537 => 229,  534 => 228,  530 => 227,  526 => 225,  524 => 224,  520 => 222,  513 => 218,  509 => 217,  505 => 215,  503 => 214,  500 => 213,  494 => 211,  488 => 209,  486 => 208,  480 => 204,  475 => 202,  472 => 201,  469 => 200,  466 => 199,  445 => 196,  439 => 195,  436 => 194,  418 => 193,  416 => 192,  409 => 190,  404 => 187,  392 => 185,  388 => 184,  383 => 183,  379 => 182,  374 => 179,  368 => 176,  365 => 175,  363 => 174,  360 => 173,  356 => 171,  351 => 168,  341 => 163,  335 => 161,  332 => 160,  324 => 158,  318 => 156,  315 => 155,  313 => 154,  310 => 153,  304 => 151,  302 => 150,  298 => 149,  293 => 147,  288 => 145,  285 => 144,  281 => 143,  276 => 141,  273 => 140,  271 => 139,  268 => 138,  262 => 135,  259 => 134,  257 => 133,  216 => 94,  213 => 93,  203 => 92,  184 => 82,  174 => 75,  143 => 47,  115 => 21,  101 => 20,  93 => 19,  76 => 18,  72 => 16,  62 => 15,  51 => 11,  49 => 13,  36 => 11,);
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
                                <p class=\"price02-default\">
                                    {% if Product.hasProductClass %}
                                        {% if Product.getPrice02Min == Product.getPrice02Max %}
                                            {{ Product.getPrice02IncTaxMin|price }}
                                        {% else %}
                                            {{ Product.getPrice02IncTaxMin|price }} ～ {{ Product.getPrice02IncTaxMax|price }}
                                        {% endif %}
                                    {% else %}
                                        {{ Product.getPrice02IncTaxMin|price }}
                                    {% endif %}
                                </p>
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
                                            {{ Product.getPrice02IncTaxMin|price }}
                                        {% else %}
                                            {{ Product.getPrice02IncTaxMin|price }} ～ {{ Product.getPrice02IncTaxMax|price }}
                                        {% endif %}
                                    {% else %}
                                        {{ Product.getPrice02IncTaxMin|price }}
                                    {% endif %}
                                </p>
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
{% endblock %}", "Product/list.twig", "/home/anotherworld/www/s-africa.wine/app/template/default/Product/list.twig");
    }
}
