<?php

namespace Tickit\ProjectBundle\Listener;

use Tickit\CoreBundle\Entity\NavigationItem;
use Tickit\CoreBundle\Navigation\Event\BuildEvent;

/**
 * Project navigation builder
 *
 * @package Tickit\ProjectBundle\Listener
 * @author  Mark Wilson <mark@89allport.co.uk>
 */
class NavigationBuilder
{
    /**
     * Build event for project navigation
     *
     * @param BuildEvent $event Navigation build event
     */
    public function onBuild(BuildEvent $event)
    {
        switch ($event->getNavigationName()) {
            case 'main':
                $event->addItem(new NavigationItem('Projects', 'project_index', 8));
                break;
        }
    }
}
