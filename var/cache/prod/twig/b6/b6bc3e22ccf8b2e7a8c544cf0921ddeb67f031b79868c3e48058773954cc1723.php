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

/* @admin/Order/edit.twig */
class __TwigTemplate_877fea7fef4dc6ef642c627b0bb02fa469c632435915154b966f63ed9c9fec60 extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'sub_title' => [$this, 'block_sub_title'],
            'javascript' => [$this, 'block_javascript'],
            'main' => [$this, 'block_main'],
            '__internal_628b18f7b2733df380303db57dc40831f9abb61bc8c9423d4982921f02b8ac97' => [$this, 'block___internal_628b18f7b2733df380303db57dc40831f9abb61bc8c9423d4982921f02b8ac97'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return "@admin/default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        $context["menus"] = [0 => "order", 1 => "order_edit"];
        // line 18
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["form"] ?? null), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 19
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["searchCustomerModalForm"] ?? null), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 20
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme(($context["searchProductModalForm"] ?? null), [0 => "@admin/Form/bootstrap_4_horizontal_layout.html.twig"], true);
        // line 11
        $this->parent = $this->loadTemplate("@admin/default_frame.twig", "@admin/Order/edit.twig", 11);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_registration"), "html", null, true);
    }

    // line 16
    public function block_sub_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_management"), "html", null, true);
    }

    // line 22
    public function block_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "    <script src=\"https://yubinbango.github.io/yubinbango/yubinbango.js\" charset=\"UTF-8\"></script>
    <script>
        \$(function() {
            // 項目数が多く、入力している項目によってEnter押下時に期待する動作が変わるので、いったん禁止
            \$('input').on('keydown', function(e) {
                if ((e.which && e.which === 13) || (e.keyCode && e.keyCode === 13)) {
                    return false;
                } else {
                    return true;
                }
            });

            // 会員検索
            \$('#searchCustomerModalButton').on('click', function() {
                var list = \$('#searchCustomerModalList');
                list.children().remove();

                \$.ajax({
                    url: '";
        // line 41
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_order_search_customer_html");
        echo "',
                    type: 'POST',
                    dataType: 'html',
                    data: {'search_word': \$('#admin_search_customer_multi').val()}
                }).done(function(data) {
                    \$('#searchCustomerModalList').html(data);
                }).fail(function(data) {
                    alert('search customer failed.');
                });
            });

            // 商品検索
            \$('#searchProductModalButton').on('click', function() {
                var list = \$('#searchProductModalList');
                list.children().remove();

                \$.ajax({
                    url: '";
        // line 58
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_order_search_product");
        echo "',
                    type: 'POST',
                    dataType: 'html',
                    data: {
                        'id': \$('#admin_search_product_id').val(),
                        'category_id': \$('#admin_search_product_category_id').val()
                    }
                }).done(function(data) {
                    \$('#searchProductModalList').html(data);
                }).fail(function(data) {
                    alert('search product failed.');
                });
            });

            // その他明細
            \$('#addOrderItemType').on('show.bs.modal', function(e) {
                var list = \$('#searchOrderItemTypeList');
                list.children().remove();

                \$.ajax({
                    url: '";
        // line 78
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_order_search_order_item_type");
        echo "',
                    type: 'POST',
                    dataType: 'html'
                }).done(function(data) {
                    \$('#searchOrderItemTypeList').html(data);
                }).fail(function(data) {
                    alert('search order item type failed.');
                });
            });

            // ページング処理
            \$(document).on('click', '#searchProductModalList ul.pagination li.page-item a.page-link', function(e) {
                e.preventDefault();
                var list = \$('#searchProductModalList');
                list.children().remove();
                var url = \$(this).attr('href');
                \$.ajax({
                    url: url,
                    type: 'GET',
                    dataType: 'html'
                }).done(function(data) {
                    \$('#searchProductModalList').html(data);
                }).fail(function(data) {
                    alert('search product failed.');
                });
            });

            // 商品追加
            \$collectionHolder = \$('#table-form-field');
            index = \$collectionHolder.find('tbody > tr').length;
            formIdPrefix = '#order_OrderItems_';

            \$(document).on('click', '.delete', function(e) {
                // 商品削除
                \$(this).parents('tr').remove();
                index--;
                \$(\"#calculate\").trigger('click');
            });

            // 計算結果の更新が押されたらページ内リンクさせる
            \$('.btn').click(function() {
                var data = \$(this).data();
                if (data.link) {
                    \$('#form1').attr('action', '#' + data.link).submit();
                    return false;
                }
            });

            // 注文者情報をコピー
            \$('.copy-customer').on('click', function() {
                \$('#order_Shipping_name_name01').val(\$('#order_name_name01').val());
                \$('#order_Shipping_name_name02').val(\$('#order_name_name02').val());
                \$('#order_Shipping_kana_kana01').val(\$('#order_kana_kana01').val());
                \$('#order_Shipping_kana_kana02').val(\$('#order_kana_kana02').val());
                \$('#order_Shipping_postal_code').val(\$('#order_postal_code').val());
                \$('#order_Shipping_address_pref').val(\$('#order_address_pref').val());
                \$('#order_Shipping_address_addr01').val(\$('#order_address_addr01').val());
                \$('#order_Shipping_address_addr02').val(\$('#order_address_addr02').val());
                \$('#order_Shipping_email').val(\$('#order_email').val());
                \$('#order_Shipping_phone_number').val(\$('#order_phone_number').val());
                \$('#order_Shipping_company_name').val(\$('#order_company_name').val());
            });

            // PDF出力(単一)
            \$('.pdf-print').click(function() {
                window.open(this.href, 'newwin', 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=yes, width=700, height=700');
                return false;
            });

            // お届け時間の初期表示
            \$('#order_Shipping_Delivery').change();

            var confirmFormChange = function(form, target, modal) {
                var returnLink = form.find('input[type=\"hidden\"][name*=\"return_link\"]'),
                    saveBtn = modal.find('a[data-action=\"save\"]'),
                    cancelBtn = modal.find('a[data-action=\"cancel\"]');
                modal.on('hidden.bs.modal', function() {
                    returnLink.val('');
                });
                saveBtn.on('click', function() {
                    returnLink.val(\$(this).data('return-link'));
                    \$('#form1').append('<input type=\"hidden\" name=\"mode\" value=\"register\">');
                    form.submit();
                });
                target.on('click', function() {
                    modal.find('.modal-body .screen-name').text(\$(this).attr('title'));
                    modal.modal('show');
                    saveBtn.data('return-link', \$(this).attr('href'));
                    cancelBtn.attr('href', \$(this).attr('href'));
                    return false;
                });
            };
            confirmFormChange(\$('#form1'), \$('a[data-action=\"confirm\"]'), \$('#confirmFormChangeModal'))

            // 配送業者選択時にお届け時間を設定
            var times = ";
        // line 173
        echo ($context["shippingDeliveryTimes"] ?? null);
        echo ";
            \$('#order_Shipping_Delivery').change(function() {
                var deliveryId = \$(this).val();
                var \$shippingDeliveryTime = \$('#order_Shipping_DeliveryTime');
                \$shippingDeliveryTime.find('option').remove();
                \$shippingDeliveryTime.append(\$('<option></option>').val('').text('指定なし'));
                if (typeof(times[deliveryId]) !== 'undefined') {
                    for (var timeId in times[deliveryId]) {
                        timeValue = times[deliveryId][timeId];
                        \$shippingDeliveryTime.append(\$('<option></option>')
                            .val(timeId)
                            .text(timeValue));
                    }
                }
            });
        });

        ";
        // line 191
        echo "        ";
        if ((twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "isOptionPoint", [], "any", false, false, false, 191) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "Customer", [], "any", false, false, false, 191)))) {
            // line 192
            echo "            // 再計算時のポイントの割引金額の更新
            function updatePointItem() {
                // ポイント換算レート
                var pointConversionRate = ";
            // line 195
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "point_conversion_rate", [], "any", false, false, false, 195), "html", null, true);
            echo ";
                // 利用ポイント
                var usePoint = \$('#order_use_point').val();

                // 利用ポイントが数値以外の時は割引金額を更新しない
                if (isNaN(usePoint)) return;

                // 割引金額を計算
                var discountPrice = (-1) * pointConversionRate * usePoint;

                // ポイント明細の金額の要素を取得
                var \$pointPrice = \$('.pointPrice');

                // ポイント明細の金額の要素がある場合はポイントの更新
                if (\$pointPrice.length) {
                    \$pointPrice.val(discountPrice);
                }
            }
        ";
        }
        // line 214
        echo "    </script>
";
    }

    // line 217
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 218
        echo "    ";
        // line 219
        echo "    ";
        $context["action_disabled"] = false;
        // line 220
        echo "    ";
        if (( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "OrderStatus", [], "any", false, false, false, 220)) && twig_in_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "OrderStatus", [], "any", false, false, false, 220), "id", [], "any", false, false, false, 220), [0 => twig_constant("Eccube\\Entity\\Master\\OrderStatus::PROCESSING"), 1 => twig_constant("Eccube\\Entity\\Master\\OrderStatus::PENDING")]))) {
            // line 222
            $context["action_disabled"] = true;
        }
        // line 224
        echo "    <!-- 移動確認モーダル-->
    <div class=\"modal fade\" id=\"confirmFormChangeModal\" tabindex=\"-1\" role=\"dialog\"
         aria-labelledby=\"confirmFormChangeModal\" aria-hidden=\"true\">
        <div class=\"modal-dialog\" role=\"document\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h5 class=\"modal-title\">";
        // line 230
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_title"), "html", null, true);
        echo "</h5>
                    <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                        <span aria-hidden=\"true\">×</span>
                    </button>
                </div>
                <div class=\"modal-body\">
                    <p class=\"screen-name\"></p>
                </div>
                <div class=\"modal-footer\">
                    <a class=\"btn btn-ec-conversion\" data-action=\"save\" href=\"javascript:void(0)\">
                        ";
        // line 240
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_save_and_move"), "html", null, true);
        echo "
                    </a>
                    <a class=\"btn btn-ec-sub\" data-action=\"cancel\" href=\"javascript:void(0)\">
                        ";
        // line 243
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_move_only"), "html", null, true);
        echo "
                    </a>
                </div>
            </div>
        </div>
    </div>
    <form name=\"form1\" id=\"form1\" method=\"post\" action=\"?\"";
        // line 249
        if ((twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "isOptionPoint", [], "any", false, false, false, 249) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "Customer", [], "any", false, false, false, 249)))) {
            echo " onsubmit=\"updatePointItem()\"";
        }
        echo ">
        <input type=\"hidden\" name=\"mode\" value=\"\">
        <input type=\"hidden\" name=\"modal\" value=\"\">
        ";
        // line 252
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "_token", [], "any", false, false, false, 252), 'widget');
        echo "
        ";
        // line 253
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "return_link", [], "any", false, false, false, 253), 'widget');
        echo "
        <div class=\"c-contentsArea__cols\">
            <div class=\"c-contentsArea__primaryCol\">
                <div class=\"c-primaryCol\">
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 261
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.order_info"), "html", null, true);
        echo "\"><span class=\"card-title\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_info"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ml-1\"></i></div>
                                </div>
                                <div class=\"col-4 text-right\"><a data-toggle=\"collapse\" href=\"#orderOverview\" aria-expanded=\"false\" aria-controls=\"orderOverview\"><i class=\"fa fa-angle-up fa-lg\"></i></a></div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"orderOverview\">
                            <div class=\"card-body\">
                                <div class=\"row\">
                                    <div class=\"col-6\">
                                        <div class=\"row mb-3\">
                                            <div class=\"col-3\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.order_no"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_no"), "html", null, true);
        echo "<i class=\"fa fa-question-circle fa-lg ml-1\"></i></div>
                                            <div class=\"col\">";
        // line 272
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "order_no", [], "any", false, false, false, 272), "html", null, true);
        echo "</div>
                                        </div>
                                        <div class=\"row mb-3 form-group\">
                                            <label class=\"col-3 col-form-label\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.order_status"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_status"), "html", null, true);
        echo "<i class=\"fa fa-question-circle fa-lg ml-1\"></i></label>
                                            <div class=\"col\">
                                                ";
        // line 277
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "id", [], "any", false, false, false, 277))) {
            // line 278
            echo "                                                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "OrderStatus", [], "any", false, false, false, 278), 'widget');
            echo "
                                                    ";
            // line 279
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "OrderStatus", [], "any", false, false, false, 279), 'errors');
            echo "
                                                ";
        }
        // line 281
        echo "                                            </div>
                                        </div>
                                        <div class=\"row mb-3 form-group\">
                                            <label class=\"col-3 col-form-label\">";
        // line 284
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.payment_method"), "html", null, true);
        echo "</label>
                                            <div class=\"col\">
                                                ";
        // line 286
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Payment", [], "any", false, false, false, 286), 'widget');
        echo "
                                                ";
        // line 287
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Payment", [], "any", false, false, false, 287), 'errors');
        echo "
                                                <p class=\"form-text font-weight-bold text-danger mb-0\">";
        // line 288
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.change_payment_method_message"), "html", null, true);
        echo "</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class=\"col-6\">
                                        <div class=\"row mb-3\">
                                            <div class=\"col-3\"><i class=\"fa fa-inbox fa-fw mr-1\" aria-hidden=\"true\"></i>";
        // line 294
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_date"), "html", null, true);
        echo "</div>
                                            <div class=\"col\">";
        // line 295
        ((twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "order_date", [], "any", false, false, false, 295)) ? (print (twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_sec($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "order_date", [], "any", false, false, false, 295)), "html", null, true))) : (print ("")));
        echo "</div>
                                        </div>
                                        <div class=\"row mb-3\">
                                            <div class=\"col-3\"><i class=\"fa fa-money fa-fw mr-1\" aria-hidden=\"true\"></i>";
        // line 298
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.payment_date"), "html", null, true);
        echo "</div>
                                            <div class=\"col\">";
        // line 299
        ((twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "payment_date", [], "any", false, false, false, 299)) ? (print (twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_sec($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "payment_date", [], "any", false, false, false, 299)), "html", null, true))) : (print ("")));
        echo "</div>
                                        </div>
                                        ";
        // line 301
        if ( !twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "isMultiple", [], "any", false, false, false, 301)) {
            // line 302
            echo "                                            <div class=\"row mb-3\">
                                                <div class=\"col-3\"><i class=\"fa fa-truck fa-fw mr-1\" aria-hidden=\"true\"></i>";
            // line 303
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.shipping_date"), "html", null, true);
            echo "</div>
                                                <div class=\"col\">
                                                    ";
            // line 305
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_sec($this->env, twig_get_attribute($this->env, $this->source, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "Shippings", [], "any", false, false, false, 305)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "shipping_date", [], "any", false, false, false, 305)), "html", null, true);
            echo "
                                                </div>
                                            </div>
                                        ";
        }
        // line 309
        echo "                                        <div class=\"row mb-3\">
                                            <div class=\"col-3\"><i class=\"fa fa-refresh fa-fw mr-1\" aria-hidden=\"true\"></i>";
        // line 310
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.update_date"), "html", null, true);
        echo "</div>
                                            <div class=\"col\">";
        // line 311
        ((twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "update_date", [], "any", false, false, false, 311)) ? (print (twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_sec($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "update_date", [], "any", false, false, false, 311)), "html", null, true))) : (print ("")));
        echo "</div>
                                        </div>
                                        <div class=\"row mb-3\">
                                            <div class=\"col-3\"><i class=\"fa fa-mobile fa-fw mr-1\" aria-hidden=\"true\"></i>";
        // line 314
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.device_type"), "html", null, true);
        echo "</div>
                                            <div class=\"col\">";
        // line 315
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "device_type", [], "any", false, false, false, 315), "html", null, true);
        echo "</div>
                                        </div>
                                        <div class=\"row mb-3\">
                                            <div class=\"col-3\"><i class=\"fa fa-commenting fa-fw mr-1\" aria-hidden=\"true\"></i>";
        // line 318
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.message"), "html", null, true);
        echo "</div>
                                            <div class=\"col\">";
        // line 319
        echo ((twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "message", [], "any", false, false, false, 319)) ? (nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "message", [], "any", false, false, false, 319), "html", null, true))) : (""));
        echo "</div>
                                        </div>
                                    </div>
                                </div>

                                ";
        // line 325
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["f"]) {
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 325), "eccube_form_options", [], "any", false, false, false, 325), "auto_render", [], "any", false, false, false, 325)) {
                // line 326
                echo "                                    ";
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 326), "eccube_form_options", [], "any", false, false, false, 326), "form_theme", [], "any", false, false, false, 326)) {
                    // line 327
                    echo "                                        ";
                    $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme($context["f"], [0 => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 327), "eccube_form_options", [], "any", false, false, false, 327), "form_theme", [], "any", false, false, false, 327)], true);
                    // line 328
                    echo "                                        ";
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'row');
                    echo "
                                    ";
                } else {
                    // line 330
                    echo "                                        <div class=\"row\">
                                            <div class=\"col-6\">
                                                <div class=\"row mb-3\">
                                                    <div class=\"col-3\">
                                                        <span>";
                    // line 334
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["f"], "vars", [], "any", false, false, false, 334), "label", [], "any", false, false, false, 334)), "html", null, true);
                    echo "</span>
                                                    </div>
                                                    <div class=\"col\">
                                                        ";
                    // line 337
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'widget');
                    echo "
                                                        ";
                    // line 338
                    echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["f"], 'errors');
                    echo "
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    ";
                }
                // line 344
                echo "                                ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['f'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 345
        echo "
                            </div>
                        </div>
                    </div><!-- .card.rounded -->
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-2\">
                                    <div class=\"d-inline-block\"><span class=\"card-title\">";
        // line 353
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.orderer"), "html", null, true);
        echo "</span></div>
                                </div>
                                <div class=\"col\">";
        // line 355
        if (($context["id"] ?? null)) {
            echo "<span class=\"mr-5\">";
            if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Customer", [], "any", false, false, false, 355), "vars", [], "any", false, false, false, 355), "value", [], "any", false, false, false, 355))) {
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.non_member"), "html", null, true);
            } else {
                echo "<a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_customer_edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Customer", [], "any", false, false, false, 355), "vars", [], "any", false, false, false, 355), "value", [], "any", false, false, false, 355)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Customer", [], "any", false, false, false, 355), "vars", [], "any", false, false, false, 355), "value", [], "any", false, false, false, 355), "html", null, true);
                echo "</a>";
            }
            echo "</span>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "full_name", [], "any", false, false, false, 355), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "full_name_kana", [], "any", false, false, false, 355), "html", null, true);
            echo ") 〒";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "postal_code", [], "any", false, false, false, 355), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "pref", [], "any", false, false, false, 355), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "addr01", [], "any", false, false, false, 355), "html", null, true);
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "addr02", [], "any", false, false, false, 355), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "email", [], "any", false, false, false, 355), "html", null, true);
        }
        echo "</div>
                                <div class=\"col-1 text-right\"><a class=\"d-block\" data-toggle=\"collapse\" href=\"#ordererInfo\" aria-expanded=\"false\" aria-controls=\"ordererInfo\"><i class=\"fa ";
        // line 356
        echo ((($context["id"] ?? null)) ? ("fa-angle-down") : ("fa-angle-up"));
        echo " fa-lg\"></i></a></div>
                            </div>
                        </div>
                        <div class=\"collapse ";
        // line 359
        echo ((($context["id"] ?? null)) ? ("") : ("show"));
        echo " ec-cardCollapse h-adr\" id=\"ordererInfo\">
                            <span class=\"p-country-name\" style=\"display:none;\">Japan</span>
                            <div class=\"card-body\">
                                ";
        // line 362
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "id", [], "any", false, false, false, 362))) {
            // line 363
            echo "                                    <div class=\"row mb-3\">
                                        <div class=\"col-auto\">
                                            <a class=\"btn btn-ec-regular px-3\" data-toggle=\"modal\" data-target=\"#searchCustomerModal\">";
            // line 365
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.search_from_customer"), "html", null, true);
            echo "</a>
                                        </div>
                                    </div>
                                    <!-- 会員検索モーダル -->
                                    <div class=\"modal fade\" id=\"searchCustomerModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"searchCustomerModal\" aria-hidden=\"true\">
                                        <div class=\"modal-dialog modal-lg\" role=\"document\">
                                            <div class=\"modal-content\">
                                                <div class=\"modal-header\">
                                                    <h5 class=\"modal-title font-weight-bold\">";
            // line 373
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.search_customer_title"), "html", null, true);
            echo "</h5>
                                                    <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                                                </div>
                                                <div class=\"modal-body\">
                                                    ";
            // line 377
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchCustomerModalForm"] ?? null), "multi", [], "any", false, false, false, 377), 'widget', ["attr" => ["class" => "mb-2searchCustomerModal", "placeholder" => "admin.customer.multi_search_label"]]);
            echo "
                                                    <button type=\"button\" id=\"searchCustomerModalButton\" class=\"btn btn-ec-conversion px-5 mb-4 mt-2\">";
            // line 378
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search"), "html", null, true);
            echo "</button>
                                                    <div class=\"form-group\" id=\"searchCustomerModalList\"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                ";
        }
        // line 385
        echo "                                <div class=\"row\">
                                    <div class=\"col-6\">
                                        <div class=\"row\">
                                            <label class=\"col-3 col-form-label\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 388
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.customer_id"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.customer.customer_id"), "html", null, true);
        echo "<i class=\"fa fa-question-circle fa-lg ml-1\"></i></label>
                                            <div class=\"col\">
                                                <p id=\"order_CustomerId\">";
        // line 390
        if (twig_test_empty(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Customer", [], "any", false, false, false, 390), "vars", [], "any", false, false, false, 390), "value", [], "any", false, false, false, 390))) {
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.non_member"), "html", null, true);
        } else {
            echo "<a href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_customer_edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Customer", [], "any", false, false, false, 390), "vars", [], "any", false, false, false, 390), "value", [], "any", false, false, false, 390)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Customer", [], "any", false, false, false, 390), "vars", [], "any", false, false, false, 390), "value", [], "any", false, false, false, 390), "html", null, true);
            echo "</a>";
        }
        echo "</p>
                                                ";
        // line 391
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Customer", [], "any", false, false, false, 391), 'widget');
        echo "
                                                ";
        // line 392
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Customer", [], "any", false, false, false, 392), 'errors');
        echo "
                                            </div>
                                        </div>
                                        <div class=\"row form-group\">
                                            <label class=\"col-3 col-form-label\">";
        // line 396
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.name"), "html", null, true);
        echo "<span class=\"badge badge-primary ml-1\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span></label>
                                            <div class=\"col\">
                                                <div class=\"row\">
                                                    <div class=\"col\">
                                                        ";
        // line 400
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 400), "name01", [], "any", false, false, false, 400), 'widget');
        echo "
                                                        ";
        // line 401
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 401), "name01", [], "any", false, false, false, 401), 'errors');
        echo "
                                                    </div>
                                                    <div class=\"col\">
                                                        ";
        // line 404
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 404), "name02", [], "any", false, false, false, 404), 'widget');
        echo "
                                                        ";
        // line 405
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "name", [], "any", false, false, false, 405), "name02", [], "any", false, false, false, 405), 'errors');
        echo "
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row form-group\">
                                            <label class=\"col-3 col-form-label\">";
        // line 411
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.kana"), "html", null, true);
        echo "<span class=\"badge badge-primary ml-1\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span></label>
                                            <div class=\"col\">
                                                <div class=\"row\">
                                                    <div class=\"col\">
                                                        ";
        // line 415
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "kana", [], "any", false, false, false, 415), "kana01", [], "any", false, false, false, 415), 'widget');
        echo "
                                                        ";
        // line 416
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "kana", [], "any", false, false, false, 416), "kana01", [], "any", false, false, false, 416), 'errors');
        echo "
                                                    </div>
                                                    <div class=\"col\">
                                                        ";
        // line 419
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "kana", [], "any", false, false, false, 419), "kana02", [], "any", false, false, false, 419), 'widget');
        echo "
                                                        ";
        // line 420
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "kana", [], "any", false, false, false, 420), "kana02", [], "any", false, false, false, 420), 'errors');
        echo "
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"row form-group\">
                                            <label class=\"col-3 col-form-label\">";
        // line 426
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.address"), "html", null, true);
        echo "<span class=\"badge badge-primary ml-1\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span></label>
                                            <div class=\"col\">
                                                <div class=\"row mb-3\">
                                                    <div class=\"col form-inline\">
                                                        ";
        // line 430
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.postal_symbol"), "html", null, true);
        echo "
                                                        ";
        // line 431
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "postal_code", [], "any", false, false, false, 431), 'widget');
        echo "
                                                        ";
        // line 432
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "postal_code", [], "any", false, false, false, 432), 'errors');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"row mb-3\">
                                                    <div class=\"col\">
                                                        ";
        // line 437
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, false, 437), "pref", [], "any", false, false, false, 437), 'widget');
        echo "
                                                        ";
        // line 438
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, false, 438), "pref", [], "any", false, false, false, 438), 'errors');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"row mb-3\">
                                                    <div class=\"col\">
                                                        ";
        // line 443
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, false, 443), "addr01", [], "any", false, false, false, 443), 'widget');
        echo "
                                                        ";
        // line 444
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, false, 444), "addr01", [], "any", false, false, false, 444), 'errors');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"row\">
                                                    <div class=\"col\">
                                                        ";
        // line 449
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, false, 449), "addr02", [], "any", false, false, false, 449), 'widget');
        echo "
                                                        ";
        // line 450
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "address", [], "any", false, false, false, 450), "addr02", [], "any", false, false, false, 450), 'errors');
        echo "
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class=\"col-6\">
                                        <div class=\"row form-group\">
                                            <label class=\"col-3 col-form-label\">";
        // line 459
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.mail_address"), "html", null, true);
        echo "<span class=\"badge badge-primary ml-1\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span></label>
                                            <div class=\"col\">
                                                ";
        // line 461
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 461), 'widget');
        echo "
                                                ";
        // line 462
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "email", [], "any", false, false, false, 462), 'errors');
        echo "
                                            </div>
                                        </div>
                                        <div class=\"row form-group\">
                                            <label class=\"col-3 col-form-label\">";
        // line 466
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.phone_number"), "html", null, true);
        echo "<span class=\"badge badge-primary ml-1\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
        echo "</span></label>
                                            <div class=\"col\">
                                                ";
        // line 468
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "phone_number", [], "any", false, false, false, 468), 'widget');
        echo "
                                                ";
        // line 469
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "phone_number", [], "any", false, false, false, 469), 'errors');
        echo "
                                            </div>
                                        </div>
                                        <div class=\"row form-group\">
                                            <label class=\"col-3 col-form-label\">";
        // line 473
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.company_name"), "html", null, true);
        echo "</label>
                                            <div class=\"col\">
                                                ";
        // line 475
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "company_name", [], "any", false, false, false, 475), 'widget');
        echo "
                                                ";
        // line 476
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "company_name", [], "any", false, false, false, 476), 'errors');
        echo "
                                            </div>
                                        </div>
                                        <div class=\"row form-group\">
                                            <label class=\"col-3 col-form-label\">";
        // line 480
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.message"), "html", null, true);
        echo "</label>
                                            <div class=\"col\">
                                                ";
        // line 482
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "message", [], "any", false, false, false, 482), 'widget', ["attr" => ["rows" => 8]]);
        echo "
                                                ";
        // line 483
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "message", [], "any", false, false, false, 483), 'errors');
        echo "
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div><!-- .card.rounded -->
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 496
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.shipping_info"), "html", null, true);
        echo "\"><span class=\"card-title\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.shipping_info"), "html", null, true);
        echo "</span><i class=\"fa fa-question-circle fa-lg ml-1\"></i></div>
                                </div>
                                <div class=\"col-4 text-right\"><a data-toggle=\"collapse\" href=\"#shippingInfo\" aria-expanded=\"false\" aria-controls=\"shippingInfo\"><i class=\"fa fa-angle-up fa-lg\"></i></a></div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"shippingInfo\">
                            <div class=\"card-body\">
                                ";
        // line 503
        if (twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "isMultiple", [], "any", false, false, false, 503)) {
            // line 504
            echo "                                    ";
            // line 505
            echo "                                    <div class=\"mb-3\">
                                        <a id=\"shipping-add\" class=\"btn btn-ec-regular\" data-action=\"confirm\" title=\"";
            // line 506
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_message", ["%name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.shipping_registration")]), "html", null, true);
            // line 507
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("admin_shipping_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "id", [], "any", false, false, false, 507)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.edit_multiple_shipping"), "html", null, true);
            echo "</a>
                                        <span class=\"ml-3\">";
            // line 508
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.edit_multiple_shipping_description"), "html", null, true);
            echo "</span>
                                    </div>
                                    ";
            // line 510
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "Shippings", [], "any", false, false, false, 510));
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
            foreach ($context['_seq'] as $context["_key"] => $context["shipping"]) {
                // line 511
                echo "                                        <div class=\"col\">
                                            <span class=\"mr-5\">";
                // line 512
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delivery"), "html", null, true);
                echo "(";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 512), "html", null, true);
                echo ")</span>
                                            ";
                // line 513
                $context["shipping_name"] = ((((((twig_get_attribute($this->env, $this->source, $context["shipping"], "full_name", [], "any", false, false, false, 513) . "(") . twig_get_attribute($this->env, $this->source, $context["shipping"], "full_name_kana", [], "any", false, false, false, 513)) . ")") .  !(null === twig_get_attribute($this->env, $this->source, $context["shipping"], "company_name", [], "any", false, false, false, 513)))) ? (twig_get_attribute($this->env, $this->source, $context["shipping"], "company_name", [], "any", false, false, false, 513)) : (""));
                // line 514
                echo "                                            ";
                $context["shipping_addr"] = ((((($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.postal_symbol") . twig_get_attribute($this->env, $this->source, $context["shipping"], "postal_code", [], "any", false, false, false, 514)) . " ") . twig_get_attribute($this->env, $this->source, $context["shipping"], "pref", [], "any", false, false, false, 514)) . twig_get_attribute($this->env, $this->source, $context["shipping"], "addr01", [], "any", false, false, false, 514)) . twig_get_attribute($this->env, $this->source, $context["shipping"], "addr02", [], "any", false, false, false, 514));
                // line 515
                echo "                                            ";
                $context["shipping_date"] = (( !(null === twig_get_attribute($this->env, $this->source, $context["shipping"], "shipping_date", [], "any", false, false, false, 515))) ? ($this->extensions['Eccube\Twig\Extension\IntlExtension']->date_day($this->env, twig_get_attribute($this->env, $this->source, $context["shipping"], "shipping_date", [], "any", false, false, false, 515))) : (""));
                // line 516
                echo "                                            ";
                echo twig_escape_filter($this->env, ($context["shipping_name"] ?? null), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, ($context["shipping_addr"] ?? null), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["shipping"], "phone_number", [], "any", false, false, false, 516), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, ($context["shipping_date"] ?? null), "html", null, true);
                echo "
                                        </div>
                                    ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['shipping'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 519
            echo "                                ";
        } else {
            // line 520
            echo "                                    ";
            // line 521
            echo "                                    <div class=\"row mb-3\">
                                        <div class=\"col-6\">
                                            <button type=\"button\" class=\"btn btn-ec-regular copy-customer\">";
            // line 523
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.copy_orderer"), "html", null, true);
            echo "</button>
                                            ";
            // line 524
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "id", [], "any", false, false, false, 524))) {
                // line 525
                echo "                                                <a class=\"btn btn-ec-regular pdf-print\" href=\"";
                echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_order_export_pdf");
                echo "?ids[]=";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "Shippings", [], "any", false, false, false, 525)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[0] ?? null) : null), "id", [], "any", false, false, false, 525), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.output_delivery_note"), "html", null, true);
                echo "</a>
                                            ";
            }
            // line 527
            echo "                                        </div>
                                        ";
            // line 528
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "id", [], "any", false, false, false, 528))) {
                // line 529
                echo "                                            <div class=\"col-6 text-right\">
                                                <a id=\"shipping-add\" class=\"btn btn-ec-regular w-25\" data-action=\"confirm\" title=\"";
                // line 530
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_message", ["%name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.shipping_registration")]), "html", null, true);
                // line 531
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("admin_shipping_edit", ["id" => twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "id", [], "any", false, false, false, 531)]), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.add_shipping"), "html", null, true);
                echo "</a>
                                            </div>
                                        ";
            }
            // line 534
            echo "                                    </div>
                                    <div class=\"row h-adr\">
                                        <span class=\"p-country-name\" style=\"display:none;\">Japan</span>
                                        <div class=\"col-6\">
                                            <div class=\"row form-group\">
                                                <label class=\"col-3 col-form-label\">";
            // line 539
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.name"), "html", null, true);
            echo "<span class=\"badge badge-primary ml-1\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
            echo "</span></label>
                                                <div class=\"col\">
                                                    <div class=\"row\">
                                                        <div class=\"col\">
                                                            ";
            // line 543
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, false, 543), "name", [], "any", false, false, false, 543), "name01", [], "any", false, false, false, 543), 'widget');
            echo "
                                                            ";
            // line 544
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, false, 544), "name", [], "any", false, false, false, 544), "name01", [], "any", false, false, false, 544), 'errors');
            echo "
                                                        </div>
                                                        <div class=\"col\">
                                                            ";
            // line 547
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, false, 547), "name", [], "any", false, false, false, 547), "name02", [], "any", false, false, false, 547), 'widget');
            echo "
                                                            ";
            // line 548
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, false, 548), "name", [], "any", false, false, false, 548), "name02", [], "any", false, false, false, 548), 'errors');
            echo "
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"row form-group\">
                                                <label class=\"col-3 col-form-label\">";
            // line 554
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.kana"), "html", null, true);
            echo "<span class=\"badge badge-primary ml-1\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
            echo "</span></label>
                                                <div class=\"col\">
                                                    <div class=\"row\">
                                                        <div class=\"col\">
                                                            ";
            // line 558
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, false, 558), "kana", [], "any", false, false, false, 558), "kana01", [], "any", false, false, false, 558), 'widget');
            echo "
                                                            ";
            // line 559
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, false, 559), "kana", [], "any", false, false, false, 559), "kana01", [], "any", false, false, false, 559), 'errors');
            echo "
                                                        </div>
                                                        <div class=\"col\">
                                                            ";
            // line 562
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, false, 562), "kana", [], "any", false, false, false, 562), "kana02", [], "any", false, false, false, 562), 'widget');
            echo "
                                                            ";
            // line 563
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, false, 563), "kana", [], "any", false, false, false, 563), "kana02", [], "any", false, false, false, 563), 'errors');
            echo "
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"row form-group\">
                                                <label class=\"col-3 col-form-label\">";
            // line 569
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.address"), "html", null, true);
            echo "<span class=\"badge badge-primary ml-1\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
            echo "</span></label>
                                                <div class=\"col\">
                                                    <div class=\"row mb-3\">
                                                        <div class=\"col form-inline\">
                                                            ";
            // line 573
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.postal_symbol"), "html", null, true);
            echo "
                                                            ";
            // line 574
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, false, 574), "postal_code", [], "any", false, false, false, 574), 'widget');
            echo "
                                                            ";
            // line 575
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, false, 575), "postal_code", [], "any", false, false, false, 575), 'errors');
            echo "
                                                        </div>
                                                    </div>
                                                    <div class=\"row mb-3\">
                                                        <div class=\"col\">
                                                            ";
            // line 580
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, false, 580), "address", [], "any", false, false, false, 580), "pref", [], "any", false, false, false, 580), 'widget');
            echo "
                                                            ";
            // line 581
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, false, 581), "address", [], "any", false, false, false, 581), "pref", [], "any", false, false, false, 581), 'errors');
            echo "
                                                        </div>
                                                    </div>
                                                    <div class=\"row mb-3\">
                                                        <div class=\"col\">
                                                            ";
            // line 586
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, false, 586), "address", [], "any", false, false, false, 586), "addr01", [], "any", false, false, false, 586), 'widget');
            echo "
                                                            ";
            // line 587
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, false, 587), "address", [], "any", false, false, false, 587), "addr01", [], "any", false, false, false, 587), 'errors');
            echo "
                                                        </div>
                                                    </div>
                                                    <div class=\"row\">
                                                        <div class=\"col\">
                                                            ";
            // line 592
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, false, 592), "address", [], "any", false, false, false, 592), "addr02", [], "any", false, false, false, 592), 'widget');
            echo "
                                                            ";
            // line 593
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, false, 593), "address", [], "any", false, false, false, 593), "addr02", [], "any", false, false, false, 593), 'errors');
            echo "
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-6\">
                                            <div class=\"row form-group\">
                                                <label class=\"col-3 col-form-label\">";
            // line 601
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.phone_number"), "html", null, true);
            echo "<span class=\"badge badge-primary ml-1\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.required"), "html", null, true);
            echo "</span></label>
                                                <div class=\"col\">
                                                    ";
            // line 603
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, false, 603), "phone_number", [], "any", false, false, false, 603), 'widget');
            echo "
                                                    ";
            // line 604
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, false, 604), "phone_number", [], "any", false, false, false, 604), 'errors');
            echo "
                                                </div>
                                            </div>

                                            <div class=\"row form-group\">
                                                <label class=\"col-3 col-form-label\">";
            // line 609
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.company_name"), "html", null, true);
            echo "</label>
                                                <div class=\"col\">
                                                    ";
            // line 611
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, false, 611), "company_name", [], "any", false, false, false, 611), 'widget');
            echo "
                                                    ";
            // line 612
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, false, 612), "company_name", [], "any", false, false, false, 612), 'errors');
            echo "
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-12\">
                                            <hr>
                                        </div>
                                        <div class=\"col-6\">
                                            <div class=\"row mb-3 form-group\">
                                                <label class=\"col-3 col-form-label\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
            // line 621
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.shipping_info.tracking_number"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.tracking_number"), "html", null, true);
            echo "<i class=\"fa fa-question-circle fa-lg ml-1\"></i></label>
                                                <div class=\"col\">
                                                    ";
            // line 623
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, false, 623), "tracking_number", [], "any", false, false, false, 623), 'widget');
            echo "
                                                    ";
            // line 624
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, false, 624), "tracking_number", [], "any", false, false, false, 624), 'errors');
            echo "
                                                </div>
                                            </div>
                                            <div class=\"row mb-3 form-group\">
                                                <label class=\"col-3 col-form-label\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
            // line 628
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.shipping_info.delivery_provider"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delivery_provider"), "html", null, true);
            echo "<span class=\"badge badge-primary ml-1\"></span><i class=\"fa fa-question-circle fa-lg ml-1\"></i></label>
                                                <div class=\"col\">
                                                    ";
            // line 630
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, false, 630), "Delivery", [], "any", false, false, false, 630), 'widget');
            echo "
                                                    ";
            // line 631
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, false, 631), "Delivery", [], "any", false, false, false, 631), 'errors');
            echo "
                                                </div>
                                            </div>
                                            <div class=\"row mb-3 form-group\">
                                                <label class=\"col-3 col-form-label\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
            // line 635
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.shipping_info.shop_memo"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.shop_memo_for_shipped"), "html", null, true);
            echo "<i class=\"fa fa-question-circle fa-lg ml-1\"></i></label>
                                                <div class=\"col\">
                                                    ";
            // line 637
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, false, 637), "note", [], "any", false, false, false, 637), 'widget');
            echo "
                                                    ";
            // line 638
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, false, 638), "note", [], "any", false, false, false, 638), 'errors');
            echo "
                                                </div>
                                            </div>
                                        </div>
                                        <div class=\"col-6\">
                                            <div class=\"row mb-3 form-group\">
                                                <label class=\"col-3 col-form-label\"><i class=\"fa fa-calendar-check-o fa-fw mr-1\" aria-hidden=\"true\"></i>";
            // line 644
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delivery_date"), "html", null, true);
            echo "</label>
                                                <div class=\"col\">
                                                    ";
            // line 646
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, false, 646), "shipping_delivery_date", [], "any", false, false, false, 646), 'widget');
            echo "
                                                    ";
            // line 647
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, false, 647), "shipping_delivery_date", [], "any", false, false, false, 647), 'errors');
            echo "
                                                </div>
                                            </div>
                                            <div class=\"row mb-3 form-group\">
                                                <label class=\"col-3 col-form-label\"><i class=\"fa fa-clock-o fa-fw mr-1\" aria-hidden=\"true\"></i>";
            // line 651
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delivery_time"), "html", null, true);
            echo "</label>
                                                <div class=\"col\">
                                                    ";
            // line 653
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, false, 653), "DeliveryTime", [], "any", false, false, false, 653), 'widget');
            echo "
                                                    ";
            // line 654
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "Shipping", [], "any", false, false, false, 654), "DeliveryTime", [], "any", false, false, false, 654), 'errors');
            echo "
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                ";
        }
        // line 660
        echo "                            </div>
                        </div>
                    </div><!-- .card.rounded -->
                    <div id=\"order-product\" class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 667
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.product_info"), "html", null, true);
        echo "\"><span class=\"card-title\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.product_info"), "html", null, true);
        echo "<i class=\"fa fa-question-circle fa-lg ml-1\"></i></span></div>
                                </div>
                                <div class=\"col-4 text-right\"><a data-toggle=\"collapse\" href=\"#orderItem\" aria-expanded=\"false\" aria-controls=\"orderItem\"><i class=\"fa fa-angle-up fa-lg\"></i></a></div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"orderItem\">
                            <div class=\"card-body\">
                                <div class=\"row justify-content-between mb-2\">
                                    <div class=\"col-6\">
                                        ";
        // line 677
        echo "                                        ";
        if ( !twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "isMultiple", [], "any", false, false, false, 677)) {
            // line 678
            echo "                                            <a class=\"btn btn-ec-regular mr-2 add\" data-toggle=\"modal\" data-target=\"#addProduct\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.add_product_item"), "html", null, true);
            echo "</a>
                                            <div class=\"modal fade\" id=\"addProduct\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"addProduct\" aria-hidden=\"true\">
                                                <div class=\"modal-dialog modal-lg\" role=\"document\">
                                                    <div class=\"modal-content\">
                                                        <div class=\"modal-header\">
                                                            <h5 class=\"modal-title\">";
            // line 683
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.add_product_item"), "html", null, true);
            echo "</h5>
                                                            <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                                                        </div>
                                                        <div class=\"modal-body\">
                                                            ";
            // line 687
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchProductModalForm"] ?? null), "id", [], "any", false, false, false, 687), 'widget', ["attr" => ["class" => "mb-3", "placeholder" => "admin.product.multi_search_label"]]);
            echo "
                                                            ";
            // line 688
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["searchProductModalForm"] ?? null), "category_id", [], "any", false, false, false, 688), 'widget');
            echo "
                                                            <button type=\"button\" id=\"searchProductModalButton\" class=\"btn btn-ec-conversion px-5 mb-4 mt-2\">";
            // line 689
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.search"), "html", null, true);
            echo "</button>
                                                            <div id=\"searchProductModalList\"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        ";
        }
        // line 696
        echo "                                        <a class=\"btn btn-ec-regular mr-2\" data-toggle=\"modal\" data-target=\"#addOrderItemType\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.add_other_item"), "html", null, true);
        echo "</a>
                                        <div class=\"modal fade\" id=\"addOrderItemType\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"addOrderItemType\" aria-hidden=\"true\">
                                            <div class=\"modal-dialog modal-lg\" role=\"document\">
                                                <div class=\"modal-content\">
                                                    <div class=\"modal-header\">
                                                        <h5 class=\"modal-title\">";
        // line 701
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.add_other_item"), "html", null, true);
        echo "</h5>
                                                        <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                                                    </div>
                                                    <div class=\"modal-body\">
                                                        <div id=\"searchOrderItemTypeList\"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        ";
        // line 710
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "OrderItemsErrors", [], "any", false, false, false, 710), 'errors');
        echo "
                                    </div>
                                    <div class=\"col-5 text-right\">
                                        <button type=\"submit\" class=\"btn btn-ec-regular mr-2\" name=\"mode\" value=\"calc\" data-link=\"order-product\" id=\"calculate\"";
        // line 713
        echo ((($context["action_disabled"] ?? null)) ? (" disabled=\"disabled\"") : (""));
        echo ">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.update_calculation_results"), "html", null, true);
        echo "</button>
                                    </div>
                                </div>
                                <table id=\"table-form-field\" class=\"table table-striped table-sm mb-0\"
                                       data-prototype=\"";
        // line 717
        echo twig_escape_filter($this->env,         $this->renderBlock("__internal_628b18f7b2733df380303db57dc40831f9abb61bc8c9423d4982921f02b8ac97", $context, $blocks));
        echo "\">
                                    <thead class=\"table-active\">
                                    <tr class=\"text-nowrap\">
                                        <th class=\"pt-2 pb-2 pl-3\">";
        // line 720
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.product.product_name_and_code"), "html", null, true);
        echo "</th>
                                        <th class=\"pt-2 pb-2\">
                                            <div class=\"col-8\">";
        // line 722
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.amount"), "html", null, true);
        echo "</div>
                                        </th>
                                        <th class=\"pt-2 pb-2\">
                                            <div class=\"col-8\">";
        // line 725
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.quantity"), "html", null, true);
        echo "</div>
                                        </th>
                                        <th class=\"pt-2 pb-2\">
                                            <div class=\"col-8\">";
        // line 728
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.tax_rate"), "html", null, true);
        echo "</div>
                                        </th>
                                        <th class=\"pt-2 pb-2\">
                                            <div class=\"col-8\">";
        // line 731
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.tax_type"), "html", null, true);
        echo "</div>
                                        </th>
                                        <th class=\"pt-2 pb-2\">
                                            <div class=\"col-8\">";
        // line 734
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.subtotal"), "html", null, true);
        echo "</div>
                                        </th>
                                        <th class=\"pt-2 pb-2 pr-3\"></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 740
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "OrderItems", [], "any", false, false, false, 740));
        foreach ($context['_seq'] as $context["_key"] => $context["orderItemForm"]) {
            // line 741
            echo "                                        ";
            $context["OrderItem"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "vars", [], "any", false, false, false, 741), "data", [], "any", false, false, false, 741);
            // line 742
            echo "                                        <tr>
                                            ";
            // line 744
            echo "                                            ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "ProductClass", [], "any", false, false, false, 744), 'widget');
            echo "
                                            ";
            // line 745
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "order_item_type", [], "any", false, false, false, 745), 'widget');
            echo "
                                            ";
            // line 746
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "tax_type", [], "any", false, false, false, 746), 'widget');
            echo "
                                            <!-- 商品名 -->
                                            <td class=\"align-middle w-25 pl-3\">
                                                <p class=\"mb-0 font-weight-bold\">
                                                    ";
            // line 751
            echo "                                                    ";
            if ((twig_get_attribute($this->env, $this->source, ($context["OrderItem"] ?? null), "isProduct", [], "any", false, false, false, 751) || twig_get_attribute($this->env, $this->source, ($context["OrderItem"] ?? null), "isPoint", [], "any", false, false, false, 751))) {
                // line 752
                echo "                                                        ";
                if (twig_get_attribute($this->env, $this->source, ($context["OrderItem"] ?? null), "isProduct", [], "any", false, false, false, 752)) {
                    // line 753
                    echo "                                                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_product_product_edit", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["OrderItem"] ?? null), "ProductClass", [], "any", false, false, false, 753), "Product", [], "any", false, false, false, 753), "id", [], "any", false, false, false, 753)]), "html", null, true);
                    echo "\" target=\"_blank\">
                                                                ";
                    // line 754
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["OrderItem"] ?? null), "product_name", [], "any", false, false, false, 754), "html", null, true);
                    echo "
                                                            </a>
                                                        ";
                } else {
                    // line 757
                    echo "                                                            ";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["OrderItem"] ?? null), "product_name", [], "any", false, false, false, 757), "html", null, true);
                    echo "
                                                        ";
                }
                // line 759
                echo "                                                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "product_name", [], "any", false, false, false, 759), 'widget', ["type" => "hidden"]);
                echo "
                                                    ";
            } else {
                // line 761
                echo "                                                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "product_name", [], "any", false, false, false, 761), 'widget');
                echo "
                                                    ";
            }
            // line 763
            echo "                                                </p>
                                                <span>
                                                    ";
            // line 765
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["OrderItem"] ?? null), "product_code", [], "any", false, false, false, 765), "html", null, true);
            echo "
                                                    ";
            // line 766
            if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["OrderItem"] ?? null), "class_category_name1", [], "any", false, false, false, 766))) {
                // line 767
                echo "                                                        / (
                                                        ";
                // line 768
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["OrderItem"] ?? null), "class_name1", [], "any", false, false, false, 768), "html", null, true);
                echo "：
                                                        ";
                // line 769
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["OrderItem"] ?? null), "class_category_name1", [], "any", false, false, false, 769), "html", null, true);
                echo "
                                                        ";
                // line 770
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["OrderItem"] ?? null), "class_category_name2", [], "any", false, false, false, 770))) {
                    // line 771
                    echo "                                                            /
                                                            ";
                    // line 772
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["OrderItem"] ?? null), "class_name2", [], "any", false, false, false, 772), "html", null, true);
                    echo "：
                                                            ";
                    // line 773
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["OrderItem"] ?? null), "class_category_name2", [], "any", false, false, false, 773), "html", null, true);
                    echo "
                                                        ";
                }
                // line 775
                echo "                                                        )
                                                    ";
            }
            // line 777
            echo "                                                </span>
                                                ";
            // line 778
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "product_name", [], "any", false, false, false, 778), 'errors');
            echo "
                                            </td>
                                            <!-- 金額 -->
                                            <td class=\"align-middle\">
                                                <div class=\"col mt-3\">
                                                    ";
            // line 784
            echo "                                                    ";
            if (twig_get_attribute($this->env, $this->source, ($context["OrderItem"] ?? null), "isPoint", [], "any", false, false, false, 784)) {
                // line 785
                echo "                                                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "price", [], "any", false, false, false, 785), 'widget', ["attr" => ["readonly" => "readonly", "class" => "pointPrice"]]);
                echo "
                                                    ";
            } else {
                // line 787
                echo "                                                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "price", [], "any", false, false, false, 787), 'widget');
                echo "
                                                    ";
            }
            // line 789
            echo "                                                    <div class=\"text-right small\">(";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["OrderItem"] ?? null), "TaxDisplayType", [], "any", false, false, false, 789), "html", null, true);
            echo ")</div>
                                                    ";
            // line 790
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "price", [], "any", false, false, false, 790), 'errors');
            echo "
                                                </div>
                                            </td>
                                            <!-- 数量 -->
                                            <td class=\"align-middle\">
                                                <div class=\"col-12 col-xl-8\">
                                                    ";
            // line 797
            echo "                                                    ";
            if (((twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "isMultiple", [], "any", false, false, false, 797) && twig_get_attribute($this->env, $this->source, ($context["OrderItem"] ?? null), "isProduct", [], "any", false, false, false, 797)) || twig_get_attribute($this->env, $this->source, ($context["OrderItem"] ?? null), "isPoint", [], "any", false, false, false, 797))) {
                // line 798
                echo "                                                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "quantity", [], "any", false, false, false, 798), 'widget', ["attr" => ["readonly" => "readonly"]]);
                echo "
                                                    ";
            } else {
                // line 800
                echo "                                                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "quantity", [], "any", false, false, false, 800), 'widget');
                echo "
                                                    ";
            }
            // line 802
            echo "                                                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "quantity", [], "any", false, false, false, 802), 'errors');
            echo "
                                                </div>
                                            </td>
                                            <!-- 税率 -->
                                            <td class=\"align-middle\">
                                                <div class=\"col-12 col-xl-8\">
                                                    ";
            // line 809
            echo "                                                    ";
            if ((((twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "isMultiple", [], "any", false, false, false, 809) && twig_get_attribute($this->env, $this->source, ($context["OrderItem"] ?? null), "isProduct", [], "any", false, false, false, 809)) || twig_get_attribute($this->env, $this->source, ($context["OrderItem"] ?? null), "isPoint", [], "any", false, false, false, 809)) || (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["OrderItem"] ?? null), "TaxType", [], "any", false, false, false, 809), "id", [], "any", false, false, false, 809) == twig_constant("Eccube\\Entity\\Master\\TaxType::NON_TAXABLE")))) {
                // line 810
                echo "                                                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "tax_rate", [], "any", false, false, false, 810), 'widget', ["attr" => ["readonly" => "readonly"]]);
                echo "
                                                    ";
            } else {
                // line 812
                echo "                                                        ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "tax_rate", [], "any", false, false, false, 812), 'widget');
                echo "
                                                    ";
            }
            // line 814
            echo "                                                    ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "tax_rate", [], "any", false, false, false, 814), 'errors');
            echo "
                                                </div>
                                            </td>
                                            <!-- 課税区分 -->
                                            <td class=\"align-middle\">
                                                <div class=\"col\">
                                                    ";
            // line 820
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["OrderItem"] ?? null), "tax_type", [], "any", false, false, false, 820), "html", null, true);
            echo "
                                                </div>
                                            </td>
                                            <!-- 小計 -->
                                            <td class=\"align-middle\">
                                                <div class=\"col\">
                                                    <span>";
            // line 826
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["OrderItem"] ?? null), "total_price", [], "any", false, false, false, 826)), "html", null, true);
            echo "</span>
                                                </div>
                                            </td>
                                            <td class=\"align-middle text-right pr-3\">
                                                <div class=\"row justify-content-end\">
                                                    ";
            // line 832
            echo "                                                    ";
            if (((twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "isMultiple", [], "any", false, false, false, 832) && twig_get_attribute($this->env, $this->source, ($context["OrderItem"] ?? null), "isProduct", [], "any", false, false, false, 832)) || twig_get_attribute($this->env, $this->source, ($context["OrderItem"] ?? null), "isPoint", [], "any", false, false, false, 832))) {
                // line 833
                echo "                                                        <div class=\"col-auto text-center\">
                                                            <div class=\"d-inline-block mr-3\" data-tooltip=\"true\"
                                                                 data-placement=\"top\" title=\"";
                // line 835
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                echo "\">
                                                                <a class=\"btn btn-ec-actionIcon disabled\">
                                                                    <i class=\"fa fa-close fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    ";
            } else {
                // line 842
                echo "                                                        <div class=\"col-auto text-center\">
                                                            <div class=\"d-inline-block mr-3\" data-tooltip=\"true\"
                                                                 data-placement=\"top\" title=\"";
                // line 844
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                echo "\">
                                                                <a class=\"btn btn-ec-actionIcon\" data-toggle=\"modal\" data-target=\"#delete_";
                // line 845
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "vars", [], "any", false, false, false, 845), "id", [], "any", false, false, false, 845), "html", null, true);
                echo "\">
                                                                    <i class=\"fa fa-close fa-lg text-secondary\" aria-hidden=\"true\"></i>
                                                                </a>
                                                            </div>
                                                            <!-- 明細の削除確認モーダル -->
                                                            <div class=\"modal fade\" id=\"delete_";
                // line 850
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "vars", [], "any", false, false, false, 850), "id", [], "any", false, false, false, 850), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"delete_";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["orderItemForm"], "vars", [], "any", false, false, false, 850), "id", [], "any", false, false, false, 850), "html", null, true);
                echo "\" aria-hidden=\"true\">
                                                                <div class=\"modal-dialog\" role=\"document\">
                                                                    <div class=\"modal-content\">
                                                                        <div class=\"modal-header\">
                                                                            <h5 class=\"modal-title font-weight-bold\">";
                // line 854
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete_modal__title"), "html", null, true);
                echo "</h5>
                                                                            <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
                                                                                <span aria-hidden=\"true\">×</span>
                                                                            </button>
                                                                        </div>
                                                                        <div class=\"modal-body text-left\">
                                                                            <p class=\"text-left\">";
                // line 860
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delete_item__confirm_message", ["%name%" => twig_get_attribute($this->env, $this->source, ($context["OrderItem"] ?? null), "product_name", [], "any", false, false, false, 860)]), "html", null, true);
                echo "</p>
                                                                        </div>
                                                                        <div class=\"modal-footer\">
                                                                            <button class=\"btn btn-ec-sub\" type=\"button\" data-dismiss=\"modal\">";
                // line 863
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.cancel"), "html", null, true);
                echo "</button>
                                                                            <a href=\"#order-product\" class=\"btn delete btn-ec-delete\">";
                // line 864
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.delete"), "html", null, true);
                echo "</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    ";
            }
            // line 871
            echo "                                                </div>
                                            </td>
                                        </tr>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['orderItemForm'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 875
        echo "                                    </tbody>
                                </table>
                                <hr class=\"mt-0\">
                                <!-- 小計 -->
                                <div class=\"row justify-content-end mb-3\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">";
        // line 880
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.subtotal"), "html", null, true);
        echo "</span></div>
                                    <div class=\"col-2 text-right\"><span class=\"h4 align-middle font-weight-normal\">";
        // line 881
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "subtotal", [], "any", false, false, false, 881)), "html", null, true);
        echo "</span></div>
                                </div>
                                <!-- 送料 -->
                                <div class=\"row justify-content-end mb-3\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">";
        // line 885
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.delivery_fee"), "html", null, true);
        echo "</span></div>
                                    <div class=\"col-2 text-right\"><span class=\"h4 align-middle font-weight-normal\">";
        // line 886
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "delivery_fee_total", [], "any", false, false, false, 886)), "html", null, true);
        echo "</span></div>
                                </div>
                                <!-- 手数料 -->
                                <div class=\"row justify-content-end mb-3\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">";
        // line 890
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.charge"), "html", null, true);
        echo "</span></div>
                                    <div class=\"col-2 text-right\"><span class=\"h4 align-middle font-weight-normal\">";
        // line 891
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "charge", [], "any", false, false, false, 891)), "html", null, true);
        echo "</span></div>
                                </div>
                                <!-- 値引き -->
                                <div class=\"row justify-content-end mb-3\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">";
        // line 895
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.discount"), "html", null, true);
        echo "</span></div>
                                    <div class=\"col-2 text-right\"><span class=\"h4 align-middle text-danger font-weight-normal\">";
        // line 896
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "taxable_discount", [], "any", false, false, false, 896)), "html", null, true);
        echo "</span></div>
                                </div>
                                <hr>
                                <!-- 合計 -->
                                <div class=\"row justify-content-end mb-3\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">";
        // line 901
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.total"), "html", null, true);
        echo "</span></div>
                                    <div class=\"col-2 text-right\"><span class=\"h4 align-middle font-weight-normal\">";
        // line 902
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "taxable_total", [], "any", false, false, false, 902)), "html", null, true);
        echo "</span></div>
                                </div>
                                ";
        // line 904
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "taxable_total_by_tax_rate", [], "any", false, false, false, 904));
        foreach ($context['_seq'] as $context["rate"] => $context["total"]) {
            // line 905
            echo "                                    <div class=\"row justify-content-end mb-3\">
                                        <div class=\"col-auto\"><span class=\"align-middle\">";
            // line 906
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("common.tax_rate_target", ["%rate%" => $context["rate"]]), "html", null, true);
            echo "</span></div>
                                        <div class=\"col-2 text-right\"><span class=\"align-middle font-weight-normal\">";
            // line 907
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter($context["total"]), "html", null, true);
            echo "</span></div>
                                    </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['rate'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 910
        echo "                                <hr>
                                ";
        // line 911
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "tax_free_discount_items", [], "any", false, false, false, 911));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 912
            echo "                                <div class=\"row justify-content-end mb-3\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">";
            // line 913
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "product_name", [], "any", false, false, false, 913), "html", null, true);
            echo "</span></div>
                                    <div class=\"col-2 text-right\"><span class=\"h4 align-middle text-danger font-weight-normal\">";
            // line 914
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, $context["item"], "total_price", [], "any", false, false, false, 914)), "html", null, true);
            echo "</span></div>
                                </div>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 917
        echo "                                <!-- お支払い合計 -->
                                <div class=\"row justify-content-end mb-3\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">";
        // line 919
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.payment_total"), "html", null, true);
        echo "</span></div>
                                    <div class=\"col-2 text-right\"><span class=\"h4 align-middle font-weight-normal\">";
        // line 920
        echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\EccubeExtension']->getPriceFilter(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "payment_total", [], "any", false, false, false, 920)), "html", null, true);
        echo "</span></div>
                                </div>
                                <hr>
                                <!-- 加算ポイント -->
                                <div class=\"row justify-content-end mb-3\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">";
        // line 925
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.add_point"), "html", null, true);
        echo "</span></div>
                                    <div class=\"col-2 text-right\">
                                        <span class=\"h4 align-middle font-weight-normal\">
                                            ";
        // line 928
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "vars", [], "any", false, false, false, 928), "value", [], "any", false, false, false, 928), "addpoint", [], "any", false, false, false, 928)), "html", null, true);
        echo "
                                        </span>
                                    </div>
                                </div>
                                <!-- 利用ポイント -->
                                <div class=\"row justify-content-end mb-3\">
                                    <div class=\"col-auto\"><span class=\"align-middle\">";
        // line 934
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.use_point"), "html", null, true);
        echo "</span></div>
                                    <div class=\"col-2 text-right\">
                                        <span class=\"h4 align-middle font-weight-normal\">
                                            ";
        // line 938
        echo "                                            ";
        if ((twig_get_attribute($this->env, $this->source, ($context["BaseInfo"] ?? null), "isOptionPoint", [], "any", false, false, false, 938) &&  !(null === twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "Customer", [], "any", false, false, false, 938)))) {
            // line 939
            echo "                                                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "use_point", [], "any", false, false, false, 939), 'widget');
            echo "
                                            ";
        } else {
            // line 941
            echo "                                                ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "use_point", [], "any", false, false, false, 941), 'widget', ["attr" => ["readonly" => "readonly"]]);
            echo "
                                            ";
        }
        // line 943
        echo "                                            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "use_point", [], "any", false, false, false, 943), 'errors');
        echo "
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- .card.rounded -->
                    <!-- ショップ用メモ欄 -->
                    <div class=\"card rounded border-0 mb-4\">
                        <div class=\"card-header\">
                            <div class=\"row\">
                                <div class=\"col-8\">
                                    <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
        // line 955
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.shop_memo"), "html", null, true);
        echo "\"><span class=\"card-title\">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.shop_memo"), "html", null, true);
        echo "<i class=\"fa fa-question-circle fa-lg ml-1\"></i></span></div>
                                </div>
                                <div class=\"col-4 text-right\"><a data-toggle=\"collapse\" href=\"#freeArea\" aria-expanded=\"false\" aria-controls=\"freeArea\"><i class=\"fa fa-angle-up fa-lg\"></i></a></div>
                            </div>
                        </div>
                        <div class=\"collapse show ec-cardCollapse\" id=\"freeArea\">
                            <div class=\"card-body\">
                                ";
        // line 962
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "note", [], "any", false, false, false, 962), 'widget', ["attr" => ["rows" => 8]]);
        echo "
                            </div>
                        </div>
                    </div><!-- .card.rounded -->
                    <!-- メール送信履歴 -->
                    ";
        // line 967
        if ( !(null === ($context["id"] ?? null))) {
            // line 968
            echo "                        <div class=\"card rounded border-0 mb-4\">
                            <div class=\"card-header\">
                                <div class=\"row\">
                                    <div class=\"col-8\">
                                        <div class=\"d-inline-block\" data-tooltip=\"true\" data-placement=\"top\" title=\"";
            // line 972
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("tooltip.order.mail_history"), "html", null, true);
            echo "\"><span class=\"card-title\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.mail_history"), "html", null, true);
            echo "</span><i class=\"fa fa-question-circle fa-lg ml-1\"></i></div>
                                    </div>
                                    <div class=\"col-4 text-right\"><a data-toggle=\"collapse\" href=\"#mailHistory\" aria-expanded=\"false\" aria-controls=\"mailHistory\"><i class=\"fa fa-angle-up fa-lg\"></i></a></div>
                                </div>
                            </div>
                            <div class=\"collapse show ec-cardCollapse\" id=\"mailHistory\">
                                <div class=\"card-body\">
                                    <table class=\"table table-striped\">
                                        <thead class=\"table-active\">
                                        <tr>
                                            <th class=\"pt-2 pb-2 pl-3\">";
            // line 982
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.mail_send_date"), "html", null, true);
            echo "</th>
                                            <th class=\"pt-2 pb-2 pr-3\">";
            // line 983
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.mail_subject"), "html", null, true);
            echo "</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        ";
            // line 987
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "MailHistories", [], "any", false, false, false, 987));
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
            foreach ($context['_seq'] as $context["_key"] => $context["MailHistory"]) {
                // line 988
                echo "                                            <tr>
                                                <td class=\"pl-3\">";
                // line 989
                echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IntlExtension']->date_min($this->env, twig_get_attribute($this->env, $this->source, $context["MailHistory"], "send_date", [], "any", false, false, false, 989)), "html", null, true);
                echo "</td>
                                                <td class=\"pr-3\">
                                                    <a class=\"text-primary\" data-toggle=\"modal\" data-target=\"#mail2-";
                // line 991
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 991), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["MailHistory"], "mail_subject", [], "any", false, false, false, 991), "html", null, true);
                echo "</a>
                                                    <div class=\"modal fade\" id=\"mail2-";
                // line 992
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 992), "html", null, true);
                echo "\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"mail2-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 992), "html", null, true);
                echo "\" aria-hidden=\"true\">
                                                        <div class=\"modal-dialog\" role=\"document\">
                                                            <div class=\"modal-content\">
                                                                <div class=\"modal-header\">
                                                                    <h5 class=\"modal-title\">";
                // line 996
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["MailHistory"], "mail_subject", [], "any", false, false, false, 996), "html", null, true);
                echo "</h5>
                                                                    <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>
                                                                </div>
                                                                <div class=\"modal-body\">
                                                                    <p>
                                                                        ";
                // line 1001
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["MailHistory"], "mail_html_body", [], "any", false, false, false, 1001)) > 0)) {
                    // line 1002
                    echo "                                                                            ";
                    echo $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["MailHistory"], "mail_html_body", [], "any", false, false, false, 1002));
                    echo "
                                                                        ";
                } else {
                    // line 1004
                    echo "                                                                            ";
                    echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["MailHistory"], "mail_body", [], "any", false, false, false, 1004), "html", null, true));
                    echo "
                                                                        ";
                }
                // line 1006
                echo "                                                                    </p>
                                                                </div>
                                                                <div class=\"modal-footer\">
                                                                    <button class=\"btn btn-ec-regular\" type=\"button\" data-dismiss=\"modal\">";
                // line 1009
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.close"), "html", null, true);
                echo "</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['MailHistory'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 1017
            echo "                                        </tbody>
                                    </table>
                                    <div class=\"text-center\">
                                        <a class=\"btn btn-ec-regular\" data-action=\"confirm\" title=\"";
            // line 1020
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.move_to_confirm_message", ["%name%" => $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.mail")]), "html", null, true);
            // line 1022
            echo "\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getPath("admin_order_mail", ["id" => twig_get_attribute($this->env, $this->source, ($context["Order"] ?? null), "id", [], "any", false, false, false, 1022)]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.mail_create"), "html", null, true);
            echo "</a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .card.rounded -->
                    ";
        }
        // line 1028
        echo "                </div>
            </div>
        </div>
        <!-- コンバージョンエリア -->
        <div class=\"c-conversionArea\">
            <div class=\"c-conversionArea__container\">
                <div class=\"row justify-content-between align-items-center\">
                    <div class=\"col-6\">
                        <div class=\"c-conversionArea__leftBlockItem\">
                            <a class=\"c-baseLink\" href=\"";
        // line 1037
        echo $this->extensions['Eccube\Twig\Extension\IgnoreRoutingNotFoundExtension']->getUrl("admin_order", ["resume" => 1]);
        echo "\"><i class=\"fa fa-backward\" aria-hidden=\"true\"></i><span>";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.order.order_list"), "html", null, true);
        echo "</span></a>
                        </div>
                    </div>
                    <div class=\"col-6\">
                        <div class=\"row align-items-center justify-content-end\">
                            <div class=\"col-auto\">
                                <button type=\"submit\" class=\"btn btn-ec-conversion px-5\" name=\"mode\" value=\"register\"";
        // line 1043
        echo ((($context["action_disabled"] ?? null)) ? (" disabled=\"disabled\"") : (""));
        echo ">";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("admin.common.registration"), "html", null, true);
        echo "</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
";
    }

    // line 717
    public function block___internal_628b18f7b2733df380303db57dc40831f9abb61bc8c9423d4982921f02b8ac97($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo twig_include($this->env, $context, "@admin/Order/order_item_prototype.twig", ["orderItemForm" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["form"] ?? null), "OrderItems", [], "any", false, false, false, 717), "vars", [], "any", false, false, false, 717), "prototype", [], "any", false, false, false, 717)]);
    }

    public function getTemplateName()
    {
        return "@admin/Order/edit.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2092 => 717,  2077 => 1043,  2066 => 1037,  2055 => 1028,  2043 => 1022,  2041 => 1020,  2036 => 1017,  2014 => 1009,  2009 => 1006,  2003 => 1004,  1997 => 1002,  1995 => 1001,  1987 => 996,  1978 => 992,  1972 => 991,  1967 => 989,  1964 => 988,  1947 => 987,  1940 => 983,  1936 => 982,  1921 => 972,  1915 => 968,  1913 => 967,  1905 => 962,  1893 => 955,  1877 => 943,  1871 => 941,  1865 => 939,  1862 => 938,  1856 => 934,  1847 => 928,  1841 => 925,  1833 => 920,  1829 => 919,  1825 => 917,  1816 => 914,  1812 => 913,  1809 => 912,  1805 => 911,  1802 => 910,  1793 => 907,  1789 => 906,  1786 => 905,  1782 => 904,  1777 => 902,  1773 => 901,  1765 => 896,  1761 => 895,  1754 => 891,  1750 => 890,  1743 => 886,  1739 => 885,  1732 => 881,  1728 => 880,  1721 => 875,  1712 => 871,  1702 => 864,  1698 => 863,  1692 => 860,  1683 => 854,  1674 => 850,  1666 => 845,  1662 => 844,  1658 => 842,  1648 => 835,  1644 => 833,  1641 => 832,  1633 => 826,  1624 => 820,  1614 => 814,  1608 => 812,  1602 => 810,  1599 => 809,  1589 => 802,  1583 => 800,  1577 => 798,  1574 => 797,  1565 => 790,  1560 => 789,  1554 => 787,  1548 => 785,  1545 => 784,  1537 => 778,  1534 => 777,  1530 => 775,  1525 => 773,  1521 => 772,  1518 => 771,  1516 => 770,  1512 => 769,  1508 => 768,  1505 => 767,  1503 => 766,  1499 => 765,  1495 => 763,  1489 => 761,  1483 => 759,  1477 => 757,  1471 => 754,  1466 => 753,  1463 => 752,  1460 => 751,  1453 => 746,  1449 => 745,  1444 => 744,  1441 => 742,  1438 => 741,  1434 => 740,  1425 => 734,  1419 => 731,  1413 => 728,  1407 => 725,  1401 => 722,  1396 => 720,  1390 => 717,  1381 => 713,  1375 => 710,  1363 => 701,  1354 => 696,  1344 => 689,  1340 => 688,  1336 => 687,  1329 => 683,  1320 => 678,  1317 => 677,  1303 => 667,  1294 => 660,  1285 => 654,  1281 => 653,  1276 => 651,  1269 => 647,  1265 => 646,  1260 => 644,  1251 => 638,  1247 => 637,  1240 => 635,  1233 => 631,  1229 => 630,  1222 => 628,  1215 => 624,  1211 => 623,  1204 => 621,  1192 => 612,  1188 => 611,  1183 => 609,  1175 => 604,  1171 => 603,  1164 => 601,  1153 => 593,  1149 => 592,  1141 => 587,  1137 => 586,  1129 => 581,  1125 => 580,  1117 => 575,  1113 => 574,  1109 => 573,  1100 => 569,  1091 => 563,  1087 => 562,  1081 => 559,  1077 => 558,  1068 => 554,  1059 => 548,  1055 => 547,  1049 => 544,  1045 => 543,  1036 => 539,  1029 => 534,  1020 => 531,  1018 => 530,  1015 => 529,  1013 => 528,  1010 => 527,  1000 => 525,  998 => 524,  994 => 523,  990 => 521,  988 => 520,  985 => 519,  961 => 516,  958 => 515,  955 => 514,  953 => 513,  947 => 512,  944 => 511,  927 => 510,  922 => 508,  915 => 507,  913 => 506,  910 => 505,  908 => 504,  906 => 503,  894 => 496,  878 => 483,  874 => 482,  869 => 480,  862 => 476,  858 => 475,  853 => 473,  846 => 469,  842 => 468,  835 => 466,  828 => 462,  824 => 461,  817 => 459,  805 => 450,  801 => 449,  793 => 444,  789 => 443,  781 => 438,  777 => 437,  769 => 432,  765 => 431,  761 => 430,  752 => 426,  743 => 420,  739 => 419,  733 => 416,  729 => 415,  720 => 411,  711 => 405,  707 => 404,  701 => 401,  697 => 400,  688 => 396,  681 => 392,  677 => 391,  665 => 390,  658 => 388,  653 => 385,  643 => 378,  639 => 377,  632 => 373,  621 => 365,  617 => 363,  615 => 362,  609 => 359,  603 => 356,  576 => 355,  571 => 353,  561 => 345,  554 => 344,  545 => 338,  541 => 337,  535 => 334,  529 => 330,  523 => 328,  520 => 327,  517 => 326,  511 => 325,  503 => 319,  499 => 318,  493 => 315,  489 => 314,  483 => 311,  479 => 310,  476 => 309,  469 => 305,  464 => 303,  461 => 302,  459 => 301,  454 => 299,  450 => 298,  444 => 295,  440 => 294,  431 => 288,  427 => 287,  423 => 286,  418 => 284,  413 => 281,  408 => 279,  403 => 278,  401 => 277,  394 => 275,  388 => 272,  382 => 271,  367 => 261,  356 => 253,  352 => 252,  344 => 249,  335 => 243,  329 => 240,  316 => 230,  308 => 224,  305 => 222,  302 => 220,  299 => 219,  297 => 218,  293 => 217,  288 => 214,  266 => 195,  261 => 192,  258 => 191,  238 => 173,  140 => 78,  117 => 58,  97 => 41,  77 => 23,  73 => 22,  66 => 16,  59 => 15,  54 => 11,  52 => 20,  50 => 19,  48 => 18,  46 => 13,  39 => 11,);
    }

    public function getSourceContext()
    {
        return new Source("", "@admin/Order/edit.twig", "/home/anotherworld/www/s-africa.wine/src/Eccube/Resource/template/admin/Order/edit.twig");
    }
}
