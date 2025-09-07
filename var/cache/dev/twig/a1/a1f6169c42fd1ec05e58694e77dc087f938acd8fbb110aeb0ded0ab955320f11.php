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

/* @SSProductDetailPage/admin/Product/product.twig */
class __TwigTemplate_6378a52466e0eb66c4180b01912ec3bc1fea575811451e74cf319d988c321571 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SSProductDetailPage/admin/Product/product.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@SSProductDetailPage/admin/Product/product.twig"));

        // line 1
        if (twig_get_attribute($this->env, $this->source, (isset($context["Product"]) || array_key_exists("Product", $context) ? $context["Product"] : (function () { throw new RuntimeError('Variable "Product" does not exist.', 1, $this->source); })()), "id", [], "any", false, false, false, 1)) {
            // line 2
            echo "
    <script>
        \$(function () {
            \$('#product_pc').appendTo(\$('#basicConfig .card-body'));
            \$('#product_mobile').appendTo(\$('#basicConfig .card-body'));
            \$('#product_layout_template').remove();
        });
    </script>

    <div id=\"product_layout_template\" style=\"display: none;\">

        <div class=\"row\" id=\"product_pc\">
            <div class=\"col-3\">
                <div class=\"d-inline-block\">
                    <span>";
            // line 16
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_layout.admin.product_pc.title"), "html", null, true);
            echo "</span>
                </div>
            </div>
            <div class=\"col mb-2\">
                ";
            // line 20
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "PcLayout", [], "any", false, false, false, 20), 'widget');
            echo "
                ";
            // line 21
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "PcLayout", [], "any", false, false, false, 21), 'errors');
            echo "
            </div>
        </div>

        <div class=\"row\" id=\"product_mobile\">
            <div class=\"col-3\">
                <div class=\"d-inline-block\">
                    <span>";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("product_layout.admin.product_mobile.title"), "html", null, true);
            echo "</span>
                </div>
            </div>
            <div class=\"col mb-2\">
                ";
            // line 32
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "SpLayout", [], "any", false, false, false, 32), 'widget');
            echo "
                ";
            // line 33
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "SpLayout", [], "any", false, false, false, 33), 'errors');
            echo "
            </div>
        </div>
    </div>

";
        }
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@SSProductDetailPage/admin/Product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 33,  89 => 32,  82 => 28,  72 => 21,  68 => 20,  61 => 16,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if Product.id %}

    <script>
        \$(function () {
            \$('#product_pc').appendTo(\$('#basicConfig .card-body'));
            \$('#product_mobile').appendTo(\$('#basicConfig .card-body'));
            \$('#product_layout_template').remove();
        });
    </script>

    <div id=\"product_layout_template\" style=\"display: none;\">

        <div class=\"row\" id=\"product_pc\">
            <div class=\"col-3\">
                <div class=\"d-inline-block\">
                    <span>{{ 'product_layout.admin.product_pc.title'|trans }}</span>
                </div>
            </div>
            <div class=\"col mb-2\">
                {{ form_widget(form.PcLayout) }}
                {{ form_errors(form.PcLayout) }}
            </div>
        </div>

        <div class=\"row\" id=\"product_mobile\">
            <div class=\"col-3\">
                <div class=\"d-inline-block\">
                    <span>{{ 'product_layout.admin.product_mobile.title'|trans }}</span>
                </div>
            </div>
            <div class=\"col mb-2\">
                {{ form_widget(form.SpLayout) }}
                {{ form_errors(form.SpLayout) }}
            </div>
        </div>
    </div>

{% endif %}", "@SSProductDetailPage/admin/Product/product.twig", "/home/anotherworld/www/s-africa.wine/app/Plugin/SSProductDetailPage/Resource/template/admin/Product/product.twig");
    }
}
