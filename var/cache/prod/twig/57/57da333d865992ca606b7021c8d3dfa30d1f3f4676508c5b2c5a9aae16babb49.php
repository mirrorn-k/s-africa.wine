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

/* @CategoryExtensionB/admin/category.twig */
class __TwigTemplate_87e4cdaf4b3d7bde562dce9a9ed857a9d4b9bb1d54f0a8bc270ce2b2d049a1a1 extends \Eccube\Twig\Template
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
        if ((twig_length_filter($this->env, ($context["Categories"] ?? null)) > 0)) {
            // line 2
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["Categories"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["Category"]) {
                // line 3
                echo "        ";
                if ((twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 3) != twig_get_attribute($this->env, $this->source, ($context["TargetCategory"] ?? null), "id", [], "any", false, false, false, 3))) {
                    // line 4
                    echo "
            <script>
                \$(function () {
                    \$('#header_contents_";
                    // line 7
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 7), "html", null, true);
                    echo "').appendTo(\$('#category_";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 7), "html", null, true);
                    echo "_name').closest('form'));
                    \$('#footer_contents_";
                    // line 8
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 8), "html", null, true);
                    echo "').appendTo(\$('#category_";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 8), "html", null, true);
                    echo "_name').closest('form'));
                    \$('#category_extension_b_template_";
                    // line 9
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 9), "html", null, true);
                    echo "').remove();
                });
            </script>

            <div id=\"category_extension_b_template_";
                    // line 13
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 13), "html", null, true);
                    echo "\" style=\"display: none;\">

                <div id=\"header_contents_";
                    // line 15
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 15), "html", null, true);
                    echo "\" class=\"col-auto align-items-center\" style=\"width:90%; padding-top: 10px;\" >
                    <div class=\"row\">
                        <div class=\"col-3\">";
                    // line 17
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("category_extension_b.admin.header_contents.title"), "html", null, true);
                    echo "</div>
                        <div class=\"col-9\">
                            ";
                    // line 19
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["forms"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 19)] ?? null) : null), "header_contents", [], "any", false, false, false, 19), 'widget', ["attr" => ["data-origin-value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["forms"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 19)] ?? null) : null), "header_contents", [], "any", false, false, false, 19), "vars", [], "any", false, false, false, 19), "value", [], "any", false, false, false, 19)]]);
                    echo "
                            ";
                    // line 20
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["forms"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 20)] ?? null) : null), "header_contents", [], "any", false, false, false, 20), 'errors');
                    echo "
                        </div>
                    </div>
                </div>

                <div id=\"footer_contents_";
                    // line 25
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 25), "html", null, true);
                    echo "\" class=\"col-auto align-items-center\" style=\"width:90%; padding-top: 10px;\">
                    <div class=\"row\">
                        <div class=\"col-3\">";
                    // line 27
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("category_extension_b.admin.footer_contents.title"), "html", null, true);
                    echo "</div>
                        <div class=\"col-9\">
                            ";
                    // line 29
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = ($context["forms"] ?? null)) && is_array($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002) || $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 instanceof ArrayAccess ? ($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002[twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 29)] ?? null) : null), "footer_contents", [], "any", false, false, false, 29), 'widget', ["attr" => ["data-origin-value" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = ($context["forms"] ?? null)) && is_array($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4) || $__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 instanceof ArrayAccess ? ($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4[twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 29)] ?? null) : null), "footer_contents", [], "any", false, false, false, 29), "vars", [], "any", false, false, false, 29), "value", [], "any", false, false, false, 29)]]);
                    echo "
                            ";
                    // line 30
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = ($context["forms"] ?? null)) && is_array($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666) || $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 instanceof ArrayAccess ? ($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666[twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 30)] ?? null) : null), "footer_contents", [], "any", false, false, false, 30), 'errors');
                    echo "
                        </div>
                    </div>
                </div>

            </div>
        ";
                }
                // line 37
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "@CategoryExtensionB/admin/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 37,  112 => 30,  108 => 29,  103 => 27,  98 => 25,  90 => 20,  86 => 19,  81 => 17,  76 => 15,  71 => 13,  64 => 9,  58 => 8,  52 => 7,  47 => 4,  44 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@CategoryExtensionB/admin/category.twig", "/home/anotherworld/www/s-africa.wine/app/Plugin/CategoryExtensionB/Resource/template/admin/category.twig");
    }
}
