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
class __TwigTemplate_1b65a945caa448345b021fa40733219a03a53ac1616c0bad13fbb0b9bfed1475 extends \Eccube\Twig\Template
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
        if (twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "id", [], "any", false, false, false, 1)) {
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
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "PcLayout", [], "any", false, false, false, 20), 'widget');
            echo "
                ";
            // line 21
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "PcLayout", [], "any", false, false, false, 21), 'errors');
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
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "SpLayout", [], "any", false, false, false, 32), 'widget');
            echo "
                ";
            // line 33
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "SpLayout", [], "any", false, false, false, 33), 'errors');
            echo "
            </div>
        </div>
    </div>

";
        }
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
        return array (  87 => 33,  83 => 32,  76 => 28,  66 => 21,  62 => 20,  55 => 16,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@SSProductDetailPage/admin/Product/product.twig", "/home/anotherworld/www/s-africa.wine/app/Plugin/SSProductDetailPage/Resource/template/admin/Product/product.twig");
    }
}
