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

/* Block/waterkloof.twig */
class __TwigTemplate_4c94865ce009491c8e0d25458b315c1361972aa9fbb9e075287a131bb719a24c extends \Eccube\Twig\Template
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_brand35.gif"), "html", null, true);
        echo "\" alt=\"ウォーター・クルーフ\" style=\"width: 100%;\">
        </div>
        <div class=\"col-12 col-md-9\">
            <h3 class=\"ltx_15 tx_bld\"><a href=\"";
        // line 7
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=12\" title=\"ウォーター・クルーフ\">Waterkloof</a></h3>
            <h3 class=\"ltx_15 tx_bld\">ビオディナミ、環境循環型農業 \"Honest Wine\"「誠実なワイン」</h3>
            <p class=\"m_5\">自分達のワインを「Ｈｏｎｅｓｔ　Ｗｉｎｅ」（誠実なワイン）、つまり、テロワールを誠実（正直）に表現したワインと呼んでいる。ワイン醸造に関しては、不干渉主義のアプローチ。 今では、ステレンボシュを代表するビオディナミ ワイン生産者に成長した。</p>
        </div>
    </div>
</section><!-- / .goodsBrandArea cf m_20 -->";
    }

    public function getTemplateName()
    {
        return "Block/waterkloof.twig";
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
        return new Source("", "Block/waterkloof.twig", "/home/anotherworld/www/s-africa.wine/app/template/default/Block/waterkloof.twig");
    }
}
