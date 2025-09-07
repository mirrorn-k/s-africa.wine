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

/* Mail/order.html.twig */
class __TwigTemplate_5578458a7113e8c0257b38a326ff8479acf98ab1897f2f6af2a957a2754b9f10 extends \Eccube\Twig\Template
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
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\" \"http://www.w3.org/TR/html4/loose.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">

<body bgcolor=\"#F0F0F0\" leftmargin=\"0\" topmargin=\"0\" marginwidth=\"0\" marginheight=\"0\" style=\"margin-top:0;margin-bottom:0;margin-right:0;margin-left:0;padding-top:0;padding-bottom:0;padding-right:0;padding-left:0;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%;\">
<br>
<br>
<div align=\"center\"><a href=\"";
        // line 17
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("homepage");
        echo "\" style=\"font-family:Helvetica, Arial, sans-serif;font-size:30px;color:#333333;text-decoration:none;\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "shop_name", [], "any", false, false, false, 17), "html", null, true);
        echo "</a></div>
<!-- 100% background wrapper (grey background) -->
<table border=\"0\" width=\"100%\" height=\"100%\" cellpadding=\"0\" cellspacing=\"0\" bgcolor=\"#F0F0F0\" style=\"border-spacing:0;mso-table-lspace:0pt;mso-table-rspace:0pt;\">
    <tr>
        <td align=\"center\" valign=\"top\" bgcolor=\"#F0F0F0\" style=\"background-color:#F0F0F0;border-collapse:collapse;\">
            <br>
            <!-- 600px container (white background) -->
            <table id=\"html-mail-table1\" border=\"0\" width=\"600px\" cellpadding=\"10\" cellspacing=\"0\" class=\"container\" style=\"border-spacing:0;mso-table-lspace:0pt;mso-table-rspace:0pt;\">
                <tr>
                    <td class=\"container-padding content\" align=\"left\" style=\"border-collapse:collapse;padding-left:24px;padding-right:24px;padding-top:12px;padding-bottom:12px;background-color:#ffffff;\">
                        <br>
                        <div class=\"title\" style=\"font-family:Helvetica, Arial, sans-serif;font-size:14px;line-height:20px;text-align:left;color:#333333;\">この度はご注文いただき<br/>誠にありがとうございます。</div>
                        <br>
                        <div class=\"body-text\" style=\"font-family:Helvetica, Arial, sans-serif;font-size:14px;line-height:20px;text-align:left;color:#333333;\">
                            ";
        // line 31
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "name01", [], "any", false, false, false, 31), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "name02", [], "any", false, false, false, 31), "html", null, true);
        echo " 様<br/>
                            <br/>
                            下記ご注文内容にお間違えがないかご確認下さい。<br/>
                            <br/>
                            ※20歳未満の飲酒は法律で禁止されています。<br/>
                            <br/>
                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            　ご請求金額<br/>
                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            ご注文日時：";
        // line 40
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_sec($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "order_date", [], "any", false, false, false, 40)), "html", null, true);
        echo "<br/>
                            ご注文番号：";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "order_no", [], "any", false, false, false, 41), "html", null, true);
        echo "<br/>
                            お支払い合計：";
        // line 42
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "payment_total", [], "any", false, false, false, 42)), "html", null, true);
        echo "<br/>
                            お支払い方法：";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "payment_method", [], "any", false, false, false, 43), "html", null, true);
        echo "<br/>
                            ";
        // line 44
        if ((twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "isOptionPoint", [], "any", false, false, false, 44) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "Customer", [], "any", false, false, false, 44)))) {
            // line 45
            echo "                            ご利用ポイント：";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "usePoint", [], "any", false, false, false, 45)), "html", null, true);
            echo " pt<br/>
                            加算ポイント：";
            // line 46
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "addPoint", [], "any", false, false, false, 46)), "html", null, true);
            echo " pt<br/>
                            ";
        }
        // line 48
        echo "                            お問い合わせ：";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "message", [], "any", false, false, false, 48), "html", null, true);
        echo "<br/>
                            <br/>
                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            　ご注文商品明細<br/>
                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            ";
        // line 53
        $context["isShowReducedTaxMess"] = false;
        // line 54
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "MergedProductOrderItems", [], "any", false, false, false, 54));
        foreach ($context['_seq'] as $context["_key"] => $context["OrderItem"]) {
            // line 55
            echo "                                商品コード：";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OrderItem"], "product_code", [], "any", false, false, false, 55), "html", null, true);
            echo "<br/>
                                商品名：";
            // line 56
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OrderItem"], "product_name", [], "any", false, false, false, 56), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OrderItem"], "classcategory_name1", [], "any", false, false, false, 56), "html", null, true);
            echo "  ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OrderItem"], "classcategory_name2", [], "any", false, false, false, 56), "html", null, true);
            if ($this->extensions['Eccube\Twig\Extension\TaxExtension']->isReducedTaxRate($context["OrderItem"])) {
                echo "※";
                $context["isShowReducedTaxMess"] = true;
            }
            echo "<br/>
                                単価：";
            // line 57
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["OrderItem"], "price_inctax", [], "any", false, false, false, 57)), "html", null, true);
            echo "<br/>
                                数量：";
            // line 58
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OrderItem"], "quantity", [], "any", false, false, false, 58)), "html", null, true);
            echo "<br/>
                                <br/>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['OrderItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "                            ";
        if (($context["isShowReducedTaxMess"] ?? null)) {
            echo "※は軽減税率対象商品です。";
        }
        // line 62
        echo "                            <hr style=\"border-top: 2px dashed #8c8b8b;\">
                            小　計：";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "subtotal", [], "any", false, false, false, 63)), "html", null, true);
        echo "<br/>
                            手数料：";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "charge", [], "any", false, false, false, 64)), "html", null, true);
        echo "<br/>
                            送　料：";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "delivery_fee_total", [], "any", false, false, false, 65)), "html", null, true);
        echo "<br/>
                            ";
        // line 66
        if ((twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "taxable_discount", [], "any", false, false, false, 66) < 0)) {
            // line 67
            echo "                            値引き：";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "taxable_discount", [], "any", false, false, false, 67)), "html", null, true);
            echo "<br/>
                            ";
        }
        // line 69
        echo "                            <hr style=\"border-top: 1px dotted #8c8b8b;\">
                            合　計：";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "taxable_total", [], "any", false, false, false, 70)), "html", null, true);
        echo "<br/>
                            ";
        // line 71
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "taxable_total_by_tax_rate", [], "any", false, false, false, 71));
        foreach ($context['_seq'] as $context["rate"] => $context["total"]) {
            // line 72
            echo "                                (";
            echo twig_escape_filter($this->env, $context["rate"], "html", null, true);
            echo " %対象：";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($context["total"]), "html", null, true);
            echo ")<br/>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['rate'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "tax_free_discount_items", [], "any", false, false, false, 74));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 75
            echo "                                <hr style=\"border-top: 1px dotted #8c8b8b;\">
                                ";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "product_name", [], "any", false, false, false, 76), "html", null, true);
            echo "：";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["item"], "total_price", [], "any", false, false, false, 76)), "html", null, true);
            echo "<br/>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "                            <hr style=\"border-top: 1px dotted #8c8b8b;\">
                            お支払い合計：";
        // line 79
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "payment_total", [], "any", false, false, false, 79)), "html", null, true);
        echo "
                            <br/>
                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            ご注文者情報<br/>
                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            お名前：";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "name01", [], "any", false, false, false, 84), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "name02", [], "any", false, false, false, 84), "html", null, true);
        echo " 様<br/>
                            お名前(カナ)：";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "kana01", [], "any", false, false, false, 85), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "kana02", [], "any", false, false, false, 85), "html", null, true);
        echo " 様<br/>
                            ";
        // line 86
        if (twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "company_name", [], "any", false, false, false, 86)) {
            // line 87
            echo "                                会社名：";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "company_name", [], "any", false, false, false, 87), "html", null, true);
            echo "<br/>
                            ";
        }
        // line 89
        echo "                            郵便番号：〒";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "postal_code", [], "any", false, false, false, 89), "html", null, true);
        echo "<br/>
                            住所：";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "Pref", [], "any", false, false, false, 90), "name", [], "any", false, false, false, 90), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "addr01", [], "any", false, false, false, 90), "html", null, true);
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "addr02", [], "any", false, false, false, 90), "html", null, true);
        echo "<br/>
                            電話番号：";
        // line 91
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "phone_number", [], "any", false, false, false, 91), "html", null, true);
        echo "<br/>
                            メールアドレス：";
        // line 92
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "email", [], "any", false, false, false, 92), "html", null, true);
        echo "<br/>
                            <br/>
                            <hr style=\"border-top: 3px double #8c8b8b;\">
                            　配送情報<br/>
                            <hr style=\"border-top: 3px double #8c8b8b;\">

                            ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "Shippings", [], "any", false, false, false, 98));
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
            // line 99
            echo "                                ◎お届け先";
            if (twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "multiple", [], "any", false, false, false, 99)) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 99), "html", null, true);
            }
            echo "<br/>
                                <br/>
                                お名前：";
            // line 101
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Shipping"], "name01", [], "any", false, false, false, 101), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Shipping"], "name02", [], "any", false, false, false, 101), "html", null, true);
            echo " 様<br/>
                                お名前(カナ)：";
            // line 102
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Shipping"], "kana01", [], "any", false, false, false, 102), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Shipping"], "kana02", [], "any", false, false, false, 102), "html", null, true);
            echo " 様<br/>
                                ";
            // line 103
            if (twig_get_attribute($this->env, $this->source, $context["Shipping"], "company_name", [], "any", false, false, false, 103)) {
                // line 104
                echo "                                    会社名：";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Shipping"], "company_name", [], "any", false, false, false, 104), "html", null, true);
                echo "<br/>
                                ";
            }
            // line 106
            echo "                                郵便番号：〒";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Shipping"], "postal_code", [], "any", false, false, false, 106), "html", null, true);
            echo "<br/>
                                住所：";
            // line 107
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["Shipping"], "Pref", [], "any", false, false, false, 107), "name", [], "any", false, false, false, 107), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Shipping"], "addr01", [], "any", false, false, false, 107), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Shipping"], "addr02", [], "any", false, false, false, 107), "html", null, true);
            echo "<br/>
                                電話番号：";
            // line 108
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Shipping"], "phone_number", [], "any", false, false, false, 108), "html", null, true);
            echo "<br/>
                                <br/>
                                配送方法：";
            // line 110
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Shipping"], "shipping_delivery_name", [], "any", false, false, false, 110), "html", null, true);
            echo "<br/>
                                お届け日：";
            // line 111
            ((twig_test_empty(twig_get_attribute($this->env, $this->source, $context["Shipping"], "shipping_delivery_date", [], "any", false, false, false, 111))) ? (print ("指定なし")) : (print (twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_day($this->env, twig_get_attribute($this->env, $this->source, $context["Shipping"], "shipping_delivery_date", [], "any", false, false, false, 111)), "html", null, true))));
            echo "<br/>
                                お届け時間：";
            // line 112
            echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["Shipping"], "shipping_delivery_time", [], "any", true, true, false, 112)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["Shipping"], "shipping_delivery_time", [], "any", false, false, false, 112), "指定なし")) : ("指定なし")), "html", null, true);
            echo "<br/>
                                <br/>
                                ";
            // line 114
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["Shipping"], "productOrderItems", [], "any", false, false, false, 114));
            foreach ($context['_seq'] as $context["_key"] => $context["OrderItem"]) {
                // line 115
                echo "                                    商品コード：";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OrderItem"], "product_code", [], "any", false, false, false, 115), "html", null, true);
                echo "<br/>
                                    商品名：";
                // line 116
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OrderItem"], "product_name", [], "any", false, false, false, 116), "html", null, true);
                echo "  ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OrderItem"], "classcategory_name1", [], "any", false, false, false, 116), "html", null, true);
                echo "  ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OrderItem"], "classcategory_name2", [], "any", false, false, false, 116), "html", null, true);
                echo "<br/>
                                    数量：";
                // line 117
                echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["OrderItem"], "quantity", [], "any", false, false, false, 117)), "html", null, true);
                echo "<br/>
                                    <br/>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['OrderItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 120
            echo "                            ";
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
        // line 121
        echo "                            ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "complete_mail_message", [], "any", false, false, false, 121))) {
            // line 122
            echo "                                ";
            echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "complete_mail_message", [], "any", false, false, false, 122), "html", null, true));
            echo "<br/>
                            ";
        }
        // line 124
        echo "                            <hr style=\"border-top: 2px dotted #8c8b8b;\">
                            このメッセージはお客様へのお知らせ専用ですので、<br/>
                            このメッセージへの返信としてご質問をお送りいただいても回答できません。<br/>
                            ご了承ください。<br/>
                        </div>
                    </td>
                </tr>
            </table>
            <!--/600px container -->
            <br>
            <br>
            <table id=\"html-mail-table2\" border=\"0\" width=\"600px\" cellpadding=\"10\" cellspacing=\"0\" class=\"container\" style=\"border-spacing:0;mso-table-lspace:0pt;mso-table-rspace:0pt;\">
                <tr>
                    <td class=\"container-padding content footer-text\" align=\"left\" style=\"border-collapse:collapse;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:16px;color:#aaaaaa;padding-left:24px;padding-right:24px;padding-top:12px;padding-bottom:12px;background-color:#ffffff;\">
                        本メールは、";
        // line 138
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "shop_name", [], "any", false, false, false, 138), "html", null, true);
        echo "より送信しております。<br/>
                        もしお心当たりが無い場合は、その旨 <a href=\"mailto:";
        // line 139
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "email02", [], "any", false, false, false, 139), "html", null, true);
        echo "\" style=\"text-decoration:none;\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "email02", [], "any", false, false, false, 139), "html", null, true);
        echo "</a> までご連絡いただければ幸いです。<br/>
                        <br/>
                        <div class=\"title\" style=\"font-size:14px;font-family:Helvetica, Arial, sans-serif;font-weight:600;color:#374550;\"><a href=\"";
        // line 141
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("homepage");
        echo "\" style=\"color:#aaaaaa;text-decoration:none;\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "shop_name", [], "any", false, false, false, 141), "html", null, true);
        echo "</a></div>
                        <div>copyright &copy; ";
        // line 142
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "shop_name", [], "any", false, false, false, 142), "html", null, true);
        echo " all rights reserved.</div>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<!--/100% background wrapper-->
<br>
<br>
</body>

</html>";
    }

    public function getTemplateName()
    {
        return "Mail/order.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  431 => 142,  425 => 141,  418 => 139,  414 => 138,  398 => 124,  392 => 122,  389 => 121,  375 => 120,  366 => 117,  358 => 116,  353 => 115,  349 => 114,  344 => 112,  340 => 111,  336 => 110,  331 => 108,  325 => 107,  320 => 106,  314 => 104,  312 => 103,  306 => 102,  300 => 101,  292 => 99,  275 => 98,  266 => 92,  262 => 91,  256 => 90,  251 => 89,  245 => 87,  243 => 86,  237 => 85,  231 => 84,  223 => 79,  220 => 78,  210 => 76,  207 => 75,  202 => 74,  191 => 72,  187 => 71,  183 => 70,  180 => 69,  174 => 67,  172 => 66,  168 => 65,  164 => 64,  160 => 63,  157 => 62,  152 => 61,  143 => 58,  139 => 57,  127 => 56,  122 => 55,  117 => 54,  115 => 53,  106 => 48,  101 => 46,  96 => 45,  94 => 44,  90 => 43,  86 => 42,  82 => 41,  78 => 40,  64 => 31,  45 => 17,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Mail/order.html.twig", "/home/anotherworld/www/s-africa.wine/app/template/default/Mail/order.html.twig");
    }
}
