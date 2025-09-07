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

/* @CustomerRank/admin/Order/order_index.twig */
class __TwigTemplate_0219a78482237920ac7cc7e332713ec31135e1b005eba350e7d0c694de97b2c5 extends \Eccube\Twig\Template
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
<div id=\"search_customer_rank\" style=\"display:none;\">
    <div class=\"row mb-2\">
        <div class=\"col\">
            <div class=\"form-row\">
                <div class=\"col-12\">
                <p class=\"col-form-label\">";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("customerrank.common.rank"), "html", null, true);
        echo "</p>
                ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "customer_rank", [], "any", false, false, false, 17), 'widget', ["label_attr" => ["class" => "checkbox-inline"]]);
        echo "
                ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchForm"] ?? null), "customer_rank", [], "any", false, false, false, 18), 'errors');
        echo "
                <p style=\"color:#F00;\">";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("customerrank.admin.order.index.search.description.customerrank"), "html", null, true);
        echo "</p>
                </div>
            </div>
        </div>
        <div class=\"col\">
        </div>
    </div>
</div>

<script>
    \$(function() {
        \$elem = \$('#search_customer_rank');
        \$('#searchDetail').prepend(\$elem.html());
        \$elem.remove();
    });
</script>";
    }

    public function getTemplateName()
    {
        return "@CustomerRank/admin/Order/order_index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 19,  53 => 18,  49 => 17,  45 => 16,  37 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "@CustomerRank/admin/Order/order_index.twig", "/home/anotherworld/www/s-africa.wine/app/Plugin/CustomerRank/Resource/template/admin/Order/order_index.twig");
    }
}
