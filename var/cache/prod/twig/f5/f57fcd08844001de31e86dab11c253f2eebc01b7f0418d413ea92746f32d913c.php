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

/* @CustomerRank/admin/Setting/config.twig */
class __TwigTemplate_987c59409fcbb5bed70f4393029df2bf0b039a1f70c3cd381042f3ccd913164a extends \Eccube\Twig\Template
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
        // line 12
        $context["menus"] = [0 => "setting", 1 => "setting_rank"];
        // line 16
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@CustomerRank/admin/Setting/config.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("customerrank.admin.nav.setting.rank"), "html", null, true);
    }

    // line 14
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting"), "html", null, true);
    }

    // line 18
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "<script>
var setModeAndSubmit = function(mode, keyname, keyid) {
    document.form1.mode.value = mode;
    if(keyname !== undefined && keyname !== \"\" && keyid !== undefined && keyid !== \"\") {
        document.form1[keyname].value = keyid;
    }
    document.form1.submit();
};
</script>
";
    }

    // line 30
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 31
        echo "    <form role=\"form\" class=\"form-row\" name=\"form1\" id=\"form1\" method=\"post\" action=\"?\">
        ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, false, 32), 'widget');
        echo "
        <input type=\"hidden\" name=\"mode\" value=\"regist\">
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\"><span class=\"card-title\">";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("customerrank.admin.setting.title"), "html", null, true);
        echo "</span>
                                </div>
                                <div class=\"col-4 text-right\">
                                    <a data-toggle=\"collapse\" href=\"#ordererInfo\"
                                       aria-expanded=\"false\" aria-controls=\"ordererInfo\">
                                        <i class=\"fa fa-angle-up fa-lg\"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"ordererInfo\">
                            <div class=\"card-body\">
                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <span>";
        // line 54
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 54), "login_disp", [], "any", false, false, false, 54), "vars", [], "any", false, false, false, 54), "label", [], "any", false, false, false, 54), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col\">
                                        ";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "login_disp", [], "any", false, false, false, 57), 'widget');
        echo "
                                        ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "login_disp", [], "any", false, false, false, 58), 'errors');
        echo "
                                    </div>
                                </div>
                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <span>";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 63), "term", [], "any", false, false, false, 63), "vars", [], "any", false, false, false, 63), "label", [], "any", false, false, false, 63), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col\">
                                        ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "term", [], "any", false, false, false, 66), 'widget');
        echo "
                                        ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "term", [], "any", false, false, false, 67), 'errors');
        echo "
                                    </div>
                                </div>
                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <span>";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 72), "term_start", [], "any", false, false, false, 72), "vars", [], "any", false, false, false, 72), "label", [], "any", false, false, false, 72), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col\">
                                        ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "term_start", [], "any", false, false, false, 75), 'widget');
        echo "
                                        ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "term_start", [], "any", false, false, false, 76), 'errors');
        echo "
                                    </div>
                                </div>
                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <span>";
        // line 81
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 81), "rank_down", [], "any", false, false, false, 81), "vars", [], "any", false, false, false, 81), "label", [], "any", false, false, false, 81), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col\">
                                        ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "rank_down", [], "any", false, false, false, 84), 'widget');
        echo "
                                        ";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "rank_down", [], "any", false, false, false, 85), 'errors');
        echo "
                                    </div>
                                </div>
                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <span>";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 90), "target_status", [], "any", false, false, false, 90), "vars", [], "any", false, false, false, 90), "label", [], "any", false, false, false, 90), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col\">
                                        ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "target_status", [], "any", false, false, false, 93), 'widget');
        echo "
                                        ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "target_status", [], "any", false, false, false, 94), 'errors');
        echo "
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
                                <button class=\"btn btn-ec-regular\" onClick=\"setModeAndSubmit('rank_check','','');\"
                                        type=\"button\">";
        // line 114
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("customerrank.admin.setting.rank.label.rank_check"), "html", null, true);
        echo "</button>
                            </div>
                            <div class=\"col-auto\">
                                <button class=\"btn btn-ec-conversion px-5\"
                                        type=\"submit\">";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("customerrank.admin.common.save"), "html", null, true);
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

    public function getTemplateName()
    {
        return "@CustomerRank/admin/Setting/config.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  232 => 118,  225 => 114,  202 => 94,  198 => 93,  192 => 90,  184 => 85,  180 => 84,  174 => 81,  166 => 76,  162 => 75,  156 => 72,  148 => 67,  144 => 66,  138 => 63,  130 => 58,  126 => 57,  120 => 54,  103 => 40,  92 => 32,  89 => 31,  85 => 30,  72 => 19,  68 => 18,  61 => 14,  54 => 13,  49 => 11,  47 => 16,  45 => 12,  38 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@CustomerRank/admin/Setting/config.twig", "/home/anotherworld/www/s-africa.wine/app/Plugin/CustomerRank/Resource/template/admin/Setting/config.twig");
    }
}
