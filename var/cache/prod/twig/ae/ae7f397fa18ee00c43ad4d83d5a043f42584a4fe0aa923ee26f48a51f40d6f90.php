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

/* __string_template__1a504cd9847955d74e163abb776f41267015cfc4dd9f49812a99e9946b69805a */
class __TwigTemplate_95af2e2673bfab732276b80d5823ff36a571dcc96545e542bf52603a0b95b7af extends \Eccube\Twig\Template
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
            <td>赤ワイン、白ワイン、スパークリングワイン</td>
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
        return "__string_template__1a504cd9847955d74e163abb776f41267015cfc4dd9f49812a99e9946b69805a";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__1a504cd9847955d74e163abb776f41267015cfc4dd9f49812a99e9946b69805a", "");
    }
}
