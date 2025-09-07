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

/* @admin/Setting/System/masterdata.twig */
class __TwigTemplate_7b87dfa986b1cc259e5da99b65f299a5314261f313dcaad0f28872d642e0d2b6 extends \Eccube\Twig\Template
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
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return "@admin/default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        $context["menus"] = [0 => "setting", 1 => "system", 2 => "masterdata"];
        // line 12
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Setting/System/masterdata.twig", 12);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.master_data_management"), "html", null, true);
    }

    // line 17
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system"), "html", null, true);
    }

    // line 19
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        echo "    <div class=\"c-contentsArea__cols\">
        <div class=\"c-contentsArea__primaryCol\">
            <div class=\"c-primaryCol\">
                <form id=\"form1\" name=\"form1\" method=\"post\" action=\"";
        // line 23
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_setting_system_masterdata");
        echo "\">
                    ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, false, 24), 'widget');
        echo "
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.system.master_data_management"), "html", null, true);
        echo "\">
                                <span>";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.master_data_management"), "html", null, true);
        echo "</span></div><i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                            </div>
                        <div class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "masterdata", [], "any", false, false, false, 33), 'widget');
        echo "
                                    ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "masterdata", [], "any", false, false, false, 34), 'errors');
        echo "
                                </div>
                                <div class=\"col mb-2\">
                                    <button class=\"btn btn-primary\" type=\"submit\">";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.master_data.select"), "html", null, true);
        echo "</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

                ";
        // line 44
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["form2"] ?? null), "data", [], "any", false, false, false, 44))) {
            // line 45
            echo "                    <form id=\"form2\" name=\"form2\" method=\"post\" action=\"";
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_setting_system_masterdata_edit");
            echo "\">
                        ";
            // line 46
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form2"] ?? null), "masterdata_name", [], "any", false, false, false, 46), 'widget');
            echo "
                        ";
            // line 47
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form2"] ?? null), "_token", [], "any", false, false, false, 47), 'widget');
            echo "
                        <div class=\"card rounded border-0 mb-4\">
                            <div class=\"card-header\">
                                <div class=\"read\">
                                    ";
            // line 51
            echo nl2br(twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.master_data.description"), "html", null, true));
            echo "
                                </div>
                            </div>
                            <div class=\"card-body\">
                                <table class=\"table table-sm\">
                                    <thead>
                                    <tr>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center\" style=\"width: 20%\">
                                            ";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.master_data.id"), "html", null, true);
            echo "
                                        </th>
                                        <th class=\"border-top-0 pt-2 pb-2 text-center\">
                                            ";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.master_data.name"), "html", null, true);
            echo "
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form2"] ?? null), "data", [], "any", false, false, false, 67));
            foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
                // line 68
                echo "                                        <tr id=\"ex-masterdata-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["data"], "vars", [], "any", false, false, false, 68), "name", [], "any", false, false, false, 68), "html", null, true);
                echo "\">
                                            <td class=\"align-middle text-center pl-3\">
                                                ";
                // line 70
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["data"], "id", [], "any", false, false, false, 70), 'widget');
                echo "
                                                ";
                // line 71
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["data"], "id", [], "any", false, false, false, 71), 'errors');
                echo "
                                            </td>
                                            <td class=\"align-middle text-center\">
                                                ";
                // line 74
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["data"], "name", [], "any", false, false, false, 74), 'widget');
                echo "
                                                ";
                // line 75
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["data"], "name", [], "any", false, false, false, 75), 'errors');
                echo "
                                            </td>
                                        </tr>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 79
            echo "                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class=\"c-conversionArea\">
                            <div class=\"c-conversionArea__container\">
                                <div class=\"row justify-content-between align-items-center\">
                                    <div class=\"col-6\">
                                        <div class=\"c-conversionArea__leftBlockItem\">
                                        </div>
                                    </div>
                                    <div class=\"col-6\">
                                        <div id=\"ex-conversion-action\" class=\"row align-items-center justify-content-end\">
                                            <div class=\"col-auto\">
                                                <button class=\"btn btn-ec-conversion px-5\" type=\"submit\">";
            // line 94
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.save"), "html", null, true);
            echo "</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                ";
        }
        // line 103
        echo "            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@admin/Setting/System/masterdata.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  222 => 103,  210 => 94,  193 => 79,  183 => 75,  179 => 74,  173 => 71,  169 => 70,  163 => 68,  159 => 67,  151 => 62,  145 => 59,  134 => 51,  127 => 47,  123 => 46,  118 => 45,  116 => 44,  106 => 37,  100 => 34,  96 => 33,  88 => 28,  84 => 27,  78 => 24,  74 => 23,  69 => 20,  65 => 19,  58 => 17,  51 => 16,  46 => 12,  44 => 14,  37 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Setting/System/masterdata.twig", "/home/anotherworld/www/s-africa.wine/src/Eccube/Resource/template/admin/Setting/System/masterdata.twig");
    }
}
