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

/* Block/headerbanner.twig */
class __TwigTemplate_c824a14a780186e53a52020812eae8468af0c628f01edca071d53956ca95d800 extends \Eccube\Twig\Template
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
        echo "<div class=\"container padd_bt30\">
    <div class=\"row\">
        <img src=\"/html/user_data/upload/img/banner/member.png\" alt=\"\" class=\"col-12 col-md-6 m_15\"/>
        <img src=\"/html/user_data/upload/img/banner/deliveryfee.png\" alt=\"\" class=\"col-12 col-md-6 m_15\" />
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "Block/headerbanner.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "Block/headerbanner.twig", "/home/anotherworld/www/s-africa.wine/app/template/default/Block/headerbanner.twig");
    }
}
