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

/* Block/keermont.twig */
class __TwigTemplate_2bf458f9c51ea11a0868225f4210c39135a3ee478c3396518b3018d2401c7e45 extends \Eccube\Twig\Template
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_keermont1.gif"), "html", null, true);
        echo "\" alt=\"キアモント\" style=\"width: 100%;\">
        </div>
        <div class=\"col-12 col-md-9\">
            <h3 class=\"ltx_15 tx_bld\"><a href=\"";
        // line 7
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=15\" title=\"キアモント\">Keermont</a></h3>
            <h3 class=\"ltx_15 tx_bld\">ストイックな自然派ブティック・ワイナリー。</h3>
            <p class=\"m_5\">2007年が最初のヴィンテージのステレンボシュにある小さな新興ブティック・ワイナリー。（2016ティム・アトキン・南アフリカワイナリー格付け1級）<br>周りはステレンボシュ山脈とヘルダーバーグ山脈に囲まれている。ここは、南アフリカ・ケープ州土着の植物、フィンボスも沢山生息している地域で、キアモントもＢＷＩ（自然環境や動植物を保護しながらワイン生産を行うプログラム）のメンバーとして、環境に配慮したワイン生産を行っている。</p>
        </div>
    </div>
</section><!-- / .goodsBrandArea cf m_20 -->";
    }

    public function getTemplateName()
    {
        return "Block/keermont.twig";
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
        return new Source("", "Block/keermont.twig", "/home/anotherworld/www/s-africa.wine/app/template/default/Block/keermont.twig");
    }
}
