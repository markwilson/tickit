<?php

/**
 * @author Mark Wilson <mark@89allport.co.uk>
 */

namespace Tickit\CoreBundle\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

/**
 * Database aware test cases
 *
 * @package Tickit\CoreBundle\Tests
 */
class DatabaseAwareTestCase extends WebTestCase
{
    /**
     * Initialise test database
     */
    public function setUp()
    {
        $kernel = $this->createKernel();
        LoadTestFixtures::getInstance()->initialise($kernel);
    }
}