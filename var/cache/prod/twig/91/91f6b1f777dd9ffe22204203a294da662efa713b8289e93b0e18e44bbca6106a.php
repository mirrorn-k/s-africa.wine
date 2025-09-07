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

/* Block/ataraxia_wines.twig */
class __TwigTemplate_796281ab6d7d3b47cf97c98753fa06995a4712bcb9045efec2cfb2b4d8b8b972 extends \Eccube\Twig\Template
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_brand38.jpg"), "html", null, true);
        echo "\" alt=\"アタラクシア\" style=\"width: 100%;\">
        </div>
        <div class=\"col-12 col-md-9\">
            <h3 class=\"ltx_15 tx_bld\"><a href=\"";
        // line 7
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=10\" title=\"アタラクシア\">Ataraxia Wines</a></h3>
            <h3 class=\"ltx_15 tx_bld\">「最高」のテロアールを「最大」に表現する醸造家</h3>
            <p class=\"m_5\">アタラクシアの特徴は、何よりもまずは、卓越したケヴィンの才能とセンスと言って良いだろう。<br>
            モットーは、テロワール主義（その土地の特徴をワインで表現する）、不干渉主義（ミニマリスト的アプローチ）。<br>
            ワインは、共通して、しっかりした酸味と引き締まったボディと骨格、凝縮した果実味、ブドウそのもののピュアな味わいが表現されている。<br>
                ハミルトンラッセルが開くのに時間を要するワインに対し、アタラクシアは、比較的若くても、熟成しても楽しめるワイン。才能豊かな作り手が最高の土地で作り上げる、これ以上ない組み合わせによって出来た南アフリカを代表するワールドクラスのワインです。</p>
        </div>
    </div>
</section><!-- / .goodsBrandArea cf m_20 -->";
    }

    public function getTemplateName()
    {
        return "Block/ataraxia_wines.twig";
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
        return new Source("", "Block/ataraxia_wines.twig", "/home/anotherworld/www/s-africa.wine/app/template/default/Block/ataraxia_wines.twig");
    }
}
