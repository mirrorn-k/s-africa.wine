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

/* @admin/Content/news_edit.twig */
class __TwigTemplate_185e02514871e019d662bba294749be2c57dd1aef3a955c9b04faa4d89c6f343 extends \Eccube\Twig\Template
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
        // line 11
        return "@admin/default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        $context["menus"] = [0 => "content", 1 => "news"];
        // line 19
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Content/news_edit.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 16
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.news_management"), "html", null, true);
    }

    // line 17
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.contents_management"), "html", null, true);
    }

    // line 21
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 22
        echo "    <form role=\"form\" class=\"form-horizontal\" name=\"form1\" id=\"form1\" method=\"post\" action=\"?\">
        ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, false, 23), 'widget');
        echo "
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <span class=\"card-title\">";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.news.news_registration"), "html", null, true);
        echo "</span></div>
                                <div class=\"col-4 text-right\">
                                    <a data-toggle=\"collapse\" href=\"#newsForm\"
                                                                 aria-expanded=\"true\" aria-controls=\"newsForm\"><i class=\"fa fa-lg fa-angle-up\"></i></a></div>
                            </div>
                        </div>
                        <div class=\"ec-cardCollapse collapse show\" id=\"newsForm\" style=\"\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col-3\"><span>";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.news.publish_date"), "html", null, true);
        echo "</span></div>
                                    <div class=\"col mb-2\">
                                        ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "publish_date", [], "any", false, false, false, 42), 'widget');
        echo "
                                        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "publish_date", [], "any", false, false, false, 43), 'errors');
        echo "
                                    </div>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-3\"><span>";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.news.title"), "html", null, true);
        echo "</span></div>
                                    <div class=\"col mb-2\">
                                        ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "title", [], "any", false, false, false, 50), 'widget');
        echo "
                                        ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "title", [], "any", false, false, false, 51), 'errors');
        echo "
                                    </div>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-3\">
                                        <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.content.news.url"), "html", null, true);
        echo "\">
                                            <span>";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.news.url"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                        </div>
                                    </div>
                                    <div class=\"col mb-2\">
                                        ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "url", [], "any", false, false, false, 62), 'widget');
        echo "
                                        ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "url", [], "any", false, false, false, 63), 'errors');
        echo "
                                    </div>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-3\">&nbsp;</div>
                                    <div class=\"col mb-2\">
                                        ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "link_method", [], "any", false, false, false, 70), 'widget');
        echo "
                                        ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "link_method", [], "any", false, false, false, 71), 'errors');
        echo "
                                    </div>
                                </div>

                                <div class=\"row\">
                                    <div class=\"col-3\">
                                        <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.content.news.body"), "html", null, true);
        echo "\">
                                            <span>";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.news.body"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ml-1\"></i>
                                        </div>
                                    </div>
                                    <div class=\"col mb-2\">
                                        ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 82), 'widget');
        echo "
                                        ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "description", [], "any", false, false, false, 83), 'errors');
        echo "
                                    </div>
                                </div>

                                ";
        // line 88
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 88), "eccube_form_options", [], "any", false, false, false, 88), "auto_render", [], "any", false, false, false, 88)) {
                // line 89
                echo "                                    ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 89), "eccube_form_options", [], "any", false, false, false, 89), "form_theme", [], "any", false, false, false, 89)) {
                    // line 90
                    echo "                                        ";
                    $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($context["f"], [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 90), "eccube_form_options", [], "any", false, false, false, 90), "form_theme", [], "any", false, false, false, 90)], true);
                    // line 91
                    echo "                                        ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'row');
                    echo "
                                    ";
                } else {
                    // line 93
                    echo "                                        <div class=\"row mb-2\">
                                            <div class=\"col-3\">
                                                <span>";
                    // line 95
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 95), "label", [], "any", false, false, false, 95)), "html", null, true);
                    echo "</span>
                                            </div>
                                            <div class=\"col\">
                                                ";
                    // line 98
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'widget');
                    echo "
                                                ";
                    // line 99
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'errors');
                    echo "
                                            </div>
                                        </div>
                                    ";
                }
                // line 103
                echo "                                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "                            </div>
                        </div>
                    </div>
                </div>

                <div class=\"c-conversionArea\">
                    <div class=\"c-conversionArea__container\">
                        <div class=\"row justify-content-between align-items-center\">
                            <div class=\"col-6\">
                                <div class=\"c-conversionArea__leftBlockItem\">
                                    <a class=\"c-baseLink\" href=\"";
        // line 114
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_content_news");
        echo "\">
                                        <i class=\"fa fa-backward\" aria-hidden=\"true\"></i>
                                        <span>";
        // line 116
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.content.news_management"), "html", null, true);
        echo "</span></a>
                                </div>
                            </div>
                            <div class=\"col-6\">
                                <div id=\"ex-conversion-action\" class=\"row align-items-center justify-content-end\">
                                    <div class=\"col-auto\">
                                        ";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "visible", [], "any", false, false, false, 122), 'widget');
        echo "
                                        ";
        // line 123
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "visible", [], "any", false, false, false, 123), 'errors');
        echo "
                                    </div>
                                    <div class=\"col-auto\">
                                        <button class=\"btn btn-ec-conversion px-5\" type=\"submit\">";
        // line 126
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.registration"), "html", null, true);
        echo "</button>
                                    </div>
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
        return "@admin/Content/news_edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  274 => 126,  268 => 123,  264 => 122,  255 => 116,  250 => 114,  238 => 104,  231 => 103,  224 => 99,  220 => 98,  214 => 95,  210 => 93,  204 => 91,  201 => 90,  198 => 89,  192 => 88,  185 => 83,  181 => 82,  174 => 78,  170 => 77,  161 => 71,  157 => 70,  147 => 63,  143 => 62,  136 => 58,  132 => 57,  123 => 51,  119 => 50,  114 => 48,  106 => 43,  102 => 42,  97 => 40,  85 => 31,  74 => 23,  71 => 22,  67 => 21,  60 => 17,  53 => 16,  48 => 11,  46 => 19,  44 => 13,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Content/news_edit.twig", "/home/anotherworld/www/s-africa.wine/src/Eccube/Resource/template/admin/Content/news_edit.twig");
    }
}
