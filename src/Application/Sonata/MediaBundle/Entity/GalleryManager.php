<?php

/*
 * This file is part of the Sonata project.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Application\Sonata\MediaBundle\Entity;

use Sonata\MediaBundle\Entity\GalleryManager as BaseManager;
use Doctrine\ORM\EntityManager;

class GalleryManager extends BaseManager
{
    
    
    public function getEnabledWithMedias($id)
    {
        
        $query = $this->em
                ->createQuery('SELECT g,gm,m
                    FROM ApplicationSonataMediaBundle:Gallery g 
                    INNER JOIN g.galleryHasMedias gm
                    INNER JOIN gm.media m
                    WHERE g.id = :id AND g.enabled = :enabled')
                ->setParameter('id', (int) $id)
                ->setParameter(':enabled', true);
     
        
        /* @var $query \Doctrine\ORM\Query */
        
        try {
            return $query->getOneOrNullResult();
        } catch (\Doctrine\ORM\NoResultException $e) {
            return null;
        }
        
    }
}
