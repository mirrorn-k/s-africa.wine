<?php

namespace Plugin\GmoEpsilon4;

use Eccube\Event\EventArgs;
use Eccube\Event\EccubeEvents;
use Eccube\Event\TemplateEvent;
use Eccube\Common\EccubeConfig;
use Plugin\GmoEpsilon4\Repository\ConfigRepository;
use Plugin\GmoEpsilon4\Service\Method\Conveni;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class GmoEpsilonEvent implements EventSubscriberInterface
{
    /**
     * @var EccubeConfig
     */
    protected $eccubeConfig;

    /**
     * @var ConfigRepository
     */
    protected $configRepository;

    /**
     * GmoEpsilonEvent
     *
     * @param eccubeConfig $eccubeConfig
     * @param ConfigRepository $configRepository
     */
    public function __construct(
        EccubeConfig $eccubeConfig,
        ConfigRepository $configRepository
    ) {
        $this->eccubeConfig = $eccubeConfig;
        $this->configRepository = $configRepository;
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return [
            'Shopping/index.twig' => 'index',
            'Shopping/confirm.twig' => 'confirm'
        ];
    }

    public function index(TemplateEvent $event)
    {
        $Order = $event->getParameter('Order');

        if (!is_null($Order->getPayment())) {
            if (strpos(Conveni::class, $Order->getPayment()->getMethodClass()) !== false) {
                $event->addSnippet('@GmoEpsilon4/default/Shopping/conveni.twig');
            }
        }
    }

    public function confirm(TemplateEvent $event)
    {
        $PaymentMethod = $event->getParameter('Order')->getPayment()->getMethodClass();

        if (preg_match('/^Plugin\\\GmoEpsilon4\\\Service\\\Method/', $PaymentMethod)) {
            // コンビニ決済とメールリンク決済は次の画面に遷移しないためaddしない
            if (!preg_match('/Conveni|Maillink/', $PaymentMethod)) {
                $event->addSnippet('@GmoEpsilon4/default/Shopping/confirm_button.twig');
            }
        }

        if (strpos(Conveni::class, $PaymentMethod) !== false) {
            $event->addSnippet('@GmoEpsilon4/default/Shopping/conveni_confirm.twig');
        }
    }
}
