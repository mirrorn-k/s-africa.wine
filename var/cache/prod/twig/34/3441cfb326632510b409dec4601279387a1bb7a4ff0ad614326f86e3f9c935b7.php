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

/* Block/new_item.twig */
class __TwigTemplate_7ef68cdab99fadddbe4229b30e78ac22a821b4046c93d41efdab3f9620e2acc6 extends \Eccube\Twig\Template
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
        echo "
<div class=\"ec-role\">
    <div class=\"ec-newItemRole\">
        <div class=\"ec-newItemRole__list\">
            <div class=\"ec-newItemRole__listItem\">
                <div class=\"ec-newItemRole__listItemHeading ec-secHeading--tandem\">
                    <span class=\"ec-secHeading__en\">";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("NEW ITEM"), "html", null, true);
        echo "</span>
                    <span class=\"ec-secHeading__line\"></span>
                    <span class=\"ec-secHeading__ja\">";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("新着商品"), "html", null, true);
        echo "</span>
                    <a class=\"ec-inlineBtn--top\" href=\"";
        // line 20
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("more"), "html", null, true);
        echo "</a>
                </div>
            </div>
            <div class=\"ec-newItemRole__listItem\">
                <a href=\"";
        // line 24
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_detail", ["id" => "178"]);
        echo "\">
                    <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("1119135333_5fb5fa4d23f40.jpg", "save_image"), "html", null, true);
        echo "\">
                    <p class=\"ec-newItemRole__listItemTitle\">";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ステレンラスト・シュナンブラン・スパークリング"), "html", null, true);
        echo "</p>
                    <p class=\"ec-newItemRole__listItemPrice\">";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("￥2,530 税込"), "html", null, true);
        echo "</p>
                </a>
            </div>
            <div class=\"ec-newItemRole__listItem\">
                <a href=\"";
        // line 31
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_detail", ["id" => "4"]);
        echo "\">
                    <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("0926153857_5f6ee201c3efa.jpg", "save_image"), "html", null, true);
        echo "\">
                    <p class=\"ec-newItemRole__listItemTitle\">";
        // line 33
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ステレンラスト・オールドブッシュヴァイン・サンソー"), "html", null, true);
        echo "</p>
                    <p class=\"ec-newItemRole__listItemPrice\">";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("￥2,970 税込"), "html", null, true);
        echo "</p>
                </a>
            </div>
            <div class=\"ec-newItemRole__listItem\">
                <a href=\"";
        // line 38
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_detail", ["id" => "20"]);
        echo "\">
                    <img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("1007175354_5f7d8222eacb2.jpg", "save_image"), "html", null, true);
        echo "\">
                    <p class=\"ec-newItemRole__listItemTitle\">";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ウォーターフォード・カベルネ"), "html", null, true);
        echo "</p>
                    <p class=\"ec-newItemRole__listItemPrice\">";
        // line 41
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("￥6,160 税込"), "html", null, true);
        echo "</p>
                </a>
            </div>
        </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "Block/new_item.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 41,  109 => 40,  105 => 39,  101 => 38,  94 => 34,  90 => 33,  86 => 32,  82 => 31,  75 => 27,  71 => 26,  67 => 25,  63 => 24,  54 => 20,  50 => 19,  45 => 17,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Block/new_item.twig", "/home/anotherworld/www/s-africa.wine/app/template/default/Block/new_item.twig");
    }
}
