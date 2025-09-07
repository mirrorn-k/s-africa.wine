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

/* @CustomerRank/default/Product/product_js.twig */
class __TwigTemplate_e534ff37dc69339dbcd7bc86c51c8033a705a4ff69bc485f826e20c64caa09eb extends \Eccube\Twig\Template
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
<script>
    CustomerPrices = ";
        // line 12
        echo json_encode(($context["CustomerPrices"] ?? null));
        echo ";

    \$(function() {
        // 規格1選択時
        \$('select[name=classcategory_id1]')
        .change(function() {
            var \$form = \$(this).parents('form');
            var product_id = \$form.find('input[name=product_id]').val();
            var \$sele1 = \$(this);

            eccube.checkStockCustomer(\$form, product_id, \$sele1.val() , '');
        });

        // 規格2選択時
        \$('select[name=classcategory_id2]')
        .change(function() {
            var \$form = \$(this).parents('form');
            var product_id = \$form.find('input[name=product_id]').val();
            var \$sele1 = \$form.find('select[name=classcategory_id1]');
            var \$sele2 = \$(this);
            eccube.checkStockCustomer(\$form, product_id, \$sele1.val(), \$sele2.val());
        });
    });

    eccube.customer_rank_price_origin = [];
    eccube.checkStockCustomer = function(\$form, product_id, classcat_id1, classcat_id2) {
        if(!\$form.parent().find('#customer_rank_price_default').length)return;
        classcat_id2 = classcat_id2 ? classcat_id2 : '';
        var classcat3;

        classcat3 = CustomerPrices[product_id][classcat_id1]['#' + classcat_id2];

        // 会員価格
        var \$customer_rank_price = \$form.parent().find('#customer_rank_price_default').first();
        if (typeof this.customer_rank_price_origin[product_id] === 'undefined') {
            this.customer_rank_price_origin[product_id] = \$customer_rank_price.text();
        }
        if (classcat3 && typeof classcat3.customer_rank_price_inc_tax !== 'undefined' && String(classcat3.customer_rank_price_inc_tax).length >= 1) {
            \$customer_rank_price.text('¥ ' + classcat3.customer_rank_price_inc_tax);
        } else {
            \$customer_rank_price.text(this.customer_rank_price_origin[product_id]);
        }
    };

</script>

";
    }

    public function getTemplateName()
    {
        return "@CustomerRank/default/Product/product_js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 12,  37 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "@CustomerRank/default/Product/product_js.twig", "/home/anotherworld/www/s-africa.wine/app/Plugin/CustomerRank/Resource/template/default/Product/product_js.twig");
    }
}
