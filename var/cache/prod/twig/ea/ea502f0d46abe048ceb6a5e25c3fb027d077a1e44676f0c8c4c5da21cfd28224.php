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

/* Block/waterford.twig */
class __TwigTemplate_36a92f20055b9d9dbb2f591187c7486716429736b21fc678e7f5983873b455eb extends \Eccube\Twig\Template
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_brand3.gif"), "html", null, true);
        echo "\" alt=\"ウォーターフォード\" style=\"width: 100%;\">
        </div>
        <div class=\"col-12 col-md-9\">
            <h3 class=\"ltx_15 tx_bld\"><a href=\"";
        // line 7
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=13\" title=\"ウォーターフォード\">Waterford</a></h3>
            <h3 class=\"ltx_15 tx_bld\">南アフリカを代表するスタイリッシュでエレガントなワイン生産者</h3>
            <p class=\"m_5\">1998年、ステレンボシュに設立。新興ワイナリーながら、既に南アフリカを代表するトップ・ワイナリーのポジションを確立している。<br>彼らが目指すゴールは、「ワールドクラスのワイナリーになる」こと。その実現は決して遠くないと思えるほど、南アフリカの中でも代表的なスタイリッシュでエレガントなワインを生産している。</p>
        </div>
    </div>
</section><!-- / .goodsBrandArea cf m_20 -->";
    }

    public function getTemplateName()
    {
        return "Block/waterford.twig";
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
        return new Source("", "Block/waterford.twig", "/home/anotherworld/www/s-africa.wine/app/template/default/Block/waterford.twig");
    }
}
