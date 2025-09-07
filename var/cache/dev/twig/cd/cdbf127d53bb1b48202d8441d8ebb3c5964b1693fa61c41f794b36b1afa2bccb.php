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

/* __string_template__15c0e91f4f56fd3538731832e810dd1c6f3d281674bef27bd4a3db8c623aaa06 */
class __TwigTemplate_cbca0b35daa853c4016dcde9bc559846f82d92b9711d5a157f8f505d8603b1a9 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__15c0e91f4f56fd3538731832e810dd1c6f3d281674bef27bd4a3db8c623aaa06"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "__string_template__15c0e91f4f56fd3538731832e810dd1c6f3d281674bef27bd4a3db8c623aaa06"));

        // line 1
        echo "<meta property=\"og:type\" content=\"og:product\" /><meta property=\"og:title\" content=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 1, $this->source); })()), "name", [], "any", false, false, false, 1), "html", null, true);
        echo "\" />
<meta property=\"og:image\" content=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage");
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 2, $this->source); })()), "main_list_image", [], "any", false, false, false, 2)), "save_image"), "html", null, true);
        echo "\" />
<meta property=\"og:description\" content=\"";
        // line 3
        echo twig_escape_filter($this->env, strip_tags(twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 3, $this->source); })()), "description_list", [], "any", false, false, false, 3)), "html", null, true);
        echo "\" />
<meta property=\"og:url\" content=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_detail", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 4, $this->source); })()), "id", [], "any", false, false, false, 4)]), "html", null, true);
        echo "\" />
<meta property=\"product:price:amount\" content=\"";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 5, $this->source); })()), "getPrice02IncTaxMin", [], "any", false, false, false, 5), "html", null, true);
        echo "\"/>
<meta property=\"product:price:currency\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 6, $this->source); })()), "currency", [], "any", false, false, false, 6), "html", null, true);
        echo "\"/>
<meta property=\"product:product_link\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_detail", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 7, $this->source); })()), "id", [], "any", false, false, false, 7)]), "html", null, true);
        echo "\"/>
<meta property=\"product:retailer_title\" content=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 8, $this->source); })()), "name", [], "any", false, false, false, 8), "html", null, true);
        echo "\"/>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "__string_template__15c0e91f4f56fd3538731832e810dd1c6f3d281674bef27bd4a3db8c623aaa06";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 8,  69 => 7,  65 => 6,  61 => 5,  57 => 4,  53 => 3,  48 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<meta property=\"og:type\" content=\"og:product\" /><meta property=\"og:title\" content=\"{{ Product.name }}\" />
<meta property=\"og:image\" content=\"{{ url('homepage') }}{{ asset(Product.main_list_image|no_image_product, 'save_image') }}\" />
<meta property=\"og:description\" content=\"{{ Product.description_list|striptags }}\" />
<meta property=\"og:url\" content=\"{{ url('product_detail', {'id': Product.id}) }}\" />
<meta property=\"product:price:amount\" content=\"{{ Product.getPrice02IncTaxMin }}\"/>
<meta property=\"product:price:currency\" content=\"{{ eccube_config.currency }}\"/>
<meta property=\"product:product_link\" content=\"{{ url('product_detail', {'id': Product.id}) }}\"/>
<meta property=\"product:retailer_title\" content=\"{{ Product.name }}\"/>", "__string_template__15c0e91f4f56fd3538731832e810dd1c6f3d281674bef27bd4a3db8c623aaa06", "");
    }
}
