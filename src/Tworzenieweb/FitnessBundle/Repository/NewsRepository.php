<?php
namespace Tworzenieweb\FitnessBundle\Repository;

use Doctrine\ORM\EntityRepository;

class NewsRepository extends EntityRepository
{
    public function findAllOrderedByDate()
    {
        return $this->getEntityManager()
            ->createQuery('SELECT n FROM TworzeniewebFitnessBundle:News n ORDER BY n.created DESC')
            ->getResult();
    }
}