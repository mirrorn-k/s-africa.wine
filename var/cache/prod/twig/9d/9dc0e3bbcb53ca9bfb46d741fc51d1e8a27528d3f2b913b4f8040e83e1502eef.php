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
class __TwigTemplate_c2b6b2273451ff3496c63a9f93bbdd284e6def74463f57d6d0ae81e11ae368ca extends \Eccube\Twig\Template
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
        $context['_seq'] = twig_ensure_traversable(($context["Categories"] ?? null));
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
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl(twig_get_attribute($this->env, $this->source, ($context["eccube_config"] ?? null), "eccube_user_data_route", [], "any", false, false, false, 44), ["route" => "winery"]);
        echo "\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ワイナリーから探す"), "html", null, true);
        echo "</span></a>
            </li>
            <li>
                <a href=\"";
        // line 47
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=27\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("赤ワイン"), "html", null, true);
        echo "</span></a>
                <ul>
                    <li><a href=\"";
        // line 49
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=35\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("フルボディ"), "html", null, true);
        echo "</span></a>
                    </li>
                    <li><a href=\"";
        // line 51
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=47\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ミディアムボディ"), "html", null, true);
        echo "</span></a>
                    </li>
                    <!--<li><a href=\"";
        // line 53
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=36\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ライトボディ"), "html", null, true);
        echo "</span></a>
                    </li>-->
                </ul>
            </li>
            <li>
                <a href=\"";
        // line 58
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=28\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("白ワイン"), "html", null, true);
        echo "</span></a>
                <ul>
                    <li><a href=\"";
        // line 60
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=37\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("辛口"), "html", null, true);
        echo "</span></a>
                    </li>
                    <li><a href=\"";
        // line 62
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=56\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("中辛口"), "html", null, true);
        echo "</span></a>
                    </li>
                    <!--<li><a href=\"";
        // line 64
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=55\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("やや甘口"), "html", null, true);
        echo "</span></a>
                    </li>-->
                    <li><a href=\"";
        // line 66
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=38\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("甘口"), "html", null, true);
        echo "</span></a>
                    </li>
                </ul>
            </li>
            <li>
                <a href=\"";
        // line 71
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=29\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ロゼワイン"), "html", null, true);
        echo "</span></a>
                <ul>
                    <li><a href=\"";
        // line 73
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=50\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("辛口"), "html", null, true);
        echo "</span></a>
                    </li>
                    <li><a href=\"";
        // line 75
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=54\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("中辛口"), "html", null, true);
        echo "</span></a>
                    </li>
                </ul>
            </li>
            <li>
                <a href=\"";
        // line 80
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=39\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("スパークリングワイン"), "html", null, true);
        echo "</span></a>
                <ul>
                    <!--<li><a href=\"";
        // line 82
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=40\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("赤"), "html", null, true);
        echo "</span></a>
                    </li>-->
                    <li><a href=\"";
        // line 84
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=41\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("白"), "html", null, true);
        echo "</span></a>
                        <ul>
                            <!--<li><a href=\"";
        // line 86
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=58\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("辛口"), "html", null, true);
        echo "</span></a>
                            </li>
                            <li><a href=\"";
        // line 88
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=59\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("中辛口"), "html", null, true);
        echo "</span></a>
                            </li>
                            <li><a href=\"";
        // line 90
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=60\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("やや甘口"), "html", null, true);
        echo "</span></a>
                            </li>
                            <li><a href=\"";
        // line 92
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=61\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("甘口"), "html", null, true);
        echo "</span></a>
                            </li>-->
                        </ul>
                    </li>
                    <li><a href=\"";
        // line 96
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=57\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ロゼ"), "html", null, true);
        echo "</span></a>
                        <ul>
                            <!--<li><a href=\"";
        // line 98
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=66\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("辛口"), "html", null, true);
        echo "</span></a>
                            </li>
                            <li><a href=\"";
        // line 100
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=65\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("中辛口"), "html", null, true);
        echo "</span></a>
                            </li>
                            <li><a href=\"";
        // line 102
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=64\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("やや甘口"), "html", null, true);
        echo "</span></a>
                            </li>
                            <li><a href=\"";
        // line 104
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
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
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=53\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("セット商品"), "html", null, true);
        echo "</span></a>
            </li>
            <li>
                <a href=\"";
        // line 114
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=52\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("料理から探す"), "html", null, true);
        echo "</span></a>
                <ul>
                    <li><a href=\"";
        // line 116
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=67\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("牛肉料理"), "html", null, true);
        echo "</span></a>
                    </li>
                    <li><a href=\"";
        // line 118
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=68\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("豚肉料理"), "html", null, true);
        echo "</span></a>
                    </li>
                    <li><a href=\"";
        // line 120
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=69\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("鶏肉料理"), "html", null, true);
        echo "</span></a>
                    </li>
                    <li><a href=\"";
        // line 122
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=70\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("赤身魚"), "html", null, true);
        echo "</span></a>
                    </li>
                    <li><a href=\"";
        // line 124
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=71\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("白身魚"), "html", null, true);
        echo "</span></a>
                    </li>
                    <li><a href=\"";
        // line 126
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=72\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("カニ・エビ"), "html", null, true);
        echo "</span></a>
                    </li>
                    <li><a href=\"";
        // line 128
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=73\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("貝類"), "html", null, true);
        echo "</span></a>
                    </li>
                    <li><a href=\"";
        // line 130
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=74\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("パスタ"), "html", null, true);
        echo "</span></a>
                    </li>
                    <li><a href=\"";
        // line 132
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=75\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ブルーチーズ"), "html", null, true);
        echo "</span></a>
                    </li>
                </ul>

            </li>
            <li>
                <a href=\"";
        // line 138
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=51\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ワイン関連商品"), "html", null, true);
        echo "</span></a>
                <ul>
                    <!--<li><a href=\"";
        // line 140
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=79\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ワイングラス"), "html", null, true);
        echo "</span></a>
                    </li>-->
                    <li><a href=\"";
        // line 142
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=76\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ワインオープナー"), "html", null, true);
        echo "</span></a>
                    </li>
                    <li><a href=\"";
        // line 144
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=78\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ワインセラー"), "html", null, true);
        echo "</span></a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>";
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

        ob_start(function () { return ''; });
        try {
            // line 14
            $macros["__internal_dbc4a5556054881baf66b5ac560f1304b2b53472e8c365b46dfe1d970b566dad"] = $this;
            // line 15
            echo "<a href=\"";
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
            echo "?category_id=";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "id", [], "any", false, false, false, 15), "html", null, true);
            echo "\">
    ";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "name", [], "any", false, false, false, 16), "html", null, true);
            echo "
</a>
";
            // line 18
            if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "children", [], "any", false, false, false, 18)) > 0)) {
                // line 19
                echo "<ul>
    ";
                // line 20
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "children", [], "any", false, false, false, 20));
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
        return array (  435 => 25,  426 => 22,  423 => 21,  419 => 20,  416 => 19,  414 => 18,  409 => 16,  402 => 15,  400 => 14,  387 => 13,  374 => 144,  367 => 142,  360 => 140,  353 => 138,  342 => 132,  335 => 130,  328 => 128,  321 => 126,  314 => 124,  307 => 122,  300 => 120,  293 => 118,  286 => 116,  279 => 114,  271 => 111,  259 => 104,  252 => 102,  245 => 100,  238 => 98,  231 => 96,  222 => 92,  215 => 90,  208 => 88,  201 => 86,  194 => 84,  187 => 82,  180 => 80,  170 => 75,  163 => 73,  156 => 71,  146 => 66,  139 => 64,  132 => 62,  125 => 60,  118 => 58,  108 => 53,  101 => 51,  94 => 49,  87 => 47,  79 => 44,  75 => 42,  66 => 40,  63 => 39,  59 => 38,  52 => 34,  47 => 31,  45 => 30,  42 => 28,  39 => 12,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Block/category_nav_sp.twig", "/home/anotherworld/www/s-africa.wine/app/template/default/Block/category_nav_sp.twig");
    }
}
