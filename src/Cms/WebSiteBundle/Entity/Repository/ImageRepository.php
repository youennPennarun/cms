<?php

namespace Cms\WebSiteBundle\Entity\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * ImageRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ImageRepository extends EntityRepository
{
    public function findAllOrderedByName()
    {
        return $this->getEntityManager()
            ->createQuery(
                'SELECT img FROM CmsWebSiteBundle:Image img ORDER BY img.name ASC'
            )
            ->getResult();
    }

}
