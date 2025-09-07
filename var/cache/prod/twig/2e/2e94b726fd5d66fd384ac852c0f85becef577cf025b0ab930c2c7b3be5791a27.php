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

/* __string_template__d29448b6dfbe23536588222a91506aebb8c4744d0c3b7ee57d6ddbdfdb754f62 */
class __TwigTemplate_bc5ce7c1827b22acd7ccc4e303fadd1b3c1a3608efc4a4f11de14ed1da7d42ec extends \Eccube\Twig\Template
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
        echo "sdfgh";
    }

    public function getTemplateName()
    {
        return "__string_template__d29448b6dfbe23536588222a91506aebb8c4744d0c3b7ee57d6ddbdfdb754f62";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__d29448b6dfbe23536588222a91506aebb8c4744d0c3b7ee57d6ddbdfdb754f62", "");
    }
}
