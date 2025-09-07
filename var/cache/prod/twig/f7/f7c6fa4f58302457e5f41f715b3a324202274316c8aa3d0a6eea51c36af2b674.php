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

/* @CategoryExtensionB/default/category.twig */
class __TwigTemplate_a306878f9b8ffb8999b33c850337cf86f2d62e4ccdc300208b1e63d199dcb9cf extends \Eccube\Twig\Template
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
        if ( !twig_test_empty(($context["Category"] ?? null))) {
            // line 2
            echo "<script>
    \$(function () {

        \$('#category_extension_b_header_contents').prependTo( \$('.ec-layoutRole__main').first() );
        \$('#category_extension_b_footer_contents').appendTo( \$('.ec-layoutRole__main').first() );
        \$('#category_extension_b_template').remove();

    });
</script>

<div id=\"category_extension_b_template\" style=\"display: none;\">
    <div id=\"category_extension_b_header_contents\">
        <p style=\"\">";
            // line 14
            echo nl2br(twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "header_contents", [], "any", false, false, false, 14));
            echo "</p>
    </div>

    <div id=\"category_extension_b_footer_contents\">
        <p style=\"\">";
            // line 18
            echo nl2br(twig_get_attribute($this->env, $this->source, ($context["Category"] ?? null), "footer_contents", [], "any", false, false, false, 18));
            echo "</p>
    </div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@CategoryExtensionB/default/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 18,  53 => 14,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@CategoryExtensionB/default/category.twig", "/home/anotherworld/www/s-africa.wine/app/Plugin/CategoryExtensionB/Resource/template/default/category.twig");
    }
}
