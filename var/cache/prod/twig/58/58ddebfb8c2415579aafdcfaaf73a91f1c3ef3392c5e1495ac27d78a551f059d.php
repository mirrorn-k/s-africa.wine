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

/* __string_template__1442a7a7f715cb66394eddd7413b178ab0c527c7d2bb91181993a710078805fc */
class __TwigTemplate_cf7e269866b9e3a58f6573faa0c71685b37f870ffa14bd383e1417228fcb48ed extends \Eccube\Twig\Template
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
            <th>本体サイズ：</th>
            <td>120×28×15mm（収納時）
            </td>
        </tr>
        <tr>
            <th>梱包サイズ：</th>
            <td>153×70×30mm</td>
        </tr>
        <tr>
            <th>素材：</th>
            <td>ステンレス</td>
        </tr>
        <tr>
            <th>ネーム入れ：</th>
            <td>有料で彫刻可能<br><a href=\"https://s-africa.wine/products/detail/182\" style=\"text-decoration:underline;\">ご希望の方はこちらをご覧ください</a></td>
        </tr>
        <tr>
            <th>パッケージ：</th>
            <td>黒箱無くなり次第木箱になります（予告なく変更する場合がございます）</td>
        </tr>
    </table>
</div>
<div class=\"ec-productRole__description\"><a href=\"https://s-africa.wine/products/list?category_id=76\"><img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("/html/user_data/upload/img/products/lea2.jpg"), "html", null, true);
        echo "\" alt=\"ラギオール アン オブラック\" ></a><br><br>『ラギオール アン オブラック』の製品は、希少な動物や自然素材を使用し、手作りで製作しております。１つ１つ柄や模様、色調が異なりますが、製品の貴重な個性としてお楽しみ下さい。
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__1442a7a7f715cb66394eddd7413b178ab0c527c7d2bb91181993a710078805fc";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 25,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__1442a7a7f715cb66394eddd7413b178ab0c527c7d2bb91181993a710078805fc", "");
    }
}
