<?php

namespace Tickit\ProjectBundle\Tests\Manager;

use Tickit\CoreBundle\Tests\DatabaseAwareTestCase;

/**
 * Tests for the project manager
 *
 * @author James Halsall <james.t.halsall@googlemail.com>
 */
class ProjectManagerTest extends DatabaseAwareTestCase
{
    /**
     * Test to ensure that the service exists in the container
     *
     * @return void
     */
    public function testServiceExists()
    {
        $container = static::createClient()->getContainer();
        $manager = $container->get('tickit_project.manager');

        $this->assertInstanceOf('\Tickit\ProjectBundle\Manager\ProjectManager', $manager);
    }
}