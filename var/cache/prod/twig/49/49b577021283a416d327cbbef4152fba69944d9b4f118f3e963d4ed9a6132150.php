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

/* Block/free.twig */
class __TwigTemplate_9b1626907e27be24f1c3a4826b746886ab40afa546c6171f3467b0abd81cd116 extends \Eccube\Twig\Template
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
        echo "<div class=\"bg-cover bg-whitesmoke\">
    <div class=\"row shopping-guide bg-white\">
        <div class=\"col-xs-12\">
            <h3>お買い物ガイド</h3>
        </div>
        <div class=\"col-xs-12 col-md-4\">
            <div class=\"col-xs-12\">
                <h4>ご注文方法</h4>
                <ul>
                    <li>ご注文は、以下の手順で行ってください。</li>
                    <li>1.商品を選んで、カートへ。</li>
                    <li>2.レジに進む。</li>
                    <li>3.ログインまたはゲスト購入を選択する。</li>
                    <li>4.お客様の情報を入力する。</li>
                    <li>5.注文する。</li>
                    <li><br>また、当サイトではギフト包装・ラッピングなどは対応しかねますのでご注意願います。</li>
                </ul>
            </div>
            <div class=\"col-xs-12\">
                <h4>お支払いについて</h4>
                <ul>
                    <li class=\"padd_bt20\">
                        <h4>クレジットカード</h4>VISA、MASTER、DINERS、JCB、AMEXをご使用いただけます。<br>
                        <img src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo_visa.gif"), "html", null, true);
        echo "\" width=\"52\" alt=\"visa\" class=\"m_10\">
                        <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo_master.gif"), "html", null, true);
        echo "\" width=\"52\" alt=\"master\" class=\"m_10\">
                        <img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo_diners.gif"), "html", null, true);
        echo "\" width=\"52\" alt=\"diners\" class=\"m_10\">
                        <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo_jcb.gif"), "html", null, true);
        echo "\" width=\"52\" alt=\"jcb\" class=\"m_10\">
                        <img src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/logo_ae.gif"), "html", null, true);
        echo "\" width=\"52\" alt=\"amex\" class=\"m_10\">
                    </li>
                    <li>
                        <h4>銀行振り込み</h4>注文から7日以内にお願いいたします。7日間入金がない場合は、キャンセルとさせていただきます。
振込手数料はお客様負担でお願いします。<br>
                    </li>
                </ul>
            </div>
        </div>
        <div class=\"col-xs-12 col-md-4\">
            <div class=\"col-xs-12\">
                <h4>送料について</h4>
                <ul>
                    <li>
                        <img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/ban_goods1.png"), "html", null, true);
        echo "\" alt=\"11,000円(税込)以上 送料無料\" class=\"padd_bt20\"><br>
                        一配送先毎に11,000円(税込)以上ご注文をいただいた場合、送料無料とさせていただきます。<br><br>
                        ※チルドゆうパック料金は無料となりませんのでご注意ください。<br><br>
                        全国一律1,100円(税込)<br>但し、離島・北海道・沖縄は1,650円(税込)<br><br>
                    </li>
                    <li>
                        <h4>冷蔵配送(チルドゆうパック)料金</h4>
                        <p>一律726円(税込)</p>
                        チルドゆうパックをご希望の方は、「<a href=\"";
        // line 50
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_detail", ["id" => "207"]);
        echo "\">チルドゆうパック 指定</a>」をカートに入れてください。（通常の送料に加算されます）<br><br>
                        ※11,000円(税込)以上お買上げの場合でも、チルドゆうパック料金は無料となりませんのでご注意ください。
                    </li>
                </ul>
            </div>
            <div class=\"col-xs-12\">
                <a href=\"";
        // line 56
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_detail", ["id" => "207"]);
        echo "\">
                    <div class=\"col-xs-5\">
                    <img src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("0426155548_608663f45d016.png", "save_image"), "html", null, true);
        echo "\" width=\"160\" alt=\"チルドゆうパック 指定\">
                    </div><div class=\"col-xs-7\">
                    <h4 class=\"ec-newItemRole__listItemTitle\">";
        // line 60
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("チルドゆうパック 726円（税込）"), "html", null, true);
        echo "</h4>
                    <p class=\"ec-newItemRole__listItemPrice\">";
        // line 61
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("カート追加はこちら"), "html", null, true);
        echo "</p></div>
                </a>
            </div>
        </div>
        <div class=\"col-xs-12 col-md-4\">
            <div class=\"col-xs-12 m_20\">
                <h4>配送について</h4>
                <ul>
                    <li>商品は日本郵便（JP）にてお送りします。<br>
                    交通事情や天候などにより、ご指定いただいた希望日にお届けができない場合もあります。予めご了承ください。<br><br>
                    ※ご指定の無い場合は最短でお届けします。<br>
                    出荷倉庫に在庫がある場合に限り、平日（土日祝日除く）AM 10時迄のご注文で当日発送いたします。<br><br>
                    ワインセラー、ワインオープナー名前入れはご注文後、ご相談の上お届け日をお伝えさせていただきます。<br><br>
                        商品代金以外にかかる料金として、送料、チルドゆうパック料金、振込手数料(銀行振込の場合)がございます。</li>
                </ul>
            </div>
            <div class=\"col-xs-12\">
                <h4>返品・交換について</h4>
                <ul>
                    <li>お客様の都合による返品は受け付けておりませんが、不良品と見られる商品については、お届けから3日間以内に電話かメールにてご連絡ください。<br><br>
                    返送先：<br>アナザーワールド株式会社<br>〒669-1149<br>兵庫県西宮市名塩赤坂13-62</li>
                </ul>
            </div>
        </div>
        <div class=\"col-xs-12 text-center m_30\">
            <p class=\"txt\">20歳未満の飲酒は法律で禁止されています。</p>
            </div>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "Block/free.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 61,  125 => 60,  120 => 58,  115 => 56,  106 => 50,  95 => 42,  78 => 28,  74 => 27,  70 => 26,  66 => 25,  62 => 24,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Block/free.twig", "/home/anotherworld/www/s-africa.wine/app/template/default/Block/free.twig");
    }
}
