<?php

namespace Tickit\TeamBundle\Listener;

use Tickit\CoreBundle\Entity\NavigationItem;
use Tickit\CoreBundle\Navigation\Event\BuildEvent;

/**
 * Team navigation builder
 *
 * @package Tickit\TeamBundle\Listener
 * @author  Mark Wilson <mark@89allport.co.uk>
 */
class NavigationBuilder
{
    /**
     * Build event for team navigation
     *
     * @param BuildEvent $event Navigation build event
     */
    public function onBuild(BuildEvent $event)
    {
        switch ($event->getNavigationName()) {
            case 'main':
                $event->addItem(new NavigationItem('Teams', 'team_index', 5));
                break;
        }
    }
}
