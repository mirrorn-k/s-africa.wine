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
class __TwigTemplate_6c347edad929a4af0882b074ac3a07ea0bde1eeb610d2f4b8aaf8eb77fd26985 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@CategoryExtensionB/default/category.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@CategoryExtensionB/default/category.twig"));

        // line 1
        if ( !twig_test_empty((isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 1, $this->source); })()))) {
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
            echo nl2br(twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 14, $this->source); })()), "header_contents", [], "any", false, false, false, 14));
            echo "</p>
    </div>

    <div id=\"category_extension_b_footer_contents\">
        <p style=\"\">";
            // line 18
            echo nl2br(twig_get_attribute($this->env, $this->source, (isset($context["Category"]) || array_key_exists("Category", $context) ? $context["Category"] : (function () { throw new RuntimeError('Variable "Category" does not exist.', 18, $this->source); })()), "footer_contents", [], "any", false, false, false, 18));
            echo "</p>
    </div>
</div>
";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  66 => 18,  59 => 14,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if Category is not empty %}
<script>
    \$(function () {

        \$('#category_extension_b_header_contents').prependTo( \$('.ec-layoutRole__main').first() );
        \$('#category_extension_b_footer_contents').appendTo( \$('.ec-layoutRole__main').first() );
        \$('#category_extension_b_template').remove();

    });
</script>

<div id=\"category_extension_b_template\" style=\"display: none;\">
    <div id=\"category_extension_b_header_contents\">
        <p style=\"\">{{ Category.header_contents|raw|nl2br }}</p>
    </div>

    <div id=\"category_extension_b_footer_contents\">
        <p style=\"\">{{ Category.footer_contents|raw|nl2br }}</p>
    </div>
</div>
{% endif %}", "@CategoryExtensionB/default/category.twig", "/home/anotherworld/www/s-africa.wine/app/Plugin/CategoryExtensionB/Resource/template/default/category.twig");
    }
}
