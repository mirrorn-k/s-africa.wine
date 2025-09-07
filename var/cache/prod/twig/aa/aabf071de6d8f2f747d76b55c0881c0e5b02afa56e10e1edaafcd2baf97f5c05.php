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

/* Help/privacy.twig */
class __TwigTemplate_9bb304745275e98b5ad96c5eca25add3ff0a7dc4ed1bfa1c551b47814ae120eb extends \Eccube\Twig\Template
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
        // line 11
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("default_frame.twig", "Help/privacy.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "<div class=\"ec-role\">
    <div class=\"ec-pageHeader\">
        <h1>";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("プライバシーポリシー"), "html", null, true);
        echo "</h1>
    </div>
    <div class=\"ec-off1Grid\">
        <div class=\"ec-off1Grid__cell\">
            <p>
                個人情報保護の重要性に鑑み、「個人情報の保護に関する法律」及び本プライバシーポリシーを遵守し、お客さまのプライバシー保護に努めます。
            </p>
        </div>
    </div>
    <div class=\"ec-off1Grid\">
        <div class=\"ec-off1Grid__cell\">
            <div class=\"ec-heading-bold\">個人情報の定義</div>
            <p>「個人情報」とは、生存する個人に関する情報であって、当該情報に含まれる氏名、生年月日その他の記述等により特定の個人を識別することができるもの、及び他の情報と容易に照合することができ、それにより特定の個人を識別することができることとなるものをいいます。</p>
        </div>
    </div>
    <div class=\"ec-off1Grid\">
        <div class=\"ec-off1Grid__cell\">
            <div class=\"ec-heading-bold\">個人情報の収集</div>
            <p>当ショップでは商品のご購入、お問合せをされた際にお客様の個人情報を収集することがございます。<br>
                収集するにあたっては利用目的を明記の上、適法かつ公正な手段によります。</p>

            <p>当ショップで収集する個人情報は以下の通りです。</p>

            <p>a)お名前、フリガナ<br>
                b)ご住所<br>
                c)お電話番号<br>
                d)メールアドレス<br>
                e)パスワード<br>
                f)配送先情報<br>
                g)当ショップとのお取引履歴及びその内容<br>
                h)上記を組み合わせることで特定の個人が識別できる情報</p>
        </div>
    </div>
    <div class=\"ec-off1Grid\">
        <div class=\"ec-off1Grid__cell\">
            <div class=\"ec-heading-bold\">個人情報の利用</div>
            <p>当ショップではお客様からお預かりした個人情報の利用目的は以下の通りです。</p>
            <p>a)ご注文の確認、照会<br>
                b)商品発送の確認、照会<br>
                c)お問合せの返信時</p>
            <p>当ショップでは、下記の場合を除いてはお客様の断りなく第三者に個人情報を開示・提供することはいたしません。</p>
            <p>a)法令に基づく場合、及び国の機関若しくは地方公共団体又はその委託を受けた者が法令の定める事務を遂行することに対して協力する必要がある場合<br>
                b)人の生命、身体又は財産の保護のために必要がある場合であって、本人の同意を得ることが困難である場合<br>
                c)当ショップを運営する会社の関連会社で個人データを交換する場合</p>
        </div>
    </div>
    <div class=\"ec-off1Grid\">
        <div class=\"ec-off1Grid__cell\">
            <div class=\"ec-heading-bold\">個人情報の安全管理</div>
            <p>お客様よりお預かりした個人情報の安全管理はサービス提供会社によって合理的、組織的、物理的、人的、技術的施策を講じるとともに、当ショップでは関連法令に準じた適切な取扱いを行うことで個人データへの不正な侵入、個人情報の紛失、改ざん、漏えい等の危険防止に努めます。</p>
        </div>
    </div>
    <div class=\"ec-off1Grid\">
        <div class=\"ec-off1Grid__cell\">
            <div class=\"ec-heading-bold\">個人情報の訂正、削除</div>
            <p>お客様からお預かりした個人情報の訂正・削除は下記の問合せ先よりお知らせ下さい。<br>
                また、ユーザー登録された場合、当サイトのメニュー「マイアカウント」より個人情報の訂正が出来ます。</p>
        </div>
    </div>
    <div class=\"ec-off1Grid\">
        <div class=\"ec-off1Grid__cell\">
            <div class=\"ec-heading-bold\">cookie(クッキー)の使用について</div>
            <p>当社は、お客様によりよいサービスを提供するため、cookie （クッキー）を使用することがありますが、これにより個人を特定できる情報の収集を行えるものではなく、お客様のプライバシーを侵害することはございません。<br>
                また、cookie （クッキー）の受け入れを希望されない場合は、ブラウザの設定で変更することができます。<br>
                ※cookie （クッキー）とは、サーバーコンピュータからお客様のブラウザに送信され、お客様が使用しているコンピュータのハードディスクに蓄積される情報です。</p>
        </div>
    </div>
    <div class=\"ec-off1Grid\">
        <div class=\"ec-off1Grid__cell\">
            <div class=\"ec-heading-bold\">SSLの使用について</div>
            <p>個人情報の入力時には、セキュリティ確保のため、これらの情報が傍受、妨害または改ざんされることを防ぐ目的でSSL（Secure Sockets Layer）技術を使用しております。<br>
                ※ SSLは情報を暗号化することで、盗聴防止やデータの改ざん防止送受信する機能のことです。SSLを利用する事でより安全に情報を送信する事が可能となります。</p>
        </div>
    </div>
    <div class=\"ec-off1Grid\">
        <div class=\"ec-off1Grid__cell\">
            <div class=\"ec-heading-bold\">お問合せ先</div>
            <p>アナザーワールド株式会社<br>
                西宮市名塩赤坂13-62<br>
                個人情報取り扱い係</p>
        </div>
    </div>
    <div class=\"ec-off1Grid\">
        <div class=\"ec-off1Grid__cell\">
            <div class=\"ec-heading-bold\">プライバシーポリシーの変更</div>
            <p>当ショップでは、収集する個人情報の変更、利用目的の変更、またはその他プライバシーポリシーの変更を行う際は、当ページへの変更をもって公表とさせていただきます。</p>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "Help/privacy.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 16,  50 => 14,  46 => 13,  35 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Help/privacy.twig", "/home/anotherworld/www/s-africa.wine/app/template/default/Help/privacy.twig");
    }
}
