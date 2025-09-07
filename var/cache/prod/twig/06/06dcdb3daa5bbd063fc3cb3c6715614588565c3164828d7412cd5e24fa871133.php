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

/* Block/conversion.twig */
class __TwigTemplate_f909468f7743f0f10fef624d3f7d030ef5836a8059317f25cc88016885969acc extends \Eccube\Twig\Template
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
        echo "<!-- Event snippet for 商品購入 conversion page -->
<script>
gtag('event', 'conversion', {
    'send_to': 'AW-10792559833/XfVfCPOf0v4CENnJpZoo',
    'transaction_id': ''
});
</script>";
    }

    public function getTemplateName()
    {
        return "Block/conversion.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Block/conversion.twig", "/home/anotherworld/www/s-africa.wine/app/template/default/Block/conversion.twig");
    }
}
