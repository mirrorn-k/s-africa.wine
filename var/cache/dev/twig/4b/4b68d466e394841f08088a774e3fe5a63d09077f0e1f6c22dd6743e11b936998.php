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
class __TwigTemplate_e11cbf3741f76686900493dcf4ed106ee1efdb21324d1565fd0ab41cb531d8af extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@TaxManagement/default/Product/list_discount_rate_script.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@TaxManagement/default/Product/list_discount_rate_script.twig"));

        // line 1
        echo "<script>
    \$(function() {
        var eccube_copy = window.eccube;
        var discountRate = {
            ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) || array_key_exists("pagination", $context) ? $context["pagination"] : (function () { throw new RuntimeError('Variable "pagination" does not exist.', 5, $this->source); })()));
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
        if (( !(null === twig_get_attribute($this->env, $this->source, (isset($context["TaxManagementConfig"]) || array_key_exists("TaxManagementConfig", $context) ? $context["TaxManagementConfig"] : (function () { throw new RuntimeError('Variable "TaxManagementConfig" does not exist.', 34, $this->source); })()), "isIncludeTaxFlag", [], "any", false, false, false, 34)) && (twig_get_attribute($this->env, $this->source, (isset($context["TaxManagementConfig"]) || array_key_exists("TaxManagementConfig", $context) ? $context["TaxManagementConfig"] : (function () { throw new RuntimeError('Variable "TaxManagementConfig" does not exist.', 34, $this->source); })()), "isIncludeTaxFlag", [], "any", false, false, false, 34) == false))) {
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
        if (( !(null === twig_get_attribute($this->env, $this->source, (isset($context["TaxManagementConfig"]) || array_key_exists("TaxManagementConfig", $context) ? $context["TaxManagementConfig"] : (function () { throw new RuntimeError('Variable "TaxManagementConfig" does not exist.', 72, $this->source); })()), "isIncludeTaxFlag", [], "any", false, false, false, 72)) && (twig_get_attribute($this->env, $this->source, (isset($context["TaxManagementConfig"]) || array_key_exists("TaxManagementConfig", $context) ? $context["TaxManagementConfig"] : (function () { throw new RuntimeError('Variable "TaxManagementConfig" does not exist.', 72, $this->source); })()), "isIncludeTaxFlag", [], "any", false, false, false, 72) == false))) {
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  165 => 75,  161 => 73,  159 => 72,  122 => 37,  118 => 35,  116 => 34,  88 => 8,  74 => 7,  66 => 6,  49 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<script>
    \$(function() {
        var eccube_copy = window.eccube;
        var discountRate = {
            {% for Product in pagination %}
            \"{{ Product.id|escape('js')}}\": {{ Product.discountRatesJson|raw }}{% if loop.last == false %}, {% endif %}
            {% endfor %}
        };
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
                        {% if TaxManagementConfig.isIncludeTaxFlag is not null and TaxManagementConfig.isIncludeTaxFlag == false %}
                        price02IncTax.text('￥'+classcategory.price02);
                        {% endif %}
                    } else {
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
                    {% if TaxManagementConfig.isIncludeTaxFlag is not null and TaxManagementConfig.isIncludeTaxFlag == false %}
                    price02IncTax.text('￥'+classcategory.price02);
                    {% endif %}
                } else {
                    if(priceOffOrigin[product_id].includes('～')) {
                        priceOff.addClass('show');
                    }
                    priceOff.text(priceOffOrigin[product_id]);
                }
            });
    });
</script>", "@TaxManagement/default/Product/list_discount_rate_script.twig", "/home/anotherworld/www/s-africa.wine/app/Plugin/TaxManagement/Resource/template/default/Product/list_discount_rate_script.twig");
    }
}
