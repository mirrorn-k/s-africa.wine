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

/* __string_template__02b4188085a18fce52fb42dcbdfccf9ac1780636534c8052429e41ed363b6e54 */
class __TwigTemplate_cad5b02ae67883fe81596ea8d98357c95e145213ccef50babc99b4a821c7e0e5 extends \Eccube\Twig\Template
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
\t<h2><small>Kanonkop Black Label Pinotage</small></h2>
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
\t\t\t<td>2020</td>
\t\t</tr>
\t\t<tr>
\t\t\t<th>受賞／評価：</th>
\t\t\t<td>[Tim Atkin Report 2019’] 2017VT：96 Point<br>
\t\t\t\t[Tim Atkin Report 2018’] 2016VT：96 Point<br>
\t\t\t\t[Tim Atkin Report 2017’] 2015VT：96 Point<br>
\t\t\t\t[Platter SA 2020’] 2017VT：5.0 STAR
\t\t\t</td>
\t\t</tr>

\t</table>
</div>
<div class=\"ec-productRole__description\">
\t樹齢62年のブッシュヴァイン（株仕立て）。灌漑なし。収穫量2.8トン/ha。収穫後はオープンなコンクリートタンクで発酵。２時間おきにピジャージュで攪拌（かくはん）。3.5日後、圧搾し、ジュースのみを採取。100％フレンチオークの新樽で１８カ月熟成。<br>プラム、ブラックチェリーなどの赤い果実の香りに香水やスパイスなどの香り。柔らかく滑らかな酸が後口まで続く。凝縮した濃厚な果実味、太くしっかりした骨格。力強さと、シルキーでなめらかな口あたり、渋みは細やかでしっかりと最後まで続く。余韻は長く、ドライなフィニッシュ。カノンコップのフラグシップにふさわしい品格を感じさせる。実際には、ワインはまだ若く、飲み頃はまだ先で、デカンタージュしてから飲むことを勧める。<br>牛肉、羊肉など赤い肉の料理。スパイシーなアジア料理など。
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__02b4188085a18fce52fb42dcbdfccf9ac1780636534c8052429e41ed363b6e54";
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
        return new Source("", "__string_template__02b4188085a18fce52fb42dcbdfccf9ac1780636534c8052429e41ed363b6e54", "");
    }
}
