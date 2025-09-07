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

/* @RelatedProduct4/admin/modal_result.twig */
class __TwigTemplate_e9c2c918bad03cab47356c68aa898492f23ef2a3c872b7f9382b2949de391898 extends \Eccube\Twig\Template
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
        echo "<script>
    function fnRelatedProductSelectProduct(product_id, product_name, product_image_link, product_image_img, product_code_min, product_code_max) {
        var data_id = \$('#RelatedProductDataId').val();

        // Add product argument
        \$('#RelatedProduct-product_name' + data_id).text(product_name);
        \$('#RelatedProduct-product_image_link' + data_id).attr('href', product_image_link);
        \$('#RelatedProduct-product_image_img' + data_id).attr('src', product_image_img);

        if(product_code_min != product_code_max)
            product_code_min += ' ～ ' + product_code_max;
        \$('#RelatedProduct_product_code' + data_id).text(product_code_min);
        // Display new product
        \$('.RelatedProduct-view' + data_id).removeClass('d-none');
        \$(\"#admin_product_RelatedProducts_\" + data_id + \"_ChildProduct\").val(product_id);
        // モーダル閉じる.
        \$(\"#RelatedProductSearchResult\").children().remove();
        \$(\"#RelatedProductSearchProductModal\").modal(\"hide\");
        return false;
    }

    // 商品検索
    \$('#RelatedProductSearchProductModal .pagination a').on('click', function(event) {
        var list = \$('#RelatedProductSearchResult');
        list.children().remove();
        \$.ajax({
            type: 'GET',
            dataType: 'html',
            url: \$(this).attr('href'),
            success: function(data) {
                \$('#RelatedProductSearchResult').html(data);
            },
            error: function() {
                alert('paginator failed.');
            }
        });
        event.preventDefault();
    });
</script>
<div class=\"table-responsive\">
    <table class=\"table\">
        <tbody>
        ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["Product"]) {
            // line 53
            echo "            <form name=\"product_form";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, false, 53), "html", null, true);
            echo "\">
                <tr>
                    <td>
                        ";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "name", [], "any", false, false, false, 56), "html", null, true);
            echo "
                        <br>
                        <span>";
            // line 58
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "code_min", [], "any", false, false, false, 58), "html", null, true);
            echo "
                            ";
            // line 59
            if ((twig_get_attribute($this->env, $this->source, $context["Product"], "code_min", [], "any", false, false, false, 59) != twig_get_attribute($this->env, $this->source, $context["Product"], "code_max", [], "any", false, false, false, 59))) {
                echo " ～ ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "code_max", [], "any", false, false, false, 59), "html", null, true);
                echo "
                            ";
            }
            // line 61
            echo "                        </span>
                    </td>
                    <td class=\"text-right\">
                        <button onclick=\"fnRelatedProductSelectProduct('";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, false, 64), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "name", [], "any", false, false, false, 64), "js"), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_product_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["Product"], "id", [], "any", false, false, false, 64)]), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct(twig_get_attribute($this->env, $this->source, $context["Product"], "mainFileName", [], "any", false, false, false, 64)), "save_image"), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "code_min", [], "any", false, false, false, 64), "js"), "html", null, true);
            echo "', '";
            echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Product"], "code_max", [], "any", false, false, false, 64), "js"), "html", null, true);
            echo "')\" type=\"button\" class=\"btn btn-default btn-sm\">

                            <i class=\"fa fa-plus fa-lg font-weight-bold text-secondary\"></i>
                        </button>
                    </td>
                </tr>
            </form>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "
        </tbody>
    </table>
    ";
        // line 75
        if ((twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "totalItemCount", [], "any", false, false, false, 75) > 0)) {
            // line 76
            echo "        <div class=\"pagination\">
            ";
            // line 77
            $this->loadTemplate("@admin/pager.twig", "@RelatedProduct4/admin/modal_result.twig", 77)->display(twig_array_merge($context, ["pages" => twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "paginationData", [], "any", false, false, false, 77), "routes" => "admin_related_product_search_product_page"]));
            // line 78
            echo "        </div>
    ";
        }
        // line 80
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "@RelatedProduct4/admin/modal_result.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 80,  149 => 78,  147 => 77,  144 => 76,  142 => 75,  137 => 72,  113 => 64,  108 => 61,  101 => 59,  97 => 58,  92 => 56,  85 => 53,  81 => 52,  37 => 10,);
    }

    public function getSourceContext()
    {
        return new Source("", "@RelatedProduct4/admin/modal_result.twig", "/home/anotherworld/www/s-africa.wine/app/Plugin/RelatedProduct4/Resource/template/admin/modal_result.twig");
    }
}
