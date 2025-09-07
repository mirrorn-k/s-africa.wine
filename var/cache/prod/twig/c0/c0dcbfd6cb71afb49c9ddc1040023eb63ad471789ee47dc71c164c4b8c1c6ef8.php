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

/* Product/customer_price_detail.twig */
class __TwigTemplate_41bf2edef49dac644b01779239da83ce338bb5dc92005099ab9a2e2191da22e0 extends \Eccube\Twig\Template
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
        // line 10
        echo "
";
        // line 11
        if (($context["CustomerRank"] ?? null)) {
            // line 12
            echo "<div class=\"ec-productRole__price\">
    <span class=\"customer-price\"><!--";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["CustomerRank"] ?? null), "name", [], "any", false, false, false, 13), "html", null, true);
            echo "-->";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("customerrank.common.customer_price"), "html", null, true);
            echo "</span>
    ";
            // line 14
            if (twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "hasProductClass", [], "any", false, false, false, 14)) {
                // line 15
                if ((twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "getCustomerRankPriceIncTaxMin", [0 => twig_get_attribute($this->env, $this->source, ($context["CustomerRank"] ?? null), "id", [], "any", false, false, false, 15)], "method", false, false, false, 15) == twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "getCustomerRankPriceIncTaxMax", [0 => twig_get_attribute($this->env, $this->source, ($context["CustomerRank"] ?? null), "id", [], "any", false, false, false, 15)], "method", false, false, false, 15))) {
                    // line 16
                    echo "            <span class=\"ec-price\">
                <span class=\"ec-price__price\" id=\"customer_rank_price_default\">";
                    // line 17
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "getCustomerRankPriceIncTaxMin", [0 => twig_get_attribute($this->env, $this->source, ($context["CustomerRank"] ?? null), "id", [], "any", false, false, false, 17)], "method", false, false, false, 17)), "html", null, true);
                    echo "</span>
                <span class=\"ec-price__tax\">";
                    // line 18
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.tax_include"), "html", null, true);
                    echo "</span>
            </span>
        ";
                } else {
                    // line 21
                    echo "            <span class=\"ec-price\">
                <span class=\"ec-price__price\" id=\"customer_rank_price_default\">";
                    // line 22
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "getCustomerRankPriceIncTaxMin", [0 => twig_get_attribute($this->env, $this->source, ($context["CustomerRank"] ?? null), "id", [], "any", false, false, false, 22)], "method", false, false, false, 22)), "html", null, true);
                    echo " ～ ";
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "getCustomerRankPriceIncTaxMax", [0 => twig_get_attribute($this->env, $this->source, ($context["CustomerRank"] ?? null), "id", [], "any", false, false, false, 22)], "method", false, false, false, 22)), "html", null, true);
                    echo "</span>
                <span class=\"ec-price__tax\">";
                    // line 23
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.tax_include"), "html", null, true);
                    echo "</span>
            </span>
        ";
                }
                // line 26
                echo "    ";
            } else {
                // line 27
                echo "        <span class=\"ec-price\">
            <span class=\"ec-price__price\" id=\"customer_rank_price_default\">";
                // line 28
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "getCustomerRankPriceIncTaxMin", [0 => twig_get_attribute($this->env, $this->source, ($context["CustomerRank"] ?? null), "id", [], "any", false, false, false, 28)], "method", false, false, false, 28)), "html", null, true);
                echo "</span>
            <span class=\"ec-price__tax\">";
                // line 29
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.tax_include"), "html", null, true);
                echo "</span>
        </span>
    ";
            }
            // line 32
            echo "</div>
";
        }
    }

    public function getTemplateName()
    {
        return "Product/customer_price_detail.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 32,  93 => 29,  89 => 28,  86 => 27,  83 => 26,  77 => 23,  71 => 22,  68 => 21,  62 => 18,  58 => 17,  55 => 16,  53 => 15,  51 => 14,  45 => 13,  42 => 12,  40 => 11,  37 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "Product/customer_price_detail.twig", "/home/anotherworld/www/s-africa.wine/app/template/default/Product/customer_price_detail.twig");
    }
}
