<?php
/*
 * Copyright(c) 2020 Okada Masaki All Rights Reserved.
 */
namespace Plugin\SitemapXmlGenerator\Repository;

use Doctrine\ORM\ORMException;
use Symfony\Bridge\Doctrine\RegistryInterface;
use Eccube\Common\EccubeConfig;
use Eccube\Repository\AbstractRepository;
use Plugin\SitemapXmlGenerator\Entity\SitemapSetting;

/**
 * SitemapXmlRepository
 * 
 * @author Okada Masaki
 */
class SitemapXmlRepository extends AbstractRepository
{
    /**
     * @var EccubeConfig
     */
    protected $eccubeConfig;

    /**
     * コンストラクタ
     *
     * @param RegistryInterface $registry
     * @param EccubeConfig $eccubeConfig
     */
    public function __construct(
        RegistryInterface $registry,
        EccubeConfig $eccubeConfig
    ) {
        parent::__construct($registry, SitemapSetting::class);
        $this->eccubeConfig = $eccubeConfig;
    }

    /**
     * Flushes all changes to objects that have been queued up to now to the database.
     * This effectively synchronizes the in-memory state of managed objects with the
     * database.
     *
     * If an entity is explicitly passed to this method only this entity and
     * the cascade-persist semantics + scheduled inserts/removals are synchronized.
     *
     * @param null|object|array $entity
     *
     * @return void
     *
     * @throws \Doctrine\ORM\OptimisticLockException If a version check on an entity that
     *         makes use of optimistic locking fails.
     * @throws ORMException
     */
    public function flush($entity)
    {
        $this->getEntityManager()->flush($entity);
    }
}
