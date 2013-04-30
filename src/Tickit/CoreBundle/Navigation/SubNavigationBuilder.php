<?php

namespace Tickit\CoreBundle\Navigation;

use Tickit\CoreBundle\Navigation\Event\BuildEvent;
use Tickit\CoreBundle\TickitCoreEvents;

/**
 * Sub navigation builder.
 *
 * Responsible for building the sub navigation structure.
 *
 * @package Tickit\CoreBundle\Navigation
 * @author  James Halsall <james.t.halsall@googlemail.com>
 */
class SubNavigationBuilder extends AbstractBuilder implements BuilderInterface
{
    /**
     * Builds the sub navigation component.
     *
     * @return mixed
     */
    public function build()
    {
        $event = new BuildEvent();
        $this->dispatcher->dispatch(TickitCoreEvents::SUB_NAVIGATION_BUILD, $event);
    }
}
