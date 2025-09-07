<?php
 
namespace Customize\Repository;
 
use Eccube\Doctrine\Query\QueryCustomizer;
use Eccube\Repository\QueryKey;
use Doctrine\ORM\QueryBuilder;
 
/**
 * 
 */
class TagIdSearchCustomizer implements QueryCustomizer {
 
    /**
     * 検索パラメータにtag_idを追加
     */
    public function customize(QueryBuilder $builder, $params, $queryKey)
    {
        if (!empty($params['tag_id']) && $params['tag_id']) {
            $builder->innerJoin('p.ProductTag', 'pt');
            $builder->andWhere('pt.Tag = :tag_id');
            $builder->setParameter('tag_id', $params['tag_id']);
        }
    }
 
    public function getQueryKey(): string
    {
        return QueryKey::PRODUCT_SEARCH;
    }
 
}