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
class __TwigTemplate_66a2fac65f70377835a9951a8b50da8284f0ac5406c40879fcd40dd55de16aba extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Block/category.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Block/category.twig"));

        // line 11
        echo "
<div class=\"ec-categoryRole\">
    <div class=\"ec-role\">
        <div class=\"ec-secHeading\">
            <span class=\"ec-secHeading__en\">";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("WINERT"), "html", null, true);
        echo "</span>
            <span class=\"ec-secHeading__line\"></span>
            <span class=\"ec-secHeading__ja\">";
        // line 17
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("取り扱いワイナリー"), "html", null, true);
        echo "</span>
        </div>
        <div class=\"ec-categoryRole__box\">
            <div class=\"ec-categoryRole__title\"><span>赤ワインが得意な<br>ワイナリー</span></div>
            <div class=\"ec-categoryRole__list\">
                <div class=\"ec-categoryRole__listItem\">
                    <a href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=13\">
                        <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_brand3.gif"), "html", null, true);
        echo "\" alt=\"ウォーターフォード\">
                        <p class=\"m_10\">ウォーターフォード</p>
                    </a>
                </div>
                <div class=\"ec-categoryRole__listItem\">
                    <a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=14\">
                        <img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_vilafonte1.jpg"), "html", null, true);
        echo "\" alt=\"ヴィラフォンテ\">
                        <p class=\"m_10\">ヴィラフォンテ</p>
                    </a>
                </div>
                <div class=\"ec-categoryRole__listItem\">
                    <a href=\"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=26\">
                        <img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_brand36.gif"), "html", null, true);
        echo "\" alt=\"カノンコップ\">
                        <p class=\"m_10\">カノンコップ</p>
                    </a>
                </div>
                <div class=\"ec-categoryRole__listItem\">
                    <a href=\"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=15\">
                        <img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_keermont1.gif"), "html", null, true);
        echo "\" alt=\"キアモント\">
                        <p class=\"m_10\">キアモント</p>
                    </a>
                </div>
                <div class=\"ec-categoryRole__listItem\">
                    <a href=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=20\">
                        <img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_brand19.gif"), "html", null, true);
        echo "\" alt=\"ハーテンバーグ\">
                        <p class=\"m_10\">ハーテンバーグ</p>
                    </a>
                </div>
            </div>
        </div>
        <div class=\"ec-categoryRole__box\">
            <div class=\"ec-categoryRole__title\"><span>白ワインが得意な<br>ワイナリー</span></div>
            <div class=\"ec-categoryRole__list\">
                <div class=\"ec-categoryRole__listItem\">
                    <a href=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=7\">
                        <img src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_brand10.gif"), "html", null, true);
        echo "\" alt=\"ステレンラスト\">
                        <p class=\"m_10\">ステレンラスト</p>
                    </a>
                </div>
                <div class=\"ec-categoryRole__listItem\">
                    <a href=\"";
        // line 64
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=8\">
                        <img src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_brand37.gif"), "html", null, true);
        echo "\" alt=\"デイビット＆ナディア\">
                        <p class=\"m_10\">デイビット＆ナディア</p>
                    </a>
                </div>
                <div class=\"ec-categoryRole__listItem\">
                    <a href=\"";
        // line 70
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=22\">
                        <img src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_brand25.gif"), "html", null, true);
        echo "\" alt=\"ポールクルーバー\">
                        <p class=\"m_10\">ポールクルーバー</p>
                    </a>
                </div>
            </div>
        </div>
        <div class=\"ec-categoryRole__box\">
            <div class=\"ec-categoryRole__title\"><span>赤白共に品揃えがある<br>ワイナリー</span></div>
            <div class=\"ec-categoryRole__list\">
                <div class=\"ec-categoryRole__listItem\">
                    <a href=\"";
        // line 81
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=10\">
                        <img src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_brand38.jpg"), "html", null, true);
        echo "\" alt=\"アタラクシア\">
                        <p class=\"m_10\">アタラクシア</p>
                    </a>
                </div>
                <div class=\"ec-categoryRole__listItem\">
                    <a href=\"";
        // line 87
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=12\">
                        <img src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_brand35.gif"), "html", null, true);
        echo "\" alt=\"ウォーター・クルーフ\">
                        <p class=\"m_10\">ウォーター・クルーフ</p>
                    </a>
                </div>
                <div class=\"ec-categoryRole__listItem\">
                    <a href=\"";
        // line 93
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=16\">
                        <img src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_brand39.jpg"), "html", null, true);
        echo "\" alt=\"キャサリン マーシャル\">
                        <p class=\"m_10\">キャサリン マーシャル</p>
                    </a>
                </div>
                <div class=\"ec-categoryRole__listItem\">
                    <a href=\"";
        // line 99
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=19\">
                        <img src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_constantiaglen1.jpg"), "html", null, true);
        echo "\" alt=\"コンスタンシア グレン\">
                        <p class=\"m_10\">コンスタンシア グレン</p>
                    </a>
                </div>
                <div class=\"ec-categoryRole__listItem\">
                    <a href=\"";
        // line 105
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=45\">
                        <img src=\"";
        // line 106
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_stellar1.gif"), "html", null, true);
        echo "\" alt=\"ステラー\">
                        <p class=\"m_10\">ステラー</p>
                    </a>
                </div>
                <div class=\"ec-categoryRole__listItem\">
                    <a href=\"";
        // line 111
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=44\">
                        <img src=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_namaqua1.gif"), "html", null, true);
        echo "\" alt=\"ナマクワ\">
                        <p class=\"m_10\">ナマクワ</p>
                    </a>
                </div>
                <div class=\"ec-categoryRole__listItem\">
                    <a href=\"";
        // line 117
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=9\">
                        <img src=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_brand18.gif"), "html", null, true);
        echo "\" alt=\"ニュービギニングス\">
                        <p class=\"m_10\">ニュービギニングス</p>
                    </a>
                </div>
                <div class=\"ec-categoryRole__listItem\">
                    <a href=\"";
        // line 123
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=21\">
                        <img src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_brand22.gif"), "html", null, true);
        echo "\" alt=\"ブーケンハーツクルーフ\">
                        <p class=\"m_10\">ブーケンハーツクルーフ</p>
                    </a>
                </div>
                <div class=\"ec-categoryRole__listItem\">
                    <a href=\"";
        // line 129
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=43\">
                        <img src=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_bellingham1.gif"), "html", null, true);
        echo "\" alt=\"ベリンガム\">
                        <p class=\"m_10\">ベリンガム</p>
                    </a>
                </div>
                <div class=\"ec-categoryRole__listItem\">
                    <a href=\"";
        // line 135
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=42\">
                        <img src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_reyneke1.jpg"), "html", null, true);
        echo "\" alt=\"ライナカ\">
                        <p class=\"m_10\">ライナカ</p>
                    </a>
                </div>
                <div class=\"ec-categoryRole__listItem\">
                    <a href=\"";
        // line 141
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=46\">
                        <img src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_rascallion1.jpg"), "html", null, true);
        echo "\" alt=\"ラスカリオン\">
                        <p class=\"m_10\">ラスカリオン</p>
                    </a>
                </div>
                <div class=\"ec-categoryRole__listItem\">
                    <a href=\"";
        // line 147
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=23\">
                        <img src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_brand29.gif"), "html", null, true);
        echo "\" alt=\"ラステンバーグ\">
                        <p class=\"m_10\">ラステンバーグ</p>
                    </a>
                </div>
                <div class=\"ec-categoryRole__listItem\">
                    <a href=\"";
        // line 153
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=24\">
                        <img src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_brand30.gif"), "html", null, true);
        echo "\" alt=\"ラーツ\">
                        <p class=\"m_10\">ラーツ</p>
                    </a>
                </div>
                <div class=\"ec-categoryRole__listItem\">
                    <a href=\"";
        // line 159
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=25\">
                        <img src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_longridge1.jpg"), "html", null, true);
        echo "\" alt=\"ロングリッジ\">
                        <p class=\"m_10\">ロングリッジ</p>
                    </a>
                </div>
            </div>
        </div>
        <div class=\"ec-categoryRole__box\">
            <div class=\"ec-categoryRole__title\"><span>ロゼが得意な<br>ワイナリー</span></div>
            <div class=\"ec-categoryRole__list\">
                <div class=\"ec-categoryRole__listItem\">
                    <a href=\"";
        // line 170
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=21\">
                        <img src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_brand22.gif"), "html", null, true);
        echo "\" alt=\"ブーケンハーツクルーフ\">
                        <p class=\"m_10\">ブーケンハーツクルーフ</p>
                    </a>
                </div>
                <div class=\"ec-categoryRole__listItem\">
                    <a href=\"";
        // line 176
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=17\">
                        <img src=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_brand7.jpg"), "html", null, true);
        echo "\" alt=\"グレネリー\">
                        <p class=\"m_10\">グレネリー</p>
                    </a>
                </div>
            </div>
        </div>
        <div class=\"ec-categoryRole__box\">
            <div class=\"ec-categoryRole__title\"><span>発泡酒が得意な<br>ワイナリー</span></div>
            <div class=\"ec-categoryRole__list\">
                <div class=\"ec-categoryRole__listItem\">
                    <a href=\"";
        // line 187
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=11\">
                        <img src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_aristea1.png"), "html", null, true);
        echo "\" alt=\"アリステア\">
                        <p class=\"m_10\">アリステア</p>
                    </a>
                </div>
                <div class=\"ec-categoryRole__listItem\">
                    <a href=\"";
        // line 193
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=18\">
                        <img src=\"";
        // line 194
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_brand8.gif"), "html", null, true);
        echo "\" alt=\"クローヌ\">
                        <p class=\"m_10\">クローヌ</p>
                    </a>
                </div>
                <div class=\"ec-categoryRole__listItem\">
                    <a href=\"";
        // line 199
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=7\">
                        <img src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_brand10.gif"), "html", null, true);
        echo "\" alt=\"ステレンラスト\">
                        <p class=\"m_10\">ステレンラスト</p>
                    </a>
                </div>
            </div>
        </div>
        <div class=\"ec-categoryRole__box\">
            <div class=\"ec-categoryRole__title\"><span>デザートワインが<br>得意な<br>ワイナリー</span></div>
            <div class=\"ec-categoryRole__list\">
                <div class=\"ec-categoryRole__listItem\">
                    <a href=\"";
        // line 210
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=15\">
                        <img src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_keermont1.gif"), "html", null, true);
        echo "\" alt=\"キアモント\">
                        <p class=\"m_10\">キアモント</p>
                    </a>
                </div>
            </div>
        </div>
        <div class=\"ec-categoryRole__box\">
            <div class=\"ec-categoryRole__title\"><span>オーガニックワインが<br>得意な<br>ワイナリー</span></div>
            <div class=\"ec-categoryRole__list\">
                <div class=\"ec-categoryRole__listItem\">
                    <a href=\"";
        // line 221
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=45\">
                        <img src=\"";
        // line 222
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_stellar1.gif"), "html", null, true);
        echo "\" alt=\"ステラー\">
                        <p class=\"m_10\">ステラー</p>
                    </a>
                </div>
                <div class=\"ec-categoryRole__listItem\">
                    <a href=\"";
        // line 227
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=20\">
                        <img src=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_brand19.gif"), "html", null, true);
        echo "\" alt=\"ハーテンバーグ\">
                        <p class=\"m_10\">ハーテンバーグ</p>
                    </a>
                </div>
                <div class=\"ec-categoryRole__listItem\">
                    <a href=\"";
        // line 233
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=42\">
                        <img src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_reyneke1.jpg"), "html", null, true);
        echo "\" alt=\"ライナカ\">
                        <p class=\"m_10\">ライナカ</p>
                    </a>
                </div>
                <div class=\"ec-categoryRole__listItem\">
                    <a href=\"";
        // line 239
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_list");
        echo "?category_id=25\">
                        <img src=\"";
        // line 240
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo/p_longridge1.jpg"), "html", null, true);
        echo "\" alt=\"ロングリッジ\">
                        <p class=\"m_10\">ロングリッジ</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  469 => 240,  465 => 239,  457 => 234,  453 => 233,  445 => 228,  441 => 227,  433 => 222,  429 => 221,  416 => 211,  412 => 210,  399 => 200,  395 => 199,  387 => 194,  383 => 193,  375 => 188,  371 => 187,  358 => 177,  354 => 176,  346 => 171,  342 => 170,  329 => 160,  325 => 159,  317 => 154,  313 => 153,  305 => 148,  301 => 147,  293 => 142,  289 => 141,  281 => 136,  277 => 135,  269 => 130,  265 => 129,  257 => 124,  253 => 123,  245 => 118,  241 => 117,  233 => 112,  229 => 111,  221 => 106,  217 => 105,  209 => 100,  205 => 99,  197 => 94,  193 => 93,  185 => 88,  181 => 87,  173 => 82,  169 => 81,  156 => 71,  152 => 70,  144 => 65,  140 => 64,  132 => 59,  128 => 58,  115 => 48,  111 => 47,  103 => 42,  99 => 41,  91 => 36,  87 => 35,  79 => 30,  75 => 29,  67 => 24,  63 => 23,  54 => 17,  49 => 15,  43 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("{#
This file is part of EC-CUBE

Copyright(c) EC-CUBE CO.,LTD. All Rights Reserved.

http://www.ec-cube.co.jp/

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.
#}

<div class=\"ec-categoryRole\">
    <div class=\"ec-role\">
        <div class=\"ec-secHeading\">
            <span class=\"ec-secHeading__en\">{{ 'WINERT'|trans }}</span>
            <span class=\"ec-secHeading__line\"></span>
            <span class=\"ec-secHeading__ja\">{{ '取り扱いワイナリー'|trans }}</span>
        </div>
        <div class=\"ec-categoryRole__box\">
            <div class=\"ec-categoryRole__title\"><span>赤ワインが得意な<br>ワイナリー</span></div>
            <div class=\"ec-categoryRole__list\">
                <div class=\"ec-categoryRole__listItem\">
                    <a href=\"{{ url('product_list') }}?category_id=13\">
                        <img src=\"{{ asset('/html/user_data/upload/img/logo/p_brand3.gif') }}\" alt=\"ウォーターフォード\">
                        <p class=\"m_10\">ウォーターフォード</p>
                    </a>
                </div>
                <div class=\"ec-categoryRole__listItem\">
                    <a href=\"{{ url('product_list') }}?category_id=14\">
                        <img src=\"{{ asset('/html/user_data/upload/img/logo/p_vilafonte1.jpg') }}\" alt=\"ヴィラフォンテ\">
                        <p class=\"m_10\">ヴィラフォンテ</p>
                    </a>
                </div>
                <div class=\"ec-categoryRole__listItem\">
                    <a href=\"{{ url('product_list') }}?category_id=26\">
                        <img src=\"{{ asset('/html/user_data/upload/img/logo/p_brand36.gif') }}\" alt=\"カノンコップ\">
                        <p class=\"m_10\">カノンコップ</p>
                    </a>
                </div>
                <div class=\"ec-categoryRole__listItem\">
                    <a href=\"{{ url('product_list') }}?category_id=15\">
                        <img src=\"{{ asset('/html/user_data/upload/img/logo/p_keermont1.gif') }}\" alt=\"キアモント\">
                        <p class=\"m_10\">キアモント</p>
                    </a>
                </div>
                <div class=\"ec-categoryRole__listItem\">
                    <a href=\"{{ url('product_list') }}?category_id=20\">
                        <img src=\"{{ asset('/html/user_data/upload/img/logo/p_brand19.gif') }}\" alt=\"ハーテンバーグ\">
                        <p class=\"m_10\">ハーテンバーグ</p>
                    </a>
                </div>
            </div>
        </div>
        <div class=\"ec-categoryRole__box\">
            <div class=\"ec-categoryRole__title\"><span>白ワインが得意な<br>ワイナリー</span></div>
            <div class=\"ec-categoryRole__list\">
                <div class=\"ec-categoryRole__listItem\">
                    <a href=\"{{ url('product_list') }}?category_id=7\">
                        <img src=\"{{ asset('/html/user_data/upload/img/logo/p_brand10.gif') }}\" alt=\"ステレンラスト\">
                        <p class=\"m_10\">ステレンラスト</p>
                    </a>
                </div>
                <div class=\"ec-categoryRole__listItem\">
                    <a href=\"{{ url('product_list') }}?category_id=8\">
                        <img src=\"{{ asset('/html/user_data/upload/img/logo/p_brand37.gif') }}\" alt=\"デイビット＆ナディア\">
                        <p class=\"m_10\">デイビット＆ナディア</p>
                    </a>
                </div>
                <div class=\"ec-categoryRole__listItem\">
                    <a href=\"{{ url('product_list') }}?category_id=22\">
                        <img src=\"{{ asset('/html/user_data/upload/img/logo/p_brand25.gif') }}\" alt=\"ポールクルーバー\">
                        <p class=\"m_10\">ポールクルーバー</p>
                    </a>
                </div>
            </div>
        </div>
        <div class=\"ec-categoryRole__box\">
            <div class=\"ec-categoryRole__title\"><span>赤白共に品揃えがある<br>ワイナリー</span></div>
            <div class=\"ec-categoryRole__list\">
                <div class=\"ec-categoryRole__listItem\">
                    <a href=\"{{ url('product_list') }}?category_id=10\">
                        <img src=\"{{ asset('/html/user_data/upload/img/logo/p_brand38.jpg') }}\" alt=\"アタラクシア\">
                        <p class=\"m_10\">アタラクシア</p>
                    </a>
                </div>
                <div class=\"ec-categoryRole__listItem\">
                    <a href=\"{{ url('product_list') }}?category_id=12\">
                        <img src=\"{{ asset('/html/user_data/upload/img/logo/p_brand35.gif') }}\" alt=\"ウォーター・クルーフ\">
                        <p class=\"m_10\">ウォーター・クルーフ</p>
                    </a>
                </div>
                <div class=\"ec-categoryRole__listItem\">
                    <a href=\"{{ url('product_list') }}?category_id=16\">
                        <img src=\"{{ asset('/html/user_data/upload/img/logo/p_brand39.jpg') }}\" alt=\"キャサリン マーシャル\">
                        <p class=\"m_10\">キャサリン マーシャル</p>
                    </a>
                </div>
                <div class=\"ec-categoryRole__listItem\">
                    <a href=\"{{ url('product_list') }}?category_id=19\">
                        <img src=\"{{ asset('/html/user_data/upload/img/logo/p_constantiaglen1.jpg') }}\" alt=\"コンスタンシア グレン\">
                        <p class=\"m_10\">コンスタンシア グレン</p>
                    </a>
                </div>
                <div class=\"ec-categoryRole__listItem\">
                    <a href=\"{{ url('product_list') }}?category_id=45\">
                        <img src=\"{{ asset('/html/user_data/upload/img/logo/p_stellar1.gif') }}\" alt=\"ステラー\">
                        <p class=\"m_10\">ステラー</p>
                    </a>
                </div>
                <div class=\"ec-categoryRole__listItem\">
                    <a href=\"{{ url('product_list') }}?category_id=44\">
                        <img src=\"{{ asset('/html/user_data/upload/img/logo/p_namaqua1.gif') }}\" alt=\"ナマクワ\">
                        <p class=\"m_10\">ナマクワ</p>
                    </a>
                </div>
                <div class=\"ec-categoryRole__listItem\">
                    <a href=\"{{ url('product_list') }}?category_id=9\">
                        <img src=\"{{ asset('/html/user_data/upload/img/logo/p_brand18.gif') }}\" alt=\"ニュービギニングス\">
                        <p class=\"m_10\">ニュービギニングス</p>
                    </a>
                </div>
                <div class=\"ec-categoryRole__listItem\">
                    <a href=\"{{ url('product_list') }}?category_id=21\">
                        <img src=\"{{ asset('/html/user_data/upload/img/logo/p_brand22.gif') }}\" alt=\"ブーケンハーツクルーフ\">
                        <p class=\"m_10\">ブーケンハーツクルーフ</p>
                    </a>
                </div>
                <div class=\"ec-categoryRole__listItem\">
                    <a href=\"{{ url('product_list') }}?category_id=43\">
                        <img src=\"{{ asset('/html/user_data/upload/img/logo/p_bellingham1.gif') }}\" alt=\"ベリンガム\">
                        <p class=\"m_10\">ベリンガム</p>
                    </a>
                </div>
                <div class=\"ec-categoryRole__listItem\">
                    <a href=\"{{ url('product_list') }}?category_id=42\">
                        <img src=\"{{ asset('/html/user_data/upload/img/logo/p_reyneke1.jpg') }}\" alt=\"ライナカ\">
                        <p class=\"m_10\">ライナカ</p>
                    </a>
                </div>
                <div class=\"ec-categoryRole__listItem\">
                    <a href=\"{{ url('product_list') }}?category_id=46\">
                        <img src=\"{{ asset('/html/user_data/upload/img/logo/p_rascallion1.jpg') }}\" alt=\"ラスカリオン\">
                        <p class=\"m_10\">ラスカリオン</p>
                    </a>
                </div>
                <div class=\"ec-categoryRole__listItem\">
                    <a href=\"{{ url('product_list') }}?category_id=23\">
                        <img src=\"{{ asset('/html/user_data/upload/img/logo/p_brand29.gif') }}\" alt=\"ラステンバーグ\">
                        <p class=\"m_10\">ラステンバーグ</p>
                    </a>
                </div>
                <div class=\"ec-categoryRole__listItem\">
                    <a href=\"{{ url('product_list') }}?category_id=24\">
                        <img src=\"{{ asset('/html/user_data/upload/img/logo/p_brand30.gif') }}\" alt=\"ラーツ\">
                        <p class=\"m_10\">ラーツ</p>
                    </a>
                </div>
                <div class=\"ec-categoryRole__listItem\">
                    <a href=\"{{ url('product_list') }}?category_id=25\">
                        <img src=\"{{ asset('/html/user_data/upload/img/logo/p_longridge1.jpg') }}\" alt=\"ロングリッジ\">
                        <p class=\"m_10\">ロングリッジ</p>
                    </a>
                </div>
            </div>
        </div>
        <div class=\"ec-categoryRole__box\">
            <div class=\"ec-categoryRole__title\"><span>ロゼが得意な<br>ワイナリー</span></div>
            <div class=\"ec-categoryRole__list\">
                <div class=\"ec-categoryRole__listItem\">
                    <a href=\"{{ url('product_list') }}?category_id=21\">
                        <img src=\"{{ asset('/html/user_data/upload/img/logo/p_brand22.gif') }}\" alt=\"ブーケンハーツクルーフ\">
                        <p class=\"m_10\">ブーケンハーツクルーフ</p>
                    </a>
                </div>
                <div class=\"ec-categoryRole__listItem\">
                    <a href=\"{{ url('product_list') }}?category_id=17\">
                        <img src=\"{{ asset('/html/user_data/upload/img/logo/p_brand7.jpg') }}\" alt=\"グレネリー\">
                        <p class=\"m_10\">グレネリー</p>
                    </a>
                </div>
            </div>
        </div>
        <div class=\"ec-categoryRole__box\">
            <div class=\"ec-categoryRole__title\"><span>発泡酒が得意な<br>ワイナリー</span></div>
            <div class=\"ec-categoryRole__list\">
                <div class=\"ec-categoryRole__listItem\">
                    <a href=\"{{ url('product_list') }}?category_id=11\">
                        <img src=\"{{ asset('/html/user_data/upload/img/logo/p_aristea1.png') }}\" alt=\"アリステア\">
                        <p class=\"m_10\">アリステア</p>
                    </a>
                </div>
                <div class=\"ec-categoryRole__listItem\">
                    <a href=\"{{ url('product_list') }}?category_id=18\">
                        <img src=\"{{ asset('/html/user_data/upload/img/logo/p_brand8.gif') }}\" alt=\"クローヌ\">
                        <p class=\"m_10\">クローヌ</p>
                    </a>
                </div>
                <div class=\"ec-categoryRole__listItem\">
                    <a href=\"{{ url('product_list') }}?category_id=7\">
                        <img src=\"{{ asset('/html/user_data/upload/img/logo/p_brand10.gif') }}\" alt=\"ステレンラスト\">
                        <p class=\"m_10\">ステレンラスト</p>
                    </a>
                </div>
            </div>
        </div>
        <div class=\"ec-categoryRole__box\">
            <div class=\"ec-categoryRole__title\"><span>デザートワインが<br>得意な<br>ワイナリー</span></div>
            <div class=\"ec-categoryRole__list\">
                <div class=\"ec-categoryRole__listItem\">
                    <a href=\"{{ url('product_list') }}?category_id=15\">
                        <img src=\"{{ asset('/html/user_data/upload/img/logo/p_keermont1.gif') }}\" alt=\"キアモント\">
                        <p class=\"m_10\">キアモント</p>
                    </a>
                </div>
            </div>
        </div>
        <div class=\"ec-categoryRole__box\">
            <div class=\"ec-categoryRole__title\"><span>オーガニックワインが<br>得意な<br>ワイナリー</span></div>
            <div class=\"ec-categoryRole__list\">
                <div class=\"ec-categoryRole__listItem\">
                    <a href=\"{{ url('product_list') }}?category_id=45\">
                        <img src=\"{{ asset('/html/user_data/upload/img/logo/p_stellar1.gif') }}\" alt=\"ステラー\">
                        <p class=\"m_10\">ステラー</p>
                    </a>
                </div>
                <div class=\"ec-categoryRole__listItem\">
                    <a href=\"{{ url('product_list') }}?category_id=20\">
                        <img src=\"{{ asset('/html/user_data/upload/img/logo/p_brand19.gif') }}\" alt=\"ハーテンバーグ\">
                        <p class=\"m_10\">ハーテンバーグ</p>
                    </a>
                </div>
                <div class=\"ec-categoryRole__listItem\">
                    <a href=\"{{ url('product_list') }}?category_id=42\">
                        <img src=\"{{ asset('/html/user_data/upload/img/logo/p_reyneke1.jpg') }}\" alt=\"ライナカ\">
                        <p class=\"m_10\">ライナカ</p>
                    </a>
                </div>
                <div class=\"ec-categoryRole__listItem\">
                    <a href=\"{{ url('product_list') }}?category_id=25\">
                        <img src=\"{{ asset('/html/user_data/upload/img/logo/p_longridge1.jpg') }}\" alt=\"ロングリッジ\">
                        <p class=\"m_10\">ロングリッジ</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>", "Block/category.twig", "/home/anotherworld/www/s-africa.wine/app/template/default/Block/category.twig");
    }
}
