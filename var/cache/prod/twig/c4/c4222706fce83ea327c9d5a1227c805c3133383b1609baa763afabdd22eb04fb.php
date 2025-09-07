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

/* default_frame.twig */
class __TwigTemplate_2a7be46a4aeb012f21b3905a837d29ecc4d84f332f1cd022a2e1fab177639536 extends \Eccube\Twig\Template
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
    <title>";
        // line 25
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "shop_name", [], "any", false, false, false, 25), "html", null, true);
        if (((isset($context["subtitle"]) || array_key_exists("subtitle", $context)) &&  !twig_test_empty(($context["subtitle"] ?? null)))) {
            echo " / ";
            echo twig_escape_filter($this->env, ($context["subtitle"] ?? null), "html", null, true);
        } elseif (((isset($context["title"]) || array_key_exists("title", $context)) &&  !twig_test_empty(($context["title"] ?? null)))) {
            echo " / ";
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
        }
        echo "</title>
    ";
        // line 26
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["Page"] ?? null), "author", [], "any", false, false, false, 26))) {
            // line 27
            echo "    <meta name=\"author\" content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Page"] ?? null), "author", [], "any", false, false, false, 27), "html", null, true);
            echo "\">
    ";
        }
        // line 29
        echo "    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["Page"] ?? null), "description", [], "any", false, false, false, 29))) {
            // line 30
            echo "    <meta name=\"description\" content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Page"] ?? null), "description", [], "any", false, false, false, 30), "html", null, true);
            echo "\">
    ";
        }
        // line 32
        echo "    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["Page"] ?? null), "keyword", [], "any", false, false, false, 32))) {
            // line 33
            echo "    <meta name=\"keywords\" content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Page"] ?? null), "keyword", [], "any", false, false, false, 33), "html", null, true);
            echo "\">
    ";
        }
        // line 35
        echo "    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["Page"] ?? null), "meta_robots", [], "any", false, false, false, 35))) {
            // line 36
            echo "    <meta name=\"robots\" content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Page"] ?? null), "meta_robots", [], "any", false, false, false, 36), "html", null, true);
            echo "\">
    ";
        }
        // line 38
        echo "    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["Page"] ?? null), "meta_tags", [], "any", false, false, false, 38))) {
            // line 39
            echo "    ";
            echo twig_include($this->env, $context, twig_template_from_string($this->env, twig_get_attribute($this->env, $this->source, ($context["Page"] ?? null), "meta_tags", [], "any", false, false, false, 39)));
            echo "
    ";
        }
        // line 41
        echo "    <link rel=\"icon\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/img/common/favicon.ico", "user_data"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css\" integrity=\"sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.3.1/css/all.css\" integrity=\"sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\">
    ";
        // line 46
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 47
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
        // line 59
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "Head", [], "any", false, false, false, 59)) {
            // line 60
            echo "    ";
            echo twig_include($this->env, $context, "block.twig", ["Blocks" => twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "Head", [], "any", false, false, false, 60)]);
            echo "
    ";
        }
        // line 62
        echo "    ";
        // line 63
        echo "    ";
        if ((isset($context["plugin_assets"]) || array_key_exists("plugin_assets", $context))) {
            echo twig_include($this->env, $context, "@admin/snippet.twig", ["snippets" => ($context["plugin_assets"] ?? null)]);
        }
        // line 64
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/customize.css", "user_data"), "html", null, true);
        echo "\">
</head>

<body id=\"page_";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "request", [], "any", false, false, false, 67), "get", [0 => "_route"], "method", false, false, false, 67), "html", null, true);
        echo "\" class=\"";
        echo twig_escape_filter($this->env, (((isset($context["body_class"]) || array_key_exists("body_class", $context))) ? (_twig_default_filter(($context["body_class"] ?? null), "other_page")) : ("other_page")), "html", null, true);
        echo "\">
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-MD5LFBZ\"
height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    ";
        // line 73
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "BodyAfter", [], "any", false, false, false, 73)) {
            // line 74
            echo "    ";
            echo twig_include($this->env, $context, "block.twig", ["Blocks" => twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "BodyAfter", [], "any", false, false, false, 74)]);
            echo "
    ";
        }
        // line 76
        echo "
    <div class=\"ec-layoutRole\">
        ";
        // line 79
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "Header", [], "any", false, false, false, 79)) {
            // line 80
            echo "        <div class=\"ec-layoutRole__header\">
            ";
            // line 81
            echo twig_include($this->env, $context, "block.twig", ["Blocks" => twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "Header", [], "any", false, false, false, 81)]);
            echo "
        </div>
        ";
        }
        // line 84
        echo "
        ";
        // line 86
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "ContentsTop", [], "any", false, false, false, 86)) {
            // line 87
            echo "        <div class=\"ec-layoutRole__contentTop\">
            ";
            // line 88
            echo twig_include($this->env, $context, "block.twig", ["Blocks" => twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "ContentsTop", [], "any", false, false, false, 88)]);
            echo "
        </div>
        ";
        }
        // line 91
        echo "
        <div class=\"ec-layoutRole__contents\">
            ";
        // line 94
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "SideLeft", [], "any", false, false, false, 94)) {
            // line 95
            echo "            <div class=\"ec-layoutRole__left\">
                ";
            // line 96
            echo twig_include($this->env, $context, "block.twig", ["Blocks" => twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "SideLeft", [], "any", false, false, false, 96)]);
            echo "
            </div>
            ";
        }
        // line 99
        echo "
            ";
        // line 100
        $context["layoutRoleMain"] = "ec-layoutRole__main";
        // line 101
        echo "            ";
        if ((twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "ColumnNum", [], "any", false, false, false, 101) == 2)) {
            // line 102
            echo "            ";
            $context["layoutRoleMain"] = "ec-layoutRole__mainWithColumn";
            // line 103
            echo "            ";
        } elseif ((twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "ColumnNum", [], "any", false, false, false, 103) == 3)) {
            // line 104
            echo "            ";
            $context["layoutRoleMain"] = "ec-layoutRole__mainBetweenColumn";
            // line 105
            echo "            ";
        }
        // line 106
        echo "
            <div class=\"";
        // line 107
        echo twig_escape_filter($this->env, ($context["layoutRoleMain"] ?? null), "html", null, true);
        echo "\">
                ";
        // line 109
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "MainTop", [], "any", false, false, false, 109)) {
            // line 110
            echo "                <div class=\"ec-layoutRole__mainTop\">
                    ";
            // line 111
            echo twig_include($this->env, $context, "block.twig", ["Blocks" => twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "MainTop", [], "any", false, false, false, 111)]);
            echo "
                </div>
                ";
        }
        // line 114
        echo "
                ";
        // line 116
        echo "                ";
        $this->displayBlock('main', $context, $blocks);
        // line 117
        echo "
                ";
        // line 119
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "MainBottom", [], "any", false, false, false, 119)) {
            // line 120
            echo "                <div class=\"ec-layoutRole__mainBottom\">
                    ";
            // line 121
            echo twig_include($this->env, $context, "block.twig", ["Blocks" => twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "MainBottom", [], "any", false, false, false, 121)]);
            echo "
                </div>
                ";
        }
        // line 124
        echo "            </div>

            ";
        // line 127
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "SideRight", [], "any", false, false, false, 127)) {
            // line 128
            echo "            <div class=\"ec-layoutRole__right\">
                ";
            // line 129
            echo twig_include($this->env, $context, "block.twig", ["Blocks" => twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "SideRight", [], "any", false, false, false, 129)]);
            echo "
            </div>
            ";
        }
        // line 132
        echo "        </div>

        ";
        // line 135
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "ContentsBottom", [], "any", false, false, false, 135)) {
            // line 136
            echo "        <div class=\"ec-layoutRole__contentBottom\">
            ";
            // line 137
            echo twig_include($this->env, $context, "block.twig", ["Blocks" => twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "ContentsBottom", [], "any", false, false, false, 137)]);
            echo "
        </div>
        ";
        }
        // line 140
        echo "
        ";
        // line 142
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "Footer", [], "any", false, false, false, 142)) {
            // line 143
            echo "        <div class=\"ec-layoutRole__footer\">
            ";
            // line 144
            echo twig_include($this->env, $context, "block.twig", ["Blocks" => twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "Footer", [], "any", false, false, false, 144)]);
            echo "
        </div>
        ";
        }
        // line 147
        echo "    </div><!-- ec-layoutRole -->

    <div class=\"ec-overlayRole\"></div>
    <div class=\"ec-drawerRoleClose\"><i class=\"fas fa-times\"></i></div>
    <div class=\"ec-drawerRole\">
        ";
        // line 153
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "Drawer", [], "any", false, false, false, 153)) {
            // line 154
            echo "        ";
            echo twig_include($this->env, $context, "block.twig", ["Blocks" => twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "Drawer", [], "any", false, false, false, 154)]);
            echo "
        ";
        }
        // line 156
        echo "    </div>
    <div class=\"ec-blockTopBtn pagetop\">";
        // line 157
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("ページトップへ"), "html", null, true);
        echo "</div>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js\" integrity=\"sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js\"></script>
    ";
        // line 160
        $this->loadTemplate("@common/lang.twig", "default_frame.twig", 160)->display($context);
        // line 161
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/function.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/eccube.js"), "html", null, true);
        echo "\"></script>
    ";
        // line 163
        $this->displayBlock('javascript', $context, $blocks);
        // line 164
        echo "    ";
        // line 165
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "CloseBodyBefore", [], "any", false, false, false, 165)) {
            // line 166
            echo "    ";
            echo twig_include($this->env, $context, "block.twig", ["Blocks" => twig_get_attribute($this->env, $this->source, ($context["Layout"] ?? null), "CloseBodyBefore", [], "any", false, false, false, 166)]);
            echo "
    ";
        }
        // line 168
        echo "    ";
        // line 169
        echo "    ";
        if ((isset($context["plugin_snippets"]) || array_key_exists("plugin_snippets", $context))) {
            // line 170
            echo "    ";
            echo twig_include($this->env, $context, "snippet.twig", ["snippets" => ($context["plugin_snippets"] ?? null)]);
            echo "
    ";
        }
        // line 172
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/js/customize.js", "user_data"), "html", null, true);
        echo "\"></script>
</body>

</html>
";
    }

    // line 46
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 116
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 163
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "default_frame.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  423 => 163,  417 => 116,  411 => 46,  401 => 172,  395 => 170,  392 => 169,  390 => 168,  384 => 166,  381 => 165,  379 => 164,  377 => 163,  373 => 162,  368 => 161,  366 => 160,  360 => 157,  357 => 156,  351 => 154,  348 => 153,  341 => 147,  335 => 144,  332 => 143,  329 => 142,  326 => 140,  320 => 137,  317 => 136,  314 => 135,  310 => 132,  304 => 129,  301 => 128,  298 => 127,  294 => 124,  288 => 121,  285 => 120,  282 => 119,  279 => 117,  276 => 116,  273 => 114,  267 => 111,  264 => 110,  261 => 109,  257 => 107,  254 => 106,  251 => 105,  248 => 104,  245 => 103,  242 => 102,  239 => 101,  237 => 100,  234 => 99,  228 => 96,  225 => 95,  222 => 94,  218 => 91,  212 => 88,  209 => 87,  206 => 86,  203 => 84,  197 => 81,  194 => 80,  191 => 79,  187 => 76,  181 => 74,  178 => 73,  168 => 67,  161 => 64,  156 => 63,  154 => 62,  148 => 60,  145 => 59,  132 => 47,  130 => 46,  126 => 45,  118 => 41,  112 => 39,  109 => 38,  103 => 36,  100 => 35,  94 => 33,  91 => 32,  85 => 30,  82 => 29,  76 => 27,  74 => 26,  63 => 25,  59 => 24,  43 => 12,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "default_frame.twig", "/home/anotherworld/www/s-africa.wine/src/Eccube/Resource/template/default/default_frame.twig");
    }
}
