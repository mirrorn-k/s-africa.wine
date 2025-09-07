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

/* Block/vilafonte.twig */
class __TwigTemplate_31ce57f595e995cb70b57ee745c60476cfd2e03f18fa368262318ca3ea436b7c extends \Eccube\Twig\Template
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_vilafonte1.jpg"), "html", null, true);
        echo "\" alt=\"ヴィラフォンテ\" style=\"width: 100%;\">
        </div>
        <div class=\"col-12 col-md-9\">
            <h3 class=\"ltx_15 tx_bld\"><a href=\"";
        // line 7
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=14\" title=\"ヴィラフォンテ\">vilafonte</a></h3>
            <h3 class=\"ltx_15 tx_bld\">南ア＆米国のコラボ作品＝スーパー・プレミアムワイン。</h3>
            <p class=\"m_5\">生産地区はパール。42ヘクタールのうち、ブドウ畑は16ヘクタール。<br>ヴィラフォンテは、所有する畑の土壌のタイプの名前から由来している。<br>同社は、南アフリカとアメリカのジョイントベンチャーで、赤のプレミアムワインを2種類醸造している。<br>醸造家には、かつてロバート・モンダヴィやシミ・ワイナリーでも醸造責任者を勤め、デカンター誌の「世界のトップ30醸造家」にも選ばれているアメリカ人女性醸造家ゼルマ・ロング氏を招聘。栽培コンサルタントにオーパスワンの元栽培責任者フィル・フリーズ加わり、南アフリカのワイナリーの中でも最も密集したブドウ栽培を行っている。</p>
        </div>
    </div>
</section><!-- / .goodsBrandArea cf m_20 -->";
    }

    public function getTemplateName()
    {
        return "Block/vilafonte.twig";
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
        return new Source("", "Block/vilafonte.twig", "/home/anotherworld/www/s-africa.wine/app/template/default/Block/vilafonte.twig");
    }
}
