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

/* @CustomerRank/admin/Order/customer_rank.twig */
class __TwigTemplate_a362a00ca3f6484e939ee60cbcabb2705e3d4e8fb8a4e7c8263cab23a38c5520 extends \Eccube\Twig\Template
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

    <div id=\"customer_rank\" style=\"display:none;\">
        <div class=\"row\">
            <label class=\"col-3\">";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("customerrank.common.rank"), "html", null, true);
        echo "</label>
            <div class=\"col\">
                ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "customer_rank_name", [], "any", false, false, false, 16), "html", null, true);
        echo "&nbsp;&nbsp;&nbsp;";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "present_customer_rank_name", [], "any", false, false, false, 16))) {
            echo "(";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("customerrank.admin.order.edit.label.now"), "html", null, true);
            echo ":";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "present_customer_rank_name", [], "any", false, false, false, 16), "html", null, true);
            echo ")";
        }
        // line 17
        echo "            </div>
        </div>
    </div>

    <script>
        \$(function() {
            \$('label').each(function(i) {
                if(\$(this).text().match(/";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.customer_id"), "html", null, true);
        echo "/)){
                    \$elem = \$('#customer_rank');
                    \$(this).parent().after(\$elem.html());
                    \$elem.remove();
                }
            });

        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "@CustomerRank/admin/Order/customer_rank.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 24,  58 => 17,  48 => 16,  43 => 14,  37 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "@CustomerRank/admin/Order/customer_rank.twig", "/home/anotherworld/www/s-africa.wine/app/Plugin/CustomerRank/Resource/template/admin/Order/customer_rank.twig");
    }
}
