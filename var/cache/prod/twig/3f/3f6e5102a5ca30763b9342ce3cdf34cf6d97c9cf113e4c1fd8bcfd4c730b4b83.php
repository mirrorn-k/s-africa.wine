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

/* index.twig */
class __TwigTemplate_8e102164d9744498b31a53ab000494bca18f549d87d281ed009c805dd403809b extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheet' => [$this, 'block_stylesheet'],
            'javascript' => [$this, 'block_javascript'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        $context["body_class"] = "front_page";
        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "index.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 16
        echo "    <style>
        .slick-slider {
            margin-bottom: 30px;
        }

        .slick-dots {
            position: absolute;
            bottom: -45px;
            display: block;
            width: 100%;
            padding: 0;
            list-style: none;
            text-align: center;
        }

        .slick-dots li {
            position: relative;
            display: inline-block;
            width: 20px;
            height: 20px;
            margin: 0 5px;
            padding: 0;

            cursor: pointer;
        }

        .slick-dots li button {
            font-size: 0;
            line-height: 0;
            display: block;
            width: 20px;
            height: 20px;
            padding: 5px;
            cursor: pointer;
            color: transparent;
            border: 0;
            outline: none;
            background: transparent;
        }

        .slick-dots li button:hover,
        .slick-dots li button:focus {
            outline: none;
        }

        .slick-dots li button:hover:before,
        .slick-dots li button:focus:before {
            opacity: 1;
        }

        .slick-dots li button:before {
            content: \" \";
            line-height: 20px;
            position: absolute;
            top: 0;
            left: 0;
            width: 12px;
            height: 12px;
            text-align: center;
            opacity: .25;
            background-color: black;
            border-radius: 50%;

        }

        .slick-dots li.slick-active button:before {
            opacity: .75;
            background-color: black;
        }

        .slick-dots li button.thumbnail img {
            width: 0;
            height: 0;
        }
    .slick-slide:not(.slick-center) {
    -webkit-filter: opacity(70%);
    -moz-filter: opacity(70%);
    -o-filter: opacity(70%);
    -ms-filter: opacity(70%);
    filter: opacity(70%);
    transition: 0.2s linear;
    }
    </style>
";
    }

    // line 101
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 102
        echo "    <script>
        \$(function() {
            \$('.main_visual').slick({
                dots: true,
                arrows: false,
                autoplay: true,
                autoplaySpeed: 3200,
                speed: 400,
                slidesToShow: 1,
                centerMode: true,
                centerPadding: '100px',
                focusOnSelect: true,
                easing: 'swing',
                responsive: [
   {
    breakpoint: 768, //767px以下のサイズに適用
    settings: {
      centerPadding: '50px',
    }
   },{
    breakpoint: 525, //525px以下のサイズに適用
    settings: {
      centerPadding: '0',
    }
   }
 ]
            });
        });
    </script>
";
    }

    // line 132
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 133
        echo "    <div class=\"ec-sliderRole\">
        <div class=\"main_visual\">
            <div class=\"item slick-slide\"><img src=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/pl_maining1.jpg"), "html", null, true);
        echo "\" alt=\"お手軽なオーガニックワイン\"></div>
            <div class=\"item slick-slide\"><img src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/pl_maining2.jpg"), "html", null, true);
        echo "\" alt=\"欧米のワインに比べてお得\"></div>
            <div class=\"item slick-slide\"><img src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/pl_maining3.jpg"), "html", null, true);
        echo "\" alt=\"一度は飲んでみたいワイン\"></div>
            <div class=\"item slick-slide\"><img src=\"";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/pl_maining4.jpg"), "html", null, true);
        echo "\" alt=\"二日酔いになりにくいワイン\"></div>
            <div class=\"item slick-slide\"><img src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/pl_maining5.jpg"), "html", null, true);
        echo "\" alt=\"ワインコンクールでも高い評価\"></div>
        </div>
    </div>
    
";
        // line 143
        $context["recommend_products"] = twig_get_attribute($this->env, $this->source, call_user_func_array($this->env->getFunction('repository')->getCallable(), ["Plugin\\Recommend4\\Entity\\RecommendProduct"]), "getRecommendProduct", [], "any", false, false, false, 143);
        // line 144
        echo "
<!-- ▼item_list▼ -->
<div class=\"ec-shelfRole\">
    <div class=\"ec-secHeading\">
\t\t\t<span class=\"ec-secHeading__en\">Hot Items</span>
\t\t\t<span class=\"ec-secHeading__line\"></span>
\t\t\t<span class=\"ec-secHeading__ja\">おすすめ商品</span>
\t\t</div>
    <ul class=\"ec-shelfGrid\">
        ";
        // line 153
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["recommend_products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["RecommendProduct"]) {
            // line 154
            echo "            <li class=\"ec-shelfGrid__item\">
                <a href=\"";
            // line 155
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_detail", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RecommendProduct"], "Product", [], "any", false, false, false, 155), "id", [], "any", false, false, false, 155)]), "html", null, true);
            echo "\">
                    <img src=\"";
            // line 156
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RecommendProduct"], "Product", [], "any", false, false, false, 156), "mainFileName", [], "any", false, false, false, 156)), "save_image"), "html", null, true);
            echo "\">
                    <p>";
            // line 157
            echo nl2br(twig_get_attribute($this->env, $this->source, $context["RecommendProduct"], "comment", [], "any", false, false, false, 157));
            echo "</p>
                    <dl>
                        <dt class=\"item_name\">";
            // line 159
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RecommendProduct"], "Product", [], "any", false, false, false, 159), "name", [], "any", false, false, false, 159), "html", null, true);
            echo "</dt>
                        <dd class=\"item_price\">
                            ";
            // line 161
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RecommendProduct"], "Product", [], "any", false, false, false, 161), "hasProductClass", [], "any", false, false, false, 161)) {
                // line 162
                echo "                                ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RecommendProduct"], "Product", [], "any", false, false, false, 162), "getPrice02Min", [], "any", false, false, false, 162) == twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RecommendProduct"], "Product", [], "any", false, false, false, 162), "getPrice02Max", [], "any", false, false, false, 162))) {
                    // line 163
                    echo "                                    ";
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RecommendProduct"], "Product", [], "any", false, false, false, 163), "getPrice02IncTaxMin", [], "any", false, false, false, 163)), "html", null, true);
                    echo "
                                ";
                } else {
                    // line 165
                    echo "                                    ";
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RecommendProduct"], "Product", [], "any", false, false, false, 165), "getPrice02IncTaxMin", [], "any", false, false, false, 165)), "html", null, true);
                    echo " ～ ";
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RecommendProduct"], "Product", [], "any", false, false, false, 165), "getPrice02IncTaxMax", [], "any", false, false, false, 165)), "html", null, true);
                    echo "
                                ";
                }
                // line 167
                echo "                            ";
            } else {
                // line 168
                echo "                                ";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["RecommendProduct"], "Product", [], "any", false, false, false, 168), "getPrice02IncTaxMin", [], "any", false, false, false, 168)), "html", null, true);
                echo "
                            ";
            }
            // line 170
            echo "                        </dd>
                    </dl>
                </a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['RecommendProduct'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 175
        echo "    </ul>
</div>
<!-- ▲item_list▲ -->
    
    
    
    <div class=\"text-center\">
        <img src=\"";
        // line 182
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/topimg1.png"), "html", null, true);
        echo "\" alt=\"自然豊かな南アフリカ\" style=\"width: 100%;\">
        <p class=\"ltx_15 tx_bld m_25\">自然豊かな南アフリカで造られたワイン</p>
        <p class=\"m_25\">ワイン産地の９割以上が世界自然遺産にあり、その美しい自然を守りながら造られているので<br>世界一美しいワイン産地と言われています。<br>美味しいワインを是非お楽しみ下さい。</p>
    </div>
<section class=\"container cf m_60 padd_bt30\">
    <div class=\"row m_25\">
        <div class=\"col-12 col-md-6\">
            <img src=\"";
        // line 189
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/topimg2.png"), "html", null, true);
        echo "\" alt=\"ブドウ栽培に最適な環境\" style=\"width: 100%;\">
        </div>
        <div class=\"col-12 col-md-6\">
            <h3 class=\"ltx_15 tx_bld underline\">ブドウ栽培に最適な環境</h3>
            <p class=\"m_5\">地中海性気候、昼夜の寒暖差、土壌等ブドウ栽培に最適な環境に恵まれています。</p>
        </div>
    </div>
    <div class=\"row m_25\">
        <div class=\"col-12 col-md-6 order-md-1\">
            <img src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/topimg3.png"), "html", null, true);
        echo "\" alt=\"ワイン作り３６０年以上の歴史\" style=\"width: 100%;\">
        </div>
        <div class=\"col-12 col-md-6 order-md-0\">
            <h3 class=\"ltx_15 tx_bld underline\">ワイン作り３６０年以上の歴史</h3>
            <p class=\"m_5\">1994年、ネルソン・マンデラ大統領が就任し民主化と共にワインの輸出が一気に拡大していきました。</p>
        </div>
    </div>
    <div class=\"row m_25\">
        <div class=\"col-12 col-md-6\">
            <img src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/topimg4.png"), "html", null, true);
        echo "\" alt=\"畑でアヒルを飼う自然農\" style=\"width: 100%;\">
        </div>
        <div class=\"col-12 col-md-6\">
            <h3 class=\"ltx_15 tx_bld underline\">畑でアヒルを飼う自然農法</h3>
            <p class=\"m_5\">農薬や殺虫剤の薬品に頼らないワイン造り。酸化防止剤の使用量も世界で最も少ないワインです。</p>
        </div>
    </div>
    <div class=\"row m_25\">
        <div class=\"col-12 col-md-6 order-md-1\">
            <img src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/topimg5.png"), "html", null, true);
        echo "\" alt=\"サスティナビリティ・シール\" style=\"width: 100%;\">
        </div>
        <div class=\"col-12 col-md-6 order-md-0\">
            <h3 class=\"ltx_15 tx_bld underline\">サスティナビリティ・シール</h3>
            <p class=\"m_5\">自然環境を守り、産業発展を持続する強い意志が１本１本に貼られたシールに込められています。</p>
        </div>
    </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  341 => 216,  329 => 207,  317 => 198,  305 => 189,  295 => 182,  286 => 175,  276 => 170,  270 => 168,  267 => 167,  259 => 165,  253 => 163,  250 => 162,  248 => 161,  243 => 159,  238 => 157,  234 => 156,  230 => 155,  227 => 154,  223 => 153,  212 => 144,  210 => 143,  203 => 139,  199 => 138,  195 => 137,  191 => 136,  187 => 135,  183 => 133,  179 => 132,  146 => 102,  142 => 101,  55 => 16,  51 => 15,  46 => 11,  44 => 13,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "index.twig", "/home/anotherworld/www/s-africa.wine/app/template/default/index.twig");
    }
}
