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

/* Help/about.twig */
class __TwigTemplate_504242097fb1cf325b861a2f8f795891349cb225fe903747a5b25fd3f77d13d8 extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("default_frame.twig", "Help/about.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "
<div class=\"ec-role\">
    <div class=\"ec-pageHeader\">
        <h1 class=\"help-about-header\">";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("当サイトについて"), "html", null, true);
        echo "</h1>
    </div>
    <div class=\"ec-off1Grid\">
        <div class=\"ec-off1Grid__cell\">
            <div class=\"ec-borderedDefs\">
                ";
        // line 22
        if ( !twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "shop_name", [], "any", true, true, false, 22)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "shop_name", [], "any", false, false, false, 22))) : ("")))) {
            // line 23
            echo "                    <dl id=\"help_about_box__shop_name\">
                        <dt>
                            <label class=\"ec-label\">";
            // line 25
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("店名"), "html", null, true);
            echo "</label>
                        </dt>
                        <dd>";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "shop_name", [], "any", false, false, false, 27), "html", null, true);
            echo "</dd>
                    </dl>
                ";
        }
        // line 30
        echo "                ";
        if ( !twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "company_name", [], "any", true, true, false, 30)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "company_name", [], "any", false, false, false, 30))) : ("")))) {
            // line 31
            echo "                    <dl id=\"help_about_box__company_name\">
                        <dt>
                            <label class=\"ec-label\">";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("会社名"), "html", null, true);
            echo "</label>
                        </dt>
                        <dd>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "company_name", [], "any", false, false, false, 35), "html", null, true);
            echo "</dd>
                    </dl>
                ";
        }
        // line 38
        echo "
                ";
        // line 39
        if ( !twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "postal_code", [], "any", true, true, false, 39)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "postal_code", [], "any", false, false, false, 39))) : ("")))) {
            // line 40
            echo "                    <dl id=\"help_about_box__address\">
                        <dt>
                            <label class=\"ec-label\">";
            // line 42
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("住所"), "html", null, true);
            echo "</label>
                        </dt>
                        <dd>";
            // line 44
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("〒"), "html", null, true);
            echo "669-1149<!--";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "postal_code", [], "any", false, false, false, 44), "html", null, true);
            echo "--><br />
                            ";
            // line 45
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "pref", [], "any", false, false, false, 45), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "addr01", [], "any", false, false, false, 45), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "addr02", [], "any", false, false, false, 45), "html", null, true);
            echo "
                        </dd>
                    </dl>
                ";
        }
        // line 49
        echo "
                ";
        // line 50
        if ( !twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "phone_number", [], "any", true, true, false, 50)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "phone_number", [], "any", false, false, false, 50))) : ("")))) {
            // line 51
            echo "                    <dl id=\"help_about_box__phone_number\">
                        <dt>
                            <label class=\"ec-label\">";
            // line 53
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("電話番号"), "html", null, true);
            echo "</label>
                        </dt>
                        <dd>0797-69-6999<!--";
            // line 55
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "phone_number", [], "any", false, false, false, 55), "html", null, true);
            echo "--></dd>
                    </dl>
                ";
        }
        // line 58
        echo "
                ";
        // line 59
        if ( !twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "business_hour", [], "any", true, true, false, 59)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "business_hour", [], "any", false, false, false, 59))) : ("")))) {
            // line 60
            echo "                    <dl id=\"help_about_box__business_hour\">
                        <dt>
                            <label class=\"ec-label\">";
            // line 62
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("店舗営業時間"), "html", null, true);
            echo "</label>
                        </dt>
                        <dd>";
            // line 64
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "business_hour", [], "any", false, false, false, 64), "html", null, true);
            echo "</dd>
                    </dl>
                ";
        }
        // line 67
        echo "
                ";
        // line 68
        if ( !twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "good_traded", [], "any", true, true, false, 68)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "good_traded", [], "any", false, false, false, 68))) : ("")))) {
            // line 69
            echo "                    <dl id=\"help_about_box__good_traded\">
                        <dt>
                            <label class=\"ec-label\">";
            // line 71
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("取り扱い商品"), "html", null, true);
            echo "</label>
                        </dt>
                        <dd>";
            // line 73
            echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "good_traded", [], "any", false, false, false, 73), "html", null, true));
            echo "</dd>
                    </dl>
                ";
        }
        // line 76
        echo "
                ";
        // line 77
        if ( !twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "message", [], "any", true, true, false, 77)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "message", [], "any", false, false, false, 77))) : ("")))) {
            // line 78
            echo "                    <dl id=\"help_about_box__message\">
                        <dt>
                            <label class=\"ec-label\">";
            // line 80
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("メッセージ"), "html", null, true);
            echo "</label>
                        </dt>
                        <dd>";
            // line 82
            echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "message", [], "any", false, false, false, 82), "html", null, true));
            echo "</dd>
                    </dl>
                ";
        }
        // line 85
        echo "            </div>

        </div>
    </div>
</div>

";
    }

    public function getTemplateName()
    {
        return "Help/about.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 85,  201 => 82,  196 => 80,  192 => 78,  190 => 77,  187 => 76,  181 => 73,  176 => 71,  172 => 69,  170 => 68,  167 => 67,  161 => 64,  156 => 62,  152 => 60,  150 => 59,  147 => 58,  141 => 55,  136 => 53,  132 => 51,  130 => 50,  127 => 49,  118 => 45,  112 => 44,  107 => 42,  103 => 40,  101 => 39,  98 => 38,  92 => 35,  87 => 33,  83 => 31,  80 => 30,  74 => 27,  69 => 25,  65 => 23,  63 => 22,  55 => 17,  50 => 14,  46 => 13,  35 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Help/about.twig", "/home/anotherworld/www/s-africa.wine/app/template/default/Help/about.twig");
    }
}
