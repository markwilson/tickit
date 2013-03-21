<?php

/**
 * @author Mark Wilson <mark@89allport.co.uk>
 */

namespace Tickit\CoreBundle\Tests;

use Doctrine\Common\DataFixtures\Executor\ORMExecutor;
use Doctrine\Common\DataFixtures\Loader;
use Doctrine\Common\DataFixtures\Purger\ORMPurger;
use Doctrine\ORM\EntityManager;
use Symfony\Component\HttpKernel\Kernel;

/**
 * Singleton for controlling test database
 *
 * @package Tickit\CoreBundle\Tests
 */
class LoadTestFixtures
{
    /**
     * @var LoadTestFixtures $instance Singleton instance
     */
    private static $instance;

    /**
     * @var bool $initialised Flag to specify whether the database has been initialised
     */
    private $initialised = false;

    /**
     * @var Kernel $kernel Kernel to gain access to the container
     */
    private $kernel;

    /**
     * Get the singleton instance
     *
     * @return LoadTestFixtures
     */
    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    /**
     * Has the database been initialised yet?
     *
     * @return bool
     */
    public function isInitialised()
    {
        return $this->initialised;
    }

    /**
     * Initialise the test database
     */
    public function initialise(Kernel $kernel)
    {
        if (!$this->isInitialised()) {
            $this->kernel = $kernel;
            $this->loadDataFixtures();
        }
    }

    /**
     * Reset the data fixtures
     */
    public function reset()
    {
        $this->loadDataFixtures();
    }

    /**
     * Load data fixtures
     */
    private function loadDataFixtures()
    {
        $em = $this->getEntityManager();

        $loader = new Loader();
        $loader->loadFromDirectory(__DIR__ . DIRECTORY_SEPARATOR . 'DataFixtures');
        $purger = new ORMPurger($em);
        $executor = new ORMExecutor($em, $purger);
        $executor->execute($loader->getFixtures());
    }

    /**
     * Get entity manager
     *
     * @return EntityManager
     *
     * @throws \LogicException
     */
    private function getEntityManager()
    {
        $doctrineEm = 'doctrine.orm.entity_manager';

        $container = $this->kernel->getContainer();
        if (!$container->has('doctrine.orm.entity_manager')) {
            throw new \LogicException('Entity manager not available');
        }

        return $container->get($doctrineEm);
    }
}