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

/* Block/new_beginnings.twig */
class __TwigTemplate_e7ad26b2718d3d966b0b4ee7301b094fe168616b97a2bbd8a9f62d98cabd45d1 extends \Eccube\Twig\Template
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
        echo "<section class=\"container cf m_20\">
    <div class=\"row\">
        <div class=\"col-8 offset-2 col-md-3 offset-md-0\">
            <img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_brand18.gif"), "html", null, true);
        echo "\" alt=\"ニュービギニングス\" style=\"width: 100%;\">
        </div>
        <div class=\"col-12 col-md-9\">
            <h3 class=\"ltx_15 tx_bld\"><a href=\"";
        // line 7
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=9\" title=\"ニュービギニングス\">New Beginnings</a></h3>
            <h3 class=\"ltx_15 tx_bld\">南アフリカワイン業界のパイオニア</h3>
            <p class=\"m_5\">1997年、労働者達は「クレイン・ビギン（小さな始まり）」という協同組合を設立し、自分達のオリジナルワイン「ニュービギニングス」を造り始めました。翌年1998年、遂に南アフリカ史上初の黒人生産ワインが誕生し海外にも輸出されるようになりました。</p>
        </div>
    </div>
</section><!-- / .goodsBrandArea cf m_20 -->";
    }

    public function getTemplateName()
    {
        return "Block/new_beginnings.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 7,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Block/new_beginnings.twig", "/home/anotherworld/www/s-africa.wine/app/template/default/Block/new_beginnings.twig");
    }
}
