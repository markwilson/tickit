<?php

/**
 * @author Mark Wilson <mark@89allport.co.uk>
 */

namespace Tickit\TeamBundle\Listener;

use Tickit\CoreBundle\Entity\NavigationItem;
use Tickit\CoreBundle\Navigation\Event\BuildEvent;

/**
 * Team navigation builder
 *
 * @package Tickit\TeamBundle\Listener
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
                $event->addItem(new NavigationItem('Team', 'team_index', 5));
                break;
        }
    }
}