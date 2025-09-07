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

/* __string_template__691b9fbdf0fb4b6807831c020e614775e18b03b97be3ca70d7e8d833a40faf5c */
class __TwigTemplate_8c63fbd19c54798325fe7f6dccc5ef480c3a727f1c972911be7ab6bbd1d1c280 extends \Eccube\Twig\Template
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
        echo "<div class=\"productsheet__table\">
\t<h2><small>Kanonkop Cabernet Sauvignon</small></h2>
\t<table>
\t\t<tr>
\t\t\t<th>ワイナリー：</th>
\t\t\t<td>";
        // line 7
        echo "\t\t\t\t";
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "ProductCategories", [], "any", false, false, false, 7))) {
            // line 8
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "ProductCategories", [], "any", false, false, false, 8));
            foreach ($context['_seq'] as $context["_key"] => $context["ProductCategory"]) {
                // line 9
                echo "\t\t\t\t";
                $context["Cat"] = twig_get_attribute($this->env, $this->source, $context["ProductCategory"], "Category", [], "any", false, false, false, 9);
                // line 10
                echo "\t\t\t\t";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Cat"] ?? null), "Parent", [], "any", false, false, false, 10), "id", [], "any", false, false, false, 10) == 62)) {
                    // line 11
                    echo "\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ProductCategory"], "Category", [], "any", false, false, false, 11), "path", [], "any", false, false, false, 11));
                    foreach ($context['_seq'] as $context["_key"] => $context["Category"]) {
                        // line 12
                        echo "\t\t\t\t";
                        if ((twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 12) != 62)) {
                            // line 13
                            echo "\t\t\t\t<a href=\"";
                            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
                            echo "?category_id=";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 13), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Category"], "name", [], "any", false, false, false, 13), "html", null, true);
                            echo "</a>
\t\t\t\t";
                        }
                        // line 15
                        echo "\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Category'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 16
                    echo "\t\t\t\t";
                }
                // line 17
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductCategory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "\t\t\t\t";
        }
        // line 19
        echo "\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th>原産国：</th>
\t\t\t<td>南アフリカ／ステレンボッシュ</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th>タイプ：</th>
\t\t\t<td>
\t\t\t\t";
        // line 28
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "ProductCategories", [], "any", false, false, false, 28))) {
            // line 29
            echo "\t\t\t\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "ProductCategories", [], "any", false, false, false, 29));
            foreach ($context['_seq'] as $context["_key"] => $context["ProductCategory"]) {
                // line 30
                echo "\t\t\t\t";
                $context["Cat"] = twig_get_attribute($this->env, $this->source, $context["ProductCategory"], "Category", [], "any", false, false, false, 30);
                // line 31
                echo "\t\t\t\t";
                if (((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Cat"] ?? null), "Parent", [], "any", false, false, false, 31), "id", [], "any", false, false, false, 31) == 27) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Cat"] ?? null), "Parent", [], "any", false, false, false, 31), "id", [], "any", false, false, false, 31) == 28)) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Cat"] ?? null), "Parent", [], "any", false, false, false, 31), "id", [], "any", false, false, false, 31) == 29)) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Cat"] ?? null), "Parent", [], "any", false, false, false, 31), "id", [], "any", false, false, false, 31) == 39))) {
                    // line 32
                    echo "\t\t\t\t";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ProductCategory"], "Category", [], "any", false, false, false, 32), "path", [], "any", false, false, false, 32));
                    $context['loop'] = [
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    ];
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["Category"]) {
                        // line 33
                        echo "\t\t\t\t<a href=\"";
                        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
                        echo "?category_id=";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 33), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Category"], "name", [], "any", false, false, false, 33), "html", null, true);
                        echo "</a>";
                        // line 34
                        if ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 34) == false)) {
                            echo "<span>＞</span>";
                        }
                        // line 35
                        echo "\t\t\t\t";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Category'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 36
                    echo "\t\t\t\t";
                }
                // line 37
                echo "\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductCategory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "\t\t\t\t";
        }
        // line 39
        echo "\t\t\t</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th>主要品種：</th>
\t\t\t<td>";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "search_word", [], "any", false, false, false, 43), "html", null, true);
        echo " 100％</td>
\t\t</tr>

\t\t<tr>
\t\t\t<th>アルコール度数：</th>
\t\t\t<td>15.0％未満</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th>容量：</th>
\t\t\t<td>750ml</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th>ヴィンテージ：</th>
\t\t\t<td>2018</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th>受賞／評価：</th>
\t\t\t<td>[Tim Atkin Report 2019’] 2015VT：94 Point<br>
\t\t\t\t[Platter SA 2020’] 2015VT：5.0 STAR
\t\t\t</td>
\t\t</tr>

\t</table>
</div>
<div class=\"ec-productRole__description\">
\t温かく乾燥した冬で収穫時期は暑かった。収穫量4トン（2750L)/ha。樹齢：平均26年。花崗岩土壌。オープンタンクで29度で発酵。ピジャージュは2時間おきに。225Lのフレンチオークで24ヶ月熟成（新樽60％、２年目樽40％）。<br>深いルビー色。カシス、黒系果実、ブルーベリー、紅茶の葉、タバコ、鉛筆の芯、ビターチョコレート、ハーブ、エスプレッソ、オーク由来のスパイスなど複雑な香り。フレッシュで比較的豊かな酸味、凝縮し濃厚な果実味、上品で洗練された渋み、しっかりと太いボディ。なめらかでシルキーな味わいでクラシックなエレガント・スタイル。深く長い余韻。濃厚でしっかりしたワインだが、酸味もあるのでワインは決して重たく感じない。酸味、果実味、ボディ、オークの風味、余韻など、全ての要素がマックスでバランス良く保たれている。カベルネソーヴィニョン100％のワインとしては南アフリカ最高峰かつ至福の1本と呼べるだろう。これまでの経験でも、ほぼ「完璧」と言っても良いくらい、最も洗練された過去最高ヴィンテージ（当社バイヤー談）。価格パフォーマンスも優れているので、是非飲んでほしい1本。長期熟成型で早めの抜栓かデキャンターがおすすめ。<br>ビーフステーキ、ラムステーキ、牛肉料理など。
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__691b9fbdf0fb4b6807831c020e614775e18b03b97be3ca70d7e8d833a40faf5c";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 43,  174 => 39,  171 => 38,  165 => 37,  162 => 36,  148 => 35,  144 => 34,  136 => 33,  118 => 32,  115 => 31,  112 => 30,  107 => 29,  105 => 28,  94 => 19,  91 => 18,  85 => 17,  82 => 16,  76 => 15,  66 => 13,  63 => 12,  58 => 11,  55 => 10,  52 => 9,  47 => 8,  44 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__691b9fbdf0fb4b6807831c020e614775e18b03b97be3ca70d7e8d833a40faf5c", "");
    }
}
