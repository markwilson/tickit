<?php

/**
 * @author Mark Wilson <mark@89allport.co.uk>
 */

namespace Tickit\DashboardBundle\Listener;

use Symfony\Component\Routing\RouterInterface;
use Tickit\CoreBundle\Navigation\Event\BuildEvent;

/**
 * Dashboard navigation builder
 *
 * @package Tickit\DashboardBundle\Listener
 */
class NavigationBuilder
{
    /**
     * Router interface
     *
     * @var RouterInterface $router
     */
    private $router;

    /**
     * Initialise navigation builder with router interface
     *
     * @param RouterInterface $router
     */
    public function __construct(RouterInterface $router)
    {
        $this->router = $router;
    }

    /**
     * Event listener for building the dashboard navigation items
     *
     * @param BuildEvent $event Main navigation build event
     *
     * @return BuildEvent
     */
    public function onBuild(BuildEvent $event)
    {
        $route = $this->router->getRouteCollection()->get('dashboard_index');
        $event->addItem('Dashboard', $route, 10);

        return $event;
    }
}