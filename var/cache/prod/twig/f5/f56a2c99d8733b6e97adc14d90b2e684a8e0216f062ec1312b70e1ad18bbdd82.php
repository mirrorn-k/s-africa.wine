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

/* @admin/Setting/System/log.twig */
class __TwigTemplate_3d98b9482ff5e1f7541ed8a874f71b723486cfe3993d17ff87a3770e500ef2e1 extends \Eccube\Twig\Template
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
        $context["menus"] = [0 => "setting", 1 => "system", 2 => "log"];
        // line 12
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Setting/System/log.twig", 12);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.log_display"), "html", null, true);
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
        echo "    <div class=\"c-outsideBlock\">
        <div class=\"c-outsideBlock__contents\">
            <div class=\"card rounded border-0 mb-4\">
                <div class=\"card-header\">
                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.system.log_display"), "html", null, true);
        echo "\">
                        <span class=\"card-title\">";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.log_display"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                    </div>
                </div>
                <div class=\"card-body\">
                    <form name=\"form1\" id=\"form1\" method=\"post\">
                        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, false, 30), 'widget');
        echo "
                        <div class=\"form-inline form-group\">
                            <div class=\"form-group pr-3\">
                                ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "files", [], "any", false, false, false, 33), 'widget');
        echo "
                            </div>
                            <div class=\"form-group pr-3\">
                                ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "line_max", [], "any", false, false, false, 36), 'widget');
        echo "
                                <span class=\"ml-2\">";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.log.line_number"), "html", null, true);
        echo "</span>
                            </div>
                            <div class=\"form-group pr-3\">
                                <button type=\"submit\"
                                        class=\"btn btn-ec-conversion\">";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.log.read"), "html", null, true);
        echo "</button>
                            </div>
                            ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "line_max", [], "any", false, false, false, 43), 'errors');
        echo "
                        </div>
                    </form>
                    <div>
<textarea class=\"form-control\" rows=\"20\" wrap=\"off\" readonly>
";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["log"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
            // line 49
            echo "    ";
            echo twig_escape_filter($this->env, $context["line"], "html", null, true);
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "</textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "@admin/Setting/System/log.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 51,  127 => 49,  123 => 48,  115 => 43,  110 => 41,  103 => 37,  99 => 36,  93 => 33,  87 => 30,  79 => 25,  75 => 24,  69 => 20,  65 => 19,  58 => 17,  51 => 16,  46 => 12,  44 => 14,  37 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Setting/System/log.twig", "/home/anotherworld/www/s-africa.wine/src/Eccube/Resource/template/admin/Setting/System/log.twig");
    }
}
