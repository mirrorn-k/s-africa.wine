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

/* __string_template__c5744e1c3cdc31d7db547cb36ee6dc47297a04191941ec5fae7baef9fea8b089 */
class __TwigTemplate_8849f6b58d68e765dcdd8225aff34624b129893a656535511e5106678d9d40b9 extends \Eccube\Twig\Template
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
        echo "<div class=\"productsheet__table\">    <table>
        <tr>
            <th>ワイナリー：</th>
            <td>取扱いワイナリーからセレクト
            </td>
        </tr>
        <tr>
            <th>原産国：</th>
            <td>南アフリカ</td>
        </tr>
        <tr>
            <th>タイプ：</th>
            <td>スパークリング > 白 > 辛口
            </td>
        </tr>
        <tr>
            <th>商品：</th>
            <td>取扱商品からセレクト</td>
        </tr>
        <tr>
            <th>容量：</th>
            <td>5本/各750ml</td>
        </tr>
    </table>
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__c5744e1c3cdc31d7db547cb36ee6dc47297a04191941ec5fae7baef9fea8b089";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__c5744e1c3cdc31d7db547cb36ee6dc47297a04191941ec5fae7baef9fea8b089", "");
    }
}
