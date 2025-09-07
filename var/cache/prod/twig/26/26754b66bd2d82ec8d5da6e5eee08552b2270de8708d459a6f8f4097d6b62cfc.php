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
class __TwigTemplate_6186d30d348711d39844ddf119d984b7dc7cb1eb0ffafb4919cef33fb9b4dcd3 extends \Eccube\Twig\Template
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
        $macros["__internal_b38d7db7ccdbc2699dd8de62293ba7f4c25a68c522f7f51a9705680dda9c08d7"] = $this->macros["__internal_b38d7db7ccdbc2699dd8de62293ba7f4c25a68c522f7f51a9705680dda9c08d7"] = $this;
        // line 31
        echo "
<div class=\"ec-categoryNaviRole\">
    <div class=\"ec-itemNav\">
        <ul class=\"ec-itemNav__nav\">
            <!--";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Categories"] ?? null));
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
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl(twig_get_attribute($this->env, $this->source, ($context["eccube_config"] ?? null), "eccube_user_data_route", [], "any", false, false, false, 41), ["route" => "winery"]);
        echo "\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ワイナリーから探す"), "html", null, true);
        echo "</span></a>
            </li>
            <li>
                <a href=\"";
        // line 44
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=27\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("赤ワイン"), "html", null, true);
        echo "</span></a>
                <ul>
                    <li><a href=\"";
        // line 46
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=35\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("フルボディ"), "html", null, true);
        echo "</span></a>
                    </li>
                    <li><a href=\"";
        // line 48
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=47\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ミディアムボディ"), "html", null, true);
        echo "</span></a>
                    </li>
                    <!--<li><a href=\"";
        // line 50
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=36\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ライトボディ"), "html", null, true);
        echo "</span></a>
                    </li>-->
                </ul>
            </li>
            <li>
                <a href=\"";
        // line 55
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=28\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("白ワイン"), "html", null, true);
        echo "</span></a>
                <ul>
                    <li><a href=\"";
        // line 57
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=37\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("辛口"), "html", null, true);
        echo "</span></a>
                    </li>
                    <li><a href=\"";
        // line 59
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=56\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("中辛口"), "html", null, true);
        echo "</span></a>
                    </li>
                    <!--<li><a href=\"";
        // line 61
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=55\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("やや甘口"), "html", null, true);
        echo "</span></a>
                    </li>-->
                    <li><a href=\"";
        // line 63
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=38\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("甘口"), "html", null, true);
        echo "</span></a>
                    </li>
                </ul>
            </li>
            <li>
                <a href=\"";
        // line 68
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=29\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ロゼワイン"), "html", null, true);
        echo "</span></a>
                <ul>
                    <li><a href=\"";
        // line 70
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=50\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("辛口"), "html", null, true);
        echo "</span></a>
                    </li>
                    <li><a href=\"";
        // line 72
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=54\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("中辛口"), "html", null, true);
        echo "</span></a>
                    </li>
                </ul>
            </li>
            <li>
                <a href=\"";
        // line 77
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=39\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("スパークリングワイン"), "html", null, true);
        echo "</span></a>
                <ul>
                    <!--<li><a href=\"";
        // line 79
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=40\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("赤"), "html", null, true);
        echo "</span></a>
                    </li>-->
                    <li><a href=\"";
        // line 81
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=41\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("白"), "html", null, true);
        echo "</span></a>
                        <ul>
                            <!--<li><a href=\"";
        // line 83
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=58\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("辛口"), "html", null, true);
        echo "</span></a>
                            </li>
                            <li><a href=\"";
        // line 85
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=59\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("中辛口"), "html", null, true);
        echo "</span></a>
                            </li>
                            <li><a href=\"";
        // line 87
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=60\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("やや甘口"), "html", null, true);
        echo "</span></a>
                            </li>
                            <li><a href=\"";
        // line 89
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=61\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("甘口"), "html", null, true);
        echo "</span></a>
                            </li>-->
                        </ul>
                    </li>
                    <li><a href=\"";
        // line 93
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=57\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ロゼ"), "html", null, true);
        echo "</span></a>
                        <ul>
                            <!--<li><a href=\"";
        // line 95
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=66\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("辛口"), "html", null, true);
        echo "</span></a>
                            </li>
                            <li><a href=\"";
        // line 97
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=65\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("中辛口"), "html", null, true);
        echo "</span></a>
                            </li>
                            <li><a href=\"";
        // line 99
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=64\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("やや甘口"), "html", null, true);
        echo "</span></a>
                            </li>
                            <li><a href=\"";
        // line 101
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
        // line 108
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=53\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("セット商品"), "html", null, true);
        echo "</span></a>
            </li>
            <li>
                <a href=\"";
        // line 111
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=52\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("料理から探す"), "html", null, true);
        echo "</span></a>
                <ul>
                    <li><a href=\"";
        // line 113
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=67\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("牛肉料理"), "html", null, true);
        echo "</span></a>
                    </li>
                    <li><a href=\"";
        // line 115
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=68\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("豚肉料理"), "html", null, true);
        echo "</span></a>
                    </li>
                    <li><a href=\"";
        // line 117
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=69\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("鶏肉料理"), "html", null, true);
        echo "</span></a>
                    </li>
                    <li><a href=\"";
        // line 119
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=70\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("赤身魚"), "html", null, true);
        echo "</span></a>
                    </li>
                    <li><a href=\"";
        // line 121
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=71\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("白身魚"), "html", null, true);
        echo "</span></a>
                    </li>
                    <li><a href=\"";
        // line 123
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=72\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("カニ・エビ"), "html", null, true);
        echo "</span></a>
                    </li>
                    <li><a href=\"";
        // line 125
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=73\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("貝類"), "html", null, true);
        echo "</span></a>
                    </li>
                    <li><a href=\"";
        // line 127
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=74\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("パスタ"), "html", null, true);
        echo "</span></a>
                    </li>
                    <li><a href=\"";
        // line 129
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=75\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ブルーチーズ"), "html", null, true);
        echo "</span></a>
                    </li>
                </ul>

            </li>
            <li>
                <a href=\"";
        // line 135
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=51\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ワイン関連商品"), "html", null, true);
        echo "</span></a>
                <ul>
                    <!--<li><a href=\"";
        // line 137
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=79\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ワイングラス"), "html", null, true);
        echo "</span></a>
                    </li>-->
                    <li><a href=\"";
        // line 139
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=76\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ワインオープナー"), "html", null, true);
        echo "</span></a>
                    </li>
                    <li><a href=\"";
        // line 141
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
            $macros["__internal_4d5b1e2e5a855c037f02e16ded4f7172705d9a0d79256f7aa731098d12007e9a"] = $this;
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
        return array (  429 => 25,  420 => 22,  417 => 21,  413 => 20,  410 => 19,  408 => 18,  403 => 16,  396 => 15,  394 => 14,  381 => 13,  368 => 141,  361 => 139,  354 => 137,  347 => 135,  336 => 129,  329 => 127,  322 => 125,  315 => 123,  308 => 121,  301 => 119,  294 => 117,  287 => 115,  280 => 113,  273 => 111,  265 => 108,  253 => 101,  246 => 99,  239 => 97,  232 => 95,  225 => 93,  216 => 89,  209 => 87,  202 => 85,  195 => 83,  188 => 81,  181 => 79,  174 => 77,  164 => 72,  157 => 70,  150 => 68,  140 => 63,  133 => 61,  126 => 59,  119 => 57,  112 => 55,  102 => 50,  95 => 48,  88 => 46,  81 => 44,  73 => 41,  69 => 39,  60 => 37,  57 => 36,  53 => 35,  47 => 31,  45 => 30,  42 => 28,  39 => 12,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Block/category_nav_pc.twig", "/home/anotherworld/www/s-africa.wine/app/template/default/Block/category_nav_pc.twig");
    }
}
