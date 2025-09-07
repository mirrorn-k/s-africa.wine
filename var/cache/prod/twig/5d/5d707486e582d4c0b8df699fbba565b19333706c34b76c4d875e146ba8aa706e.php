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

/* @user_data/csr.twig */
class __TwigTemplate_f621d1c233eb035f68a01809dab52d2f32f49d74edd567de1a711fea9d865620 extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("default_frame.twig", "@user_data/csr.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "<section class=\"container cf m_20 padd_bt30 csr-box\">
\t<div class=\"row\">
\t\t<div class=\"col-12 col-md-4\">
\t\t\t<h3 class=\"brandPage-title text-center\">フェアトレード</h3>
\t\t</div>
\t\t<div class=\"col-12 col-md-8 m_20\">
\t\t\t<p>南アフリカのフェアトレード・ワインを輸入・販売することにより、同国の労働者の安定雇用と労働・生活環境の改善、子供達の教育費支援など、経済的自立を応援しています。</p>
\t\t</div>
\t</div>
\t<div class=\"row\">
\t\t<div class=\"col-12 col-md-6 m_20 container\">
\t\t\t<div class=\"row padd_bt20\">
\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t<img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/p_csr1.gif"), "html", null, true);
        echo "\" alt=\"TransFair\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-9\">
\t\t\t\t\t<p class=\"m_10 fs14\">ドイツ発祥のフェアトレード認証団体「TransFair」のフェアトレード認証を受けているワイナリーです。<br>その基準はフェアトレード·インターナショナルの国際基準に準拠しています。</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-12 text-center\">
\t\t\t\t\t<a href=\"";
        // line 22
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=7\" class=\"m_10\">
\t\t\t\t\t\t<img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_brand10.gif"), "html", null, true);
        echo "\" alt=\"ステレンラスト\" width=\"120\">
\t\t\t\t\t\t<p>ステレンラスト</p>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"col-12 col-md-6 m_25 container\">
\t\t\t<div class=\"row padd_bt20\">
\t\t\t\t<div class=\"col-3\">
\t\t\t\t\t<img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/p_csr5.gif"), "html", null, true);
        echo "\" alt=\"TransFair\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-9\">
\t\t\t\t\t<p class=\"m_10 fs14\">「Fair for Life 社会とフェアトレードの認証プログラム」は、地域の状況に適応して、厳格な社会的、フェアトレードの基準を組み合わせて審査されます。認証システムは、食品および化粧品、織物や観光サービスのような非食料品の両方のために設計されています。</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-12 text-center\">
\t\t\t\t\t<a href=\"";
        // line 38
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=45\">
\t\t\t\t\t\t<img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_stellar1.gif"), "html", null, true);
        echo "\" alt=\"ステラー\" width=\"120\">
\t\t\t\t\t\t<p>ステラー</p>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"row ec-categoryRole m_40\">
\t\t<div class=\"col-12 col-md-4\">
\t\t\t<h3 class=\"brandPage-title text-center\">教育支援</h3>
\t\t</div>
\t\t<div class=\"col-12 col-md-8 m_20\">
\t\t\t<p>社会貢献活動としてPEBBLES（ペブルス：南アフリカの子供の教育支援団体（NGO））の支援を行い、南アフリカの子供たちの明るい未来を全力で応援しております。</p>
\t\t</div>
\t\t<div class=\"col-12 m_20 container\">
\t\t\t<div class=\"row padd_bt20\">
\t\t\t\t<div class=\"col-3 col-md-2\">
\t\t\t\t\t<img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/p_csr8.gif"), "html", null, true);
        echo "\" alt=\"TransFair\" width=\"100\">
\t\t\t\t</div>
\t\t\t\t<div class=\"col-9 col-md-4\">
\t\t\t\t\t<p class=\"m_10 fs14\">ペブルス・プロジェクト（PEBBLES PROJECT）<br>
\t\t\t\t\t\t2004年に設立された教育系NPO（非営利団体）。<br>
\t\t\t\t\t\t<a href=\"https://www.pebblesproject.org/\">https://www.pebblesproject.org/</a>
\t\t\t\t\t</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-12 col-md-6 text-center m_20\">
\t\t\t\t\t<a href=\"";
        // line 67
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=20\">
\t\t\t\t\t\t<img src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_brand19.gif"), "html", null, true);
        echo "\" alt=\"ハーテンバーグ\" width=\"120\">
\t\t\t\t\t\t<p>ハーテンバーグ</p>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"row m_40\">
\t\t<div class=\"col-12 col-md-4\">
\t\t\t<h3 class=\"brandPage-title text-center\">自立支援</h3>
\t\t</div>
\t\t<div class=\"col-12 col-md-8 m_20\">
\t\t\t<p>弊社取扱いのライナカワイナリーでは、「貧困からの脱出や生活水準の向上に最も大切な援助は、個人が自分で自分の人生を選択することが出来るようになること」という考えのもと、労働者の生活環境の向上にも努力している。始めに、労働者に希望を聞いたところ、「自分自身の家を持ちたい、そして子供たちに教育を受けさせたい」という答えでした。<br>以下のサポートを実施しています。<br>・10年間働いている従業員には家を、子供がいたら大学の費用を負担している。<br>・定年退職者には年金も支給している。<br>この支援により大学を卒業した子供が現在テイスティングルームを管理しています。</p>
\t\t</div>
\t\t<div class=\"col-12 col-md-5 text-center m_20 container\">
\t\t\t<div class=\"row padd_bt20\">
\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t<a href=\"";
        // line 85
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=42\">
\t\t\t\t\t\t<img src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_reyneke1.jpg"), "html", null, true);
        echo "\" alt=\"ライナカ\" width=\"120\">
\t\t\t\t\t\t<p>ライナカ</p>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-6\">
\t\t\t\t\t<a href=\"";
        // line 91
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=9\">
\t\t\t\t\t\t<img src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_brand18.gif"), "html", null, true);
        echo "\" alt=\"ニュービギニングス\" width=\"120\">
\t\t\t\t\t\t<p>ニュービギニングス</p>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</section>
";
    }

    public function getTemplateName()
    {
        return "@user_data/csr.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 92,  173 => 91,  165 => 86,  161 => 85,  141 => 68,  137 => 67,  123 => 56,  103 => 39,  99 => 38,  90 => 32,  78 => 23,  74 => 22,  65 => 16,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@user_data/csr.twig", "/home/anotherworld/www/s-africa.wine/app/template/user_data/csr.twig");
    }
}
