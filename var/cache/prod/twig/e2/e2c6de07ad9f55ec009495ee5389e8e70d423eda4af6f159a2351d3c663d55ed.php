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

/* Mail/contact_mail.html.twig */
class __TwigTemplate_59213c8da20f6ba30df7351e5bb04c8b1ec0f3223f9f0f0c1000a035278b76ff extends \Eccube\Twig\Template
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
                        <div class=\"title\" style=\"font-family:Helvetica, Arial, sans-serif;font-size:18px;font-weight:600;color:#374550;\">お問い合わせを受付いたしました。</div>
                        <br>
                        <div class=\"body-text\" style=\"font-family:Helvetica, Arial, sans-serif;font-size:14px;line-height:20px;text-align:left;color:#333333;\">
                            以下のお問い合わせを受付致しました。<br>
                            確認次第ご連絡いたしますので、少々お待ちください。<br>
                            <br>
                            <br>
                            <dl style=\"display: flex;border-bottom: 1px dotted #ccc;margin: 0;\">
                                <dt style=\"padding-top: 14px;width: 30%;\"><label class=\"ec-label\">お名前</label></dt>
                                <dd style=\"width: 70%;line-height: 3;\">";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "name01", [], "any", false, false, false, 37), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "name02", [], "any", false, false, false, 37), "html", null, true);
        echo "</dd>
                            </dl>
                            <dl style=\"display: flex;border-bottom: 1px dotted #ccc;margin: 0;\">
                                <dt style=\"padding-top: 14px;width: 30%;\"><label class=\"ec-label\">お名前(カナ)</label></dt>
                                <dd style=\"width: 70%;line-height: 3;\">";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "kana01", [], "any", false, false, false, 41), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "kana02", [], "any", false, false, false, 41), "html", null, true);
        echo "</dd>
                            </dl>
                            <dl style=\"display: flex;border-bottom: 1px dotted #ccc;margin: 0;\">
                                <dt style=\"padding-top: 14px;width: 30%;\"><label class=\"ec-label\">住所</label></dt>
                                <dd style=\"width: 70%;line-height: 3;\"><span>〒</span>";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "postal_code", [], "any", false, false, false, 45), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "pref", [], "any", false, false, false, 45), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "addr01", [], "any", false, false, false, 45), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "addr02", [], "any", false, false, false, 45), "html", null, true);
        echo "</dd>
                            </dl>
                            <dl style=\"display: flex;border-bottom: 1px dotted #ccc;margin: 0;\">
                                <dt style=\"padding-top: 14px;width: 30%;\"><label class=\"ec-label\">電話番号</label></dt>
                                <dd style=\"width: 70%;line-height: 3;\">";
        // line 49
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "phone_number", [], "any", false, false, false, 49), "html", null, true);
        echo "</dd>
                            </dl>
                            <dl style=\"display: flex;border-bottom: 1px dotted #ccc;margin: 0;\">
                                <dt style=\"padding-top: 14px;width: 30%;\"><label class=\"ec-label\">メールアドレス</label></dt>
                                <dd style=\"width: 70%;line-height: 3;\">";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "email", [], "any", false, false, false, 53), "html", null, true);
        echo "</dd>
                            </dl>
                            <dl style=\"display: flex;margin: 0;\">
                                <dt style=\"padding-top: 14px;width: 30%;\"><label class=\"ec-label\">お問い合わせ内容</label></dt>
                                <dd style=\"width: 70%;line-height: 3;\">";
        // line 57
        echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "contents", [], "any", false, false, false, 57), "html", null, true));
        echo "</dd>
                            </dl>
                        </div>
                    </td>
                </tr>
            </table>
            <!--/600px container -->
            <br>
            <br>
            <table id=\"html-mail-table2\" border=\"0\" width=\"600\" cellpadding=\"10\" cellspacing=\"0\" class=\"container\" style=\"border-spacing:0;mso-table-lspace:0pt;mso-table-rspace:0pt;\">
                <tr>
                    <td class=\"container-padding content footer-text\" align=\"left\" style=\"border-collapse:collapse;font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:16px;color:#aaaaaa;padding-left:24px;padding-right:24px;padding-top:12px;padding-bottom:12px;background-color:#ffffff;\">
                        本メールは、";
        // line 69
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "shop_name", [], "any", false, false, false, 69), "html", null, true);
        echo "より送信しております。<br/>
                        もしお心当たりが無い場合は、その旨 <a href=\"mailto:";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "email02", [], "any", false, false, false, 70), "html", null, true);
        echo "\" style=\"text-decoration:none;\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "email02", [], "any", false, false, false, 70), "html", null, true);
        echo "</a> までご連絡いただければ幸いです。<br/>
                        <br/>
                        <div class=\"title\" style=\"font-size:14px;font-family:Helvetica, Arial, sans-serif;font-weight:600;color:#374550;\"><a href=\"";
        // line 72
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("homepage");
        echo "\" style=\"color:#aaaaaa;text-decoration:none;\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "shop_name", [], "any", false, false, false, 72), "html", null, true);
        echo "</a></div>
                        <div>copyright &copy; ";
        // line 73
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "shop_name", [], "any", false, false, false, 73), "html", null, true);
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
        return "Mail/contact_mail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 73,  141 => 72,  134 => 70,  130 => 69,  115 => 57,  108 => 53,  101 => 49,  88 => 45,  79 => 41,  70 => 37,  45 => 17,  37 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Mail/contact_mail.html.twig", "/home/anotherworld/www/s-africa.wine/src/Eccube/Resource/template/default/Mail/contact_mail.html.twig");
    }
}
