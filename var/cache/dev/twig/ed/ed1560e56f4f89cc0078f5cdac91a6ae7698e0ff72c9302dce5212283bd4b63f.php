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
class __TwigTemplate_3727361ab06aba679602cd8fade2b29b0ac2f7b075744c62d0e47f4a4c9031bd extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Block/footer.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Block/footer.twig"));

        // line 11
        echo "<div class=\"ec-footerRole\">
    <div class=\"ec-footerRole__inner\">
        <ul class=\"ec-footerNavi\">
            <li class=\"ec-footerNavi__link\">
                <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("help_about");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("当サイトについて"), "html", null, true);
        echo "</a>
            </li>
            <li class=\"ec-footerNavi__link\">
                <a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("help_privacy");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("プライバシーポリシー"), "html", null, true);
        echo "</a>
            </li>
            <li class=\"ec-footerNavi__link\">
                <a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("help_tradelaw");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("特定商取引法に基づく表記"), "html", null, true);
        echo "</a>
            </li>
            <li class=\"ec-footerNavi__link\">
                <a href=\"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("contact");
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お問い合わせ"), "html", null, true);
        echo "</a>
            </li>
        </ul>
        <div class=\"ec-footerTitle\">
            <div class=\"ec-footerTitle__logo\">
                <a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/p_footerlogo.png"), "html", null, true);
        echo "\" width=\"232\" alt=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 29, $this->source); })()), "shop_name", [], "any", false, false, false, 29), "html", null, true);
        echo "\"></a>
            </div>
            <div class=\"ec-footerTitle__copyright\">copyright (c) ";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 31, $this->source); })()), "shop_name", [], "any", false, false, false, 31), "html", null, true);
        echo " all rights reserved.</div>
        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  92 => 31,  83 => 29,  73 => 24,  65 => 21,  57 => 18,  49 => 15,  43 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("{#
This file is part of EC-CUBE

Copyright(c) EC-CUBE CO.,LTD. All Rights Reserved.

http://www.ec-cube.co.jp/

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.
#}
<div class=\"ec-footerRole\">
    <div class=\"ec-footerRole__inner\">
        <ul class=\"ec-footerNavi\">
            <li class=\"ec-footerNavi__link\">
                <a href=\"{{ url('help_about') }}\">{{ '当サイトについて'|trans }}</a>
            </li>
            <li class=\"ec-footerNavi__link\">
                <a href=\"{{ url('help_privacy') }}\">{{ 'プライバシーポリシー'|trans }}</a>
            </li>
            <li class=\"ec-footerNavi__link\">
                <a href=\"{{ url('help_tradelaw') }}\">{{ '特定商取引法に基づく表記'|trans }}</a>
            </li>
            <li class=\"ec-footerNavi__link\">
                <a href=\"{{ url('contact') }}\">{{ 'お問い合わせ'|trans }}</a>
            </li>
        </ul>
        <div class=\"ec-footerTitle\">
            <div class=\"ec-footerTitle__logo\">
                <a href=\"{{ url('homepage') }}\"><img src=\"{{ asset('/html/user_data/upload/img/p_footerlogo.png') }}\" width=\"232\" alt=\"{{ BaseInfo.shop_name }}\"></a>
            </div>
            <div class=\"ec-footerTitle__copyright\">copyright (c) {{ BaseInfo.shop_name }} all rights reserved.</div>
        </div>
    </div>
</div>", "Block/footer.twig", "/home/anotherworld/www/s-africa.wine/app/template/default/Block/footer.twig");
    }
}
