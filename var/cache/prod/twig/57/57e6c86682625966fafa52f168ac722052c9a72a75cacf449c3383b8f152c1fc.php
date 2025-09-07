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

/* __string_template__942de2bdf9fc0752728907d4e0da5a42aebf6317055b7c41473483d68f40e3b6 */
class __TwigTemplate_1d952da87e68cbb2c2c9c67493bf64edb192a9f7408c6c4b0cc4ccb6b421c7e9 extends \Eccube\Twig\Template
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
            <td>取扱いワイナリーからセレクト</td>
        </tr>
        <tr>
            <th>原産国：</th>
            <td>南アフリカ</td>
        </tr>
        <tr>
            <th>タイプ：</th>
            <td>スパークリングワイン</td>
        </tr>
        <tr>
            <th>商品：</th>
            <td>取扱商品からセレクト</td>
        </tr>
        <tr>
            <th>容量：</th>
            <td>3本/各750ml</td>
        </tr>
    </table>
</div>

<div class=\"ec-productRole__description\">
ワインの状態、飲み頃（ヴィンテージ）を重視し、ご注文ごとに旬のオススメを3本セレクトさせていただきます。<br>
好みや、品種の希望がある場合はご注文の際に備考欄に記入願います。ご希望に沿ったワインをセレクトいたします。<br>
備考欄は購入手続きページ「お届け希望日」「お届け時間帯」の下にございます。こちらへ記入ください。
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__942de2bdf9fc0752728907d4e0da5a42aebf6317055b7c41473483d68f40e3b6";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__942de2bdf9fc0752728907d4e0da5a42aebf6317055b7c41473483d68f40e3b6", "");
    }
}
