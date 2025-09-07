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

/* Block/category_nav_pc.twig */
class __TwigTemplate_1134d4456e130eb2c18d085d119ccec84337514bb66ad3b50d90581c81106890 extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Block/category_nav_pc.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Block/category_nav_pc.twig"));

        // line 11
        $context["Categories"] = twig_get_attribute($this->env, $this->source, call_user_func_array($this->env->getFunction('repository')->getCallable(), ["Eccube\\Entity\\Category"]), "getList", [], "method", false, false, false, 11);
        // line 12
        echo "
";
        // line 28
        echo "
";
        // line 30
        $macros["__internal_b38d7db7ccdbc2699dd8de62293ba7f4c25a68c522f7f51a9705680dda9c08d7"] = $this->macros["__internal_b38d7db7ccdbc2699dd8de62293ba7f4c25a68c522f7f51a9705680dda9c08d7"] = $this;
        // line 31
        echo "
<div class=\"ec-categoryNaviRole\">
    <div class=\"ec-itemNav\">
        <ul class=\"ec-itemNav__nav\">
            <!--";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Categories"]) || array_key_exists("Categories", $context) ? $context["Categories"] : (function () { throw new RuntimeError('Variable "Categories" does not exist.', 35, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["Category"]) {
            // line 36
            echo "                <li>
                    ";
            // line 37
            echo twig_call_macro($macros["__internal_b38d7db7ccdbc2699dd8de62293ba7f4c25a68c522f7f51a9705680dda9c08d7"], "macro_tree", [$context["Category"]], 37, $context, $this->getSourceContext());
            echo "
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "-->
            <li>
                <a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl(twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 41, $this->source); })()), "eccube_user_data_route", [], "any", false, false, false, 41), ["route" => "winery"]);
        echo "\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ワイナリーから探す"), "html", null, true);
        echo "</span></a>
            </li>
            <li>
                <a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=27\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("赤ワイン"), "html", null, true);
        echo "</span></a>
                <ul>
                    <li><a href=\"";
        // line 46
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=35\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("フルボディ"), "html", null, true);
        echo "</span></a>
                    </li>
                    <li><a href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=47\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ミディアムボディ"), "html", null, true);
        echo "</span></a>
                    </li>
                    <!--<li><a href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=36\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ライトボディ"), "html", null, true);
        echo "</span></a>
                    </li>-->
                </ul>
            </li>
            <li>
                <a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=28\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("白ワイン"), "html", null, true);
        echo "</span></a>
                <ul>
                    <li><a href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=37\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("辛口"), "html", null, true);
        echo "</span></a>
                    </li>
                    <li><a href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=56\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("中辛口"), "html", null, true);
        echo "</span></a>
                    </li>
                    <!--<li><a href=\"";
        // line 61
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=55\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("やや甘口"), "html", null, true);
        echo "</span></a>
                    </li>-->
                    <li><a href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=38\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("甘口"), "html", null, true);
        echo "</span></a>
                    </li>
                </ul>
            </li>
            <li>
                <a href=\"";
        // line 68
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=29\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ロゼワイン"), "html", null, true);
        echo "</span></a>
                <ul>
                    <li><a href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=50\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("辛口"), "html", null, true);
        echo "</span></a>
                    </li>
                    <li><a href=\"";
        // line 72
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=54\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("中辛口"), "html", null, true);
        echo "</span></a>
                    </li>
                </ul>
            </li>
            <li>
                <a href=\"";
        // line 77
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=39\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("スパークリングワイン"), "html", null, true);
        echo "</span></a>
                <ul>
                    <!--<li><a href=\"";
        // line 79
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=40\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("赤"), "html", null, true);
        echo "</span></a>
                    </li>-->
                    <li><a href=\"";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=41\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("白"), "html", null, true);
        echo "</span></a>
                        <ul>
                            <!--<li><a href=\"";
        // line 83
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=58\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("辛口"), "html", null, true);
        echo "</span></a>
                            </li>
                            <li><a href=\"";
        // line 85
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=59\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("中辛口"), "html", null, true);
        echo "</span></a>
                            </li>
                            <li><a href=\"";
        // line 87
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=60\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("やや甘口"), "html", null, true);
        echo "</span></a>
                            </li>
                            <li><a href=\"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=61\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("甘口"), "html", null, true);
        echo "</span></a>
                            </li>-->
                        </ul>
                    </li>
                    <li><a href=\"";
        // line 93
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=57\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ロゼ"), "html", null, true);
        echo "</span></a>
                        <ul>
                            <!--<li><a href=\"";
        // line 95
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=66\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("辛口"), "html", null, true);
        echo "</span></a>
                            </li>
                            <li><a href=\"";
        // line 97
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=65\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("中辛口"), "html", null, true);
        echo "</span></a>
                            </li>
                            <li><a href=\"";
        // line 99
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=64\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("やや甘口"), "html", null, true);
        echo "</span></a>
                            </li>
                            <li><a href=\"";
        // line 101
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=63\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("甘口"), "html", null, true);
        echo "</span></a>
                            </li>-->
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href=\"";
        // line 108
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=53\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("セット商品"), "html", null, true);
        echo "</span></a>
            </li>
            <li>
                <a href=\"";
        // line 111
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=52\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("料理から探す"), "html", null, true);
        echo "</span></a>
                <ul>
                    <li><a href=\"";
        // line 113
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=67\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("牛肉料理"), "html", null, true);
        echo "</span></a>
                    </li>
                    <li><a href=\"";
        // line 115
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=68\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("豚肉料理"), "html", null, true);
        echo "</span></a>
                    </li>
                    <li><a href=\"";
        // line 117
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=69\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("鶏肉料理"), "html", null, true);
        echo "</span></a>
                    </li>
                    <li><a href=\"";
        // line 119
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=70\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("赤身魚"), "html", null, true);
        echo "</span></a>
                    </li>
                    <li><a href=\"";
        // line 121
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=71\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("白身魚"), "html", null, true);
        echo "</span></a>
                    </li>
                    <li><a href=\"";
        // line 123
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=72\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("カニ・エビ"), "html", null, true);
        echo "</span></a>
                    </li>
                    <li><a href=\"";
        // line 125
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=73\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("貝類"), "html", null, true);
        echo "</span></a>
                    </li>
                    <li><a href=\"";
        // line 127
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=74\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("パスタ"), "html", null, true);
        echo "</span></a>
                    </li>
                    <li><a href=\"";
        // line 129
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=75\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ブルーチーズ"), "html", null, true);
        echo "</span></a>
                    </li>
                </ul>

            </li>
            <li>
                <a href=\"";
        // line 135
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=51\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ワイン関連商品"), "html", null, true);
        echo "</span></a>
                <ul>
                    <!--<li><a href=\"";
        // line 137
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=79\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ワイングラス"), "html", null, true);
        echo "</span></a>
                    </li>-->
                    <li><a href=\"";
        // line 139
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=76\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ワインオープナー"), "html", null, true);
        echo "</span></a>
                    </li>
                    <li><a href=\"";
        // line 141
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=78\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ワインセラー"), "html", null, true);
        echo "</span></a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 13
    public function macro_tree($__Category__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "Category" => $__Category__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "tree"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "tree"));

            // line 14
            $macros["__internal_4d5b1e2e5a855c037f02e16ded4f7172705d9a0d79256f7aa731098d12007e9a"] = $this;
            // line 15
            echo "<a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
            echo "?category_id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15), "html", null, true);
            echo "\">
    ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 16, $this->source); })()), "name", [], "any", false, false, false, 16), "html", null, true);
            echo "
</a>
";
            // line 18
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 18, $this->source); })()), "children", [], "any", false, false, false, 18)) > 0)) {
                // line 19
                echo "<ul>
    ";
                // line 20
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 20, $this->source); })()), "children", [], "any", false, false, false, 20));
                foreach ($context['_seq'] as $context["_key"] => $context["ChildCategory"]) {
                    // line 21
                    echo "    <li>
        ";
                    // line 22
                    echo twig_call_macro($macros["__internal_4d5b1e2e5a855c037f02e16ded4f7172705d9a0d79256f7aa731098d12007e9a"], "macro_tree", [$context["ChildCategory"]], 22, $context, $this->getSourceContext());
                    echo "
    </li>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ChildCategory'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 25
                echo "</ul>
";
            }
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "Block/category_nav_pc.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  447 => 25,  438 => 22,  435 => 21,  431 => 20,  428 => 19,  426 => 18,  421 => 16,  414 => 15,  412 => 14,  393 => 13,  374 => 141,  367 => 139,  360 => 137,  353 => 135,  342 => 129,  335 => 127,  328 => 125,  321 => 123,  314 => 121,  307 => 119,  300 => 117,  293 => 115,  286 => 113,  279 => 111,  271 => 108,  259 => 101,  252 => 99,  245 => 97,  238 => 95,  231 => 93,  222 => 89,  215 => 87,  208 => 85,  201 => 83,  194 => 81,  187 => 79,  180 => 77,  170 => 72,  163 => 70,  156 => 68,  146 => 63,  139 => 61,  132 => 59,  125 => 57,  118 => 55,  108 => 50,  101 => 48,  94 => 46,  87 => 44,  79 => 41,  75 => 39,  66 => 37,  63 => 36,  59 => 35,  53 => 31,  51 => 30,  48 => 28,  45 => 12,  43 => 11,);
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
{% set Categories = repository('Eccube\\\\Entity\\\\Category').getList() %}

{% macro tree(Category) %}
{% from _self import tree %}
<a href=\"{{ url('product_list') }}?category_id={{ Category.id }}\">
    {{ Category.name }}
</a>
{% if Category.children|length > 0 %}
<ul>
    {% for ChildCategory in Category.children %}
    <li>
        {{ tree(ChildCategory) }}
    </li>
    {% endfor %}
</ul>
{% endif %}
{% endmacro %}

{# @see https://github.com/bolt/bolt/pull/2388 #}
{% from _self import tree %}

<div class=\"ec-categoryNaviRole\">
    <div class=\"ec-itemNav\">
        <ul class=\"ec-itemNav__nav\">
            <!--{% for Category in Categories %}
                <li>
                    {{ tree(Category) }}
                </li>
            {% endfor %}-->
            <li>
                <a href=\"{{ url(eccube_config.eccube_user_data_route, {'route': 'winery'}) }}\"><span>{{ 'ワイナリーから探す'|trans }}</span></a>
            </li>
            <li>
                <a href=\"{{ url('product_list') }}?category_id=27\"><span>{{ '赤ワイン'|trans }}</span></a>
                <ul>
                    <li><a href=\"{{ url('product_list') }}?category_id=35\"><span>{{ 'フルボディ'|trans }}</span></a>
                    </li>
                    <li><a href=\"{{ url('product_list') }}?category_id=47\"><span>{{ 'ミディアムボディ'|trans }}</span></a>
                    </li>
                    <!--<li><a href=\"{{ url('product_list') }}?category_id=36\"><span>{{ 'ライトボディ'|trans }}</span></a>
                    </li>-->
                </ul>
            </li>
            <li>
                <a href=\"{{ url('product_list') }}?category_id=28\"><span>{{ '白ワイン'|trans }}</span></a>
                <ul>
                    <li><a href=\"{{ url('product_list') }}?category_id=37\"><span>{{ '辛口'|trans }}</span></a>
                    </li>
                    <li><a href=\"{{ url('product_list') }}?category_id=56\"><span>{{ '中辛口'|trans }}</span></a>
                    </li>
                    <!--<li><a href=\"{{ url('product_list') }}?category_id=55\"><span>{{ 'やや甘口'|trans }}</span></a>
                    </li>-->
                    <li><a href=\"{{ url('product_list') }}?category_id=38\"><span>{{ '甘口'|trans }}</span></a>
                    </li>
                </ul>
            </li>
            <li>
                <a href=\"{{ url('product_list') }}?category_id=29\"><span>{{ 'ロゼワイン'|trans }}</span></a>
                <ul>
                    <li><a href=\"{{ url('product_list') }}?category_id=50\"><span>{{ '辛口'|trans }}</span></a>
                    </li>
                    <li><a href=\"{{ url('product_list') }}?category_id=54\"><span>{{ '中辛口'|trans }}</span></a>
                    </li>
                </ul>
            </li>
            <li>
                <a href=\"{{ url('product_list') }}?category_id=39\"><span>{{ 'スパークリングワイン'|trans }}</span></a>
                <ul>
                    <!--<li><a href=\"{{ url('product_list') }}?category_id=40\"><span>{{ '赤'|trans }}</span></a>
                    </li>-->
                    <li><a href=\"{{ url('product_list') }}?category_id=41\"><span>{{ '白'|trans }}</span></a>
                        <ul>
                            <!--<li><a href=\"{{ url('product_list') }}?category_id=58\"><span>{{ '辛口'|trans }}</span></a>
                            </li>
                            <li><a href=\"{{ url('product_list') }}?category_id=59\"><span>{{ '中辛口'|trans }}</span></a>
                            </li>
                            <li><a href=\"{{ url('product_list') }}?category_id=60\"><span>{{ 'やや甘口'|trans }}</span></a>
                            </li>
                            <li><a href=\"{{ url('product_list') }}?category_id=61\"><span>{{ '甘口'|trans }}</span></a>
                            </li>-->
                        </ul>
                    </li>
                    <li><a href=\"{{ url('product_list') }}?category_id=57\"><span>{{ 'ロゼ'|trans }}</span></a>
                        <ul>
                            <!--<li><a href=\"{{ url('product_list') }}?category_id=66\"><span>{{ '辛口'|trans }}</span></a>
                            </li>
                            <li><a href=\"{{ url('product_list') }}?category_id=65\"><span>{{ '中辛口'|trans }}</span></a>
                            </li>
                            <li><a href=\"{{ url('product_list') }}?category_id=64\"><span>{{ 'やや甘口'|trans }}</span></a>
                            </li>
                            <li><a href=\"{{ url('product_list') }}?category_id=63\"><span>{{ '甘口'|trans }}</span></a>
                            </li>-->
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href=\"{{ url('product_list') }}?category_id=53\"><span>{{ 'セット商品'|trans }}</span></a>
            </li>
            <li>
                <a href=\"{{ url('product_list') }}?category_id=52\"><span>{{ '料理から探す'|trans }}</span></a>
                <ul>
                    <li><a href=\"{{ url('product_list') }}?category_id=67\"><span>{{ '牛肉料理'|trans }}</span></a>
                    </li>
                    <li><a href=\"{{ url('product_list') }}?category_id=68\"><span>{{ '豚肉料理'|trans }}</span></a>
                    </li>
                    <li><a href=\"{{ url('product_list') }}?category_id=69\"><span>{{ '鶏肉料理'|trans }}</span></a>
                    </li>
                    <li><a href=\"{{ url('product_list') }}?category_id=70\"><span>{{ '赤身魚'|trans }}</span></a>
                    </li>
                    <li><a href=\"{{ url('product_list') }}?category_id=71\"><span>{{ '白身魚'|trans }}</span></a>
                    </li>
                    <li><a href=\"{{ url('product_list') }}?category_id=72\"><span>{{ 'カニ・エビ'|trans }}</span></a>
                    </li>
                    <li><a href=\"{{ url('product_list') }}?category_id=73\"><span>{{ '貝類'|trans }}</span></a>
                    </li>
                    <li><a href=\"{{ url('product_list') }}?category_id=74\"><span>{{ 'パスタ'|trans }}</span></a>
                    </li>
                    <li><a href=\"{{ url('product_list') }}?category_id=75\"><span>{{ 'ブルーチーズ'|trans }}</span></a>
                    </li>
                </ul>

            </li>
            <li>
                <a href=\"{{ url('product_list') }}?category_id=51\"><span>{{ 'ワイン関連商品'|trans }}</span></a>
                <ul>
                    <!--<li><a href=\"{{ url('product_list') }}?category_id=79\"><span>{{ 'ワイングラス'|trans }}</span></a>
                    </li>-->
                    <li><a href=\"{{ url('product_list') }}?category_id=76\"><span>{{ 'ワインオープナー'|trans }}</span></a>
                    </li>
                    <li><a href=\"{{ url('product_list') }}?category_id=78\"><span>{{ 'ワインセラー'|trans }}</span></a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>", "Block/category_nav_pc.twig", "/home/anotherworld/www/s-africa.wine/app/template/default/Block/category_nav_pc.twig");
    }
}
