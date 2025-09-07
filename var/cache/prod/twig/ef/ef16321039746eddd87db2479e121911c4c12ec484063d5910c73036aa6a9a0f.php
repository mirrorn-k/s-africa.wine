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

/* Mypage/favorite.twig */
class __TwigTemplate_3602ae503645cf569b885400c89ec74c26f43c9f552cefc3449be3551e4fd695 extends \Eccube\Twig\Template
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
        $context["mypageno"] = "favorite";
        // line 15
        $context["body_class"] = "mypage";
        // line 11
        $this->parent = $this->loadTemplate("default_frame.twig", "Mypage/favorite.twig", 11);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お気に入り一覧"), "html", null, true);
        echo "</h1>
            </div>
            ";
        // line 23
        $this->loadTemplate("Mypage/navi.twig", "Mypage/favorite.twig", 23)->display($context);
        // line 24
        echo "        </div>

        <div class=\"ec-mypageRole\">
            <div class=\"ec-favoriteRole\">
                ";
        // line 28
        if ((twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "totalItemCount", [], "any", false, false, false, 28) > 0)) {
            // line 29
            echo "                    <div class=\"ec-favoriteRole__header\">
                        <p>";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("%count%件のお気に入りがあります", ["%count%" => twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "totalItemCount", [], "any", false, false, false, 30)]), "html", null, true);
            echo "</p>
                    </div>
                    <div class=\"ec-favoriteRole__detail\">
                        <ul class=\"ec-favoriteRole__itemList\">
                            ";
            // line 34
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagination"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["FavoriteProduct"]) {
                // line 35
                echo "                                ";
                $context["Product"] = twig_get_attribute($this->env, $this->source, $context["FavoriteProduct"], "Product", [], "any", false, false, false, 35);
                // line 36
                echo "                                <li class=\"ec-favoriteRole__item\">
                                    <a class=\"ec-closeBtn--circle\"
                                       href=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("mypage_favorite_delete", ["id" => twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "id", [], "any", false, false, false, 38)]), "html", null, true);
                echo "\" ";
                echo $this->extensions['Eccube\Twig\Extension\CsrfExtension']->getCsrfTokenForAnchor();
                echo "
                                       data-method=\"delete\">
                                        <div class=\"ec-icon\">
                                            <img src=\"";
                // line 41
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/icon/cross-white.svg"), "html", null, true);
                echo "\" alt=\"close\">
                                        </div>
                                    </a>
                                    <a class=\"ec-favoriteRole__itemThumb\" href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_detail", ["id" => twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "id", [], "any", false, false, false, 44)]), "html", null, true);
                echo "\">
                                        <p class=\"ec-favoriteRole__item-image\">
                                            <img src=\"";
                // line 46
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($this->extensions['Eccube\Twig\Extension\EccubeExtension']->getNoImageProduct(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "main_list_image", [], "any", false, false, false, 46)), "save_image"), "html", null, true);
                echo "\">
                                        </p>
                                    </a>
                                    <p class=\"ec-favoriteRole__itemTitle\">";
                // line 49
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "name", [], "any", false, false, false, 49), "html", null, true);
                echo "</p>
                                    <p class=\"ec-favoriteRole__itemPrice\">
                                        ";
                // line 51
                if ((twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "price02_inc_tax_min", [], "any", false, false, false, 51) == twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "price02_inc_tax_max", [], "any", false, false, false, 51))) {
                    // line 52
                    echo "                                            ";
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "price02_inc_tax_min", [], "any", false, false, false, 52)), "html", null, true);
                    echo "
                                        ";
                } else {
                    // line 54
                    echo "                                            ";
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "price02_inc_tax_min", [], "any", false, false, false, 54)), "html", null, true);
                    echo "～";
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "price02_inc_tax_max", [], "any", false, false, false, 54)), "html", null, true);
                    echo "
                                        ";
                }
                // line 56
                echo "                                    </p>
                                </li>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['FavoriteProduct'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            echo "                        </ul>
                    </div>
                    <div class=\"ec-pagerRole\">
                        ";
            // line 62
            $this->loadTemplate("pager.twig", "Mypage/favorite.twig", 62)->display(twig_array_merge($context, ["pages" => twig_get_attribute($this->env, $this->source, ($context["pagination"] ?? null), "paginationData", [], "any", false, false, false, 62)]));
            // line 63
            echo "                    </div>
                ";
        } else {
            // line 65
            echo "                    <div class=\"ec-favoriteRole__header\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("お気に入りは登録されていません。"), "html", null, true);
            echo "</div>
                ";
        }
        // line 67
        echo "            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "Mypage/favorite.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 67,  163 => 65,  159 => 63,  157 => 62,  152 => 59,  144 => 56,  136 => 54,  130 => 52,  128 => 51,  123 => 49,  117 => 46,  112 => 44,  106 => 41,  98 => 38,  94 => 36,  91 => 35,  87 => 34,  80 => 30,  77 => 29,  75 => 28,  69 => 24,  67 => 23,  60 => 21,  55 => 18,  51 => 17,  46 => 11,  44 => 15,  42 => 13,  35 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "Mypage/favorite.twig", "/home/anotherworld/www/s-africa.wine/src/Eccube/Resource/template/default/Mypage/favorite.twig");
    }
}
