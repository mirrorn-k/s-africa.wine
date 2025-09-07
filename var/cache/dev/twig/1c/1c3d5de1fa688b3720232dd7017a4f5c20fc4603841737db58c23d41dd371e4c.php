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
class __TwigTemplate_86366899116fae348adf2e91c6cc89043905918e4479905cab5da84b3d0d17c7 extends \Eccube\Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default_frame.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default_frame.twig"));

        // line 1
        echo "<!doctype html>
";
        // line 12
        echo "<html lang=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["eccube_config"]) || array_key_exists("eccube_config", $context) ? $context["eccube_config"] : (function () { throw new RuntimeError('Variable "eccube_config" does not exist.', 12, $this->source); })()), "locale", [], "any", false, false, false, 12), "html", null, true);
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["BaseInfo"]) || array_key_exists("BaseInfo", $context) ? $context["BaseInfo"] : (function () { throw new RuntimeError('Variable "BaseInfo" does not exist.', 25, $this->source); })()), "shop_name", [], "any", false, false, false, 25), "html", null, true);
        if (((isset($context["subtitle"]) || array_key_exists("subtitle", $context)) &&  !twig_test_empty((isset($context["subtitle"]) || array_key_exists("subtitle", $context) ? $context["subtitle"] : (function () { throw new RuntimeError('Variable "subtitle" does not exist.', 25, $this->source); })())))) {
            echo " / ";
            echo twig_escape_filter($this->env, (isset($context["subtitle"]) || array_key_exists("subtitle", $context) ? $context["subtitle"] : (function () { throw new RuntimeError('Variable "subtitle" does not exist.', 25, $this->source); })()), "html", null, true);
        } elseif (((isset($context["title"]) || array_key_exists("title", $context)) &&  !twig_test_empty((isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 25, $this->source); })())))) {
            echo " / ";
            echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 25, $this->source); })()), "html", null, true);
        }
        echo "</title>
    ";
        // line 26
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["Page"]) || array_key_exists("Page", $context) ? $context["Page"] : (function () { throw new RuntimeError('Variable "Page" does not exist.', 26, $this->source); })()), "author", [], "any", false, false, false, 26))) {
            // line 27
            echo "    <meta name=\"author\" content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Page"]) || array_key_exists("Page", $context) ? $context["Page"] : (function () { throw new RuntimeError('Variable "Page" does not exist.', 27, $this->source); })()), "author", [], "any", false, false, false, 27), "html", null, true);
            echo "\">
    ";
        }
        // line 29
        echo "    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["Page"]) || array_key_exists("Page", $context) ? $context["Page"] : (function () { throw new RuntimeError('Variable "Page" does not exist.', 29, $this->source); })()), "description", [], "any", false, false, false, 29))) {
            // line 30
            echo "    <meta name=\"description\" content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Page"]) || array_key_exists("Page", $context) ? $context["Page"] : (function () { throw new RuntimeError('Variable "Page" does not exist.', 30, $this->source); })()), "description", [], "any", false, false, false, 30), "html", null, true);
            echo "\">
    ";
        }
        // line 32
        echo "    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["Page"]) || array_key_exists("Page", $context) ? $context["Page"] : (function () { throw new RuntimeError('Variable "Page" does not exist.', 32, $this->source); })()), "keyword", [], "any", false, false, false, 32))) {
            // line 33
            echo "    <meta name=\"keywords\" content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Page"]) || array_key_exists("Page", $context) ? $context["Page"] : (function () { throw new RuntimeError('Variable "Page" does not exist.', 33, $this->source); })()), "keyword", [], "any", false, false, false, 33), "html", null, true);
            echo "\">
    ";
        }
        // line 35
        echo "    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["Page"]) || array_key_exists("Page", $context) ? $context["Page"] : (function () { throw new RuntimeError('Variable "Page" does not exist.', 35, $this->source); })()), "meta_robots", [], "any", false, false, false, 35))) {
            // line 36
            echo "    <meta name=\"robots\" content=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Page"]) || array_key_exists("Page", $context) ? $context["Page"] : (function () { throw new RuntimeError('Variable "Page" does not exist.', 36, $this->source); })()), "meta_robots", [], "any", false, false, false, 36), "html", null, true);
            echo "\">
    ";
        }
        // line 38
        echo "    ";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["Page"]) || array_key_exists("Page", $context) ? $context["Page"] : (function () { throw new RuntimeError('Variable "Page" does not exist.', 38, $this->source); })()), "meta_tags", [], "any", false, false, false, 38))) {
            // line 39
            echo "    ";
            echo twig_include($this->env, $context, twig_template_from_string($this->env, twig_get_attribute($this->env, $this->source, (isset($context["Page"]) || array_key_exists("Page", $context) ? $context["Page"] : (function () { throw new RuntimeError('Variable "Page" does not exist.', 39, $this->source); })()), "meta_tags", [], "any", false, false, false, 39)));
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
        if (twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 59, $this->source); })()), "Head", [], "any", false, false, false, 59)) {
            // line 60
            echo "    ";
            echo twig_include($this->env, $context, "block.twig", ["Blocks" => twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 60, $this->source); })()), "Head", [], "any", false, false, false, 60)]);
            echo "
    ";
        }
        // line 62
        echo "    ";
        // line 63
        echo "    ";
        if ((isset($context["plugin_assets"]) || array_key_exists("plugin_assets", $context))) {
            echo twig_include($this->env, $context, "@admin/snippet.twig", ["snippets" => (isset($context["plugin_assets"]) || array_key_exists("plugin_assets", $context) ? $context["plugin_assets"] : (function () { throw new RuntimeError('Variable "plugin_assets" does not exist.', 63, $this->source); })())]);
        }
        // line 64
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/customize.css", "user_data"), "html", null, true);
        echo "\">
</head>

<body id=\"page_";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "request", [], "any", false, false, false, 67), "get", [0 => "_route"], "method", false, false, false, 67), "html", null, true);
        echo "\" class=\"";
        echo twig_escape_filter($this->env, (((isset($context["body_class"]) || array_key_exists("body_class", $context))) ? (_twig_default_filter((isset($context["body_class"]) || array_key_exists("body_class", $context) ? $context["body_class"] : (function () { throw new RuntimeError('Variable "body_class" does not exist.', 67, $this->source); })()), "other_page")) : ("other_page")), "html", null, true);
        echo "\">
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-MD5LFBZ\"
height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    ";
        // line 73
        echo "    ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 73, $this->source); })()), "BodyAfter", [], "any", false, false, false, 73)) {
            // line 74
            echo "    ";
            echo twig_include($this->env, $context, "block.twig", ["Blocks" => twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 74, $this->source); })()), "BodyAfter", [], "any", false, false, false, 74)]);
            echo "
    ";
        }
        // line 76
        echo "
    <div class=\"ec-layoutRole\">
        ";
        // line 79
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 79, $this->source); })()), "Header", [], "any", false, false, false, 79)) {
            // line 80
            echo "        <div class=\"ec-layoutRole__header\">
            ";
            // line 81
            echo twig_include($this->env, $context, "block.twig", ["Blocks" => twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 81, $this->source); })()), "Header", [], "any", false, false, false, 81)]);
            echo "
        </div>
        ";
        }
        // line 84
        echo "
        ";
        // line 86
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 86, $this->source); })()), "ContentsTop", [], "any", false, false, false, 86)) {
            // line 87
            echo "        <div class=\"ec-layoutRole__contentTop\">
            ";
            // line 88
            echo twig_include($this->env, $context, "block.twig", ["Blocks" => twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 88, $this->source); })()), "ContentsTop", [], "any", false, false, false, 88)]);
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
        if (twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 94, $this->source); })()), "SideLeft", [], "any", false, false, false, 94)) {
            // line 95
            echo "            <div class=\"ec-layoutRole__left\">
                ";
            // line 96
            echo twig_include($this->env, $context, "block.twig", ["Blocks" => twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 96, $this->source); })()), "SideLeft", [], "any", false, false, false, 96)]);
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
        if ((twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 101, $this->source); })()), "ColumnNum", [], "any", false, false, false, 101) == 2)) {
            // line 102
            echo "            ";
            $context["layoutRoleMain"] = "ec-layoutRole__mainWithColumn";
            // line 103
            echo "            ";
        } elseif ((twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 103, $this->source); })()), "ColumnNum", [], "any", false, false, false, 103) == 3)) {
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
        echo twig_escape_filter($this->env, (isset($context["layoutRoleMain"]) || array_key_exists("layoutRoleMain", $context) ? $context["layoutRoleMain"] : (function () { throw new RuntimeError('Variable "layoutRoleMain" does not exist.', 107, $this->source); })()), "html", null, true);
        echo "\">
                ";
        // line 109
        echo "                ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 109, $this->source); })()), "MainTop", [], "any", false, false, false, 109)) {
            // line 110
            echo "                <div class=\"ec-layoutRole__mainTop\">
                    ";
            // line 111
            echo twig_include($this->env, $context, "block.twig", ["Blocks" => twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 111, $this->source); })()), "MainTop", [], "any", false, false, false, 111)]);
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
        if (twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 119, $this->source); })()), "MainBottom", [], "any", false, false, false, 119)) {
            // line 120
            echo "                <div class=\"ec-layoutRole__mainBottom\">
                    ";
            // line 121
            echo twig_include($this->env, $context, "block.twig", ["Blocks" => twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 121, $this->source); })()), "MainBottom", [], "any", false, false, false, 121)]);
            echo "
                </div>
                ";
        }
        // line 124
        echo "            </div>

            ";
        // line 127
        echo "            ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 127, $this->source); })()), "SideRight", [], "any", false, false, false, 127)) {
            // line 128
            echo "            <div class=\"ec-layoutRole__right\">
                ";
            // line 129
            echo twig_include($this->env, $context, "block.twig", ["Blocks" => twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 129, $this->source); })()), "SideRight", [], "any", false, false, false, 129)]);
            echo "
            </div>
            ";
        }
        // line 132
        echo "        </div>

        ";
        // line 135
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 135, $this->source); })()), "ContentsBottom", [], "any", false, false, false, 135)) {
            // line 136
            echo "        <div class=\"ec-layoutRole__contentBottom\">
            ";
            // line 137
            echo twig_include($this->env, $context, "block.twig", ["Blocks" => twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 137, $this->source); })()), "ContentsBottom", [], "any", false, false, false, 137)]);
            echo "
        </div>
        ";
        }
        // line 140
        echo "
        ";
        // line 142
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 142, $this->source); })()), "Footer", [], "any", false, false, false, 142)) {
            // line 143
            echo "        <div class=\"ec-layoutRole__footer\">
            ";
            // line 144
            echo twig_include($this->env, $context, "block.twig", ["Blocks" => twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 144, $this->source); })()), "Footer", [], "any", false, false, false, 144)]);
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
        if (twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 153, $this->source); })()), "Drawer", [], "any", false, false, false, 153)) {
            // line 154
            echo "        ";
            echo twig_include($this->env, $context, "block.twig", ["Blocks" => twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 154, $this->source); })()), "Drawer", [], "any", false, false, false, 154)]);
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
        if (twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 165, $this->source); })()), "CloseBodyBefore", [], "any", false, false, false, 165)) {
            // line 166
            echo "    ";
            echo twig_include($this->env, $context, "block.twig", ["Blocks" => twig_get_attribute($this->env, $this->source, (isset($context["Layout"]) || array_key_exists("Layout", $context) ? $context["Layout"] : (function () { throw new RuntimeError('Variable "Layout" does not exist.', 166, $this->source); })()), "CloseBodyBefore", [], "any", false, false, false, 166)]);
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
            echo twig_include($this->env, $context, "snippet.twig", ["snippets" => (isset($context["plugin_snippets"]) || array_key_exists("plugin_snippets", $context) ? $context["plugin_snippets"] : (function () { throw new RuntimeError('Variable "plugin_snippets" does not exist.', 170, $this->source); })())]);
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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 46
    public function block_stylesheet($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheet"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 116
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 163
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascript"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        return array (  459 => 163,  441 => 116,  423 => 46,  407 => 172,  401 => 170,  398 => 169,  396 => 168,  390 => 166,  387 => 165,  385 => 164,  383 => 163,  379 => 162,  374 => 161,  372 => 160,  366 => 157,  363 => 156,  357 => 154,  354 => 153,  347 => 147,  341 => 144,  338 => 143,  335 => 142,  332 => 140,  326 => 137,  323 => 136,  320 => 135,  316 => 132,  310 => 129,  307 => 128,  304 => 127,  300 => 124,  294 => 121,  291 => 120,  288 => 119,  285 => 117,  282 => 116,  279 => 114,  273 => 111,  270 => 110,  267 => 109,  263 => 107,  260 => 106,  257 => 105,  254 => 104,  251 => 103,  248 => 102,  245 => 101,  243 => 100,  240 => 99,  234 => 96,  231 => 95,  228 => 94,  224 => 91,  218 => 88,  215 => 87,  212 => 86,  209 => 84,  203 => 81,  200 => 80,  197 => 79,  193 => 76,  187 => 74,  184 => 73,  174 => 67,  167 => 64,  162 => 63,  160 => 62,  154 => 60,  151 => 59,  138 => 47,  136 => 46,  132 => 45,  124 => 41,  118 => 39,  115 => 38,  109 => 36,  106 => 35,  100 => 33,  97 => 32,  91 => 30,  88 => 29,  82 => 27,  80 => 26,  69 => 25,  65 => 24,  49 => 12,  46 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
{#
This file is part of EC-CUBE

Copyright(c) EC-CUBE CO.,LTD. All Rights Reserved.

http://www.ec-cube.co.jp/

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.
#}
<html lang=\"{{ eccube_config.locale }}\">

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
    <meta name=\"eccube-csrf-token\" content=\"{{ csrf_token(constant('Eccube\\\\Common\\\\Constant::TOKEN_NAME')) }}\">
    <title>{{ BaseInfo.shop_name }}{% if subtitle is defined and subtitle is not empty %} / {{ subtitle }}{% elseif title is defined and title is not empty %} / {{ title }}{% endif %}</title>
    {% if Page.author is not empty %}
    <meta name=\"author\" content=\"{{ Page.author }}\">
    {% endif %}
    {% if Page.description is not empty %}
    <meta name=\"description\" content=\"{{ Page.description }}\">
    {% endif %}
    {% if Page.keyword is not empty %}
    <meta name=\"keywords\" content=\"{{ Page.keyword }}\">
    {% endif %}
    {% if Page.meta_robots is not empty %}
    <meta name=\"robots\" content=\"{{ Page.meta_robots }}\">
    {% endif %}
    {% if Page.meta_tags is not empty %}
    {{ include(template_from_string(Page.meta_tags)) }}
    {% endif %}
    <link rel=\"icon\" href=\"{{ asset('assets/img/common/favicon.ico', 'user_data') }}\">
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css\" integrity=\"sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"https://use.fontawesome.com/releases/v5.3.1/css/all.css\" integrity=\"sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css\">
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/style.css') }}\">
    {% block stylesheet %}{% endblock %}
    <script src=\"https://code.jquery.com/jquery-3.3.1.min.js\" integrity=\"sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=\" crossorigin=\"anonymous\"></script>
    <script>
        \$(function() {
            \$.ajaxSetup({
                'headers': {
                    'ECCUBE-CSRF-TOKEN': \$('meta[name=\"eccube-csrf-token\"]').attr('content')
                }
            });
        });

    </script>
    {# Layout: HEAD #}
    {% if Layout.Head %}
    {{ include('block.twig', {'Blocks': Layout.Head}) }}
    {% endif %}
    {# プラグイン用styleseetやmetatagなど #}
    {% if plugin_assets is defined %}{{ include('@admin/snippet.twig', { snippets: plugin_assets }) }}{% endif %}
    <link rel=\"stylesheet\" href=\"{{ asset('assets/css/customize.css', 'user_data') }}\">
</head>

<body id=\"page_{{ app.request.get('_route') }}\" class=\"{{ body_class|default('other_page') }}\">
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src=\"https://www.googletagmanager.com/ns.html?id=GTM-MD5LFBZ\"
height=\"0\" width=\"0\" style=\"display:none;visibility:hidden\"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    {# Layout: BODY_AFTER #}
    {% if Layout.BodyAfter %}
    {{ include('block.twig', {'Blocks': Layout.BodyAfter}) }}
    {% endif %}

    <div class=\"ec-layoutRole\">
        {# Layout: HEADER #}
        {% if Layout.Header %}
        <div class=\"ec-layoutRole__header\">
            {{ include('block.twig', {'Blocks': Layout.Header}) }}
        </div>
        {% endif %}

        {# Layout: CONTENTS_TOP #}
        {% if Layout.ContentsTop %}
        <div class=\"ec-layoutRole__contentTop\">
            {{ include('block.twig', {'Blocks': Layout.ContentsTop}) }}
        </div>
        {% endif %}

        <div class=\"ec-layoutRole__contents\">
            {# Layout: SIDE_LEFT #}
            {% if Layout.SideLeft %}
            <div class=\"ec-layoutRole__left\">
                {{ include('block.twig', {'Blocks': Layout.SideLeft}) }}
            </div>
            {% endif %}

            {% set layoutRoleMain = 'ec-layoutRole__main' %}
            {% if Layout.ColumnNum == 2 %}
            {% set layoutRoleMain = 'ec-layoutRole__mainWithColumn' %}
            {% elseif Layout.ColumnNum == 3 %}
            {% set layoutRoleMain = 'ec-layoutRole__mainBetweenColumn' %}
            {% endif %}

            <div class=\"{{ layoutRoleMain }}\">
                {# Layout: MAIN_TOP #}
                {% if Layout.MainTop %}
                <div class=\"ec-layoutRole__mainTop\">
                    {{ include('block.twig', {'Blocks': Layout.MainTop}) }}
                </div>
                {% endif %}

                {# MAIN AREA #}
                {% block main %}{% endblock %}

                {# Layout: MAIN_Bottom #}
                {% if Layout.MainBottom %}
                <div class=\"ec-layoutRole__mainBottom\">
                    {{ include('block.twig', {'Blocks': Layout.MainBottom}) }}
                </div>
                {% endif %}
            </div>

            {# Layout: SIDE_RIGHT #}
            {% if Layout.SideRight %}
            <div class=\"ec-layoutRole__right\">
                {{ include('block.twig', {'Blocks': Layout.SideRight}) }}
            </div>
            {% endif %}
        </div>

        {# Layout: CONTENTS_BOTTOM #}
        {% if Layout.ContentsBottom %}
        <div class=\"ec-layoutRole__contentBottom\">
            {{ include('block.twig', {'Blocks': Layout.ContentsBottom}) }}
        </div>
        {% endif %}

        {# Layout: CONTENTS_FOOTER #}
        {% if Layout.Footer %}
        <div class=\"ec-layoutRole__footer\">
            {{ include('block.twig', {'Blocks': Layout.Footer}) }}
        </div>
        {% endif %}
    </div><!-- ec-layoutRole -->

    <div class=\"ec-overlayRole\"></div>
    <div class=\"ec-drawerRoleClose\"><i class=\"fas fa-times\"></i></div>
    <div class=\"ec-drawerRole\">
        {# Layout: DRAWER #}
        {% if Layout.Drawer %}
        {{ include('block.twig', {'Blocks': Layout.Drawer}) }}
        {% endif %}
    </div>
    <div class=\"ec-blockTopBtn pagetop\">{{'ページトップへ'|trans}}</div>
    <script src=\"https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js\" integrity=\"sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd\" crossorigin=\"anonymous\"></script>
    <script src=\"https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js\"></script>
    {% include('@common/lang.twig') %}
    <script src=\"{{ asset('assets/js/function.js') }}\"></script>
    <script src=\"{{ asset('assets/js/eccube.js') }}\"></script>
    {% block javascript %}{% endblock %}
    {# Layout: CLOSE_BODY_BEFORE #}
    {% if Layout.CloseBodyBefore %}
    {{ include('block.twig', {'Blocks': Layout.CloseBodyBefore}) }}
    {% endif %}
    {# プラグイン用Snippet #}
    {% if plugin_snippets is defined %}
    {{ include('snippet.twig', { snippets: plugin_snippets }) }}
    {% endif %}
    <script src=\"{{ asset('assets/js/customize.js', 'user_data') }}\"></script>
</body>

</html>
", "default_frame.twig", "/home/anotherworld/www/s-africa.wine/src/Eccube/Resource/template/default/default_frame.twig");
    }
}
