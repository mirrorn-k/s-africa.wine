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

/* __string_template__1693b853a0171658a790c62ae5b7f9f797c26fb7ac91eef59ac46071873dbdcf */
class __TwigTemplate_013ee9a646cca93a2c91128ebade11ed0b7d7ba60fd6c2f6a8d71e71734fe854 extends \Eccube\Twig\Template
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
            <td>赤ワイン > フルボディ / ミディアムボディ　白ワイン > 辛口
            </td>
        </tr>
        <tr>
            <th>商品：</th>
            <td>取扱商品からセレクト</td>
        </tr>
        <tr>
            <th>容量：</th>
            <td>6本/各750ml</td>
        </tr>
    </table>
</div>

<div class=\"ec-productRole__description\">
ワインの状態、飲み頃（ヴィンテージ）を重視し、ご注文ごとに旬のオススメを６本セレクトさせていただきます。<br>
好みや、品種の希望がある場合はご注文の際に備考欄に記入願います。ご希望に沿ったワインをセレクトいたします。<br>
尚、備考欄に赤、白ワインの希望本数が無い場合は赤白各3本にてセレクトいたします。<br>
備考欄は購入手続きページ「お届け希望日」「お届け時間帯」の下にございます。こちらへ記入ください。<br>
<br>
（過去のご依頼例）<br>
・赤4本、白2本でピノタージュとソーヴィニヨンブランを１本入れてほしい<br>
・白6本でお願いします。内１本スパークリングワインを入れてください。<br>
・赤5本、白1本でお願いします。<br>
・すべて赤のフルボディで！ などなど
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__1693b853a0171658a790c62ae5b7f9f797c26fb7ac91eef59ac46071873dbdcf";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__1693b853a0171658a790c62ae5b7f9f797c26fb7ac91eef59ac46071873dbdcf", "");
    }
}
