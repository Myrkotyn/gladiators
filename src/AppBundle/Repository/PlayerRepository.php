<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * Class PlayerRepository
 *
 * @author Oleg Kachinsky <logansoleg@gmail.com>
 */
class PlayerRepository extends EntityRepository
{
    /**
     * Get players in roster
     *
     * @return array
     */
    public function getPlayersInRoster()
    {
        $queryBuilder = $this->createQueryBuilder('p');

        return $queryBuilder
            ->where($queryBuilder->expr()->eq('p.inRoster', true))
            ->getQuery()
            ->getResult();
    }
}
