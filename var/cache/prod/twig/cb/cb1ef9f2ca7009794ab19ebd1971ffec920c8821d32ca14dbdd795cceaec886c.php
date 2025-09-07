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

/* @user_data/winery.twig */
class __TwigTemplate_8fc969f0362b0786147f9a0e8973f37ce63b74ac8cc901ffa6cb619af2641664 extends \Eccube\Twig\Template
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
        $this->parent = $this->loadTemplate("default_frame.twig", "@user_data/winery.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "
<div id=\"goodsCatArea\">
\t<p>ケープワインが取り扱うワイナリーをご紹介します。</p>
\t<div class=\"defFloatN listKanren m_15\">
\t\t<ul class=\"cf\">
\t\t\t<li class=\"\">
\t\t\t\t<a href=\"";
        // line 9
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=10\" title=\"アタラクシア\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_brand38.jpg"), "html", null, true);
        echo "\" alt=\"アタラクシア\">
\t\t\t\t\t<p class=\"m_5 tx_ctr\">アタラクシア</p>
\t\t\t\t</a>
\t\t\t\t<p>「醸造家ではなく」自らを「農夫」と語る醸造家</p>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 15
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=11\">
\t\t\t\t\t<img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_aristea1.png"), "html", null, true);
        echo "\" alt=\"アリステア\">
\t\t\t\t\t<p class=\"m_5 tx_ctr\">アリステア</p>
\t\t\t\t</a>
\t\t\t\t<p>他社にない洗練されたワインをスローガンにに掲げる</p>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 22
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=12\">
\t\t\t\t\t<img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_brand35.gif"), "html", null, true);
        echo "\" alt=\"ウォーター・クルーフ\">
\t\t\t\t\t<p class=\"m_5 tx_ctr\">ウォーター・<span class=\"keep-all\">クルーフ</span></p>
\t\t\t\t</a>
\t\t\t\t<p>環境循環型農業\"Honest Wine\" 「誠実なワイン」</p>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 29
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=13\">
\t\t\t\t\t<img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_brand3.gif"), "html", null, true);
        echo "\" alt=\"ウォーターフォード\">
\t\t\t\t\t<p class=\"m_10\">ウォーター<span class=\"keep-all\">フォード</span></p>
\t\t\t\t</a>
\t\t\t\t<p>スタイリッシュでエレガントなワイン生産者</p>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 36
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=14\">
\t\t\t\t\t<img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_vilafonte1.jpg"), "html", null, true);
        echo "\" alt=\"ヴィラフォンテ\">
\t\t\t\t\t<p class=\"m_10\">ヴィラフォンテ</p>
\t\t\t\t</a>
\t\t\t\t<p>南ア＆米国のコラボが実現！プレミアムワイン生産者</p>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 43
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=26\">
\t\t\t\t\t<img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_brand36.gif"), "html", null, true);
        echo "\" alt=\"カノンコップ\">
\t\t\t\t\t<p class=\"m_10\">カノンコップ</p>
\t\t\t\t</a>
\t\t\t\t<p>世界を代表するステレンボッシュ屈指の赤ワインメーカー</p>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 50
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=15\">
\t\t\t\t\t<img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_keermont1.gif"), "html", null, true);
        echo "\" alt=\"キアモント\">
\t\t\t\t\t<p class=\"m_10\">キアモント</p>
\t\t\t\t</a>
\t\t\t\t<p>山々に囲まれたストイックな自然派ブティック・ワイナリー</p>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 57
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=16\">
\t\t\t\t\t<img src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_brand39.jpg"), "html", null, true);
        echo "\" alt=\"キャサリン マーシャル\">
\t\t\t\t\t<p class=\"m_10\">キャサリン <span class=\"keep-all\">マーシャル</span></p>
\t\t\t\t</a>
\t\t\t\t<p>卓越した技術でテロワールを表現する女性アーティスト</p>
\t\t\t</li>
\t\t\t<li><a href=\"";
        // line 63
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=17\">
\t\t\t\t\t<img src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_brand7.jpg"), "html", null, true);
        echo "\" alt=\"グレネリー\">
\t\t\t\t\t<p class=\"m_10\">グレネリー</p>
\t\t\t\t</a>
\t\t\t\t<p>元ボルドー2級生産者が南アフリカで手がけたワイナリー</p>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 70
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=18\">
\t\t\t\t\t<img src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_brand8.gif"), "html", null, true);
        echo "\" alt=\"クローヌ\">
\t\t\t\t\t<p class=\"m_10\">クローヌ</p>
\t\t\t\t</a>
\t\t\t\t<p>南アフリカ屈指のスパークリングワイン生産者</p>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 77
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=19\">
\t\t\t\t\t<img src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_constantiaglen1.jpg"), "html", null, true);
        echo "\" alt=\"コンスタンシア グレン\">
\t\t\t\t\t<p class=\"m_10\">コンスタンシア <span class=\"keep-all\">グレン</span></p>
\t\t\t\t</a>
\t\t\t\t<p>南アフリカワイン発祥の地コンスタンシア</p>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 84
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=45\">
\t\t\t\t\t<img src=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_stellar1.gif"), "html", null, true);
        echo "\" alt=\"ステラー\">
\t\t\t\t\t<p class=\"m_10\">ステラー</p>
\t\t\t\t</a>
\t\t\t\t<p>妥協なきオーガニックワイン生産者</p>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 91
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=7\">
\t\t\t\t\t<img src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_brand10.gif"), "html", null, true);
        echo "\" alt=\"ステレンラスト\">
\t\t\t\t\t<p class=\"m_10\">ステレンラスト</p>
\t\t\t\t</a>
\t\t\t\t<p>2012年ロンドン五輪に採用されたワイナリー</p>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 98
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=8\">
\t\t\t\t\t<img src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_brand37.gif"), "html", null, true);
        echo "\" alt=\"デイビット＆ナディア\">
\t\t\t\t\t<p class=\"m_10\">デイビット＆<span class=\"keep-all\">ナディア</span></p>
\t\t\t\t</a>
\t\t\t\t<p>今後も益々目が離せない自然派生産者</p>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 105
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=44\">
\t\t\t\t\t<img src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_namaqua1.gif"), "html", null, true);
        echo "\" alt=\"ナマクワ\">
\t\t\t\t\t<p class=\"m_10\">ナマクワ</p>
\t\t\t\t</a>
\t\t\t\t<p>ハイコスパのBOXワイン生産者</p>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 112
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=9\">
\t\t\t\t\t<img src=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_brand18.gif"), "html", null, true);
        echo "\" alt=\"ニュービギニングス\">
\t\t\t\t\t<p class=\"m_10\">ニュー<span class=\"keep-all\">ビギニングス</span></p>
\t\t\t\t</a>
\t\t\t\t<p>「新しい始まり」という名のワイン</p>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 119
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=20\">
\t\t\t\t\t<img src=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_brand19.gif"), "html", null, true);
        echo "\" alt=\"ハーテンバーグ\">
\t\t\t\t\t<p class=\"m_10\">ハーテンバーグ</p>
\t\t\t\t</a>
\t\t\t\t<p>老舗のプレミアム・ワインのオーガニック生産者</p>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 126
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=21\">
\t\t\t\t\t<img src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_brand22.gif"), "html", null, true);
        echo "\" alt=\"ブーケンハーツクルーフ\">
\t\t\t\t\t<p class=\"m_10\">ブーケンハーツ<span class=\"keep-all\">クルーフ</span></p>
\t\t\t\t</a>
\t\t\t\t<p>テーブルワインからプレミアムワインまで、世界が認める生産者</p>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 133
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=43\">
\t\t\t\t\t<img src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_bellingham1.gif"), "html", null, true);
        echo "\" alt=\"ベリンガム\">
\t\t\t\t\t<p class=\"m_10\">ベリンガム</p>
\t\t\t\t</a>
\t\t\t\t<p>300年以上の歴史を持つワイナリー</p>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 140
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=22\">
\t\t\t\t\t<img src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_brand25.gif"), "html", null, true);
        echo "\" alt=\"ポールクルーバー\">
\t\t\t\t\t<p class=\"m_10\">ポール<span class=\"keep-all\">クルーバー</span></p>
\t\t\t\t</a>
\t\t\t\t<p>冷涼地区エルギンのパイオニア</p>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 147
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=42\">
\t\t\t\t\t<img src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_reyneke1.jpg"), "html", null, true);
        echo "\" alt=\"ライナカ\">
\t\t\t\t\t<p class=\"m_10\">ライナカ</p>
\t\t\t\t</a>
\t\t\t\t<p>南アで最初にビオディナミ認証取得したワイナリー</p>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 154
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=46\">
\t\t\t\t\t<img src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_rascallion1.jpg"), "html", null, true);
        echo "\" alt=\"ラスカリオン\">
\t\t\t\t\t<p class=\"m_10\">ラスカリオン</p>
\t\t\t\t</a>
\t\t\t\t<p>This is not Wine,This is RASCALLION</p>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 161
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=23\">
\t\t\t\t\t<img src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_brand29.gif"), "html", null, true);
        echo "\" alt=\"ラステンバーグ\">
\t\t\t\t\t<p class=\"m_10\">ラステンバーグ</p>
\t\t\t\t</a>
\t\t\t\t<p>南アフリカの超名門。冷涼地区のエレガントワイン</p>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 168
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=24\">
\t\t\t\t\t<img src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_brand30.gif"), "html", null, true);
        echo "\" alt=\"ラーツ\">
\t\t\t\t\t<p class=\"m_10\">ラーツ</p>
\t\t\t\t</a>
\t\t\t\t<p>シュナンとフランに特化したワイナリー</p>
\t\t\t</li>
\t\t\t<li>
\t\t\t\t<a href=\"";
        // line 175
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=25\">
\t\t\t\t\t<img src=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_longridge1.jpg"), "html", null, true);
        echo "\" alt=\"ロングリッジ\">
\t\t\t\t\t<p class=\"m_10\">ロングリッジ</p>
\t\t\t\t</a>
\t\t\t\t<p>オーガニック＆ビオディナミ生産者</p>
\t\t\t</li>

\t\t</ul>
\t</div>
</div>


";
    }

    public function getTemplateName()
    {
        return "@user_data/winery.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  371 => 176,  367 => 175,  358 => 169,  354 => 168,  345 => 162,  341 => 161,  332 => 155,  328 => 154,  319 => 148,  315 => 147,  306 => 141,  302 => 140,  293 => 134,  289 => 133,  280 => 127,  276 => 126,  267 => 120,  263 => 119,  254 => 113,  250 => 112,  241 => 106,  237 => 105,  228 => 99,  224 => 98,  215 => 92,  211 => 91,  202 => 85,  198 => 84,  189 => 78,  185 => 77,  176 => 71,  172 => 70,  163 => 64,  159 => 63,  151 => 58,  147 => 57,  138 => 51,  134 => 50,  125 => 44,  121 => 43,  112 => 37,  108 => 36,  99 => 30,  95 => 29,  86 => 23,  82 => 22,  73 => 16,  69 => 15,  58 => 9,  50 => 3,  46 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@user_data/winery.twig", "/home/anotherworld/www/s-africa.wine/app/template/user_data/winery.twig");
    }
}
