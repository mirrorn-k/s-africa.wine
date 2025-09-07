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

/* Entry/complete.twig */
class __TwigTemplate_6681bd8a905f8e49367166fea8cbe636c29f256dc27ca7fce770ef7ab8953162 extends \Eccube\Twig\Template
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
        // line 13
        $context["body_class"] = "registration_page";
        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "Entry/complete.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "    <div class=\"ec-role\">
        <div class=\"ec-pageHeader\">
            <h1>";
        // line 18
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("新規会員登録(仮登録完了)"), "html", null, true);
        echo "</h1>
        </div>
    </div>
    <div class=\"ec-registerCompleteRole\">
        <div class=\"ec-off3Grid ec-text-ac\">
            <div class=\"ec-off3Grid__cell\">
                <div class=\"ec-reportHeading\">
                    <h2>";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("会員登録ありがとうございます"), "html", null, true);
        echo "</h2>
                </div>
                <p class=\"ec-reportDescription\">";
        // line 27
        echo nl2br(twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("現在、仮会員の状態です。ただいま、ご入力いただいたメールアドレス宛に、ご本人様確認用のメールをお送りいたしました。
メール本文内のURLをクリックすると、本会員登録が完了となります。
"), "html", null, true));
        // line 29
        echo "</p>
                <div class=\"ec-off4Grid\">
                    <div class=\"ec-off4Grid__cell\"><a class=\"ec-blockBtn--cancel\" href=\"";
        // line 31
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("homepage");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("トップページへ"), "html", null, true);
        echo "</a></div>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "Entry/complete.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 31,  76 => 29,  72 => 27,  67 => 25,  57 => 18,  53 => 16,  49 => 15,  44 => 11,  42 => 13,  35 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Entry/complete.twig", "/home/anotherworld/www/s-africa.wine/src/Eccube/Resource/template/default/Entry/complete.twig");
    }
}
