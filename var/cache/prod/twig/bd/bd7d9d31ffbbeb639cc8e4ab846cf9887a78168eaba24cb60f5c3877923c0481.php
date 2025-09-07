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

/* Block/david_nadia.twig */
class __TwigTemplate_88c2c52c1b1dfe87fa5e34b797fd5c560dfb036aa493afbb0d3924f424dbf392 extends \Eccube\Twig\Template
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
        // line 1
        echo "<section class=\"container cf m_20\">
    <div class=\"row\">
        ";
        // line 3
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "ProductCategories", [], "any", false, false, false, 3))) {
            // line 4
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "ProductCategories", [], "any", false, false, false, 4));
            foreach ($context['_seq'] as $context["_key"] => $context["ProductCategory"]) {
                // line 5
                echo "        ";
                $context["Cat"] = twig_get_attribute($this->env, $this->source, $context["ProductCategory"], "Category", [], "any", false, false, false, 5);
                // line 6
                echo "        ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Cat"] ?? null), "Parent", [], "any", false, false, false, 6), "id", [], "any", false, false, false, 6) == 62)) {
                    // line 7
                    echo "        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ProductCategory"], "Category", [], "any", false, false, false, 7), "path", [], "any", false, false, false, 7));
                    foreach ($context['_seq'] as $context["_key"] => $context["Category"]) {
                        // line 8
                        echo "        ";
                        if ((twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 8) != 62)) {
                            // line 9
                            echo "        <div class=\"col-8 offset-2 col-md-3 offset-md-0\">
            <img src=\"";
                            // line 10
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_brand37.gif"), "html", null, true);
                            echo "\" alt=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Category"], "name", [], "any", false, false, false, 10), "html", null, true);
                            echo "\" style=\"width: 100%;\">
        </div>
        <div class=\"col-12 col-md-9\">
            <h3 class=\"ltx_15 tx_bld\">
                <a href=\"";
                            // line 14
                            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
                            echo "?category_id=";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 14), "html", null, true);
                            echo "\" title=\"";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Category"], "name", [], "any", false, false, false, 14), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Category"], "name", [], "any", false, false, false, 14), "html", null, true);
                            echo "</a>
            </h3>
            <h3 class=\"ltx_15 tx_bld\">
スワートランドの注目の\"新世代\"自然派生産者</h3>
            <p class=\"m_5\">注目の\"新世代\"生産者で、スワートランド・インデペンデント・プロデューサーズのメンバーの自然派生産者です。<br>ティム・アトキン氏評「南アフリカワイン・ランキング」2級生産者。オーナー兼醸造家のデイビッドは、ステレンボシュ大学でワイン醸造学を学んだ後、南アフリカを代表する生産者や海外のワイナリーで修業を積みました。その際、特に南アフリカの南仏系品種に可能性を感じ、生まれ故郷のスワートランドに戻り、2010年に自身のワイン「デイビッド」をスタートさせました。</p>
        </div>
        ";
                        }
                        // line 21
                        echo "        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Category'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 22
                    echo "        ";
                }
                // line 23
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductCategory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "        ";
        }
        // line 25
        echo "    </div>
</section><!-- / .goodsBrandArea cf m_20 -->";
    }

    public function getTemplateName()
    {
        return "Block/david_nadia.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 25,  105 => 24,  99 => 23,  96 => 22,  90 => 21,  74 => 14,  65 => 10,  62 => 9,  59 => 8,  54 => 7,  51 => 6,  48 => 5,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Block/david_nadia.twig", "/home/anotherworld/www/s-africa.wine/app/template/default/Block/david_nadia.twig");
    }
}
