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

/* Mail/order.twig */
class __TwigTemplate_7df02ebf81ac33e206ad4269f4dd3773d108d3ee57bbdbbf9d554d4142a06e61 extends \Eccube\Twig\Template
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
        // line 12
        echo twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "name01", [], "any", false, false, false, 12);
        echo " ";
        echo twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "name02", [], "any", false, false, false, 12);
        echo " 様

この度はご注文いただき
誠にありがとうございます。
下記ご注文内容にお間違えがないかご確認下さい。

※20歳未満の飲酒は法律で禁止されています。

************************************************
　ご請求金額
************************************************

ご注文日時：";
        // line 24
        echo $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_sec($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "order_date", [], "any", false, false, false, 24));
        echo "
ご注文番号：";
        // line 25
        echo twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "order_no", [], "any", false, false, false, 25);
        echo "
お支払い合計：";
        // line 26
        echo $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "payment_total", [], "any", false, false, false, 26));
        echo "
お支払い方法：";
        // line 27
        echo twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "payment_method", [], "any", false, false, false, 27);
        echo "
";
        // line 28
        if ((twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "isOptionPoint", [], "any", false, false, false, 28) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "Customer", [], "any", false, false, false, 28)))) {
            // line 29
            echo "ご利用ポイント：";
            echo twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "usePoint", [], "any", false, false, false, 29));
            echo " pt
加算ポイント：";
            // line 30
            echo twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "addPoint", [], "any", false, false, false, 30));
            echo " pt
";
        }
        // line 32
        echo "お問い合わせ：";
        echo twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "message", [], "any", false, false, false, 32);
        echo "


************************************************
　ご注文商品明細
************************************************

";
        // line 39
        $context["isShowReducedTaxMess"] = false;
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "MergedProductOrderItems", [], "any", false, false, false, 40));
        foreach ($context['_seq'] as $context["_key"] => $context["OrderItem"]) {
            // line 41
            echo "商品コード：";
            echo twig_get_attribute($this->env, $this->source, $context["OrderItem"], "product_code", [], "any", false, false, false, 41);
            echo "
商品名：";
            // line 42
            echo twig_get_attribute($this->env, $this->source, $context["OrderItem"], "product_name", [], "any", false, false, false, 42);
            echo "  ";
            echo twig_get_attribute($this->env, $this->source, $context["OrderItem"], "classcategory_name1", [], "any", false, false, false, 42);
            echo "  ";
            echo twig_get_attribute($this->env, $this->source, $context["OrderItem"], "classcategory_name2", [], "any", false, false, false, 42);
            echo " ";
            echo twig_get_attribute($this->env, $this->source, $context["OrderItem"], "classcategory_name2", [], "any", false, false, false, 42);
            if ($this->extensions['Eccube\Twig\Extension\TaxExtension']->isReducedTaxRate($context["OrderItem"])) {
                echo "※";
                $context["isShowReducedTaxMess"] = true;
            }
            // line 43
            echo "
単価：";
            // line 44
            echo $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["OrderItem"], "price_inctax", [], "any", false, false, false, 44));
            echo "
数量：";
            // line 45
            echo twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OrderItem"], "quantity", [], "any", false, false, false, 45));
            echo "

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['OrderItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        if (($context["isShowReducedTaxMess"] ?? null)) {
            echo "※は軽減税率対象商品です。
";
        }
        // line 50
        echo "-------------------------------------------------
小　計：";
        // line 51
        echo $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "subtotal", [], "any", false, false, false, 51));
        echo "
手数料：";
        // line 52
        echo $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "charge", [], "any", false, false, false, 52));
        echo "
送　料：";
        // line 53
        echo $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "delivery_fee_total", [], "any", false, false, false, 53));
        echo "
";
        // line 54
        if ((twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "taxable_discount", [], "any", false, false, false, 54) < 0)) {
            // line 55
            echo "値引き：";
            echo $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "taxable_discount", [], "any", false, false, false, 55));
            echo "
";
        }
        // line 57
        echo "-------------------------------------------------
合　計：";
        // line 58
        echo $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "taxable_total", [], "any", false, false, false, 58));
        echo "
    ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "taxable_total_by_tax_rate", [], "any", false, false, false, 59));
        foreach ($context['_seq'] as $context["rate"] => $context["total"]) {
            // line 60
            echo "    (";
            echo $context["rate"];
            echo " %対象：";
            echo $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($context["total"]);
            echo ")
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['rate'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "tax_free_discount_items", [], "any", false, false, false, 62));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 63
            echo "-------------------------------------------------
";
            // line 64
            echo twig_get_attribute($this->env, $this->source, $context["item"], "product_name", [], "any", false, false, false, 64);
            echo "：";
            echo $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["item"], "total_price", [], "any", false, false, false, 64));
            echo "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "============================================
お支払い合計：";
        // line 67
        echo $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "payment_total", [], "any", false, false, false, 67));
        echo "

************************************************
　ご注文者情報
************************************************
お名前：";
        // line 72
        echo twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "name01", [], "any", false, false, false, 72);
        echo " ";
        echo twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "name02", [], "any", false, false, false, 72);
        echo " 様
お名前(カナ)：";
        // line 73
        echo twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "kana01", [], "any", false, false, false, 73);
        echo " ";
        echo twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "kana02", [], "any", false, false, false, 73);
        echo " 様
";
        // line 74
        if (twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "company_name", [], "any", false, false, false, 74)) {
            // line 75
            echo "会社名：";
            echo twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "company_name", [], "any", false, false, false, 75);
            echo "
";
        }
        // line 77
        echo "郵便番号：〒";
        echo twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "postal_code", [], "any", false, false, false, 77);
        echo "
住所：";
        // line 78
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "Pref", [], "any", false, false, false, 78), "name", [], "any", false, false, false, 78);
        echo twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "addr01", [], "any", false, false, false, 78);
        echo twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "addr02", [], "any", false, false, false, 78);
        echo "
電話番号：";
        // line 79
        echo twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "phone_number", [], "any", false, false, false, 79);
        echo "
メールアドレス：";
        // line 80
        echo twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "email", [], "any", false, false, false, 80);
        echo "

************************************************
　配送情報
************************************************

";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "Shippings", [], "any", false, false, false, 86));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["Shipping"]) {
            // line 87
            echo "◎お届け先";
            if (twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "multiple", [], "any", false, false, false, 87)) {
                echo twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 87);
            }
            // line 88
            echo "
お名前：";
            // line 89
            echo twig_get_attribute($this->env, $this->source, $context["Shipping"], "name01", [], "any", false, false, false, 89);
            echo " ";
            echo twig_get_attribute($this->env, $this->source, $context["Shipping"], "name02", [], "any", false, false, false, 89);
            echo " 様
お名前(カナ)：";
            // line 90
            echo twig_get_attribute($this->env, $this->source, $context["Shipping"], "kana01", [], "any", false, false, false, 90);
            echo " ";
            echo twig_get_attribute($this->env, $this->source, $context["Shipping"], "kana02", [], "any", false, false, false, 90);
            echo " 様
";
            // line 91
            if (twig_get_attribute($this->env, $this->source, $context["Shipping"], "company_name", [], "any", false, false, false, 91)) {
                // line 92
                echo "会社名：";
                echo twig_get_attribute($this->env, $this->source, $context["Shipping"], "company_name", [], "any", false, false, false, 92);
                echo "
";
            }
            // line 94
            echo "郵便番号：〒";
            echo twig_get_attribute($this->env, $this->source, $context["Shipping"], "postal_code", [], "any", false, false, false, 94);
            echo "
住所：";
            // line 95
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Shipping"], "Pref", [], "any", false, false, false, 95), "name", [], "any", false, false, false, 95);
            echo twig_get_attribute($this->env, $this->source, $context["Shipping"], "addr01", [], "any", false, false, false, 95);
            echo twig_get_attribute($this->env, $this->source, $context["Shipping"], "addr02", [], "any", false, false, false, 95);
            echo "
電話番号：";
            // line 96
            echo twig_get_attribute($this->env, $this->source, $context["Shipping"], "phone_number", [], "any", false, false, false, 96);
            echo "

配送方法：";
            // line 98
            echo twig_get_attribute($this->env, $this->source, $context["Shipping"], "shipping_delivery_name", [], "any", false, false, false, 98);
            echo "
お届け日：";
            // line 99
            echo ((twig_test_empty(twig_get_attribute($this->env, $this->source, $context["Shipping"], "shipping_delivery_date", [], "any", false, false, false, 99))) ? ("指定なし") : ($this->extensions['Eccube\Twig\Extension\IntlExtension']->date_day($this->env, twig_get_attribute($this->env, $this->source, $context["Shipping"], "shipping_delivery_date", [], "any", false, false, false, 99))));
            echo "
お届け時間：";
            // line 100
            echo ((twig_get_attribute($this->env, $this->source, $context["Shipping"], "shipping_delivery_time", [], "any", true, true, false, 100)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["Shipping"], "shipping_delivery_time", [], "any", false, false, false, 100), "指定なし")) : ("指定なし"));
            echo "

";
            // line 102
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["Shipping"], "productOrderItems", [], "any", false, false, false, 102));
            foreach ($context['_seq'] as $context["_key"] => $context["OrderItem"]) {
                // line 103
                echo "商品コード：";
                echo twig_get_attribute($this->env, $this->source, $context["OrderItem"], "product_code", [], "any", false, false, false, 103);
                echo "
商品名：";
                // line 104
                echo twig_get_attribute($this->env, $this->source, $context["OrderItem"], "product_name", [], "any", false, false, false, 104);
                echo "  ";
                echo twig_get_attribute($this->env, $this->source, $context["OrderItem"], "classcategory_name1", [], "any", false, false, false, 104);
                echo "  ";
                echo twig_get_attribute($this->env, $this->source, $context["OrderItem"], "classcategory_name2", [], "any", false, false, false, 104);
                echo "
数量：";
                // line 105
                echo twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OrderItem"], "quantity", [], "any", false, false, false, 105));
                echo "

";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['OrderItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Shipping'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        echo "
";
        // line 110
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "complete_mail_message", [], "any", false, false, false, 110))) {
            // line 111
            echo twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "complete_mail_message", [], "any", false, false, false, 111);
            echo "
";
        }
        // line 113
        echo "
============================================

このメッセージはお客様へのお知らせ専用ですので、
このメッセージへの返信としてご質問をお送りいただいても回答できません。
ご了承ください。
";
    }

    public function getTemplateName()
    {
        return "Mail/order.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  376 => 113,  371 => 111,  369 => 110,  366 => 109,  345 => 105,  337 => 104,  332 => 103,  328 => 102,  323 => 100,  319 => 99,  315 => 98,  310 => 96,  304 => 95,  299 => 94,  293 => 92,  291 => 91,  285 => 90,  279 => 89,  276 => 88,  271 => 87,  254 => 86,  245 => 80,  241 => 79,  235 => 78,  230 => 77,  224 => 75,  222 => 74,  216 => 73,  210 => 72,  202 => 67,  199 => 66,  189 => 64,  186 => 63,  182 => 62,  171 => 60,  167 => 59,  163 => 58,  160 => 57,  154 => 55,  152 => 54,  148 => 53,  144 => 52,  140 => 51,  137 => 50,  132 => 48,  123 => 45,  119 => 44,  116 => 43,  104 => 42,  99 => 41,  95 => 40,  93 => 39,  82 => 32,  77 => 30,  72 => 29,  70 => 28,  66 => 27,  62 => 26,  58 => 25,  54 => 24,  37 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "Mail/order.twig", "/home/anotherworld/www/s-africa.wine/app/template/default/Mail/order.twig");
    }
}
