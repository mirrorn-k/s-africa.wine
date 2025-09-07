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

/* __string_template__6adb5e9cd16049bf2e662426095afade3be3f652f1f178e3334e27c6fa205d90 */
class __TwigTemplate_a6d1ef50d109802034b7f9a27f0b8f722b5aa8fa630393ddbbed51def5c53603 extends \Eccube\Twig\Template
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
        echo "<div class=\"productsheet__table\">   <h2><small>Ataraxia Serenity</small></h2>
    <table>
        <tr>
            <th>ワイナリー：</th>
            <td>";
        // line 6
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "ProductCategories", [], "any", false, false, false, 6))) {
            // line 7
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "ProductCategories", [], "any", false, false, false, 7));
            foreach ($context['_seq'] as $context["_key"] => $context["ProductCategory"]) {
                // line 8
                echo "    ";
                $context["Cat"] = twig_get_attribute($this->env, $this->source, $context["ProductCategory"], "Category", [], "any", false, false, false, 8);
                // line 9
                echo "        ";
                if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Cat"] ?? null), "Parent", [], "any", false, false, false, 9), "id", [], "any", false, false, false, 9) == 62)) {
                    // line 10
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ProductCategory"], "Category", [], "any", false, false, false, 10), "path", [], "any", false, false, false, 10));
                    foreach ($context['_seq'] as $context["_key"] => $context["Category"]) {
                        // line 11
                        echo "                ";
                        if ((twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 11) != 62)) {
                            // line 12
                            echo "                    <a href=\"";
                            echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
                            echo "?category_id=";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 12), "html", null, true);
                            echo "\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Category"], "name", [], "any", false, false, false, 12), "html", null, true);
                            echo "</a>
                ";
                        }
                        // line 14
                        echo "            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Category'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 15
                    echo "        ";
                }
                // line 16
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductCategory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 18
        echo "            </td>
        </tr>
        <tr>
            <th>原産国：</th>
            <td>南アフリカ／ウェスタンケープ</td>
        </tr>
        <tr>
            <th>タイプ：</th>
            <td>
";
        // line 27
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "ProductCategories", [], "any", false, false, false, 27))) {
            // line 28
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "ProductCategories", [], "any", false, false, false, 28));
            foreach ($context['_seq'] as $context["_key"] => $context["ProductCategory"]) {
                // line 29
                echo "    ";
                $context["Cat"] = twig_get_attribute($this->env, $this->source, $context["ProductCategory"], "Category", [], "any", false, false, false, 29);
                // line 30
                echo "        ";
                if (((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Cat"] ?? null), "Parent", [], "any", false, false, false, 30), "id", [], "any", false, false, false, 30) == 27) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Cat"] ?? null), "Parent", [], "any", false, false, false, 30), "id", [], "any", false, false, false, 30) == 28)) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Cat"] ?? null), "Parent", [], "any", false, false, false, 30), "id", [], "any", false, false, false, 30) == 29)) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Cat"] ?? null), "Parent", [], "any", false, false, false, 30), "id", [], "any", false, false, false, 30) == 39))) {
                    // line 31
                    echo "            ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["ProductCategory"], "Category", [], "any", false, false, false, 31), "path", [], "any", false, false, false, 31));
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
                        // line 32
                        echo "                <a href=\"";
                        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("product_list");
                        echo "?category_id=";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Category"], "id", [], "any", false, false, false, 32), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Category"], "name", [], "any", false, false, false, 32), "html", null, true);
                        echo "</a>";
                        // line 33
                        if ((twig_get_attribute($this->env, $this->source, $context["loop"], "last", [], "any", false, false, false, 33) == false)) {
                            echo "<span>＞</span>";
                        }
                        // line 34
                        echo "            ";
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
                    // line 35
                    echo "        ";
                }
                // line 36
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ProductCategory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 38
        echo "            </td>
        </tr>
        <tr>
            <th>主要品種：</th>
            <td>";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Product"] ?? null), "search_word", [], "any", false, false, false, 42), "html", null, true);
        echo "(60%,30%,10%)</td>
        </tr>
        
        <tr>
            <th>アルコール度数：</th>
            <td>14.3％未満</td>
        </tr>
        <tr>
            <th>容量：</th>
            <td>750ml</td>
        </tr>
        <tr>
            <th>ヴィンテージ：</th>
            <td>2019</td>
        </tr>
        <tr>
            <th>受賞／評価：</th>
            <td>\t[Tim Atkin Report 2020’] 2018VT：93 Point<br>
[Tim Atkin Report 2019’] 2017VT：92 Point<br>
[Parker Wine Advocate] 2015VT：91 Point<br>
            </td>
        </tr>

    </table>
</div>
<div class=\"ec-productRole__description\">
ブドウの生育期間のほとんどは非常に乾燥した年だったが、収穫前の数ヵ月は温暖な気温だった。乾燥した気候によりブドウの粒は小さく凝縮し、絶妙なバランスと洗練されたブドウが出来た。ブドウは、その地域のテロワールの魅力を表現することを目的に、畑での収穫時から厳選している。<br>このワインは、ピノノワールとサンソー、冷涼地域で育ったピノタージュという正に南アフリカらしいブドウ品種の親子ブレンドで、優しいスタイルのワインに仕上げています。このワインで大切なことは、どのような品種の構成で出来ているということではなく、ワインのスタイルにあります。ブドウの品種というのは、あくまでもテロワールを表現する手段であって、ワインそのものを表現するものではないという考えです。<br>収穫後は3品種ともオープンタンクに入れ、7-10日間のコールドマセラシオンを経て発酵。発酵後は品種ごとにプレスして225Lのフレンチオークでマロラクティック発酵を経て11ヵ月熟成（新樽20％、2年目樽80％）。ブレンドして瓶詰。醸造家ケヴィンが、このワインは、主張するようなタイプのワインではなく、優しく「ささやく」ようなスタイルのワインと表現している。<br>彼は、このワインは、ボルドーブレンドでもなく、ローヌブレンドでもない、これこそがピノタージュとその親品種をブレンドした真の南アフリカらしいブレンドと呼んでいる。実際このワインは、抑制的で落ち着き、緊張感もあり、非常に友好的で、面白く、魅力的である。レッドベリー、赤系果実、スパイスなど、繊細かつ活き活きとした豊かな香り。優しく心地良い酸、なめらかでチャーミングな果実味とミネラル。 洗練された渋み、柔らかいボディ、バランス良く、エレガント。三つの品種がケヴィンのセンスによって見事に調和しチャーミングなワインに仕上がっている。個性的かつストーリー的にも面白いワイン。<br>料理：鶏肉、鴨肉、豚肉、牛肉、ジビエ、和食、焼鳥、オイスターソースを使った中華料理など。
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__6adb5e9cd16049bf2e662426095afade3be3f652f1f178e3334e27c6fa205d90";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 42,  168 => 38,  161 => 36,  158 => 35,  144 => 34,  140 => 33,  132 => 32,  114 => 31,  111 => 30,  108 => 29,  103 => 28,  101 => 27,  90 => 18,  83 => 16,  80 => 15,  74 => 14,  64 => 12,  61 => 11,  56 => 10,  53 => 9,  50 => 8,  45 => 7,  43 => 6,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "__string_template__6adb5e9cd16049bf2e662426095afade3be3f652f1f178e3334e27c6fa205d90", "");
    }
}
