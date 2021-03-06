<?php

namespace Cms\WebSiteBundle\Entity\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * TextRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TextRepository extends EntityRepository
{
    public function findAllOrderedByName()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT txt FROM CmsWebSiteBundle:Text txt ORDER BY txt.name ASC'
            )
            ->getResult();
    }

}
