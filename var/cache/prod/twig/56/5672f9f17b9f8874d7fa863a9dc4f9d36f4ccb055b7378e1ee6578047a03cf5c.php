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

/* Block/renderoptIn.twig */
class __TwigTemplate_dfeeecc95c8de82953714ddb00d53bd4b5121d23cda70fdf72145311dac5a046 extends \Eccube\Twig\Template
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
        // line 1
        echo "<script src=\"https://apis.google.com/js/platform.js?onload=renderOptIn\" async defer></script>
<script>
window.renderOptIn = function(){
\twindow.gapi.load('surveyoptin', function(){
\t\twindow.gapi.surveyoptin.render({
\t\t\t\"merchant_id\": 459683209,
\t\t\t\"order_id\": \"";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "id", [], "any", false, false, false, 7), "html", null, true);
        echo "\",
\t\t\t\"email\": \"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "email", [], "any", false, false, false, 8), "html", null, true);
        echo "\",
\t\t\t\"delivery_country\": \"JP\",
\t\t\t\"estimated_delivery_date\": \"";
        // line 10
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_date_modify_filter($this->env, "now", "+4day"), "Y-m-d"), "html", null, true);
        echo "\"
\t\t});
\t});
}
</script>
<!-- END GCR Opt-in Module Code -->
<!-- BEGIN GCR Language Code -->
<script>
window.___gcfg = {
\tlang: 'ja'
};
</script>";
    }

    public function getTemplateName()
    {
        return "Block/renderoptIn.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 10,  49 => 8,  45 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Block/renderoptIn.twig", "/home/anotherworld/www/s-africa.wine/app/template/default/Block/renderoptIn.twig");
    }
}
