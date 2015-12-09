<?php

namespace AppBundle\Entity;

/**
 * ArticleRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ArticleRepository extends \Doctrine\ORM\EntityRepository
{
    public function queryAllArticles()
    {
        return $this->createQueryBuilder('a')
            ->addOrderBy('a.createdAt', 'DESC')
            ->leftJoin('a.tags', 'tags')
            ->addSelect('tags')
            ->getQuery()
        ;
    }

    public function allArticles()
    {
        return $this->queryAllArticles()->execute();
    }

    /**
     * DQL with addSelect = 'SELECT a, tags FROM AppBundle\Entity\Article a LEFT JOIN a.tags tags WHERE tags.id = :id ORDER BY a.createdAt DESC'
     *      It does not show all tags in every article
     *      Only the tag matching the where condition
     * DQL without addSelect = 'SELECT a FROM AppBundle\Entity\Article a LEFT JOIN a.tags tags WHERE tags.id = :id ORDER BY a.createdAt DESC'
     *      It shows all tags in every article
     *      But it does lazy loading in views
     */
    public function queryArticlesByTagId($id)
    {
        $query = $this->createQueryBuilder('a')
            ->leftJoin('a.tags', 'tags')
            //->addSelect('tags')
            ->addOrderBy('a.createdAt', 'DESC')
            ->andWhere('tags.id = :id')
            ->setParameter('id', $id)
            ->getQuery()
        ;

        //var_dump($query->getDQL());die;
        //var_dump($query->getSQL());die;

        return $query;
    }

    /**
     * Same as above but not using entity
     */
    public function queryArticlesByTagId2($id)
    {
        $em = $this->getEntityManager();

        $query =  $em->createQueryBuilder()
            ->select('a', 'tag')
            ->from('AppBundle:Article', 'a')
            ->leftJoin('a.tags', 'tag')
            ->andWhere('tag.id = :id')
            ->setParameter('id', $id)
            ->addOrderBy('a.createdAt', 'DESC')
            ->getQuery()
        ;

        //var_dump($query->getDQL());die;
        return $query;
    }

    public function articlesByTagId($id)
    {
        return $this->queryArticlesByTagId($id)->execute();
    }
}
