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

/* Block/catherine_marshall.twig */
class __TwigTemplate_3cd416b1e03cc42e8e98e6545c6be83786439aff3bc85c13d0e09eaf62c22b43 extends \Eccube\Twig\Template
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
                            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_brand39.jpg"), "html", null, true);
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
            <h3 class=\"ltx_15 tx_bld\">ブドウ本来の美味しさとテロワールを表現するアーティスト</h3>
            <p class=\"m_5\">冷涼地区エルギンで標高約３００ｍの所に畑を持つ。醸造家キャサリンは、これまで南アフリカ国内のいくつかの優良ワイナリーの下で醸造に携わり、国内外の数多くのメダルを受賞、プラッター（南アフリカワインの評価本の権威。最大５星評価）で５星も獲得してきた。その後、自身のワインを作るために1996年に独立し、エルギンに小さなワイナリーを開いた。<br>彼女は、これまでの経験と、エルギンの土壌を把握した理論派的な醸造家。また、可能な限りナチュラルなアプローチで醸造する不干渉主義者（ミニマリスト）でもある。モットーは、それぞれの畑や土壌の特徴、ブドウ本来の美味しさをそのままワインに表現するテロワール主義。</p>
        </div>
        ";
                        }
                        // line 20
                        echo "        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Category'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 21
                    echo "        ";
                }
                // line 22
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductCategory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "        ";
        }
        // line 24
        echo "    </div>
</section><!-- / .goodsBrandArea cf m_20 -->";
    }

    public function getTemplateName()
    {
        return "Block/catherine_marshall.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 24,  104 => 23,  98 => 22,  95 => 21,  89 => 20,  74 => 14,  65 => 10,  62 => 9,  59 => 8,  54 => 7,  51 => 6,  48 => 5,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Block/catherine_marshall.twig", "/home/anotherworld/www/s-africa.wine/app/template/default/Block/catherine_marshall.twig");
    }
}
