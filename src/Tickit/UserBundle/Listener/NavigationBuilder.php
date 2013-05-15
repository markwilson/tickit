<?php

namespace Tickit\UserBundle\Listener;

use Tickit\CoreBundle\Entity\NavigationItem;
use Tickit\CoreBundle\Navigation\Event\BuildEvent;

/**
 * User navigation builder
 *
 * @package Tickit\UserBundle\Listener
 * @author  Mark Wilson <mark@89allport.co.uk>
 */
class NavigationBuilder
{
    /**
     * Build event for user navigation
     *
     * @param BuildEvent $event Navigation build event
     */
    public function onBuild(BuildEvent $event)
    {
        switch ($event->getNavigationName()) {
            case 'main':
                $event->addItem(new NavigationItem('Users', 'user_index', 6));
                break;
        }
    }
}