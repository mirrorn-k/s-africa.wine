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

/* __string_template__20b96bfc2ca290005f1df31c5d436fb32b80033314179d3c253edd385203b9fa */
class __TwigTemplate_1b6e91ad5193493743114485819d24769f7bebcb85de9d0e10dcc85ab8d4a82b extends \Eccube\Twig\Template
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
        echo "<div class=\"productsheet__table\">   <h2><small>Reyneke Biodynamic Sauvignon Blanc</small></h2>
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
        echo " 100％</td>
        </tr>
        
        <tr>
            <th>アルコール度数：</th>
            <td>13.0％未満</td>
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
            <th>商品特徴：</th>
            <td>同社の自社畑のバイオダイナミック＆オーガニック・レンジ</td>
        </tr>
        <tr>
            <th>受賞／評価：</th>
            <td>[Tim Atkin Report 2019’] 2018VT：93 Point<br>
[Platter SA 2020’] 2018VT：4.0 STAR
            </td>
        </tr>

    </table>
</div>
<div class=\"ec-productRole__description\">
自社畑のバイオダイナミック＆オーガニック農法で育てたブドウを使用。先に収穫したブドウは除梗し、後から収穫したブドウは全房でプレス。古いフレンチオークに移して天然発酵。そのまま澱が入ったまま7か月熟成（シュール・リー製法）。<br>グレープフルーツ、パッションフルーツなど活き活きした南国系果実の香りに草や大葉などの青い葉の香り。フレッシュな酸、凝縮し密度の詰まった果実味、ミネラルに富み、フリンティな感じもある。ソーヴィニョンブランらしい心地良いグリーンノートや苦みもある。ボディ、厚みは程良く、古い樽の風味が丁度良い。クリーンでナチュラルなピュア・テイスト、エレガントでバランスも良く出来ている。瑞々しい余韻が心地よい。ステレンボシュらしい温かい果実の風味に溢れたフルーティなワイン。最初は冷え気味の温度でフレッシュさを楽しみ、グラスの中で徐々に開かせ温度を上げていくとコクや複雑味が出てきて表情も変わる。今飲んでも美味しく、5年程度熟成してからも良い。<br>サーモン、シーフードマリネ、蒸し鶏、コンソメスープ、オイル系やシーフードのパスタ、イカやエビの天ぷら、ホワイトアスパラなど。
</div>";
    }

    public function getTemplateName()
    {
        return "__string_template__20b96bfc2ca290005f1df31c5d436fb32b80033314179d3c253edd385203b9fa";
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
        return new Source("", "__string_template__20b96bfc2ca290005f1df31c5d436fb32b80033314179d3c253edd385203b9fa", "");
    }
}
