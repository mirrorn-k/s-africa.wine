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

/* Mail/contact_mail.twig */
class __TwigTemplate_da935b7cd00af3d92f7fa3926c838666618fb5aa12258a8fe61b69583fa682f4 extends \Eccube\Twig\Template
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
        echo "※本メールは自動配信メールです。

┏━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━┓
　※本メールは、
　";
        // line 16
        echo twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "shop_name", [], "any", false, false, false, 16);
        echo "よりお問い合わせされた方に
　お送りしています。
　もしお心当たりが無い場合は、
　その旨 ";
        // line 19
        echo twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "email02", [], "any", false, false, false, 19);
        echo " まで
　ご連絡いただければ幸いです。
┗━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━┛

";
        // line 23
        echo twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "name01", [], "any", false, false, false, 23);
        echo " ";
        echo twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "name02", [], "any", false, false, false, 23);
        echo " 様

以下のお問い合わせを受付致しました。
確認次第ご連絡いたしますので、少々お待ちください。

お名前：";
        // line 28
        echo twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "name01", [], "any", false, false, false, 28);
        echo " ";
        echo twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "name02", [], "any", false, false, false, 28);
        if ((twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "kana01", [], "any", false, false, false, 28) || twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "kana02", [], "any", false, false, false, 28))) {
            echo " (";
            echo twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "kana01", [], "any", false, false, false, 28);
            echo " ";
            echo twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "kana02", [], "any", false, false, false, 28);
            echo ")";
        }
        echo " 様
郵便番号：";
        // line 29
        if (twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "postal_code", [], "any", false, false, false, 29)) {
            echo "〒";
            echo twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "postal_code", [], "any", false, false, false, 29);
        }
        // line 30
        echo "
住所：";
        // line 31
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "pref", [], "any", false, true, false, 31), "name", [], "any", true, true, false, 31)) {
            echo " ";
            echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "pref", [], "any", false, false, false, 31), "name", [], "any", false, false, false, 31);
        }
        echo twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "addr01", [], "any", false, false, false, 31);
        echo twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "addr02", [], "any", false, false, false, 31);
        echo "
電話番号：";
        // line 32
        echo twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "phone_number", [], "any", false, false, false, 32);
        echo "
メールアドレス：";
        // line 33
        echo twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "email", [], "any", false, false, false, 33);
        echo "
お問い合わせ内容：

";
        // line 36
        echo twig_get_attribute($this->env, $this->source, ($context["data"] ?? null), "contents", [], "any", false, false, false, 36);
        echo "
";
    }

    public function getTemplateName()
    {
        return "Mail/contact_mail.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 36,  100 => 33,  96 => 32,  87 => 31,  84 => 30,  79 => 29,  66 => 28,  56 => 23,  49 => 19,  43 => 16,  37 => 12,);
    }

    public function getSourceContext()
    {
        return new Source("", "Mail/contact_mail.twig", "/home/anotherworld/www/s-africa.wine/src/Eccube/Resource/template/default/Mail/contact_mail.twig");
    }
}
