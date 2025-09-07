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

/* __string_template__5ee25d3f7f31693259826d47278d2acd3b42338719bb566d110240b11b2e359b */
class __TwigTemplate_60f00e4c1783ea28051f942ad1026a9719ef4ebe008922b7f72f823ca0a5191d extends \Eccube\Twig\Template
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
        echo "<div class=\"productsheet__table\">   <h2><small>Boekenhoutskloof Syrah</small></h2>
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
            <td>南アフリカ／スワートランド</td>
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
        echo "</td>
        </tr>
        
        <tr>
            <th>アルコール度数：</th>
            <td>14.0％</td>
        </tr>
        <tr>
            <th>容量：</th>
            <td>750ml</td>
        </tr>
        <tr>
            <th>ヴィンテージ：</th>
            <td>2016</td>
        </tr>
        <tr>
            <th>受賞／評価：</th>
            <td>[Tim Atkin Report 2018’] 2016VT：95 Point<br>
[Tim Atkin Report 2017’] 2015VT：96 Point<br>
[Tim Atkin Report 2016’] 2014VT：95 Point
            </td>
        </tr>

    </table>
</div>
<div class=\"ec-productRole__description\">
スワートランド産シラー100％。ブドウは2カ所の畑から収穫。スワートランド地区（ポルセレインバーグ80％とゴールドマイン20％）のブドウを使用している。それぞれの地区ごとに特徴が違い、ワインがより複雑な味わいになっている。ブドウは部分的に除茎し、チューリップ型のコンクリートタンクで天然発酵。発酵後は、2500Ｌの大樽と600Ｌの樽で18カ月熟成。<br>黒系ベリー、ブラックオリーブ、スミレ、スパイス、黒コショウなどの香り。柔らかくなめらかな酸味、濃厚で凝縮した果実味、細やかでしっかりした渋み、シルキーで洗練された綺麗なワイン。余韻は長く、フィニッシュはコショウ、クローブ、ナツメグなどのスパイスも感じる。バランスの良い、極めて秀逸でエレガントなローヌ・スタイルのワイン。<br>飲み頃は2020-2018年頃。
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__5ee25d3f7f31693259826d47278d2acd3b42338719bb566d110240b11b2e359b";
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
        return new Source("", "__string_template__5ee25d3f7f31693259826d47278d2acd3b42338719bb566d110240b11b2e359b", "");
    }
}
