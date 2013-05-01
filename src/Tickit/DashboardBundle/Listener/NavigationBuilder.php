<?php

/**
 * @author Mark Wilson <mark@89allport.co.uk>
 */

namespace Tickit\DashboardBundle\Listener;

use Tickit\CoreBundle\Navigation\Event\BuildEvent;

/**
 * Dashboard navigation builder
 *
 * @package Tickit\DashboardBundle\Listener
 */
class NavigationBuilder
{
    /**
     * Event listener for building the dashboard navigation items
     *
     * @param BuildEvent $event Main navigation build event
     *
     * @return BuildEvent
     */
    public function onBuild(BuildEvent $event)
    {
        $event->addItem('Dashboard', '/dashboard', 0);

        return $event;
    }
}