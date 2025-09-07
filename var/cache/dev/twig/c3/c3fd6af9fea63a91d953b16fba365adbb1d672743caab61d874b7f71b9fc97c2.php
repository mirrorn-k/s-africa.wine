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
class __TwigTemplate_0db3143503544ae43dc2f324775392a6d8ce4f68b2222385f27df6a76d215c8e extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Block/free.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "Block/free.twig"));

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
                    <li>
                        <h4>クレジット</h4>VISA、ダイナース、マスター、ＪＣＢ、アメリカン・エキスプレスをご使用いただけます。<br>
                    </li>
                </ul>
            </div>
            <div class=\"col-xs-12\">
                <h4>返品・交換について</h4>
                <ul>
                    <li>お客様の都合による返品は受け付けておりませんが、不良品と見られる商品については、お届けから3日間以内に電話かメールにてご連絡ください。返送先などお伝えします。</li>
                </ul>
            </div>
        </div>
        <div class=\"col-xs-12 col-md-4\">
            <div class=\"col-xs-12\">
                <h4>送料について</h4>
                <ul>
                    <li>
                        <img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/ban_goods1.png"), "html", null, true);
        echo "\" alt=\"\" class=\"padd_bt20\"><br>
                        一配送先毎に10,000円以上（税別）ご注文をいただいた場合、送料無料とさせていただきます。<br><br>
                        ※クール便料金は無料となりませんのでご注意ください。<br><br>
                        全国一律600円（税別）<br>但し、離島・北海道・沖縄は1200円（税別）<br><br>
                    </li>
                    <li>
                        <h4>クール便料金</h4>
                        <p>一律300円（税別）</p>
                        クール便 ご希望の方はお買い物ガイド内より「クール便 指定」商品をカートに入れてください。<br><br>
                        ※10,000円以上（税別）お買上げの場合でも、クール便料金は無料となりませんのでご注意ください。
                    </li>
                </ul>
            </div>
        </div>
        <div class=\"col-xs-12 col-md-4\">
            <div class=\"col-xs-12\">
                <a href=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("product_detail", ["id" => "207"]);
        echo "\">
                    <img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("0122160932_600a7a2c8ca97.png", "save_image"), "html", null, true);
        echo "\" width=\"160\" class=\"padd_l40\" alt=\"クール便 指定\">
                    <h4 class=\"ec-newItemRole__listItemTitle\">";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("「クール便 指定」 カート追加はこちら"), "html", null, true);
        echo "</h4>
                    <p class=\"ec-newItemRole__listItemPrice\">";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("　300円（税別）"), "html", null, true);
        echo "</p>
                </a>
            </div>
            <div class=\"col-xs-12 m_30\">
                <h4>配送について</h4>
                <ul>
                    <li>商品は日本郵便（JP）にて株式会社マスダ（輸入元）よりお届けします。<br>
                        商品代金以外にかかる料金として、送料、クール便料金がございます。</li>
                </ul>
            </div>
        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  114 => 58,  110 => 57,  106 => 56,  102 => 55,  83 => 39,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"bg-cover bg-whitesmoke\">
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
                    <li>
                        <h4>クレジット</h4>VISA、ダイナース、マスター、ＪＣＢ、アメリカン・エキスプレスをご使用いただけます。<br>
                    </li>
                </ul>
            </div>
            <div class=\"col-xs-12\">
                <h4>返品・交換について</h4>
                <ul>
                    <li>お客様の都合による返品は受け付けておりませんが、不良品と見られる商品については、お届けから3日間以内に電話かメールにてご連絡ください。返送先などお伝えします。</li>
                </ul>
            </div>
        </div>
        <div class=\"col-xs-12 col-md-4\">
            <div class=\"col-xs-12\">
                <h4>送料について</h4>
                <ul>
                    <li>
                        <img src=\"{{ asset('/html/user_data/upload/img/ban_goods1.png') }}\" alt=\"\" class=\"padd_bt20\"><br>
                        一配送先毎に10,000円以上（税別）ご注文をいただいた場合、送料無料とさせていただきます。<br><br>
                        ※クール便料金は無料となりませんのでご注意ください。<br><br>
                        全国一律600円（税別）<br>但し、離島・北海道・沖縄は1200円（税別）<br><br>
                    </li>
                    <li>
                        <h4>クール便料金</h4>
                        <p>一律300円（税別）</p>
                        クール便 ご希望の方はお買い物ガイド内より「クール便 指定」商品をカートに入れてください。<br><br>
                        ※10,000円以上（税別）お買上げの場合でも、クール便料金は無料となりませんのでご注意ください。
                    </li>
                </ul>
            </div>
        </div>
        <div class=\"col-xs-12 col-md-4\">
            <div class=\"col-xs-12\">
                <a href=\"{{ url('product_detail', {'id': '207'}) }}\">
                    <img src=\"{{ asset('0122160932_600a7a2c8ca97.png', 'save_image') }}\" width=\"160\" class=\"padd_l40\" alt=\"クール便 指定\">
                    <h4 class=\"ec-newItemRole__listItemTitle\">{{ '「クール便 指定」 カート追加はこちら'|trans }}</h4>
                    <p class=\"ec-newItemRole__listItemPrice\">{{ '　300円（税別）'|trans }}</p>
                </a>
            </div>
            <div class=\"col-xs-12 m_30\">
                <h4>配送について</h4>
                <ul>
                    <li>商品は日本郵便（JP）にて株式会社マスダ（輸入元）よりお届けします。<br>
                        商品代金以外にかかる料金として、送料、クール便料金がございます。</li>
                </ul>
            </div>
        </div>
    </div>
</div>", "Block/free.twig", "/home/anotherworld/www/s-africa.wine/app/template/default/Block/free.twig");
    }
}
