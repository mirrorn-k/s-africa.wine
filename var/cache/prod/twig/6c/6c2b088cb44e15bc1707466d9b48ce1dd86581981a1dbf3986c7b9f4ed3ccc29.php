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

/* Block/stellenrust.twig */
class __TwigTemplate_bcdaadc4a93bb0bbaa1c09980922dbaa347bd6986c10764faa965bb04e69d94f extends \Eccube\Twig\Template
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_brand10.gif"), "html", null, true);
        echo "\" alt=\"ステレンラスト\" style=\"width: 100%;\">
        </div>
        <div class=\"col-12 col-md-9\">
            <h3 class=\"ltx_15 tx_bld\"><a href=\"";
        // line 7
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=7\" title=\"ステレンラスト\">Stellenrust</a></h3>
            <h3 class=\"ltx_15 tx_bld\">2012年ロンドン・オリンピックに採用されたワイナリー</h3>
            <p class=\"m_5\">南アフリカ・ステレンボシュ地区の名門。<br>家族経営のワイナリーとしては、ブドウ畑だけで500haを所有し、ステレンボシュの中でも大きい方に入る。畑は2箇所あり、ヘルダーバーグとボタラリーの両地区にある。両方とも、ステレンボシュの中でも良質のブドウの取れる良い場所にある。<br>白は特にシュナンブラン、赤はピノタージュ、シラーズとボルドー系品種が得意。</p>
        </div>
    </div>
</section><!-- / .goodsBrandArea cf m_20 -->";
    }

    public function getTemplateName()
    {
        return "Block/stellenrust.twig";
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
        return new Source("", "Block/stellenrust.twig", "/home/anotherworld/www/s-africa.wine/app/template/default/Block/stellenrust.twig");
    }
}
