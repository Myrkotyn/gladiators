<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * Class PostRepository
 *
 * @author Oleg Kachinsky <logansoleg@gmail.com>
 */
class PostRepository extends EntityRepository
{
    public function getAllPosts()
    {
        $queryBuilder = $this->createQueryBuilder('po');

        return $queryBuilder
            ->getQuery()
            ->getResult();
    }
}
