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

/* @admin/Setting/Shop/shop_master.twig */
class __TwigTemplate_0e8e4d2b9c6dc3dbe7ca60cf75dde8f6fa71e2ff93b745e764e7a1f0bbf1544e extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'sub_title' => [$this, 'block_sub_title'],
            'javascript' => [$this, 'block_javascript'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return "@admin/default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        $context["menus"] = [0 => "setting", 1 => "shop", 2 => "shop_index"];
        // line 18
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Setting/Shop/shop_master.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.shop_setting"), "html", null, true);
    }

    // line 16
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop"), "html", null, true);
    }

    // line 20
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "    <script src=\"//yubinbango.github.io/yubinbango/yubinbango.js\" charset=\"UTF-8\"></script>
";
    }

    // line 24
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 25
        echo "    <form name=\"form1\" role=\"form\" class=\"form-horizontal h-adr\" id=\"point_form\" method=\"post\" action=\"\">
        <span class=\"p-country-name\" style=\"display:none;\">Japan</span>

        ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, false, 28), 'widget');
        echo "

        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\"><span>";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.shop.base_info"), "html", null, true);
        echo "</span></div>
                        <div id=\"ex-shop-basic\" class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\"><span>";
        // line 37
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.company_name"), "html", null, true);
        echo "</span></div>
                                <div class=\"col mb-2\">
                                    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "company_name", [], "any", false, false, false, 39), 'widget');
        echo "
                                    ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "company_name", [], "any", false, false, false, 40), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\"><span>";
        // line 44
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.company_name_kana"), "html", null, true);
        echo "</span></div>
                                <div class=\"col mb-2\">
                                    ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "company_kana", [], "any", false, false, false, 46), 'widget');
        echo "
                                    ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "company_kana", [], "any", false, false, false, 47), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\"><span>";
        // line 51
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.shop.shop_name"), "html", null, true);
        echo "</span><span class=\"badge badge-primary ml-1\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span></div>
                                <div class=\"col mb-2\">
                                    ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "shop_name", [], "any", false, false, false, 53), 'widget');
        echo "
                                    ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "shop_name", [], "any", false, false, false, 54), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\"><span>";
        // line 58
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.shop.shop_name_kana"), "html", null, true);
        echo "</span></div>
                                <div class=\"col mb-2\">
                                    ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "shop_kana", [], "any", false, false, false, 60), 'widget');
        echo "
                                    ";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "shop_kana", [], "any", false, false, false, 61), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\"><span>";
        // line 65
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.shop.shop_name_en"), "html", null, true);
        echo "</span></div>
                                <div class=\"col mb-2\">
                                    ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "shop_name_eng", [], "any", false, false, false, 67), 'widget');
        echo "
                                    ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "shop_name_eng", [], "any", false, false, false, 68), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\"><span>";
        // line 72
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.address"), "html", null, true);
        echo "</span></div>
                                <div class=\"col mb-2\">
                                    <div class=\"mb-2\">
                                        <div class=\"row justify-content-start\">
                                            <div class=\"col-auto text-center pr-0\"><span class=\"align-middle\">";
        // line 76
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.postal_symbol"), "html", null, true);
        echo "</span></div>
                                            <div class=\"col-2\">
                                                ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "postal_code", [], "any", false, false, false, 78), 'widget');
        echo "
                                            </div>
                                            ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "postal_code", [], "any", false, false, false, 80), 'errors');
        echo "
                                        </div>
                                    </div>
                                    <div class=\"mb-2\">
                                        <div class=\"row justify-content-start\">
                                            <div class=\"col-3\">
                                                ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, false, 86), "pref", [], "any", false, false, false, 86), 'widget');
        echo "
                                                ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, false, 87), "pref", [], "any", false, false, false, 87), 'errors');
        echo "
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"mb-2\">
                                        ";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, false, 92), "addr01", [], "any", false, false, false, 92), 'widget');
        echo "
                                        ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, false, 93), "addr01", [], "any", false, false, false, 93), 'errors');
        echo "
                                    </div>
                                    <div class=\"mb-2\">
                                        ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, false, 96), "addr02", [], "any", false, false, false, 96), 'widget');
        echo "
                                        ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, false, 97), "addr02", [], "any", false, false, false, 97), 'errors');
        echo "
                                    </div>
                                </div>
                            </div>
                            <div class=\"row mb-2\">
                                <div class=\"col-3\"><span>";
        // line 102
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.phone_number"), "html", null, true);
        echo "</span></div>
                                <div class=\"col\">
                                    ";
        // line 104
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "phone_number", [], "any", false, false, false, 104), 'widget');
        echo "
                                    ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "phone_number", [], "any", false, false, false, 105), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"row mb-3\">
                                <div class=\"col-3\"><span>";
        // line 109
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.shop.business_hour"), "html", null, true);
        echo "</span></div>
                                <div class=\"col mb-2\">
                                    ";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "business_hour", [], "any", false, false, false, 111), 'widget');
        echo "
                                    ";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "business_hour", [], "any", false, false, false, 112), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"row mb-3\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.shop.shop.email_from"), "html", null, true);
        echo "\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.shop.email_from"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ml-1\"></i></div>
                                    <span class=\"badge badge-primary ml-1\">";
        // line 118
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span>
                                </div>
                                <div class=\"col mb-2\">
                                    ";
        // line 121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email01", [], "any", false, false, false, 121), 'widget');
        echo "
                                    ";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email01", [], "any", false, false, false, 122), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"row mb-3\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.shop.shop.email_for_inquiries"), "html", null, true);
        echo "\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.shop.email_for_inquiries"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ml-1\"></i></div>
                                    <span class=\"badge badge-primary ml-1\">";
        // line 128
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span>
                                </div>
                                <div class=\"col mb-2\">
                                    ";
        // line 131
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email02", [], "any", false, false, false, 131), 'widget');
        echo "
                                    ";
        // line 132
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email02", [], "any", false, false, false, 132), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"row mb-3\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.shop.shop.email_reply_to"), "html", null, true);
        echo "\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.shop.email_reply_to"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ml-1\"></i></div>
                                    <span class=\"badge badge-primary ml-1\">";
        // line 138
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span>
                                </div>
                                <div class=\"col mb-2\">
                                    ";
        // line 141
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email03", [], "any", false, false, false, 141), 'widget');
        echo "
                                    ";
        // line 142
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email03", [], "any", false, false, false, 142), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"row mb-3\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.shop.shop.email_return_path"), "html", null, true);
        echo "\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.shop.email_return_path"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ml-1\"></i></div>
                                    <span class=\"badge badge-primary ml-1\">";
        // line 148
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span>
                                </div>
                                <div class=\"col mb-2\">
                                    ";
        // line 151
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email04", [], "any", false, false, false, 151), 'widget');
        echo "
                                    ";
        // line 152
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email04", [], "any", false, false, false, 152), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.shop.shop.good_traded"), "html", null, true);
        echo "\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.shop.good_traded"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ml-1\"></i></div>
                                </div>
                                <div class=\"col mb-2\">
                                    ";
        // line 160
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "good_traded", [], "any", false, false, false, 160), 'widget');
        echo "
                                    ";
        // line 161
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "good_traded", [], "any", false, false, false, 161), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.shop.shop.message"), "html", null, true);
        echo "\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.shop.message"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ml-1\"></i></div>
                                </div>
                                <div class=\"col mb-2\">
                                    ";
        // line 169
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "message", [], "any", false, false, false, 169), 'widget');
        echo "
                                    ";
        // line 170
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "message", [], "any", false, false, false, 170), 'errors');
        echo "
                                </div>
                            </div>
                            ";
        // line 174
        echo "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 174), "eccube_form_options", [], "any", false, false, false, 174), "auto_render", [], "any", false, false, false, 174)) {
                // line 175
                echo "                                ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 175), "eccube_form_options", [], "any", false, false, false, 175), "form_theme", [], "any", false, false, false, 175)) {
                    // line 176
                    echo "                                    ";
                    $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($context["f"], [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 176), "eccube_form_options", [], "any", false, false, false, 176), "form_theme", [], "any", false, false, false, 176)], true);
                    // line 177
                    echo "                                    ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'row');
                    echo "
                                ";
                } else {
                    // line 179
                    echo "                                    <div class=\"row\">
                                        <div class=\"col-3\"><span>";
                    // line 180
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 180), "label", [], "any", false, false, false, 180)), "html", null, true);
                    echo "</span></div>
                                        <div class=\"col mb-2\">
                                            ";
                    // line 182
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'widget');
                    echo "
                                            ";
                    // line 183
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'errors');
                    echo "
                                        </div>
                                    </div>
                                ";
                }
                // line 187
                echo "                            ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 188
        echo "                        </div>
                    </div>
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\"><span>";
        // line 191
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.shop.option_delivery_fee"), "html", null, true);
        echo "</span></div>
                        <div id=\"ex-shop-delivery\" class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 195
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.shop.shop.option_delivery_fee_free_amount"), "html", null, true);
        echo "\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.shop.option_delivery_fee_free_amount"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ml-1\"></i></div>
                                </div>
                                <div class=\"col-4 mb-2\">
                                    ";
        // line 198
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delivery_free_amount", [], "any", false, false, false, 198), 'widget');
        echo "
                                    ";
        // line 199
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delivery_free_amount", [], "any", false, false, false, 199), 'errors');
        echo "
                                </div>
                                <div class=\"col\"></div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.shop.shop.option_delivery_fee_free_quantity"), "html", null, true);
        echo "\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.shop.option_delivery_fee_free_quantity"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ml-1\"></i></div>
                                </div>
                                <div class=\"col-4 mb-2\">
                                    ";
        // line 208
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delivery_free_quantity", [], "any", false, false, false, 208), 'widget');
        echo "
                                    ";
        // line 209
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "delivery_free_quantity", [], "any", false, false, false, 209), 'errors');
        echo "
                                </div>
                                <div class=\"col\"></div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.shop.shop.option_delivery_fee_by_product"), "html", null, true);
        echo "\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.shop.option_delivery_fee_by_product"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ml-1\"></i></div>
                                </div>
                                <div class=\"col mb-2\">
                                    ";
        // line 218
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "option_product_delivery_fee", [], "any", false, false, false, 218), 'widget');
        echo "
                                    ";
        // line 219
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "option_product_delivery_fee", [], "any", false, false, false, 219), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\"><span>";
        // line 225
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.shop.option_customer"), "html", null, true);
        echo "</span></div>
                        <div id=\"ex-shop-customer\" class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.shop.shop.option_customer_activate"), "html", null, true);
        echo "\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.shop.option_customer_activate"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ml-1\"></i></div>
                                </div>
                                <div class=\"col mb-2\">
                                    ";
        // line 232
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "option_customer_activate", [], "any", false, false, false, 232), 'widget');
        echo "
                                    ";
        // line 233
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "option_customer_activate", [], "any", false, false, false, 233), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <span>";
        // line 238
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.shop.option_mypage_order_status_display"), "html", null, true);
        echo "</span>
                                </div>
                                <div class=\"col mb-2\">
                                    ";
        // line 241
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "option_mypage_order_status_display", [], "any", false, false, false, 241), 'widget');
        echo "
                                    ";
        // line 242
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "option_mypage_order_status_display", [], "any", false, false, false, 242), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.shop.shop.option_favorite_product"), "html", null, true);
        echo "\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.shop.option_favorite_product"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ml-1\"></i></div>
                                </div>
                                <div class=\"col mb-2\">
                                    ";
        // line 250
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "option_favorite_product", [], "any", false, false, false, 250), 'widget');
        echo "
                                    ";
        // line 251
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "option_favorite_product", [], "any", false, false, false, 251), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.shop.shop.option_remember_me"), "html", null, true);
        echo "\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.shop.option_remember_me"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ml-1\"></i></div>
                                </div>
                                <div class=\"col mb-2\">
                                    ";
        // line 259
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "option_remember_me", [], "any", false, false, false, 259), 'widget');
        echo "
                                    ";
        // line 260
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "option_remember_me", [], "any", false, false, false, 260), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\"><span>";
        // line 266
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.shop.option_product"), "html", null, true);
        echo "</span></div>
                        <div id=\"ex-shop-product\" class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\"><span>";
        // line 269
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.shop.nostock_hidden"), "html", null, true);
        echo "</span></div>
                                <div class=\"col mb-2\">
                                    ";
        // line 271
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "option_nostock_hidden", [], "any", false, false, false, 271), 'widget');
        echo "
                                    ";
        // line 272
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "option_nostock_hidden", [], "any", false, false, false, 272), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\"><span>";
        // line 278
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.shop.option_tax"), "html", null, true);
        echo "</span></div>
                        <div id=\"ex-shop-tax\" class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 282
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.shop.shop.option_product_tax"), "html", null, true);
        echo "\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.shop.option_product_tax"), "html", null, true);
        echo "</span></div>
                                </div>
                                <div class=\"col mb-2\">
                                    ";
        // line 285
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "option_product_tax_rule", [], "any", false, false, false, 285), 'widget');
        echo "
                                    ";
        // line 286
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "option_product_tax_rule", [], "any", false, false, false, 286), 'errors');
        echo "
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\"><span>";
        // line 292
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.shop.option_point"), "html", null, true);
        echo "</span></div>
                        <div id=\"ex-shop-point\" class=\"card-body\">
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 296
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.shop.shop.option_point_enabled"), "html", null, true);
        echo "\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.shop.option_point_enabled"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ml-1\"></i></div>
                                </div>
                                <div class=\"col mb-2\">
                                    ";
        // line 299
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "option_point", [], "any", false, false, false, 299), 'widget');
        echo "
                                    ";
        // line 300
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "option_point", [], "any", false, false, false, 300), 'errors');
        echo "
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 305
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.shop.shop.option_point_rate"), "html", null, true);
        echo "\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.shop.option_point_rate"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ml-1\"></i></div>
                                </div>
                                <div class=\"col mb-2\">
                                    <div class=\"input-group col-2 pl-0\">
                                        <div class=\"input-group\">
                                            ";
        // line 310
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "basic_point_rate", [], "any", false, false, false, 310), 'widget');
        echo "
                                            <div class=\"input-group-append\">
                                                <span class=\"input-group-text\">%</span>
                                            </div>
                                            ";
        // line 314
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "basic_point_rate", [], "any", false, false, false, 314), 'errors');
        echo "
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=\"row\">
                                <div class=\"col-3\">
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 321
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.setting.shop.shop.option_point_conversion_rate"), "html", null, true);
        echo "\"><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.setting.shop.shop.option_point_conversion_rate"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ml-1\"></i></div>
                                </div>
                                <div class=\"col mb-2\">
                                    <div class=\"input-group col-2 pl-0\">
                                        <div class=\"input-group\">
                                            ";
        // line 326
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "point_conversion_rate", [], "any", false, false, false, 326), 'widget');
        echo "
                                            ";
        // line 327
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "point_conversion_rate", [], "any", false, false, false, 327), 'errors');
        echo "
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"c-conversionArea\">
            <div class=\"c-conversionArea__container\">
                <div class=\"row justify-content-between align-items-center\">
                    <div class=\"col-6\">
                        <div class=\"c-conversionArea__leftBlockItem\">
                        </div>
                    </div>
                    <div id=\"ex-conversion-action\" class=\"col-6\">
                        <div class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                <button class=\"btn btn-ec-conversion px-5\" type=\"submit\">";
        // line 347
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.registration"), "html", null, true);
        echo "</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
";
    }

    public function getTemplateName()
    {
        return "@admin/Setting/Shop/shop_master.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  758 => 347,  735 => 327,  731 => 326,  721 => 321,  711 => 314,  704 => 310,  694 => 305,  686 => 300,  682 => 299,  674 => 296,  667 => 292,  658 => 286,  654 => 285,  646 => 282,  639 => 278,  630 => 272,  626 => 271,  621 => 269,  615 => 266,  606 => 260,  602 => 259,  594 => 256,  586 => 251,  582 => 250,  574 => 247,  566 => 242,  562 => 241,  556 => 238,  548 => 233,  544 => 232,  536 => 229,  529 => 225,  520 => 219,  516 => 218,  508 => 215,  499 => 209,  495 => 208,  487 => 205,  478 => 199,  474 => 198,  466 => 195,  459 => 191,  454 => 188,  447 => 187,  440 => 183,  436 => 182,  431 => 180,  428 => 179,  422 => 177,  419 => 176,  416 => 175,  410 => 174,  404 => 170,  400 => 169,  392 => 166,  384 => 161,  380 => 160,  372 => 157,  364 => 152,  360 => 151,  354 => 148,  348 => 147,  340 => 142,  336 => 141,  330 => 138,  324 => 137,  316 => 132,  312 => 131,  306 => 128,  300 => 127,  292 => 122,  288 => 121,  282 => 118,  276 => 117,  268 => 112,  264 => 111,  259 => 109,  252 => 105,  248 => 104,  243 => 102,  235 => 97,  231 => 96,  225 => 93,  221 => 92,  213 => 87,  209 => 86,  200 => 80,  195 => 78,  190 => 76,  183 => 72,  176 => 68,  172 => 67,  167 => 65,  160 => 61,  156 => 60,  151 => 58,  144 => 54,  140 => 53,  133 => 51,  126 => 47,  122 => 46,  117 => 44,  110 => 40,  106 => 39,  101 => 37,  95 => 34,  86 => 28,  81 => 25,  77 => 24,  72 => 21,  68 => 20,  61 => 16,  54 => 15,  49 => 11,  47 => 18,  45 => 13,  38 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Setting/Shop/shop_master.twig", "/home/anotherworld/www/s-africa.wine/src/Eccube/Resource/template/admin/Setting/Shop/shop_master.twig");
    }
}
