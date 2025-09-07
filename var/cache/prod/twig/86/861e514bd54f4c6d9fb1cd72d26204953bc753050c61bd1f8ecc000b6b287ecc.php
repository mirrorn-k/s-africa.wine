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

/* Block/logo.twig */
class __TwigTemplate_e955361fb230a0642cdde989c3ba0185d3ade69ee55e93e69c2fd5ee7d83cdf1 extends \Eccube\Twig\Template
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
<div class=\"hero-wrap\">
<div class=\"header arch\">
            <div class=\"ec-headerTitle__title\">
                <p>-南アフリカワイン専門 Online shop-</p>
                <h1>
                    <a href=\"";
        // line 17
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("homepage");
        echo "\">
                       <!--";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "shop_name", [], "any", false, false, false, 18), "html", null, true);
        echo "-->
                        <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo.svg"), "html", null, true);
        echo "\" alt=\"南アフリカワイン専門 Online shop\">
                    </a>
                </h1>
                <p class=\"for_front\">360年以上の歴史を持つオーガニック&エクセレントワイン</p>
            </div>
</div>
</div>
";
        // line 26
        if ((twig_get_attribute($this->env, $this->source, ($context["Page"] ?? null), "url", [], "any", false, false, false, 26) == "homepage")) {
            // line 27
            echo "<div class=\"for_front text-center\"><iframe src=\"https://www.youtube.com/embed/1kY6rAQiva4\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture\" allowfullscreen></iframe></div>
";
        }
    }

    public function getTemplateName()
    {
        return "Block/logo.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 27,  63 => 26,  53 => 19,  49 => 18,  45 => 17,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Block/logo.twig", "/home/anotherworld/www/s-africa.wine/app/template/default/Block/logo.twig");
    }
}
