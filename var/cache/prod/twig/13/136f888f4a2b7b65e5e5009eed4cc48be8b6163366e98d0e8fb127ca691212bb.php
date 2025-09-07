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

/* @CustomerRank/admin/Product/customer_price.twig */
class __TwigTemplate_343037b514fb70a65edebdc89f58854bbfa61691430e5f1fbc9f87f09c677ea6 extends \Eccube\Twig\Template
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
        if ((($context["has_class"] ?? null) == false)) {
            // line 12
            echo "    <div id=\"customer_price\" style=\"display:none;\">
    ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["CustomerRanks"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["CustomerRank"]) {
                // line 14
                echo "        ";
                $context["value"] = ("customer_price_" . twig_get_attribute($this->env, $this->source, $context["CustomerRank"], "id", [], "any", false, false, false, 14));
                // line 15
                echo "        <div class=\"row\">
            <div class=\"col-3\">
                <div class=\"d-inline-block\" data-toggle=\"tooltip\" data-placement=\"top\"
                     title=\"Tooltip\">
                    <span>";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", [], "any", false, false, false, 19), "children", [], "any", false, false, false, 19)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[($context["value"] ?? null)] ?? null) : null), "vars", [], "any", false, false, false, 19), "label", [], "any", false, false, false, 19), "html", null, true);
                echo "</span>
                </div>
            </div>
            <div class=\"col mb-2\">
                <div>
                    ";
                // line 24
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", [], "any", false, false, false, 24)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[($context["value"] ?? null)] ?? null) : null), 'widget');
                echo "
                    ";
                // line 25
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "class", [], "any", false, false, false, 25)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[($context["value"] ?? null)] ?? null) : null), 'errors');
                echo "
                </div>
            </div>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['CustomerRank'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "    </div>

    <script>
        \$(function() {
            \$('div.row').each(function(i) {
                if(\$(this).text().match(/";
            // line 35
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.sale_price"), "html", null, true);
            echo "/)){
                    \$elem = \$('#customer_price');
                    \$(this).after(\$elem.html());
                    \$elem.remove();
                }
            });
        });
    </script>
";
        }
    }

    public function getTemplateName()
    {
        return "@CustomerRank/admin/Product/customer_price.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 35,  81 => 30,  70 => 25,  66 => 24,  58 => 19,  52 => 15,  49 => 14,  45 => 13,  42 => 12,  40 => 11,  37 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "@CustomerRank/admin/Product/customer_price.twig", "/home/anotherworld/www/s-africa.wine/app/Plugin/CustomerRank/Resource/template/admin/Product/customer_price.twig");
    }
}
