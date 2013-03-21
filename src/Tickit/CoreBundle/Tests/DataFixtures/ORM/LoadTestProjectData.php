<?php

/**
 * @author Mark Wilson <mark@89allport.co.uk>
 */

namespace Tickit\CoreBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * Load test fixtures
 *
 * @package Tickit\CoreBundle\DataFixtures
 */
class LoadTestProjectData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        // @todo: create project data
    }

    /**
     * Get the position of this fixture in the order
     *
     * @return int
     */
    public function getOrder()
    {
        return 1;
    }
}