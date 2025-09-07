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

/* __string_template__312057196a5812f3a2f43244e18eaa07599e19b00dc495feaa8a15660f438539 */
class __TwigTemplate_5f7875de270fc22d5c4cfb114f2e5bbb4b5a14aa29229c54c3598d7c4a46bda7 extends \Eccube\Twig\Template
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
        echo "<div class=\"productsheet__table\">   <h2><small>Stellar Organics Sparkling</small></h2>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__312057196a5812f3a2f43244e18eaa07599e19b00dc495feaa8a15660f438539";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__312057196a5812f3a2f43244e18eaa07599e19b00dc495feaa8a15660f438539", "");
    }
}
