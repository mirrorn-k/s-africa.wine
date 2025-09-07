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

/* Block/category.twig */
class __TwigTemplate_1b38f7847f3bb2d0f9ac1f9c5f351cf2e4a85e1eb5a123ef9fdd5f37f41bfacc extends \Eccube\Twig\Template
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
        // line 11
        echo "
<div class=\"ec-categoryRole\">
\t<div class=\"ec-role\">
\t\t<div class=\"ec-secHeading\">
\t\t\t<span class=\"ec-secHeading__en\">";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("WINERY"), "html", null, true);
        echo "</span>
\t\t\t<span class=\"ec-secHeading__line\"></span>
\t\t\t<span class=\"ec-secHeading__ja\">";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("取り扱いワイナリー"), "html", null, true);
        echo "</span>
\t\t</div>
\t\t<div class=\"ec-categoryRole__box\">
\t\t\t<div class=\"ec-categoryRole__title\"><span>Red wine</span></div>
\t\t\t<div class=\"ec-categoryRole__list\">
\t\t\t\t<div class=\"ec-categoryRole__listItem\">
\t\t\t\t\t<a href=\"";
        // line 23
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=13\">
\t\t\t\t\t\t<img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_brand3.gif"), "html", null, true);
        echo "\" alt=\"ウォーターフォード\">
\t\t\t\t\t\t<p class=\"m_10\">ウォーター<span class=\"keep-all\">フォード</span></p>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"ec-categoryRole__listItem\">
\t\t\t\t\t<a href=\"";
        // line 29
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=14\">
\t\t\t\t\t\t<img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_vilafonte1.jpg"), "html", null, true);
        echo "\" alt=\"ヴィラフォンテ\">
\t\t\t\t\t\t<p class=\"m_10\">ヴィラフォンテ</p>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"ec-categoryRole__listItem\">
\t\t\t\t\t<a href=\"";
        // line 35
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=26\">
\t\t\t\t\t\t<img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_brand36.gif"), "html", null, true);
        echo "\" alt=\"カノンコップ\">
\t\t\t\t\t\t<p class=\"m_10\">カノンコップ</p>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"ec-categoryRole__listItem\">
\t\t\t\t\t<a href=\"";
        // line 41
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=15\">
\t\t\t\t\t\t<img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_keermont1.gif"), "html", null, true);
        echo "\" alt=\"キアモント\">
\t\t\t\t\t\t<p class=\"m_10\">キアモント</p>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"ec-categoryRole__listItem\">
\t\t\t\t\t<a href=\"";
        // line 47
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=20\">
\t\t\t\t\t\t<img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_brand19.gif"), "html", null, true);
        echo "\" alt=\"ハーテンバーグ\">
\t\t\t\t\t\t<p class=\"m_10\">ハーテンバーグ</p>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"ec-categoryRole__box\">
\t\t\t<div class=\"ec-categoryRole__title\"><span>White wine</span></div>
\t\t\t<div class=\"ec-categoryRole__list\">
\t\t\t\t<div class=\"ec-categoryRole__listItem\">
\t\t\t\t\t<a href=\"";
        // line 58
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=7\">
\t\t\t\t\t\t<img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_brand10.gif"), "html", null, true);
        echo "\" alt=\"ステレンラスト\">
\t\t\t\t\t\t<p class=\"m_10\">ステレンラスト</p>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"ec-categoryRole__listItem\">
\t\t\t\t\t<a href=\"";
        // line 64
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=8\">
\t\t\t\t\t\t<img src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_brand37.gif"), "html", null, true);
        echo "\" alt=\"デイビット＆ナディア\">
\t\t\t\t\t\t<p class=\"m_10\">デイビット＆<span class=\"keep-all\">ナディア</span></p>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"ec-categoryRole__listItem\">
\t\t\t\t\t<a href=\"";
        // line 70
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=22\">
\t\t\t\t\t\t<img src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_brand25.gif"), "html", null, true);
        echo "\" alt=\"ポールクルーバー\">
\t\t\t\t\t\t<p class=\"m_10\">ポール<span class=\"keep-all\">クルーバー</span></p>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"ec-categoryRole__box\">
\t\t\t<div class=\"ec-categoryRole__title ec-categoryRole__title-top\"><span>Red & White wine</span></div>
\t\t\t<div class=\"ec-categoryRole__list\">
\t\t\t\t<div class=\"ec-categoryRole__listItem\">
\t\t\t\t\t<a href=\"";
        // line 81
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=10\">
\t\t\t\t\t\t<img src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_brand38.jpg"), "html", null, true);
        echo "\" alt=\"アタラクシア\">
\t\t\t\t\t\t<p class=\"m_10\">アタラクシア</p>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"ec-categoryRole__listItem\">
\t\t\t\t\t<a href=\"";
        // line 87
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=12\">
\t\t\t\t\t\t<img src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_brand35.gif"), "html", null, true);
        echo "\" alt=\"ウォーター・クルーフ\">
\t\t\t\t\t\t<p class=\"m_10\">ウォーター・<span class=\"keep-all\">クルーフ</span></p>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"ec-categoryRole__listItem\">
\t\t\t\t\t<a href=\"";
        // line 93
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=16\">
\t\t\t\t\t\t<img src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_brand39.jpg"), "html", null, true);
        echo "\" alt=\"キャサリン マーシャル\">
\t\t\t\t\t\t<p class=\"m_10\">キャサリン <span class=\"keep-all\">マーシャル</span></p>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"ec-categoryRole__listItem\">
\t\t\t\t\t<a href=\"";
        // line 99
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=19\">
\t\t\t\t\t\t<img src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_constantiaglen1.jpg"), "html", null, true);
        echo "\" alt=\"コンスタンシア グレン\">
\t\t\t\t\t\t<p class=\"m_10\">コンスタンシア <span class=\"keep-all\">グレン</span></p>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"ec-categoryRole__listItem\">
\t\t\t\t\t<a href=\"";
        // line 105
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=45\">
\t\t\t\t\t\t<img src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_stellar1.gif"), "html", null, true);
        echo "\" alt=\"ステラー\">
\t\t\t\t\t\t<p class=\"m_10\">ステラー</p>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"ec-categoryRole__listItem\">
\t\t\t\t\t<a href=\"";
        // line 111
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=44\">
\t\t\t\t\t\t<img src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_namaqua1.gif"), "html", null, true);
        echo "\" alt=\"ナマクワ\">
\t\t\t\t\t\t<p class=\"m_10\">ナマクワ</p>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"ec-categoryRole__listItem\">
\t\t\t\t\t<a href=\"";
        // line 117
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=9\">
\t\t\t\t\t\t<img src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_brand18.gif"), "html", null, true);
        echo "\" alt=\"ニュービギニングス\">
\t\t\t\t\t\t<p class=\"m_10\">ニュー<span class=\"keep-all\">ビギニングス</span></p>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"ec-categoryRole__listItem\">
\t\t\t\t\t<a href=\"";
        // line 123
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=21\">
\t\t\t\t\t\t<img src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_brand22.gif"), "html", null, true);
        echo "\" alt=\"ブーケンハーツクルーフ\">
\t\t\t\t\t\t<p class=\"m_10\">ブーケンハーツ<span class=\"keep-all\">クルーフ</span></p>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"ec-categoryRole__listItem\">
\t\t\t\t\t<a href=\"";
        // line 129
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=43\">
\t\t\t\t\t\t<img src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_bellingham1.gif"), "html", null, true);
        echo "\" alt=\"ベリンガム\">
\t\t\t\t\t\t<p class=\"m_10\">ベリンガム</p>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"ec-categoryRole__listItem\">
\t\t\t\t\t<a href=\"";
        // line 135
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=42\">
\t\t\t\t\t\t<img src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_reyneke1.jpg"), "html", null, true);
        echo "\" alt=\"ライナカ\">
\t\t\t\t\t\t<p class=\"m_10\">ライナカ</p>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"ec-categoryRole__listItem\">
\t\t\t\t\t<a href=\"";
        // line 141
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=46\">
\t\t\t\t\t\t<img src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_rascallion1.jpg"), "html", null, true);
        echo "\" alt=\"ラスカリオン\">
\t\t\t\t\t\t<p class=\"m_10\">ラスカリオン</p>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"ec-categoryRole__listItem\">
\t\t\t\t\t<a href=\"";
        // line 147
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=23\">
\t\t\t\t\t\t<img src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_brand29.gif"), "html", null, true);
        echo "\" alt=\"ラステンバーグ\">
\t\t\t\t\t\t<p class=\"m_10\">ラステンバーグ</p>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"ec-categoryRole__listItem\">
\t\t\t\t\t<a href=\"";
        // line 153
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=24\">
\t\t\t\t\t\t<img src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_brand30.gif"), "html", null, true);
        echo "\" alt=\"ラーツ\">
\t\t\t\t\t\t<p class=\"m_10\">ラーツ</p>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"ec-categoryRole__listItem\">
\t\t\t\t\t<a href=\"";
        // line 159
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=25\">
\t\t\t\t\t\t<img src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_longridge1.jpg"), "html", null, true);
        echo "\" alt=\"ロングリッジ\">
\t\t\t\t\t\t<p class=\"m_10\">ロングリッジ</p>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"ec-categoryRole__box\">
\t\t\t<div class=\"ec-categoryRole__title\"><span>Rose wine</span></div>
\t\t\t<div class=\"ec-categoryRole__list\">
\t\t\t\t<div class=\"ec-categoryRole__listItem\">
\t\t\t\t\t<a href=\"";
        // line 170
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=21\">
\t\t\t\t\t\t<img src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_brand22.gif"), "html", null, true);
        echo "\" alt=\"ブーケンハーツクルーフ\">
\t\t\t\t\t\t<p class=\"m_10\">ブーケンハーツ<span class=\"keep-all\">クルーフ</span></p>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"ec-categoryRole__listItem\">
\t\t\t\t\t<a href=\"";
        // line 176
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=17\">
\t\t\t\t\t\t<img src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_brand7.jpg"), "html", null, true);
        echo "\" alt=\"グレネリー\">
\t\t\t\t\t\t<p class=\"m_10\">グレネリー</p>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"ec-categoryRole__box\">
\t\t\t<div class=\"ec-categoryRole__title\"><span>Sparkling wine</span></div>
\t\t\t<div class=\"ec-categoryRole__list\">
\t\t\t\t<div class=\"ec-categoryRole__listItem\">
\t\t\t\t\t<a href=\"";
        // line 187
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=11\">
\t\t\t\t\t\t<img src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_aristea1.png"), "html", null, true);
        echo "\" alt=\"アリステア\">
\t\t\t\t\t\t<p class=\"m_10\">アリステア</p>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"ec-categoryRole__listItem\">
\t\t\t\t\t<a href=\"";
        // line 193
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=18\">
\t\t\t\t\t\t<img src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_brand8.gif"), "html", null, true);
        echo "\" alt=\"クローヌ\">
\t\t\t\t\t\t<p class=\"m_10\">クローヌ</p>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"ec-categoryRole__listItem\">
\t\t\t\t\t<a href=\"";
        // line 199
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=7\">
\t\t\t\t\t\t<img src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_brand10.gif"), "html", null, true);
        echo "\" alt=\"ステレンラスト\">
\t\t\t\t\t\t<p class=\"m_10\">ステレンラスト</p>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"ec-categoryRole__box\">
\t\t\t<div class=\"ec-categoryRole__title\"><span>Dessert wine</span></div>
\t\t\t<div class=\"ec-categoryRole__list\">
\t\t\t\t<div class=\"ec-categoryRole__listItem\">
\t\t\t\t\t<a href=\"";
        // line 210
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=15\">
\t\t\t\t\t\t<img src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_keermont1.gif"), "html", null, true);
        echo "\" alt=\"キアモント\">
\t\t\t\t\t\t<p class=\"m_10\">キアモント</p>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"ec-categoryRole__listItem\">
\t\t\t\t\t<a href=\"";
        // line 216
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=45\">
\t\t\t\t\t\t<img src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_stellar1.gif"), "html", null, true);
        echo "\" alt=\"ステラー\">
\t\t\t\t\t\t<p class=\"m_10\">ステラー</p>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"ec-categoryRole__box\">
\t\t\t<div class=\"ec-categoryRole__title\"><span>Organic wine</span></div>
\t\t\t<div class=\"ec-categoryRole__list\">
\t\t\t\t<div class=\"ec-categoryRole__listItem\">
\t\t\t\t\t<a href=\"";
        // line 227
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=17\">
\t\t\t\t\t\t<img src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_brand7.jpg"), "html", null, true);
        echo "\" alt=\"グレネリー\">
\t\t\t\t\t\t<p class=\"m_10\">グレネリー</p>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"ec-categoryRole__listItem\">
\t\t\t\t\t<a href=\"";
        // line 233
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=45\">
\t\t\t\t\t\t<img src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_stellar1.gif"), "html", null, true);
        echo "\" alt=\"ステラー\">
\t\t\t\t\t\t<p class=\"m_10\">ステラー</p>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"ec-categoryRole__listItem\">
\t\t\t\t\t<a href=\"";
        // line 239
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=20\">
\t\t\t\t\t\t<img src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_brand19.gif"), "html", null, true);
        echo "\" alt=\"ハーテンバーグ\">
\t\t\t\t\t\t<p class=\"m_10\">ハーテンバーグ</p>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"ec-categoryRole__listItem\">
\t\t\t\t\t<a href=\"";
        // line 245
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=42\">
\t\t\t\t\t\t<img src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_reyneke1.jpg"), "html", null, true);
        echo "\" alt=\"ライナカ\">
\t\t\t\t\t\t<p class=\"m_10\">ライナカ</p>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"ec-categoryRole__listItem\">
\t\t\t\t\t<a href=\"";
        // line 251
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=25\">
\t\t\t\t\t\t<img src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_longridge1.jpg"), "html", null, true);
        echo "\" alt=\"ロングリッジ\">
\t\t\t\t\t\t<p class=\"m_10\">ロングリッジ</p>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"ec-categoryRole__box\">
\t\t\t<div class=\"ec-categoryRole__title\"><span>オシャレなラベル</span></div>
\t\t\t<div class=\"ec-categoryRole__list\">
\t\t\t\t<div class=\"ec-categoryRole__listItem\">
\t\t\t\t\t<a href=\"";
        // line 262
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=10\">
\t\t\t\t\t\t<img src=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_brand38.jpg"), "html", null, true);
        echo "\" alt=\"アタラクシア\">
\t\t\t\t\t\t<p class=\"m_10\">アタラクシア</p>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"ec-categoryRole__listItem\">
\t\t\t\t\t<a href=\"";
        // line 268
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=16\">
\t\t\t\t\t\t<img src=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_brand39.jpg"), "html", null, true);
        echo "\" alt=\"キャサリン マーシャル\">
\t\t\t\t\t\t<p class=\"m_10\">キャサリン <span class=\"keep-all\">マーシャル</span></p>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"ec-categoryRole__listItem\">
\t\t\t\t\t<a href=\"";
        // line 274
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=11\">
\t\t\t\t\t\t<img src=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_aristea1.png"), "html", null, true);
        echo "\" alt=\"アリステア\">
\t\t\t\t\t\t<p class=\"m_10\">アリステア</p>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"ec-categoryRole__listItem\">
\t\t\t\t\t<a href=\"";
        // line 280
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=21\">
\t\t\t\t\t\t<img src=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_brand22.gif"), "html", null, true);
        echo "\" alt=\"ブーケンハーツクルーフ\">
\t\t\t\t\t\t<p class=\"m_10\">ブーケンハーツ<span class=\"keep-all\">クルーフ</span></p>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"ec-categoryRole__listItem\">
\t\t\t\t\t<a href=\"";
        // line 286
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
        echo "?category_id=46\">
\t\t\t\t\t\t<img src=\"";
        // line 287
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_rascallion1.jpg"), "html", null, true);
        echo "\" alt=\"ラスカリオン\">
\t\t\t\t\t\t<p class=\"m_10\">ラスカリオン</p>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"ec-categoryRole__box m_25\">
\t\t\t<div class=\"ec-categoryRole__title\"><span>社会貢献</span></div>
\t\t\t<div class=\"p20\">
\t\t\t\t<p>フェアトレード認証を受けているなど<br>
\t\t\t\t\tワインを通して同国への経済的な支援を行っているワイナリーは<br><a href=\"https://s-africa.wine/user_data/csr\" class=\"underline\">こちらからご覧ください。</a></p>
\t\t\t</div>
\t\t</div>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "Block/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  552 => 287,  548 => 286,  540 => 281,  536 => 280,  528 => 275,  524 => 274,  516 => 269,  512 => 268,  504 => 263,  500 => 262,  487 => 252,  483 => 251,  475 => 246,  471 => 245,  463 => 240,  459 => 239,  451 => 234,  447 => 233,  439 => 228,  435 => 227,  422 => 217,  418 => 216,  410 => 211,  406 => 210,  393 => 200,  389 => 199,  381 => 194,  377 => 193,  369 => 188,  365 => 187,  352 => 177,  348 => 176,  340 => 171,  336 => 170,  323 => 160,  319 => 159,  311 => 154,  307 => 153,  299 => 148,  295 => 147,  287 => 142,  283 => 141,  275 => 136,  271 => 135,  263 => 130,  259 => 129,  251 => 124,  247 => 123,  239 => 118,  235 => 117,  227 => 112,  223 => 111,  215 => 106,  211 => 105,  203 => 100,  199 => 99,  191 => 94,  187 => 93,  179 => 88,  175 => 87,  167 => 82,  163 => 81,  150 => 71,  146 => 70,  138 => 65,  134 => 64,  126 => 59,  122 => 58,  109 => 48,  105 => 47,  97 => 42,  93 => 41,  85 => 36,  81 => 35,  73 => 30,  69 => 29,  61 => 24,  57 => 23,  48 => 17,  43 => 15,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Block/category.twig", "/home/anotherworld/www/s-africa.wine/app/template/default/Block/category.twig");
    }
}
