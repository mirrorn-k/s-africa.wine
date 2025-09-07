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

/* Block/aristea.twig */
class __TwigTemplate_2ba78acb8a94cf7909761876d954175bcc500c4273c9f1c49a704c73fa51b057 extends \Eccube\Twig\Template
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_aristea1.png"), "html", null, true);
        echo "\" alt=\"アリステア\" style=\"width: 100%;\">
        </div>
        <div class=\"col-12 col-md-9\">
            <h3 class=\"ltx_15 tx_bld\"><a href=\"";
        // line 7
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=11\" title=\"アリステア\">Aristea</a></h3>
            <h3 class=\"ltx_15 tx_bld\">MCCの申し子が手がけたワイン</h3>
            <p class=\"m_5\">南アフリカのMCCの申し子でクローヌ家の息子、マシューにイギリス人の資本家、マーティンとフランス人ワインコンサルタントのフロランが協力して作ったワインブランド。<br>マシューは、各品種ごとに西ケープ州のベストな畑、ベストなブロック、ベストなウネのブドウをリサーチし、個別に契約してブドウを購入。</p>
        </div>
    </div>
</section><!-- / .goodsBrandArea cf m_20 -->";
    }

    public function getTemplateName()
    {
        return "Block/aristea.twig";
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
        return new Source("", "Block/aristea.twig", "/home/anotherworld/www/s-africa.wine/app/template/default/Block/aristea.twig");
    }
}
