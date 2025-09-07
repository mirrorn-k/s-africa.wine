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

/* @TaxManagement/default/Product/list_discount_rate_script.twig */
class __TwigTemplate_36b45bf1889362a698a0f4546bfcc2db10cbeda05f4ef2a0592a93b65a844ca9 extends \Eccube\Twig\Template
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
        echo "<script>
    \$(function() {
        var eccube_copy = window.eccube;
        var discountRate = {
            ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["Product"]) {
            // line 6
            echo "            \"";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, false, 6), "js"), "html", null, true);
            echo "\": ";
            echo twig_get_attribute($this->env, $this->source, $context["Product"], "discountRatesJson", [], "any", false, false, false, 6);
            if ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 6) == false)) {
                echo ", ";
            }
            // line 7
            echo "            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        };
        var priceOffOrigin = [];
        \$('.price_off').each(function(index, priceOff) {
            product_id_ = \$(priceOff).parents('li.ec-shelfGrid__item').find('input[name=product_id]').val();
            priceOffOrigin[product_id_] = \$(priceOff).text();
        });
        \$('select[name=classcategory_id1]')
            .change(function(event) {
                var \$form = \$(this).parents('form');
                var product_id = \$form.find('input[name=product_id]').val();
                var \$sele1 = \$(this);
                var \$sele2 = \$form.find('select[name=classcategory_id2]');
                priceOff = \$form.parent().find('.price_off').first();
                price02IncTax = \$form.parent().find('.price02-default').first();
                classcategory_id01 = \$sele1.val();
                if (!\$sele2.length) {
                    classcategory_id01 = \$sele1.val();
                    if(classcategory_id01 && classcategory_id01 !== '__unselected' && priceOff) {
                        classcategory = eccube_copy.productsClassCategories[product_id][classcategory_id01]['#'];
                        classcategory_discountRate = discountRate[product_id][classcategory_id01]['#'];
                        priceOff.removeClass('show');
                        if(classcategory_discountRate.discount_rate > 0) {
                            priceOff.text('(' + classcategory_discountRate.discount_rate + '%OFF)');
                        } else {
                            priceOff.text('');
                        }
                        ";
        // line 34
        if (( !(null === twig_get_attribute($this->env, $this->source, ($context["TaxManagementConfig"] ?? null), "isIncludeTaxFlag", [], "any", false, false, false, 34)) && (twig_get_attribute($this->env, $this->source, ($context["TaxManagementConfig"] ?? null), "isIncludeTaxFlag", [], "any", false, false, false, 34) == false))) {
            // line 35
            echo "                        price02IncTax.text('￥'+classcategory.price02);
                        ";
        }
        // line 37
        echo "                    } else {
                        if(priceOffOrigin[product_id].includes('～')) {
                            priceOff.addClass('show');
                        }
                        priceOff.text(priceOffOrigin[product_id]);
                    }
                } else {
                    if(priceOffOrigin[product_id].includes('～')) {
                        priceOff.addClass('show');
                    }
                    priceOff.text(priceOffOrigin[product_id]);
                }
            });

        // 規格2選択時
        \$('select[name=classcategory_id2]')
            .change(function() {
                var \$form = \$(this).parents('form');
                var product_id = \$form.find('input[name=product_id]').val();
                var \$sele1 = \$form.find('select[name=classcategory_id1]');
                var \$sele2 = \$(this);
                priceOff = \$form.parent().find('.price_off').first();
                price02IncTax = \$form.parent().find('.price02-default').first();
                classcategory_id01 = \$sele1.val();
                classcategory_id02 = \$sele2.val();
                
                if(classcategory_id01 && classcategory_id01 !== '__unselected' && classcategory_id02 && classcategory_id02 !== '__unselected' && priceOff) {
                    classcategory = eccube_copy.productsClassCategories[product_id][classcategory_id01]['#'+classcategory_id02];
                    classcategory_discountRate = discountRate[product_id][classcategory_id01]['#'+classcategory_id02];
                    priceOff.removeClass('show');
                    if(classcategory_discountRate.discount_rate > 0) {
                        priceOff.text('(' + classcategory_discountRate.discount_rate + '%OFF)');
                    } else {
                        priceOff.text('');
                    }
                    ";
        // line 72
        if (( !(null === twig_get_attribute($this->env, $this->source, ($context["TaxManagementConfig"] ?? null), "isIncludeTaxFlag", [], "any", false, false, false, 72)) && (twig_get_attribute($this->env, $this->source, ($context["TaxManagementConfig"] ?? null), "isIncludeTaxFlag", [], "any", false, false, false, 72) == false))) {
            // line 73
            echo "                    price02IncTax.text('￥'+classcategory.price02);
                    ";
        }
        // line 75
        echo "                } else {
                    if(priceOffOrigin[product_id].includes('～')) {
                        priceOff.addClass('show');
                    }
                    priceOff.text(priceOffOrigin[product_id]);
                }
            });
    });
</script>";
    }

    public function getTemplateName()
    {
        return "@TaxManagement/default/Product/list_discount_rate_script.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 75,  155 => 73,  153 => 72,  116 => 37,  112 => 35,  110 => 34,  82 => 8,  68 => 7,  60 => 6,  43 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@TaxManagement/default/Product/list_discount_rate_script.twig", "/home/anotherworld/www/s-africa.wine/app/Plugin/TaxManagement/Resource/template/default/Product/list_discount_rate_script.twig");
    }
}
