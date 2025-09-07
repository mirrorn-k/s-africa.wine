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

/* __string_template__96b1e6790f9a93cc4bd59751426369e3a5262ccdd5397c7233f12482f928c00f */
class __TwigTemplate_780337b1517ea211af5409324b785ea72ba604af514b1c9c60567fe2dc523813 extends \Eccube\Twig\Template
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
        echo "<div class=\"productsheet__table\">    <table>
        <tr>
            <th>本体サイズ：</th>
            <td>幅595×奥行き570×高さ820mm
            </td>
        </tr>
        <tr>
            <th>容量・重量：</th>
            <td>48kg（定格内容積：138L）</td>
        </tr>
        <tr>
            <th>本体内寸：</th>
            <td>幅494×奥行き445（最下部310）×高さ655mm
            </td>
        </tr>
        <tr>
            <th>設定可能温度：</th>
            <td>5〜22℃（推奨温度7〜18℃）</td>
        </tr>
        <tr>
            <th>定格消費電力：</th>
            <td>140w</td>
        </tr>
        <tr>
            <th>年間消費電力：</th>
            <td>202kw</td>
        </tr>
        <tr>
            <th>冷却方式：</th>
            <td>コンプレッサー式</td>
        </tr>
        <tr>
            <th>付属品：</th>
            <td>スライドラック×4枚、鍵、転倒防止金具×2個
            </td>
        </tr>
        <tr>
            <th>電源コード：</th>
            <td>1.7m
            </td>
        </tr>
        <tr>
            <th>放熱スペース：</th>
            <td>側面・背面・天面　各30mm
            </td>
        </tr>
    </table>

</div>
<div class=\"ec-productRole__description\">
<a href=\"https://s-africa.wine/products/list?category_id=78\"><img src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/products/gooddesign_.jpg"), "html", null, true);
        echo "\" alt=\"ブリリアントシリーズ\" ></a><br><br>
今までにない棚が話題のブリリアントシリーズ、カウンター下にもすっぽり収まる40本タイプです。前面排気でビルトインが可能なので、厨房にもちょうどよくはめ込むことができます。レストランだけでなく、ご家庭でも、スライド棚は目一杯引き出すことができるので、一番奥のワインボトルまで見えます。「あのワインどこにいれたっけ？」なんて時も、ブリリアントならすぐに見つけ出し、取り出すことができます。
<br><br>
※デイリーワイン(長期熟成目的以外)の保管におすすめのセラーです。
</div>
<div class=\"ec-productRole__description\">
<strong>配送設置費無料</strong><br>
※北海道沖縄は3,000円の追加配送料が発生します<br>
※その他離島は別途お見積り<br><br>
<strong>【沖縄・離島、札幌以外の北海道へのお届けについて】</strong><br>
一部離島はお届けできない場合があります。<br>
ご注文時には配送費もしくは配送設置費が加算されません。<br>
ご注文後弊社担当者より、別途送料のお見積りを出させていただきます。<br>
<br>
<strong>【特別な搬入について】</strong><br>
階段搬入（1階毎／3,000円税別)、別途料金頂戴いたします。<br>
上記の搬入が必要な場合は、ご注文時に表示される「備考欄」にてその旨お知らせください。
<br><br>
<strong>【配送期間の目安について】</strong><br>
中型から大型セラーの配送につきましては、７日から１０日程度要します。余裕をもってのご注文をお願いいたします。
</div>
<div class=\"ec-productRole__description\">
<img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/products/funvino_08_2.jpg"), "html", null, true);
        echo "\" alt=\"最長5年保証\" >
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__96b1e6790f9a93cc4bd59751426369e3a5262ccdd5397c7233f12482f928c00f";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 73,  89 => 51,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__96b1e6790f9a93cc4bd59751426369e3a5262ccdd5397c7233f12482f928c00f", "");
    }
}
