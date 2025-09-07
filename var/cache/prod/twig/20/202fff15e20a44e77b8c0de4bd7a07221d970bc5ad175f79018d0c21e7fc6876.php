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

/* __string_template__59910081ce69978a7241e525caf977bacf295b5c970e695a01b308438f604e31 */
class __TwigTemplate_404356ee2308f4ad3b6aa2d75d19c12feac9e8a80832cf20eaeeca0d0975a308 extends \Eccube\Twig\Template
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
        echo "<div class=\"productsheet__table\">   <h2><small>Keermont Estate Reserve Red</small></h2>
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
            <td>南アフリカ／ステレンボッシュ</td>
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
        echo "(32％,47％,16％,12％,6％,2％)</td>
        </tr>
        
        <tr>
            <th>アルコール度数：</th>
            <td>14.5％</td>
        </tr>
        <tr>
            <th>容量／キャップ：</th>
            <td>750ml／コルク</td>
        </tr>
        <tr>
            <th>ヴィンテージ：</th>
            <td>2013</td>
        </tr>
        <tr>
            <th>受賞／評価：</th>
            <td>[Tim Atkin Report 2019’] 2014VT：93 Point<br>
[Tim Atkin Report 2017’] 2012VT：91 Point<br>
[Platter SA 2018’] 2013VT：4.5 STAR
            </td>
        </tr>

    </table>
</div>
<div class=\"ec-productRole__description\">
土壌は、粘土が混ざった砂岩や花崗岩。畑はステレンボシュ山脈とヘルダーバーグ山脈の間の標高250-400ｍ。畑の斜面は北東や西向き。7週間かけて105トンのブドウを収穫。ブドウは優しくナチュラルにオープンタンクで発酵、その後はフレンチオークで22ヶ月熟成（新樽20％）。濾過なしで手作業で瓶詰め。<br>熟成ポテンシャル：ヴィンテージ+10-15年。<br>料理：牛ステーキ他、様々な肉料理など。<br>熟したチェリーやベリー、野いちご、フィンボスなどハーブやスパイスなどの香り。柔らかく心地良い酸味、なめらかでキメ細やかでしっかりした渋み。柔らかく程良いボディ。繊細で美しいエレガントなワイン。フィニッシュはドライで長く続く。<br>キアモントらしい酸味とキメの細やかさ、エレガントなスタイルが伝わってくる素晴らしいボルドースタイルのブレンド。
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__59910081ce69978a7241e525caf977bacf295b5c970e695a01b308438f604e31";
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
        return new Source("", "__string_template__59910081ce69978a7241e525caf977bacf295b5c970e695a01b308438f604e31", "");
    }
}
