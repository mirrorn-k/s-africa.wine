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

/* Block/category_nav_sp.twig */
class __TwigTemplate_099e8481d72bfa5bf2f0c3424da520a6a61b6d57c626075642734bc7fb427c8d extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Block/category_nav_sp.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Block/category_nav_sp.twig"));

        // line 11
        $context["Categories"] = twig_get_attribute($this->env, $this->source, call_user_func_array($this->env->getFunction('repository')->getCallable(), ["Eccube\\Entity\\Category"]), "getList", [], "method", false, false, false, 11);
        // line 12
        echo "
";
        // line 28
        echo "
";
        // line 30
        $macros["__internal_75d2ff732c4e55577454fcc7dba19dbb86c95d95d2595d859eb8cea91a88aaa9"] = $this->macros["__internal_75d2ff732c4e55577454fcc7dba19dbb86c95d95d2595d859eb8cea91a88aaa9"] = $this;
        // line 31
        echo "
<div class=\"ec-headerCategoryArea\">
    <div class=\"ec-headerCategoryArea__heading\">
        <p>";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("カテゴリ一覧"), "html", null, true);
        echo "</p>
    </div>
    <div class=\"ec-itemNav\">
        <ul class=\"ec-itemNav__nav\">
            <!--";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["Categories"]) || array_key_exists("Categories", $context) ? $context["Categories"] : (function () { throw new RuntimeError('Variable "Categories" does not exist.', 38, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["Category"]) {
            // line 39
            echo "                <li>
                    ";
            // line 40
            echo twig_call_macro($macros["__internal_75d2ff732c4e55577454fcc7dba19dbb86c95d95d2595d859eb8cea91a88aaa9"], "macro_tree", [$context["Category"]], 40, $context, $this->getSourceContext());
            echo "
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "-->
            <li>
                <a href=\"";
        // line 44
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl(twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 44, $this->source); })()), "eccube_user_data_route", [], "any", false, false, false, 44), ["route" => "winery"]);
        echo "\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ワイナリーから探す"), "html", null, true);
        echo "</span></a>
            </li>
            <li>
                <a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=27\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("赤ワイン"), "html", null, true);
        echo "</span></a>
                <ul>
                    <li><a href=\"";
        // line 49
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=35\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("フルボディ"), "html", null, true);
        echo "</span></a>
                    </li>
                    <li><a href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=47\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ミディアムボディ"), "html", null, true);
        echo "</span></a>
                    </li>
                    <!--<li><a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=36\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ライトボディ"), "html", null, true);
        echo "</span></a>
                    </li>-->
                </ul>
            </li>
            <li>
                <a href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=28\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("白ワイン"), "html", null, true);
        echo "</span></a>
                <ul>
                    <li><a href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=37\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("辛口"), "html", null, true);
        echo "</span></a>
                    </li>
                    <li><a href=\"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=56\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("中辛口"), "html", null, true);
        echo "</span></a>
                    </li>
                    <!--<li><a href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=55\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("やや甘口"), "html", null, true);
        echo "</span></a>
                    </li>-->
                    <li><a href=\"";
        // line 66
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=38\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("甘口"), "html", null, true);
        echo "</span></a>
                    </li>
                </ul>
            </li>
            <li>
                <a href=\"";
        // line 71
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=29\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ロゼワイン"), "html", null, true);
        echo "</span></a>
                <ul>
                    <li><a href=\"";
        // line 73
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=50\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("辛口"), "html", null, true);
        echo "</span></a>
                    </li>
                    <li><a href=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=54\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("中辛口"), "html", null, true);
        echo "</span></a>
                    </li>
                </ul>
            </li>
            <li>
                <a href=\"";
        // line 80
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=39\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("スパークリングワイン"), "html", null, true);
        echo "</span></a>
                <ul>
                    <!--<li><a href=\"";
        // line 82
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=40\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("赤"), "html", null, true);
        echo "</span></a>
                    </li>-->
                    <li><a href=\"";
        // line 84
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=41\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("白"), "html", null, true);
        echo "</span></a>
                        <ul>
                            <!--<li><a href=\"";
        // line 86
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=58\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("辛口"), "html", null, true);
        echo "</span></a>
                            </li>
                            <li><a href=\"";
        // line 88
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=59\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("中辛口"), "html", null, true);
        echo "</span></a>
                            </li>
                            <li><a href=\"";
        // line 90
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=60\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("やや甘口"), "html", null, true);
        echo "</span></a>
                            </li>
                            <li><a href=\"";
        // line 92
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=61\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("甘口"), "html", null, true);
        echo "</span></a>
                            </li>-->
                        </ul>
                    </li>
                    <li><a href=\"";
        // line 96
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=57\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ロゼ"), "html", null, true);
        echo "</span></a>
                        <ul>
                            <!--<li><a href=\"";
        // line 98
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=66\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("辛口"), "html", null, true);
        echo "</span></a>
                            </li>
                            <li><a href=\"";
        // line 100
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=65\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("中辛口"), "html", null, true);
        echo "</span></a>
                            </li>
                            <li><a href=\"";
        // line 102
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=64\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("やや甘口"), "html", null, true);
        echo "</span></a>
                            </li>
                            <li><a href=\"";
        // line 104
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
        // line 111
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=53\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("セット商品"), "html", null, true);
        echo "</span></a>
            </li>
            <li>
                <a href=\"";
        // line 114
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=52\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("料理から探す"), "html", null, true);
        echo "</span></a>
                <ul>
                    <li><a href=\"";
        // line 116
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=67\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("牛肉料理"), "html", null, true);
        echo "</span></a>
                    </li>
                    <li><a href=\"";
        // line 118
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=68\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("豚肉料理"), "html", null, true);
        echo "</span></a>
                    </li>
                    <li><a href=\"";
        // line 120
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=69\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("鶏肉料理"), "html", null, true);
        echo "</span></a>
                    </li>
                    <li><a href=\"";
        // line 122
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=70\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("赤身魚"), "html", null, true);
        echo "</span></a>
                    </li>
                    <li><a href=\"";
        // line 124
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=71\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("白身魚"), "html", null, true);
        echo "</span></a>
                    </li>
                    <li><a href=\"";
        // line 126
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=72\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("カニ・エビ"), "html", null, true);
        echo "</span></a>
                    </li>
                    <li><a href=\"";
        // line 128
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=73\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("貝類"), "html", null, true);
        echo "</span></a>
                    </li>
                    <li><a href=\"";
        // line 130
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=74\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("パスタ"), "html", null, true);
        echo "</span></a>
                    </li>
                    <li><a href=\"";
        // line 132
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=75\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ブルーチーズ"), "html", null, true);
        echo "</span></a>
                    </li>
                </ul>

            </li>
            <li>
                <a href=\"";
        // line 138
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=51\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ワイン関連商品"), "html", null, true);
        echo "</span></a>
                <ul>
                    <!--<li><a href=\"";
        // line 140
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=79\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ワイングラス"), "html", null, true);
        echo "</span></a>
                    </li>-->
                    <li><a href=\"";
        // line 142
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=76\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ワインオープナー"), "html", null, true);
        echo "</span></a>
                    </li>
                    <li><a href=\"";
        // line 144
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
            $macros["__internal_dbc4a5556054881baf66b5ac560f1304b2b53472e8c365b46dfe1d970b566dad"] = $this;
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
                    echo twig_call_macro($macros["__internal_dbc4a5556054881baf66b5ac560f1304b2b53472e8c365b46dfe1d970b566dad"], "macro_tree", [$context["ChildCategory"]], 22, $context, $this->getSourceContext());
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
        return "Block/category_nav_sp.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  453 => 25,  444 => 22,  441 => 21,  437 => 20,  434 => 19,  432 => 18,  427 => 16,  420 => 15,  418 => 14,  399 => 13,  380 => 144,  373 => 142,  366 => 140,  359 => 138,  348 => 132,  341 => 130,  334 => 128,  327 => 126,  320 => 124,  313 => 122,  306 => 120,  299 => 118,  292 => 116,  285 => 114,  277 => 111,  265 => 104,  258 => 102,  251 => 100,  244 => 98,  237 => 96,  228 => 92,  221 => 90,  214 => 88,  207 => 86,  200 => 84,  193 => 82,  186 => 80,  176 => 75,  169 => 73,  162 => 71,  152 => 66,  145 => 64,  138 => 62,  131 => 60,  124 => 58,  114 => 53,  107 => 51,  100 => 49,  93 => 47,  85 => 44,  81 => 42,  72 => 40,  69 => 39,  65 => 38,  58 => 34,  53 => 31,  51 => 30,  48 => 28,  45 => 12,  43 => 11,);
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

<div class=\"ec-headerCategoryArea\">
    <div class=\"ec-headerCategoryArea__heading\">
        <p>{{ 'カテゴリ一覧'|trans }}</p>
    </div>
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
</div>", "Block/category_nav_sp.twig", "/home/anotherworld/www/s-africa.wine/app/template/default/Block/category_nav_sp.twig");
    }
}
