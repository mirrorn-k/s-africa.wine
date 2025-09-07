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

/* Help/tradelaw.twig */
class __TwigTemplate_dd813cdc868de221c90ad50c31cfb33b1915122c2665c08fc97de0fc40e3ffe6 extends \Eccube\Twig\Template
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
        $this->parent = $this->loadTemplate("default_frame.twig", "Help/tradelaw.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 13
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "    <div class=\"ec-role\">
        <div class=\"ec-pageHeader\">
            <h1 class=\"help-about-header\"> ";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("特定商取引法に基づく表記"), "html", null, true);
        echo "</h1>
        </div>
        <div class=\"ec-off1Grid\">
            <div class=\"ec-off1Grid__cell\">
                <div class=\"ec-borderedDefs\">
                    <dl>
                        <dt>
                            <label class=\"ec-label\">販売業者</label>
                        </dt>
                        <dd>アナザーワールド株式会社</dd>
                    </dl>
                    <dl>
                        <dt>
                            <label class=\"ec-label\">代表責任者</label>
                        </dt>
                        <dd>大川 達也
                        </dd>
                    </dl>
                    <dl>
                        <dt>
                            <label class=\"ec-label\">所在地</label>
                        </dt>
                        <dd>〒669-1149<br>兵庫県西宮市名塩赤坂13-62
                        </dd>
                    </dl>

                    <dl>
                        <dt>
                            <label class=\"ec-label\">電話番号</label>
                        </dt>
                        <dd>0797-69-6999　または　080-6189-3311</dd>
                    </dl>

                    <dl>
                        <dt>
                            <label class=\"ec-label\">メールアドレス</label>
                        </dt>
                        <dd><a href=\"mailto:info@s-africa.wine\">info@s-africa.wine </a></dd>
                    </dl>
                    <dl>
                        <dt>
                            <label class=\"ec-label\">酒類販売管理者</label>
                        </dt>
                        <dd>大川 達也</dd>
                    </dl>
                    <dl>
                        <dt>
                            <label class=\"ec-label\">酒類販売管理研修受講年月日</label>
                        </dt>
                        <dd>令和3年2月24日</dd>
                    </dl>
                    <dl>
                        <dt>
                            <label class=\"ec-label\">次回研修の受講期限</label>
                        </dt>
                        <dd>令和6年2月23日</dd>
                    </dl>
                    <dl>
                        <dt>
                            <label class=\"ec-label\">研修実施団体名</label>
                        </dt>
                        <dd>一般社団法人　日本ボランタリーチェーン協会</dd>
                    </dl>
                    <!--<dl>
                        <dt>
                            <label class=\"ec-label\">URL</label>
                        </dt>
                        <dd><a href=\"\"></a></dd>
                    </dl>-->

                    <dl>
                        <dt>
                            <label class=\"ec-label\">商品代金以外の必要料金</label>
                        </dt>
                        <dd>消費税(10%)、送料、チルドゆうパック料金、振込手数料(銀行振込の場合)</dd>
                    </dl>

                    <dl>
                        <dt>
                            <label class=\"ec-label\">引き渡し時期</label>
                        </dt>
                        <dd>ご注文後、5日以内に発送いたします。また、当店スタッフより差し上げるお返事にて商品の発送日を明記させていただきます。お届け日は場所にも拠りますが、発送日より1～4日とお考えください。（※遠方・離島の場合は、それ以上かかる場合もございます。） <br>
                        ゴールデンウィーク、お盆、年末年始については上記通りお届け出来ない場合がございます。予めご了承ください。 </dd>
                    </dl>

                    <dl>
                        <dt>
                            <label class=\"ec-label\">お支払方法</label>
                        </dt>
                        <dd>クレジットカード決済、銀行振込</dd>
                    </dl>
                    <dl>
                        <dt>
                            <label class=\"ec-label\">支払期限</label>
                        </dt>
                        <dd>7日以内にお願いいたします。<br>7日間入金がない場合は、キャンセルとさせていただきます。</dd>
                    </dl>
                    <dl>
                        <dt>
                            <label class=\"ec-label\">返品・交換について</label>
                        </dt>
                        <dd>お客様の都合による返品は受け付けておりませんが、不良品と見られる商品については、お届けから3日間以内に電話かメールにてご連絡ください。返送先などお伝えします。  </dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "Help/tradelaw.twig";
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
        return new Source("", "Help/tradelaw.twig", "/home/anotherworld/www/s-africa.wine/app/template/default/Help/tradelaw.twig");
    }
}
