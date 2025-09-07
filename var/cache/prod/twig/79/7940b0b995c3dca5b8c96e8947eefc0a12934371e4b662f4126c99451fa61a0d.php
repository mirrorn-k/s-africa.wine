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

/* @GmoEpsilon4/default/Shopping/confirm_button.twig */
class __TwigTemplate_9ae888673b67db8771fd74ff992c6b945dba59135aaedd71a82e7ab8334d8046 extends \Eccube\Twig\Template
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
        echo "<script>
    \$(function () {
        \$('button.ec-blockBtn--action').text('次へ');
    });
</script>
";
    }

    public function getTemplateName()
    {
        return "@GmoEpsilon4/default/Shopping/confirm_button.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@GmoEpsilon4/default/Shopping/confirm_button.twig", "/home/anotherworld/www/s-africa.wine/app/Plugin/GmoEpsilon4/Resource/template/default/Shopping/confirm_button.twig");
    }
}
