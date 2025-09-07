<?php

namespace Plugin\GmoEpsilon4;

use Eccube\Plugin\AbstractPluginManager;
use Plugin\GmoEpsilon4\Entity\Config;
use Symfony\Component\DependencyInjection\ContainerInterface;

class PluginManager extends AbstractPluginManager
{

    /**
     * PluginManager constructor.
     */
    public function __construct()
    {

    }

    public function install(array $config, ContainerInterface $container)
    {

    }

    public function enable(array $config, ContainerInterface $container)
    {
        $this->createPlgGmoEpsilonConfig($container);
    }

    public function uninstall(array $config, ContainerInterface $container)
    {

    }

    /**
     * create table plg_gmo_epsilon_config
     *
     * @param ContainerInterface $container
     */
    public function createPlgGmoEpsilonConfig(ContainerInterface $container)
    {
        $entityManage = $container->get('doctrine.orm.entity_manager');
        $Config = $entityManage->find(Config::class, 1);
        if ($Config) {
            return;
        }

        // プラグイン情報初期セット NULL
        $Config = new Config();

        $entityManage->persist($Config);
        $entityManage->flush($Config);
    }

}
