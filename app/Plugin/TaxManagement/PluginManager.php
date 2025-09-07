<?php

namespace Plugin\TaxManagement;

use Eccube\Plugin\AbstractPluginManager;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Eccube\Repository\PluginRepository;
use Eccube\Exception\PluginException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Plugin\TaxManagement\Repository\ConfigRepository;
use Plugin\TaxManagement\Entity\Config;

class PluginManager extends AbstractPluginManager
{
    public function install(array $meta, ContainerInterface $container)
    {
	}

    public function enable(array $meta, ContainerInterface $container)
    {
        $this->_initData($container);
	}

    public function disable(array $meta, ContainerInterface $container)
    {

	}

    public function update(array $meta, ContainerInterface $container)
    {
        $this->_initData($container);
    }

    public function uninstall(array $meta, ContainerInterface $container)
    {

    }

    private function _initData($container) {
        $Plugin = $container->get(PluginRepository::class)->findByCode('TaxManagement');

        if (!$Plugin) {
            throw new NotFoundHttpException();
        }

        $pluginVersion = $Plugin->getVersion();
        if($pluginVersion && $pluginVersion == '1.0.0') {
            $em = $container->get('doctrine.orm.entity_manager');
            $schemaManager = $em->getConnection()->getSchemaManager();
            $columns = $schemaManager->listTableColumns('plg_tax_management_config');
            $columnNames = [];
            foreach($columns as $column){
                $columnNames[] = $column->getName();
            }
            if(!$columnNames || !in_array('discount_rate_flag', $columnNames) || !in_array('include_tax_flag', $columnNames)) {
                throw new PluginException(trans('admin.store.plugin.update.failed', ['%plugin_name%' => $Plugin->getName()]).'Please read README.md');
            } else {
                $CurrentConfig = $container->get(ConfigRepository::class)->get();
                if($CurrentConfig === null) {
                    $Config = new Config();
                    $Config->setDiscountRateFlag(true);
                    $Config->setIncludeTaxFlag(false);

                    $em->persist($Config);
                    $em->flush($Config);
                }

            }
        }
    }
}

?>