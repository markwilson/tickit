<?php

/**
 * @author Mark Wilson <mark@89allport.co.uk>
 */

namespace Tickit\CoreBundle\Tests;

use Doctrine\Bundle\DoctrineBundle\Registry;

/**
 * Singleton for controlling test database
 *
 * @package Tickit\CoreBundle\Tests
 */
class DataFixtures
{
    /**
     * @var DataFixtures $instance Singleton instance
     */
    private static $instance;

    /**
     * @var bool $initialised Flag to specify whether the database has been initialised
     */
    private $initialised = false;

    /**
     * Get the singleton instance
     *
     * @return DataFixtures
     */
    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            $instance = new self();

            // clear the database
            $instance->reset(false);

            self::$instance = $instance;
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
    public function initialise()
    {
        if (!$this->isInitialised()) {
            $doctrine = $this->getDoctrine();

            // @todo: load test fixtures

        }
    }

    /**
     * Get the doctrine service
     *
     * @return Registry
     *
     * @throws \LogicException
     */
    public function getDoctrine()
    {
        if (!$this->container->has('doctrine')) {
            throw new \LogicException('The DoctrineBundle is not registered in your application.');
        }

        return $this->container->get('doctrine');
    }

    /**
     * Reset the test database
     *
     * @param bool $reinitialise Flag specifying whether or not to immediately reinitialise the database
     */
    public function reset($reinitialise = true)
    {
        // @todo: clear the database

        if ($reinitialise) {
            $this->initialise();
        }
    }
}