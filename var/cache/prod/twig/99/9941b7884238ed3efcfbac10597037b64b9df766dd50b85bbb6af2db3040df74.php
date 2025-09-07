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

/* @admin/Setting/System/security.twig */
class __TwigTemplate_2cfc36c19f19d10f7ea3db0d64210065ae8f730415fda68474d15e63042d495c extends \Eccube\Twig\Template
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
            'stylesheet' => [$this, 'block_stylesheet'],
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
        // line 13
        $context["menus"] = [0 => "setting", 1 => "system", 2 => "security"];
        // line 18
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "@admin/Form/bootstrap_4_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Setting/System/security.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.security_management"), "html", null, true);
    }

    // line 16
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system"), "html", null, true);
    }

    // line 20
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "    <style type=\"text/css\">
        .col-sm-2 {
            max-width: none;
        }

        label {
            display: inline;
        }
    </style>
";
    }

    // line 32
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 33
        echo "    <form method=\"post\" action=\"";
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_setting_system_security");
        echo "\">
        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, false, 34), 'widget');
        echo "
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <span class=\"card-title\">";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.security__card_title"), "html", null, true);
        echo "</span>
                                </div>
                                <div class=\"col-4 text-right\">
                                    <a data-toggle=\"collapse\" href=\"#basicConfig\" aria-expanded=\"false\" aria-controls=\"basicConfig\"><i class=\"fa fa-angle-up fa-lg\"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"basicConfig\">
                            <div class=\"card-body\">
                                <!-- ディレクトリ名 -->
                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.system.security.admin_url"), "html", null, true);
        echo "\">
                                            <span>";
        // line 55
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.security.admin_url"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                        </div>
                                    </div>
                                    <div class=\"col\">
                                        ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "admin_route_dir", [], "any", false, false, false, 59), 'widget');
        echo "
                                        ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "admin_route_dir", [], "any", false, false, false, 60), 'errors');
        echo "
                                    </div>
                                </div>
                                <!-- IP制限 -->
                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.system.security.ip_limit"), "html", null, true);
        echo "\">
                                            <span>";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.security.ip_limit"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                        </div>
                                    </div>
                                    <div class=\"col\">
                                        ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "admin_allow_hosts", [], "any", false, false, false, 71), 'widget', ["attr" => ["rows" => "8", "placeholder" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.security.ip_limit_sample")]]);
        echo "
                                        ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "admin_allow_hosts", [], "any", false, false, false, 72), 'errors');
        echo "
                                        <p>";
        // line 73
        echo nl2br(twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.security.ip_limit_description"), "html", null, true));
        echo "</p>
                                    </div>
                                </div>
                                <!-- 強制SSL -->
                                <div class=\"row mb-2\">
                                    <div class=\"col-3\">
                                        <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.system.security.force_ssl"), "html", null, true);
        echo "\">
                                            <span>";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.security.force_ssl"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                        </div>
                                    </div>
                                    <div class=\"col\">
                                        ";
        // line 84
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 84), "secure", [], "any", false, false, false, 84)) {
            // line 85
            echo "                                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "force_ssl", [], "any", false, false, false, 85), 'widget');
            echo "
                                            ";
            // line 86
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "force_ssl", [], "any", false, false, false, 86), 'errors');
            echo "
                                        ";
        } else {
            // line 88
            echo "                                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "force_ssl", [], "any", false, false, false, 88), 'widget', ["attr" => ["disabled" => "disabled"]]);
            echo "
                                            ";
            // line 89
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "force_ssl", [], "any", false, false, false, 89), 'errors');
            echo "
                                            <p class=\"text-danger\">";
            // line 90
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.system.security.force_ssl_description"), "html", null, true);
            echo "</p>
                                        ";
        }
        // line 92
        echo "                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.card -->
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
                                    <button type=\"submit\" class=\"btn btn-ec-conversion px-5\">";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.registration"), "html", null, true);
        echo "</button>
                                </div>
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
        return "@admin/Setting/System/security.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 109,  209 => 92,  204 => 90,  200 => 89,  195 => 88,  190 => 86,  185 => 85,  183 => 84,  176 => 80,  172 => 79,  163 => 73,  159 => 72,  155 => 71,  148 => 67,  144 => 66,  135 => 60,  131 => 59,  124 => 55,  120 => 54,  105 => 42,  94 => 34,  89 => 33,  85 => 32,  72 => 21,  68 => 20,  61 => 16,  54 => 15,  49 => 11,  47 => 18,  45 => 13,  38 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Setting/System/security.twig", "/home/anotherworld/www/s-africa.wine/src/Eccube/Resource/template/admin/Setting/System/security.twig");
    }
}
