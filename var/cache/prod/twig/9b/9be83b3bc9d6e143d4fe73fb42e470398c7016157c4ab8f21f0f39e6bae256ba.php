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

/* Block/footer.twig */
class __TwigTemplate_1e45c2d2422bd6deca0c7cd12e3590af1b28b51adfaf313b59ee3322eb95488b extends \Eccube\Twig\Template
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
        // line 11
        echo "<div class=\"ec-footerRole\">
    <div class=\"ec-footerRole__inner\">
        <ul class=\"ec-footerNavi\">
            <li class=\"ec-footerNavi__link\">
                <a href=\"https://s-africa.wine/user_data/csr\">";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("社会貢献"), "html", null, true);
        echo "</a>
            </li>
            <li class=\"ec-footerNavi__link\">
                <a href=\"";
        // line 18
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("help_about");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("当サイトについて"), "html", null, true);
        echo "</a>
            </li>
            <li class=\"ec-footerNavi__link\">
                <a href=\"";
        // line 21
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("help_privacy");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("プライバシーポリシー"), "html", null, true);
        echo "</a>
            </li>
            <li class=\"ec-footerNavi__link\">
                <a href=\"";
        // line 24
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("help_tradelaw");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("特定商取引法に基づく表記"), "html", null, true);
        echo "</a>
            </li>
            <li class=\"ec-footerNavi__link\">
                <a href=\"";
        // line 27
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("contact");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お問い合わせ"), "html", null, true);
        echo "</a>
            </li>
        </ul>
        <p class=\"ec-footerNavi m_30\"><small>通信販売酒類小売免許 アナザーワールド株式会社</small></p>
        <div class=\"ec-footerTitle\">
            <div class=\"ec-footerTitle__logo\">
                <a href=\"";
        // line 33
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo.svg"), "html", null, true);
        echo "\" width=\"232\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "shop_name", [], "any", false, false, false, 33), "html", null, true);
        echo "\"></a>
            </div>
            <div class=\"ec-footerTitle__copyright\">copyright (c) ";
        // line 35
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "shop_name", [], "any", false, false, false, 35), "html", null, true);
        echo " all rights reserved.</div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "Block/footer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 35,  84 => 33,  73 => 27,  65 => 24,  57 => 21,  49 => 18,  43 => 15,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Block/footer.twig", "/home/anotherworld/www/s-africa.wine/app/template/default/Block/footer.twig");
    }
}
