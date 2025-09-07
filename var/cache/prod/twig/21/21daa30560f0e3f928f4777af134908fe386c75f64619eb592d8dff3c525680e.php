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

/* Block/globalsitetag.twig */
class __TwigTemplate_4440becb35a930c5f9b88fc65a7128aeb3b83c2c85f1aba20e8214c6275ddcbb extends \Eccube\Twig\Template
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
        echo "<!-- Global site tag (gtag.js) - Google Ads: 10792559833 -->
<script async src=\"https://www.googletagmanager.com/gtag/js?id=AW-10792559833\"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'AW-10792559833');
</script>";
    }

    public function getTemplateName()
    {
        return "Block/globalsitetag.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Block/globalsitetag.twig", "/home/anotherworld/www/s-africa.wine/app/template/default/Block/globalsitetag.twig");
    }
}
