<?php

namespace Plugin\TaxManagement\Controller\Admin;

use Eccube\Controller\AbstractController;
use Plugin\TaxManagement\Form\Type\Admin\ConfigType;
use Plugin\TaxManagement\Repository\ConfigRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ConfigController extends AbstractController
{
    /**
     * @var ConfigRepository
     */
    protected $configRepository;

    /**
     * ConfigController constructor.
     *
     * @param ConfigRepository $configRepository
     */
    public function __construct(ConfigRepository $configRepository)
    {
        $this->configRepository = $configRepository;
    }

    /**
     * @Route("/%eccube_admin_route%/tax_management/config", name="tax_management_admin_config")
     * @Template("@TaxManagement/admin/config.twig")
     */
    public function index(Request $request)
    {
        $Config = $this->configRepository->get();
        $form = $this->createForm(ConfigType::class, $Config);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $Config = $form->getData();
            if($Config->getDiscountRateFlag() === null) {
                $Config->setDiscountRateFlag(false);
            }
            if($Config->getIncludeTaxFlag() === null) {
                $Config->setIncludeTaxFlag(false);
            }
            $this->entityManager->persist($Config);
            $this->entityManager->flush($Config);
            $this->addSuccess('登録しました。', 'admin');

            return $this->redirectToRoute('tax_management_admin_config');
        }

        return [
            'form' => $form->createView(),
        ];
    }
}
