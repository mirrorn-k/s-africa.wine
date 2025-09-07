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

/* Block/logo_other.twig */
class __TwigTemplate_6a215556379b89a1c1f061d1d65ad5a7d9c599e2a7248f7ded0be801bb8558e7 extends \Eccube\Twig\Template
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
        // line 1
        echo "<div class=\"hero-wrap\">
    <div class=\"header arch\">
        <div class=\"ec-headerTitle__title\">
            <p>-南アフリカワイン専門 Online shop-</p>
            <div>
                <a href=\"";
        // line 6
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("homepage");
        echo "\">
                   <!--";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "shop_name", [], "any", false, false, false, 7), "html", null, true);
        echo "-->
                    <img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo.svg"), "html", null, true);
        echo "\" alt=\"南アフリカワイン専門 Online shop\">
                </a>
            </div>
            <p class=\"for_front\">360年以上の歴史を持つオーガニック&エクセレントワイン</p>
        </div>
    </div>
</div>
";
        // line 15
        if ((twig_get_attribute($this->env, $this->source, ($context["Page"] ?? null), "url", [], "any", false, false, false, 15) == "homepage")) {
            // line 16
            echo "<div class=\"for_front text-center\"><iframe src=\"https://www.youtube.com/embed/1kY6rAQiva4\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe></div>
";
        }
    }

    public function getTemplateName()
    {
        return "Block/logo_other.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 16,  62 => 15,  52 => 8,  48 => 7,  44 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Block/logo_other.twig", "/home/anotherworld/www/s-africa.wine/app/template/default/Block/logo_other.twig");
    }
}
