<?php

namespace Plugin\GmoEpsilon4\Controller\Admin;

use Eccube\Common\EccubeConfig;
use Eccube\Controller\AbstractController;
use Eccube\Entity\Payment;
use Eccube\Repository\PaymentRepository;
use Plugin\GmoEpsilon4\Form\Type\Admin\ConfigType;
use Plugin\GmoEpsilon4\Repository\ConfigRepository;
use Plugin\GmoEpsilon4\Service\GmoEpsilonRequestService;
use Plugin\GmoEpsilon4\Util\PaymentUtil;
use Symfony\Component\Form\FormError;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints as Assert;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class ConfigController extends AbstractController
{

    /**
     * @var ConfigRepository
     */
    protected $configRepository;

    /**
     * ConfigController constructor.
     *
     * @param ValidatorInterface $validator
     * @param ConfigRepository $configRepository
     */
    public function __construct(
        EccubeConfig $eccubeConfig,
        ConfigRepository $configRepository,
        PaymentRepository $paymentRepository,
        GmoEpsilonRequestService $gmoEpsilonRequestService
    ) {
        $this->eccubeConfig = $eccubeConfig;
        $this->configRepository = $configRepository;
        $this->paymentRepository = $paymentRepository;
        $this->gmoEpsilonRequestService = $gmoEpsilonRequestService;
    }

    /**
     * @Route("/%eccube_admin_route%/gmo_epsilon/config", name="gmo_epsilon4_admin_config")
     * @Template("@GmoEpsilon4/admin/config.twig")
     */
    public function index(Request $request)
    {
        $Config = $this->configRepository->get();

        if (is_array($usePayment = unserialize($Config->getUsePayment()))) {
            $Config->setUsePayment($usePayment);
        }
        if (is_array($useConvenience = unserialize($Config->getUseConvenience()))) {
            $Config->setUseConvenience($useConvenience);
        }

        $form = $this->createForm(ConfigType::class, $Config);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $Config = $form->getData();

            // ssl対応判定
            if (!extension_loaded('openssl') && preg_match("/^https:/", $Config->getDestinationUrl())) {
                $form['destination_url']->addError(new FormError('※ このサーバはSSLに対応していません。'));
            }

            $st_code = "";
            $st_code .= in_array($this->eccubeConfig['gmo_epsilon']['pay_id']['credit'], $Config->getUsePayment()) ? "1" : "0";
            $st_code .= "0"; // credit 2
            $st_code .= in_array($this->eccubeConfig['gmo_epsilon']['pay_id']['conveni'], $Config->getUsePayment()) ? "1" : "0";
            $st_code .= in_array($this->eccubeConfig['gmo_epsilon']['pay_id']['netbank_jnb'], $Config->getUsePayment()) ? "1" : "0";
            $st_code .= in_array($this->eccubeConfig['gmo_epsilon']['pay_id']['netbank_rakuten'], $Config->getUsePayment()) ? "1" : "0";
            $st_code .= "-0"; // "-" unused 6
            $st_code .= in_array($this->eccubeConfig['gmo_epsilon']['pay_id']['payeasy'], $Config->getUsePayment()) ? "1" : "0";
            $st_code .= in_array($this->eccubeConfig['gmo_epsilon']['pay_id']['webmoney'], $Config->getUsePayment()) ? "1" : "0";
            $st_code .= in_array($this->eccubeConfig['gmo_epsilon']['pay_id']['ywallet'], $Config->getUsePayment()) ? "1" : "0";
            $st_code .= "-0"; // "-" unused 10
            $st_code .= in_array($this->eccubeConfig['gmo_epsilon']['pay_id']['paypal'], $Config->getUsePayment()) ? "1" : "0";
            $st_code .= in_array($this->eccubeConfig['gmo_epsilon']['pay_id']['bitcash'], $Config->getUsePayment()) ? "1" : "0";
            $st_code .= in_array($this->eccubeConfig['gmo_epsilon']['pay_id']['chocom'], $Config->getUsePayment()) ? "1" : "0";
            $st_code .= "0-"; // unused 14
            $st_code .= in_array($this->eccubeConfig['gmo_epsilon']['pay_id']['sphone'], $Config->getUsePayment()) ? "1" : "0";
            $st_code .= in_array($this->eccubeConfig['gmo_epsilon']['pay_id']['jcb'], $Config->getUsePayment()) ? "1" : "0";
            $st_code .= in_array($this->eccubeConfig['gmo_epsilon']['pay_id']['sumishin'], $Config->getUsePayment()) ? "1" : "0";
            $st_code .= in_array($this->eccubeConfig['gmo_epsilon']['pay_id']['deferred'], $Config->getUsePayment()) ? "1" : "0";
            $st_code .= "0-00000-00000-00000";

            $arrParameter = array(
                'contract_code' => $Config->getContractCode(),
                'user_id' => 'connect_test',
                'user_name' => '接続テスト',
                'user_mail_add' => 'test@test.co.jp',
                'st_code' => $st_code,
                'process_code' => '3',
                'xml' => '1',
            );

            $arrXML = $this->gmoEpsilonRequestService->sendData($Config->getDestinationUrl(), $arrParameter, $Config->getSslVersion());
            if ($arrXML === false) {
                $form['destination_url']->addError(new FormError('※ 接続できませんでした。'));
            } else if ($arrXML == $this->eccubeConfig['gmo_epsilon']['ssl']['error']) {
                $form['ssl_version']->addError(new FormError('※ご指定のSSLバージョンには対応していません'));
            } else {
                $err_code = $this->gmoEpsilonRequestService->getXMLValue($arrXML, 'RESULT', 'ERR_CODE');
                switch ($err_code) {
                    case '':
                        break;
                    case '607':
                        $form['contract_code']->addError(new FormError('※ 契約コードが違います。'));
                        break;
                    default:
                        $form['contract_code']->addError(new FormError('※ '.$this->gmoEpsilonRequestService->getXMLValue($arrXML, 'RESULT', 'ERR_DETAIL')));
                        break;
                }
            }

            $arrXML = $this->gmoEpsilonRequestService->sendData($Config->getInfoConfUrl(), ['contarct_code' => $Config->getContractCode()]);
            if ($arrXML === false) {
                $form['info_conf_url']->addError(new FormError('※ 接続できませんでした。'));
            } else if ($arrXML == $this->eccubeConfig['gmo_epsilon']['ssl']['error'] && $form['ssl_version']->isValid() === true) {
                $form['ssl_version']->addError(new FormError('※ご指定のSSLバージョンには対応していません'));
            }

            if ($form->isValid()) {
                // 決済方法を追加
                $this->savePaymentData($Config->getUsePayment());

                // 登録可能な形式に変換
                $Config->setUsePayment(serialize($Config->getUsePayment()));
                $Config->setUseConvenience(serialize($Config->getUseConvenience()));

                $this->entityManager->persist($Config);
                $this->entityManager->flush($Config);

                $this->addSuccess('gmo_epsilon.admin.save.success', 'admin');
                return $this->redirectToRoute('gmo_epsilon4_admin_config');
            }

        }

        return [
            'form' => $form->createView(),
        ];
    }

    /**
     * プラグイン設定情報、決済情報を登録
     *
     * @param array $data
     * @param array payment method name $Payments
     */
    public function savePaymentData($usePayment)
    {
        $objPayUtil = new PaymentUtil($this->eccubeConfig);
        $Payments = $objPayUtil->getPayments();

        $Payment = $this->paymentRepository->findOneBy([], ['sort_no' => 'DESC']);
        $sortNo = $Payment ? $Payment->getSortNo() + 1 : 1;

        // 選択された利用決済を逆順にする
        $usePayment = array_reverse($usePayment, true);
        foreach ($usePayment as $paymentTypeId) {
            // 設定情報を取得
            $arrPaymentConfig = $this->getPaymentConfig($paymentTypeId);

            if ($Payment = $this->paymentRepository->findOneBy(['method_class' => $arrPaymentConfig['method_class']])) {
                // インストール済みであれば表示
                $Payment->setVisible(true);
                $Payment->setMethod($Payments[$paymentTypeId]);
            } else {
                // 各値を設定
                $Payment = new Payment();
                $Payment->setCharge($arrPaymentConfig['charge']);
                $Payment->setSortNo($sortNo);
                $Payment->setVisible(true);
                $Payment->setMethod($Payments[$paymentTypeId]);
                $Payment->setMethodClass($arrPaymentConfig['method_class']);
                $Payment->setRuleMin(1);
                $Payment->setRuleMax($arrPaymentConfig['rule_max']);
            }

            $this->entityManager->persist($Payment);
            $this->entityManager->flush($Payment);

            $sortNo++;
        }

        // チェックされていない決済を非表示化
    }

    /**
     * 決済情報を取得
     *
     * @param integer $paymentTypeId
     * @return array
     */
    function getPaymentConfig($paymentTypeId)
    {
        $listData = array();
        $listData['charge'] = '0';

        foreach ($this->eccubeConfig['gmo_epsilon']['pay_id'] as $pay_name => $pay_id) {
            if ($paymentTypeId == $pay_id) {
                $listData['method_class'] = 'Plugin\GmoEpsilon4\Service\Method\\' . ucfirst($pay_name);
                $listData['rule_max'] = $this->eccubeConfig['gmo_epsilon']['rule_max'][$pay_name];
            }
        }

        return $listData;
    }

}
