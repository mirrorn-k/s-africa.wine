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

/* product_frame.twig */
class __TwigTemplate_d85e31ea4c956e1ff0c030327662e330e92b5e735fb5f428102a00563f523e24 extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheet' => [$this, 'block_stylesheet'],
            'main' => [$this, 'block_main'],
            'javascript' => [$this, 'block_javascript'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!doctype html>
";
        // line 12
        echo "<html lang=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["eccube_config"] ?? null), "locale", [], "any", false, false, false, 12), "html", null, true);
        echo "\">

<head prefix=\"og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# product: http://ogp.me/ns/product#\">
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-MD5LFBZ');</script>
<!-- End Google Tag Manager -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    <meta name=\"eccube-csrf-token\" content=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(twig_constant("Eccube\\Common\\Constant::TOKEN_NAME")), "html", null, true);
        echo "\">

    ";
        // line 27
        echo "    <title>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "name", [], "any", false, false, false, 27), "html", null, true);
        echo " / ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "shop_name", [], "any", false, false, false, 27), "html", null, true);
        echo " / -南アフリカワイン専門 Online shop-</title>
    
    ";
        // line 30
        echo "    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["Page"] ?? null), "author", [], "any", false, false, false, 30))) {
            // line 31
            echo "    <meta name=\"author\" content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Page"] ?? null), "author", [], "any", false, false, false, 31), "html", null, true);
            echo "\">
    ";
        }
        // line 33
        echo "
    ";
        // line 35
        echo "    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "description_detail", [], "any", false, false, false, 35))) {
            // line 36
            echo "    <meta name=\"description\" content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "description_detail", [], "any", false, false, false, 36), "html", null, true);
            echo "\">
    ";
        }
        // line 38
        echo "
    ";
        // line 40
        echo "    ";
        $context["keywords"] = (twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "search_word", [], "any", false, false, false, 40) . ",");
        // line 41
        echo "    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["Page"] ?? null), "keyword", [], "any", false, false, false, 41))) {
            // line 42
            echo "        ";
            $context["keywords"] = (twig_get_attribute($this->env, $this->source, ($context["Page"] ?? null), "keyword", [], "any", false, false, false, 42) . ",");
            // line 43
            echo "    ";
        }
        // line 44
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "ProductCategories", [], "any", false, false, false, 44));
        foreach ($context['_seq'] as $context["_key"] => $context["ProductCategory"]) {
            // line 45
            echo "        ";
            if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ProductCategory"], "Category", [], "any", false, false, false, 45), "id", [], "any", false, false, false, 45) == 52)) {
                echo " ";
                // line 46
                echo "        
        ";
            } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,             // line 47
$context["ProductCategory"], "Category", [], "any", false, false, false, 47), "id", [], "any", false, false, false, 47) == 2)) {
                echo " ";
                // line 48
                echo "
        ";
            } else {
                // line 50
                echo "            ";
                $context["keywords"] = ((($context["keywords"] ?? null) . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ProductCategory"], "Category", [], "any", false, false, false, 50), "name", [], "any", false, false, false, 50)) . ",");
                // line 51
                echo "        ";
            }
            // line 52
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductCategory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "    <meta name=\"keywords\" content=\"";
        echo twig_escape_filter($this->env, ($context["keywords"] ?? null), "html", null, true);
        echo "\">
    
    ";
        // line 56
        echo "    ";
        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 56), "host", [], "any", false, false, false, 56) != "s-africa.wine")) {
            // line 57
            echo "    <meta name=\"robots\" content=\"noindex\">
    ";
        } elseif ( !twig_test_empty(twig_get_attribute($this->env, $this->source,         // line 58
($context["Page"] ?? null), "meta_robots", [], "any", false, false, false, 58))) {
            // line 59
            echo "    <meta name=\"robots\" content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Page"] ?? null), "meta_robots", [], "any", false, false, false, 59), "html", null, true);
            echo "\">
    ";
        }
        // line 61
        echo "
    ";
        // line 63
        echo "    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["Page"] ?? null), "meta_tags", [], "any", false, false, false, 63))) {
            // line 64
            echo "    ";
            echo twig_include($this->env, $context, twig_template_from_string($this->env, twig_get_attribute($this->env, $this->source, ($context["Page"] ?? null), "meta_tags", [], "any", false, false, false, 64)));
            echo "
    ";
        }
        // line 66
        echo "
    <link rel=\"icon\" href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/common/favicon.ico", "user_data"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css\" integrity=\"sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.3.1/css/all.css\" integrity=\"sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\">
    ";
        // line 72
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 73
        echo "    <script src=\"https://code.jquery.com/jquery-3.3.1.min.js\" integrity=\"sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=\" crossorigin=\"anonymous\"></script>
    <script>
        \$(function() {
            \$.ajaxSetup({
                'headers': {
                    'ECCUBE-CSRF-TOKEN': \$('meta[name=\"eccube-csrf-token\"]').attr('content')
                }
            });
        });

    </script>
    ";
        // line 85
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "Head", [], "any", false, false, false, 85)) {
            // line 86
            echo "    ";
            echo twig_include($this->env, $context, "block.twig", ["Blocks" => twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "Head", [], "any", false, false, false, 86)]);
            echo "
    ";
        }
        // line 88
        echo "    ";
        // line 89
        echo "    ";
        if ((isset($context["plugin_assets"]) || array_key_exists("plugin_assets", $context))) {
            echo twig_include($this->env, $context, "@admin/snippet.twig", ["snippets" => ($context["plugin_assets"] ?? null)]);
        }
        // line 90
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/customize.css", "user_data"), "html", null, true);
        echo "\">
</head>

<body id=\"page_";
        // line 93
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 93), "get", [0 => "_route"], "method", false, false, false, 93), "html", null, true);
        echo "\" class=\"";
        echo twig_escape_filter($this->env, (((isset($context["body_class"]) || array_key_exists("body_class", $context))) ? (_twig_default_filter(($context["body_class"] ?? null), "other_page")) : ("other_page")), "html", null, true);
        echo "\">
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-MD5LFBZ\"
height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    ";
        // line 99
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "BodyAfter", [], "any", false, false, false, 99)) {
            // line 100
            echo "    ";
            echo twig_include($this->env, $context, "block.twig", ["Blocks" => twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "BodyAfter", [], "any", false, false, false, 100)]);
            echo "
    ";
        }
        // line 102
        echo "
    <div class=\"ec-layoutRole\">
        ";
        // line 105
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "Header", [], "any", false, false, false, 105)) {
            // line 106
            echo "        <div class=\"ec-layoutRole__header\">
            ";
            // line 107
            echo twig_include($this->env, $context, "block.twig", ["Blocks" => twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "Header", [], "any", false, false, false, 107)]);
            echo "
        </div>
        ";
        }
        // line 110
        echo "
        ";
        // line 112
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "ContentsTop", [], "any", false, false, false, 112)) {
            // line 113
            echo "        <div class=\"ec-layoutRole__contentTop\">
            ";
            // line 114
            echo twig_include($this->env, $context, "block.twig", ["Blocks" => twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "ContentsTop", [], "any", false, false, false, 114)]);
            echo "
        </div>
        ";
        }
        // line 117
        echo "
        <div class=\"ec-layoutRole__contents\">
            ";
        // line 120
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "SideLeft", [], "any", false, false, false, 120)) {
            // line 121
            echo "            <div class=\"ec-layoutRole__left\">
                ";
            // line 122
            echo twig_include($this->env, $context, "block.twig", ["Blocks" => twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "SideLeft", [], "any", false, false, false, 122)]);
            echo "
            </div>
            ";
        }
        // line 125
        echo "
            ";
        // line 126
        $context["layoutRoleMain"] = "ec-layoutRole__main";
        // line 127
        echo "            ";
        if ((twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "ColumnNum", [], "any", false, false, false, 127) == 2)) {
            // line 128
            echo "            ";
            $context["layoutRoleMain"] = "ec-layoutRole__mainWithColumn";
            // line 129
            echo "            ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "ColumnNum", [], "any", false, false, false, 129) == 3)) {
            // line 130
            echo "            ";
            $context["layoutRoleMain"] = "ec-layoutRole__mainBetweenColumn";
            // line 131
            echo "            ";
        }
        // line 132
        echo "
            <div class=\"";
        // line 133
        echo twig_escape_filter($this->env, ($context["layoutRoleMain"] ?? null), "html", null, true);
        echo "\">
                ";
        // line 135
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "MainTop", [], "any", false, false, false, 135)) {
            // line 136
            echo "                <div class=\"ec-layoutRole__mainTop\">
                    ";
            // line 137
            echo twig_include($this->env, $context, "block.twig", ["Blocks" => twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "MainTop", [], "any", false, false, false, 137)]);
            echo "
                </div>
                ";
        }
        // line 140
        echo "
                ";
        // line 142
        echo "                ";
        $this->displayBlock('main', $context, $blocks);
        // line 143
        echo "
                ";
        // line 145
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "MainBottom", [], "any", false, false, false, 145)) {
            // line 146
            echo "                <div class=\"ec-layoutRole__mainBottom\">
                    ";
            // line 147
            echo twig_include($this->env, $context, "block.twig", ["Blocks" => twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "MainBottom", [], "any", false, false, false, 147)]);
            echo "
                </div>
                ";
        }
        // line 150
        echo "            </div>

            ";
        // line 153
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "SideRight", [], "any", false, false, false, 153)) {
            // line 154
            echo "            <div class=\"ec-layoutRole__right\">
                ";
            // line 155
            echo twig_include($this->env, $context, "block.twig", ["Blocks" => twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "SideRight", [], "any", false, false, false, 155)]);
            echo "
            </div>
            ";
        }
        // line 158
        echo "        </div>

        ";
        // line 161
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "ContentsBottom", [], "any", false, false, false, 161)) {
            // line 162
            echo "        <div class=\"ec-layoutRole__contentBottom\">
            ";
            // line 163
            echo twig_include($this->env, $context, "block.twig", ["Blocks" => twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "ContentsBottom", [], "any", false, false, false, 163)]);
            echo "
        </div>
        ";
        }
        // line 166
        echo "
        ";
        // line 168
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "Footer", [], "any", false, false, false, 168)) {
            // line 169
            echo "        <div class=\"ec-layoutRole__footer\">
            ";
            // line 170
            echo twig_include($this->env, $context, "block.twig", ["Blocks" => twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "Footer", [], "any", false, false, false, 170)]);
            echo "
        </div>
        ";
        }
        // line 173
        echo "    </div><!-- ec-layoutRole -->

    <div class=\"ec-overlayRole\"></div>
    <div class=\"ec-drawerRoleClose\"><i class=\"fas fa-times\"></i></div>
    <div class=\"ec-drawerRole\">
        ";
        // line 179
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "Drawer", [], "any", false, false, false, 179)) {
            // line 180
            echo "        ";
            echo twig_include($this->env, $context, "block.twig", ["Blocks" => twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "Drawer", [], "any", false, false, false, 180)]);
            echo "
        ";
        }
        // line 182
        echo "    </div>
    <div class=\"ec-blockTopBtn pagetop\">";
        // line 183
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ページトップへ"), "html", null, true);
        echo "</div>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js\" integrity=\"sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js\"></script>
    ";
        // line 186
        $this->loadTemplate("@common/lang.twig", "product_frame.twig", 186)->display($context);
        // line 187
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/function.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/eccube.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 189
        $this->displayBlock('javascript', $context, $blocks);
        // line 190
        echo "    ";
        // line 191
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "CloseBodyBefore", [], "any", false, false, false, 191)) {
            // line 192
            echo "    ";
            echo twig_include($this->env, $context, "block.twig", ["Blocks" => twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "CloseBodyBefore", [], "any", false, false, false, 192)]);
            echo "
    ";
        }
        // line 194
        echo "    ";
        // line 195
        echo "    ";
        if ((isset($context["plugin_snippets"]) || array_key_exists("plugin_snippets", $context))) {
            // line 196
            echo "    ";
            echo twig_include($this->env, $context, "snippet.twig", ["snippets" => ($context["plugin_snippets"] ?? null)]);
            echo "
    ";
        }
        // line 198
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/customize.js", "user_data"), "html", null, true);
        echo "\"></script>
</body>

</html>
";
    }

    // line 72
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 142
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 189
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "product_frame.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  478 => 189,  472 => 142,  466 => 72,  456 => 198,  450 => 196,  447 => 195,  445 => 194,  439 => 192,  436 => 191,  434 => 190,  432 => 189,  428 => 188,  423 => 187,  421 => 186,  415 => 183,  412 => 182,  406 => 180,  403 => 179,  396 => 173,  390 => 170,  387 => 169,  384 => 168,  381 => 166,  375 => 163,  372 => 162,  369 => 161,  365 => 158,  359 => 155,  356 => 154,  353 => 153,  349 => 150,  343 => 147,  340 => 146,  337 => 145,  334 => 143,  331 => 142,  328 => 140,  322 => 137,  319 => 136,  316 => 135,  312 => 133,  309 => 132,  306 => 131,  303 => 130,  300 => 129,  297 => 128,  294 => 127,  292 => 126,  289 => 125,  283 => 122,  280 => 121,  277 => 120,  273 => 117,  267 => 114,  264 => 113,  261 => 112,  258 => 110,  252 => 107,  249 => 106,  246 => 105,  242 => 102,  236 => 100,  233 => 99,  223 => 93,  216 => 90,  211 => 89,  209 => 88,  203 => 86,  200 => 85,  187 => 73,  185 => 72,  181 => 71,  174 => 67,  171 => 66,  165 => 64,  162 => 63,  159 => 61,  153 => 59,  151 => 58,  148 => 57,  145 => 56,  139 => 53,  133 => 52,  130 => 51,  127 => 50,  123 => 48,  120 => 47,  117 => 46,  113 => 45,  108 => 44,  105 => 43,  102 => 42,  99 => 41,  96 => 40,  93 => 38,  87 => 36,  84 => 35,  81 => 33,  75 => 31,  72 => 30,  64 => 27,  59 => 24,  43 => 12,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "product_frame.twig", "/home/anotherworld/www/s-africa.wine/src/Eccube/Resource/template/default/product_frame.twig");
    }
}
