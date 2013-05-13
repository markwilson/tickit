<?php

/**
 * @author Mark Wilson <mark@89allport.co.uk>
 */

namespace Tickit\DashboardBundle\Listener;

use Tickit\CoreBundle\Entity\NavigationItem;
use Tickit\CoreBundle\Navigation\Event\BuildEvent;

/**
 * Dashboard navigation builder
 *
 * @package Tickit\DashboardBundle\Listener
 */
class NavigationBuilder
{
    /**
     * Build event for dashboard navigation
     *
     * @param BuildEvent $event Navigation build event
     */
    public function onBuild(BuildEvent $event)
    {
        switch ($event->getNavigationName()) {
            case 'main':
                $event->addItem(new NavigationItem('Dashboard', 'dashboard_index', 10));
                break;
        }
    }
}