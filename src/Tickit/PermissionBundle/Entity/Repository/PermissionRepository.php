<?php

namespace Tickit\PermissionBundle\Entity\Repository;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\Query;
use Tickit\UserBundle\Entity\User;

/**
 * Permission repository.
 *
 * Provides methods for retrieving permissions from the database
 *
 * @package Tickit\PermissionBundle\Entity\Repository
 * @author  James Halsall <james.t.halsall@googlemail.com>
 */
class PermissionRepository extends EntityRepository
{

    /**
     * Finds all permissions for a user and their associated groups
     *
     * @param User $user The user to find permissions for
     *
     * @return array
     */
    public function findAllForUser(User $user)
    {
        $query = $this->getEntityManager()
                            ->createQueryBuilder()
                            ->select('p')
                            ->from('TickitPermissionBundle:Permission', 'p')
                            ->innerJoin('p.users', 'up')
                            ->innerJoin('up.user', 'u')
                            ->where('(u.id = :user_id AND up.value = :value)')
                            ->setParameter('user_id', $user->getId())
                            ->setParameter('value', true);

        $group = $user->getGroup();
        if (null !== $group) {
            $query->leftJoin('p.groups', 'gp')
                  ->leftJoin('gp.group', 'g')
                  ->orWhere('(g.id = :group_id AND gp.value = :value)')
                  ->setParameter('group_id', $group->getId())
                  ->setParameter('value', true);
        }

        $permissions = $query->getQuery()->execute();

        return $permissions;
    }

    /**
     * Gets all permission objects in the data layer, indexed by their primary key
     *
     * @return array
     */
    public function findAllIndexedById()
    {
        $query = $this->getEntityManager()
                      ->createQueryBuilder()
                      ->select('p')
                      ->from('TickitPermissionBundle:Permission', 'p', 'p.id')
                      ->getQuery();

        return $query->execute();
    }
}
