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

/* Block/kanonkop.twig */
class __TwigTemplate_de2d85246feadd88f70ac3cd3121cb79e2137474b2f7898155189f8b45a32afa extends \Eccube\Twig\Template
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_brand36.gif"), "html", null, true);
        echo "\" alt=\"ヴィラフォンテ\" style=\"width: 100%;\">
        </div>
        <div class=\"col-12 col-md-9\">
            <h3 class=\"ltx_15 tx_bld\"><a href=\"";
        // line 7
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=26\" title=\"ヴィラフォンテ\">Kanonkop</a></h3>
            <h3 class=\"ltx_15 tx_bld\">世界を代表するステレンボッシュ屈指の赤ワインメーカー</h3>
            <p class=\"m_5\">世界最大級のワイン評価大会IWSCなど主に、1990年代から最優秀賞を受賞するなど南アフリカワインの品質の高さを世界に知らしめたパイオニア的な存在のワイナリー。。</p>
        </div>
    </div>
</section><!-- / .goodsBrandArea cf m_20 -->";
    }

    public function getTemplateName()
    {
        return "Block/kanonkop.twig";
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
        return new Source("", "Block/kanonkop.twig", "/home/anotherworld/www/s-africa.wine/app/template/default/Block/kanonkop.twig");
    }
}
