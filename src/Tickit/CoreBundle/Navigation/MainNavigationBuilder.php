<?php

namespace Tickit\CoreBundle\Navigation;

use Tickit\CoreBundle\Entity\NavigationItem;
use Tickit\CoreBundle\Navigation\Event\BuildEvent;
use Tickit\CoreBundle\TickitCoreEvents;

/**
 * Main navigation builder.
 *
 * Responsible for building the main navigation structure.
 *
 * @package Tickit\CoreBundle\Navigation
 * @author  James Halsall <james.t.halsall@googlemail.com>
 * @author  Mark Wilson <mark@89allport.co.uk>
 */
class MainNavigationBuilder extends AbstractBuilder implements BuilderInterface
{
    /**
     * Builds the main navigation component.
     *
     * @return \SplPriorityQueue
     */
    public function build()
    {
        $event = new BuildEvent('main');
        $this->dispatcher->dispatch(TickitCoreEvents::MAIN_NAVIGATION_BUILD, $event);

        return $event->getItems();
    }
}
