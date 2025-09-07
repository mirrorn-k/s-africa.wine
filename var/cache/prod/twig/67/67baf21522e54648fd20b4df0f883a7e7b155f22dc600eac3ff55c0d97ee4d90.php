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

/* Mypage/delivery.twig */
class __TwigTemplate_8078b72ed368949a1c1eec62e63cb359e3943ea3fe92610faabe54cd24887d7c extends \Eccube\Twig\Template
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
        // line 13
        $context["mypageno"] = "delivery";
        // line 15
        $context["body_class"] = "mypage";
        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "Mypage/delivery.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 17
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "    <div class=\"ec-layoutRole__main\">
        <div class=\"ec-mypageRole\">
            <div class=\"ec-pageHeader\">
                <h1>";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("マイページ"), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お届け先一覧"), "html", null, true);
        echo "</h1>
            </div>
            ";
        // line 23
        echo twig_include($this->env, $context, "Mypage/navi.twig");
        echo "
        </div>
        <div class=\"ec-mypageRole\">
            ";
        // line 26
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Customer"] ?? null), "CustomerAddresses", [], "any", false, false, false, 26)) > 0)) {
            // line 27
            echo "                <p class=\"ec-para-normal\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%count%件のお届け先があります", ["%count%" => twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Customer"] ?? null), "CustomerAddresses", [], "any", false, false, false, 27))]), "html", null, true);
            echo "</p>
            ";
        } else {
            // line 29
            echo "                <p class=\"ec-para-normal\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お届け先は登録されていません。"), "html", null, true);
            echo "</p>
            ";
        }
        // line 31
        echo "        </div>
        <div class=\"ec-mypageRole\">
            <div class=\"ec-off1Grid\">
                <div class=\"ec-off1Grid__cell\">
                    <div class=\"ec-addressRole\">
                        <div class=\"ec-addressRole__actions\">
                            ";
        // line 37
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Customer"] ?? null), "CustomerAddresses", [], "any", false, false, false, 37)) < twig_get_attribute($this->env, $this->source, ($context["eccube_config"] ?? null), "eccube_deliv_addr_max", [], "any", false, false, false, 37))) {
            // line 38
            echo "                                <a class=\"ec-inlineBtn\" href=\"";
            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("mypage_delivery_new");
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("新規お届け先を追加する"), "html", null, true);
            echo "</a>
                            ";
        } else {
            // line 40
            echo "                                <span class=\"ec-errorMessage\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お届け先登録の上限の%count%件に達しています。お届け先を入力したい場合は、削除か変更を行ってください。", ["%count%" => twig_get_attribute($this->env, $this->source, ($context["eccube_config"] ?? null), "eccube_deliv_addr_max", [], "any", false, false, false, 40)]), "html", null, true);
            echo "</span>
                            ";
        }
        // line 42
        echo "                        </div>
                    </div>
                    ";
        // line 44
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Customer"] ?? null), "CustomerAddresses", [], "any", false, false, false, 44)) > 0)) {
            // line 45
            echo "                        <div class=\"ec-addressList\">
                            ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Customer"] ?? null), "CustomerAddresses", [], "any", false, false, false, 46));
            foreach ($context['_seq'] as $context["_key"] => $context["CustomerAddress"]) {
                // line 47
                echo "                                <div class=\"ec-addressList__item\">
                                    <a class=\"ec-addressList__remove\" href=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("mypage_delivery_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "id", [], "any", false, false, false, 48)]), "html", null, true);
                echo "\" ";
                echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
                echo " data-method=\"delete\">
                                        <div class=\"ec-icon\">
                                            <img src=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/cross.svg"), "html", null, true);
                echo "\" alt=\"remove\">
                                        </div>
                                    </a>
                                    <div class=\"ec-addressList__address\">
                                        <div>";
                // line 54
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "name01", [], "any", false, false, false, 54), "html", null, true);
                echo "&nbsp;";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "name02", [], "any", false, false, false, 54), "html", null, true);
                echo "</div>
                                        <div>";
                // line 55
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("〒"), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "postal_code", [], "any", false, false, false, 55), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "Pref", [], "any", false, false, false, 55), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "addr01", [], "any", false, false, false, 55), "html", null, true);
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "addr02", [], "any", false, false, false, 55), "html", null, true);
                echo "</div>
                                        <div>";
                // line 56
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "phone_number", [], "any", false, false, false, 56), "html", null, true);
                echo "</div>
                                    </div>
                                    <div class=\"ec-addressList__action\">
                                        <a class=\"ec-inlineBtn\" href=\"";
                // line 59
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("mypage_delivery_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["CustomerAddress"], "id", [], "any", false, false, false, 59)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("変更"), "html", null, true);
                echo "</a>
                                    </div>
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['CustomerAddress'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "                        </div>
                    ";
        }
        // line 65
        echo "                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "Mypage/delivery.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 65,  174 => 63,  162 => 59,  156 => 56,  147 => 55,  141 => 54,  134 => 50,  127 => 48,  124 => 47,  120 => 46,  117 => 45,  115 => 44,  111 => 42,  105 => 40,  97 => 38,  95 => 37,  87 => 31,  81 => 29,  75 => 27,  73 => 26,  67 => 23,  60 => 21,  55 => 18,  51 => 17,  46 => 11,  44 => 15,  42 => 13,  35 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Mypage/delivery.twig", "/home/anotherworld/www/s-africa.wine/src/Eccube/Resource/template/default/Mypage/delivery.twig");
    }
}
