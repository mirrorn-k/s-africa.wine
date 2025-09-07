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

/* Block/renderbadge.twig */
class __TwigTemplate_861ff46be721554c03996ba2f96d005b7f93a757a525adacc32fbdd55278d10d extends \Eccube\Twig\Template
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
        echo "<script src=\"https://apis.google.com/js/platform.js?onload=renderBadge\" async defer></script>
<script>
window.renderBadge = function(){
\tvar ratingBadgeContainer = document.createElement(\"div\");
\tdocument.body.appendChild(ratingBadgeContainer);
\twindow.gapi.load('ratingbadge', function(){
\t\twindow.gapi.ratingbadge.render(ratingBadgeContainer, {\"merchant_id\": 459683209});
\t});
}
</script>";
    }

    public function getTemplateName()
    {
        return "Block/renderbadge.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Block/renderbadge.twig", "/home/anotherworld/www/s-africa.wine/app/template/default/Block/renderbadge.twig");
    }
}
