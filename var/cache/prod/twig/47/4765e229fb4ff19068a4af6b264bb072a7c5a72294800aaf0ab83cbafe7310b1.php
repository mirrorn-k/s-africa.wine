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

/* @TaxManagement/default/Product/detail_discount_rate_script.twig */
class __TwigTemplate_c70f9bd7c45c14b15c59a2df6e00705f8382ebd2047effba10f4ce173652762e extends \Eccube\Twig\Template
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
        echo "
<script>
    \$(function() {
        var eccube_copy = window.eccube;
        var discountRate = ";
        // line 5
        echo twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "discountRatesJson", [], "any", false, false, false, 5);
        echo ";
        price02IncTax = \$('#form1').parent().find('.price02-default').first();
        price02NoTax = \$('#form1').parent().find('.price02-default-no-tax').first();
        priceOff = \$('#form1').parent().find('.price_off').first();
        price02NoTaxOrigin = price02NoTax.text();
        priceOffOrigin = priceOff.text();
        ";
        // line 11
        if (twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "classcategory_id2", [], "any", true, true, false, 11)) {
            // line 12
            echo "        \$('#form1').on('change', 'select[name=classcategory_id2], select[name=classcategory_id1]', function() {
            classcategory_id01 = \$('#form1').find('select[name=classcategory_id1]').val();
            classcategory_id02 = \$('#form1').find('select[name=classcategory_id2]').val();
            if(classcategory_id01 && classcategory_id01 !== '__unselected' && classcategory_id02 && classcategory_id02 !== '__unselected') {
                classcategory_discountRate = discountRate[classcategory_id01]['#'+classcategory_id02];
                ";
            // line 17
            if (( !(null === twig_get_attribute($this->env, $this->source, ($context["TaxManagementConfig"] ?? null), "isIncludeTaxFlag", [], "any", false, false, false, 17)) && (twig_get_attribute($this->env, $this->source, ($context["TaxManagementConfig"] ?? null), "isIncludeTaxFlag", [], "any", false, false, false, 17) == false))) {
                // line 18
                echo "                classcategory = eccube_copy.classCategories[classcategory_id01]['#'+classcategory_id02];
                price02NoTax.text('￥'+classcategory.price02);
                price02IncTax.text('(' + price02IncTax.text() + '税込)');
                ";
            }
            // line 22
            echo "                if(classcategory_discountRate.discount_rate > 0) {
                    priceOff.removeClass('hidden');
                    priceOff.text(classcategory_discountRate.discount_rate + '%OFF');
                } else {
                    priceOff.addClass('hidden');
                }
            } else {
                price02NoTax.text(price02NoTaxOrigin);
                priceOff.text(priceOffOrigin);
            }
        })
        ";
        } elseif (twig_get_attribute($this->env, $this->source,         // line 33
($context["form"] ?? null), "classcategory_id1", [], "any", true, true, false, 33)) {
            // line 34
            echo "        \$('#form1').find('select[name=classcategory_id1]').on('change', function() {
            classcategory_id01 = \$('#form1').find('select[name=classcategory_id1]').val();
            if(classcategory_id01 && classcategory_id01 !== '__unselected') {
                classcategory_discountRate = discountRate[classcategory_id01]['#'];
                ";
            // line 38
            if (( !(null === twig_get_attribute($this->env, $this->source, ($context["TaxManagementConfig"] ?? null), "isIncludeTaxFlag", [], "any", false, false, false, 38)) && (twig_get_attribute($this->env, $this->source, ($context["TaxManagementConfig"] ?? null), "isIncludeTaxFlag", [], "any", false, false, false, 38) == false))) {
                // line 39
                echo "                classcategory = eccube_copy.classCategories[classcategory_id01]['#'];
                price02NoTax.text('￥'+classcategory.price02);
                price02IncTax.text('(' + price02IncTax.text() + '税込)');
                ";
            }
            // line 43
            echo "                if(classcategory_discountRate.discount_rate > 0) {
                    priceOff.removeClass('hidden');
                    priceOff.text(classcategory_discountRate.discount_rate + '%OFF');
                } else {
                    priceOff.addClass('hidden');
                }
            } else {
                price02NoTax.text(price02NoTaxOrigin);
                priceOff.text(priceOffOrigin);
            }
        })
        ";
        }
        // line 55
        echo "    });
</script>";
    }

    public function getTemplateName()
    {
        return "@TaxManagement/default/Product/detail_discount_rate_script.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 55,  98 => 43,  92 => 39,  90 => 38,  84 => 34,  82 => 33,  69 => 22,  63 => 18,  61 => 17,  54 => 12,  52 => 11,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@TaxManagement/default/Product/detail_discount_rate_script.twig", "/home/anotherworld/www/s-africa.wine/app/Plugin/TaxManagement/Resource/template/default/Product/detail_discount_rate_script.twig");
    }
}
