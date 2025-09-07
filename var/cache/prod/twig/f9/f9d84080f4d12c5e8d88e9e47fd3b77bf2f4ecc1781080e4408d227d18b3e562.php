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

/* @admin/Setting/System/authority.twig */
class __TwigTemplate_5658f782c56d345ca111ba64be664136a3544393ba2415df778ac0ab676ca564 extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'sub_title' => [$this, 'block_sub_title'],
            'javascript' => [$this, 'block_javascript'],
            'main' => [$this, 'block_main'],
            '__internal_4361f78409f00efcd683ee9cd74158ba9cebedd2a2049cc007afe7e5660c43f5' => [$this, 'block___internal_4361f78409f00efcd683ee9cd74158ba9cebedd2a2049cc007afe7e5660c43f5'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return "@admin/default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        $context["menus"] = [0 => "setting", 1 => "system", 2 => "authority"];
        // line 18
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "@admin/Form/bootstrap_4_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Setting/System/authority.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.authority_management"), "html", null, true);
    }

    // line 16
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system"), "html", null, true);
    }

    // line 20
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "    <script>
        \$(function() {

            var \$collectionHolder = \$('#table-authority');
            var index = \$collectionHolder.find('.authority-rule').length;

            \$('.add').click(function() {
                var prototype = \$collectionHolder.data('prototype');
                index++;
                var newForm = prototype.replace(/__name__/g, index);
                var \$lastRow = \$('#table-authority tbody > tr:last')
                \$lastRow.after(newForm);
            });

            \$(document).on('click', '.delete', function() {
                \$(this).parent('td').parent('tr').remove();
                var idx = \$collectionHolder.find('.authority-rule').length;
                if (idx == 0) {
                    var prototype = \$collectionHolder.data('prototype');
                    var newForm = prototype.replace(/__name__/g, idx);
                    var \$lastRow = \$('#table-authority tbody');
                    \$lastRow.append(newForm);
                }
            });

        });
    </script>
";
    }

    // line 50
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 51
        echo "    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <form name=\"form1\" method=\"post\" action=\"";
        // line 54
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_setting_system_authority");
        echo "\">
                    ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, false, 55), 'widget');
        echo "
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <span class=\"card-title\">";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.authority__card_title"), "html", null, true);
        echo "</span>
                        </div>
                        <div class=\"card-body\">
                            <p>";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.authority.description", ["%url%" => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 61), "baseUrl", [], "any", false, false, false, 61) . "/") . twig_get_attribute($this->env, $this->source, ($context["eccube_config"] ?? null), "eccube_admin_route", [], "any", false, false, false, 61))]), "html", null, true);
        echo "</p>
                            <p>";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.authority.example");
        echo "</p>
                            <div class=\"table-responsive\">
                                <table id=\"table-authority\" class=\"table table-striped table-condensed with-border\"
                                       data-prototype=\"";
        // line 65
        echo twig_escape_filter($this->env,         $this->renderBlock("__internal_4361f78409f00efcd683ee9cd74158ba9cebedd2a2049cc007afe7e5660c43f5", $context, $blocks));
        echo "\">
                                    <thead>
                                    <tr>
                                        <th style=\"width: 210px;\">";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.authority.authority"), "html", null, true);
        echo "</th>
                                        <th>";
        // line 69
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.authority.deny_url"), "html", null, true);
        echo "</th>
                                        <th style=\"width: 80px;\"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["form"], "AuthorityRoles", [], "any", false, false, false, 74));
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
        foreach ($context['_seq'] as $context["_key"] => $context["form"]) {
            // line 75
            echo "                                        ";
            echo twig_include($this->env, $context, "@admin/Setting/System/authority_prototype.twig", ["form" => $context["form"]]);
            echo "
                                    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['form'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "                                    </tbody>
                                </table>
                            </div>
                            <p>
                                <button type=\"button\" class=\"btn btn-ec-regular add\">";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.authority.add_row"), "html", null, true);
        echo "</button>
                            </p>

                        </div>
                    </div>
                    <div class=\"c-conversionArea\">
                        <div class=\"c-conversionArea__container\">
                            <div class=\"row justify-content-between align-items-center\">
                                <div class=\"col-6\">
                                    <div class=\"c-conversionArea__leftBlockItem\"></div>
                                </div>
                                <div class=\"col-6\">
                                    <div id=\"ex-conversion-action\" class=\"row align-items-center justify-content-end\">
                                        <div class=\"col-auto\">
                                            <button class=\"btn btn-ec-conversion px-5\" type=\"submit\">";
        // line 95
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.registration"), "html", null, true);
        echo "</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
";
    }

    // line 65
    public function block___internal_4361f78409f00efcd683ee9cd74158ba9cebedd2a2049cc007afe7e5660c43f5($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_include($this->env, $context, "@admin/Setting/System/authority_prototype.twig", ["form" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "AuthorityRoles", [], "any", false, false, false, 65), "vars", [], "any", false, false, false, 65), "prototype", [], "any", false, false, false, 65)]);
    }

    public function getTemplateName()
    {
        return "@admin/Setting/System/authority.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 65,  214 => 95,  197 => 81,  191 => 77,  174 => 75,  157 => 74,  149 => 69,  145 => 68,  139 => 65,  133 => 62,  129 => 61,  123 => 58,  117 => 55,  113 => 54,  108 => 51,  104 => 50,  73 => 21,  69 => 20,  62 => 16,  55 => 15,  50 => 11,  48 => 18,  46 => 13,  39 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Setting/System/authority.twig", "/home/anotherworld/www/s-africa.wine/src/Eccube/Resource/template/admin/Setting/System/authority.twig");
    }
}
