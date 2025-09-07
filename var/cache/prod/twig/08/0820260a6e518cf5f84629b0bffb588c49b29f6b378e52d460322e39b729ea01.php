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

/* @CustomerRank/admin/Content/detail.twig */
class __TwigTemplate_1ac4867a890e2707cff9d3c0fd7e39cbd96fc3fe182f7daab190e99d0d8e16f1 extends \Eccube\Twig\Template
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
        $context["menus"] = [0 => "content", 1 => "customerrank", 2 => "detail"];
        // line 16
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@CustomerRank/admin/Content/detail.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("customerrank.admin.nav.content.customerrank"), "html", null, true);
    }

    // line 14
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.contents_management"), "html", null, true);
    }

    // line 18
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 19
        echo "    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/ace/1.2.8/ace.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/ace/1.2.8/ext-language_tools.js\"></script>
    <script>
        ace.require('ace/ext/language_tools');
        var editor = ace.edit('editor');
        editor.session.setMode('ace/mode/twig');
        editor.setTheme('ace/theme/tomorrow');
        editor.setValue('";
        // line 26
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "detail_html", [], "any", false, false, false, 26), "vars", [], "any", false, false, false, 26), "value", [], "any", false, false, false, 26), "js"), "html", null, true);
        echo "');
        editor.setOptions({
            enableBasicAutocompletion: true,
            enableSnippets: true,
            enableLiveAutocompletion: true,
            showInvisibles: true
        });

        \$('#content_customerrank_form').on('submit', function(elem) {
            \$('#customer_rank_design_detail_html').val(editor.getValue());
        });

        var setModeAndSubmit = function(mode, keyname, keyid) {
            document.content_customerrank_form.mode.value = mode;
            if(keyname !== undefined && keyname !== \"\" && keyid !== undefined && keyid !== \"\") {
                document.content_customerrank_form[keyname].value = keyid;
            }
            document.content_customerrank_form.submit();
        };
    </script>
";
    }

    // line 48
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 49
        echo "    <form role=\"form\" class=\"form-row\" name=\"content_customerrank_form\" id=\"content_customerrank_form\" method=\"post\" action=\"?\">
        ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, false, 50), 'widget');
        echo "
        <input type=\"hidden\" name=\"mode\" value=\"regist\">
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\"><span class=\"card-title\">";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("customerrank.admin.content.rank.title"), "html", null, true);
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
                        <div class=\"collapse show ec-cardCollapse\" id=\"blockEdit\">
                            <div class=\"card-body\">
                                <div class=\"row mb-2\">
                                    <div class=\"col-2\">
                                        <span>";
        // line 72
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "children", [], "any", false, false, false, 72), "detail_html", [], "any", false, false, false, 72), "vars", [], "any", false, false, false, 72), "label", [], "any", false, false, false, 72), "html", null, true);
        echo "</span>
                                    </div>
                                    <div class=\"col-10\">
                                        <div id=\"editor\" style=\"height: 480px\" class=\"form-control";
        // line 75
        echo (($this->extensions['Eccube\Twig\Extension\EccubeExtension']->hasErrors(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "detail_html", [], "any", false, false, false, 75))) ? (" is-invalid") : (""));
        echo "\"></div>
                                        <div class=\"d-none\">
                                            ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "detail_html", [], "any", false, false, false, 77), 'widget');
        echo "
                                        </div>
                                        ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "detail_html", [], "any", false, false, false, 79), 'errors');
        echo "
                                    </div>
                                </div>
                            </div>
                        </div>
　　　　　　　　　　　　　<p>";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("customerrank.admin.content.design.description.detail"), "html", null, true);
        echo "<br>";
        echo "{{";
        echo " include('Product/customer_price_detail.twig') ";
        echo "}}";
        echo "</p>
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
                                <button class=\"btn btn-ec-regular\" onClick=\"setModeAndSubmit('init','','');\"
                                        type=\"button\">";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("customerrank.admin.content.rank.label.reset"), "html", null, true);
        echo "</button>
                            </div>
                            <div class=\"col-auto\">
                                <button class=\"btn btn-ec-conversion px-5\"
                                        type=\"submit\">";
        // line 104
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
        return "@CustomerRank/admin/Content/detail.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 104,  188 => 100,  165 => 84,  157 => 79,  152 => 77,  147 => 75,  141 => 72,  124 => 58,  113 => 50,  110 => 49,  106 => 48,  81 => 26,  72 => 19,  68 => 18,  61 => 14,  54 => 13,  49 => 11,  47 => 16,  45 => 12,  38 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@CustomerRank/admin/Content/detail.twig", "/home/anotherworld/www/s-africa.wine/app/Plugin/CustomerRank/Resource/template/admin/Content/detail.twig");
    }
}
