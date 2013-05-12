<?php

/**
 * @author Mark Wilson <mark@89allport.co.uk>
 */

namespace Tickit\CoreBundle\Listener;

use Symfony\Component\Routing\Router;
use Symfony\Component\Routing\RouterInterface;
use Tickit\CoreBundle\Navigation\Event\BuildEvent;
use Tickit\CoreBundle\Entity\NavigationItem;

/**
 * Abstract navigation builder
 *
 * @package Tickit\CoreBundle\Listener
 */
abstract class NavigationBuilder
{
    /**
     * Get the routes to add to navigation
     *
     * Should take multi-dimensional array consisting of text, route name, and priority
     * e.g. array(array('text', 'route_name', 0))
     *
     * @param string $name Identifier for navigation
     *
     * @return NavigationItem[]
     */
    abstract public function getRoutes($name);

    /**
     * Router interface
     *
     * @var RouterInterface $router
     */
    private $router;

    /**
     * Initialise navigation builder with router interface
     *
     * @param RouterInterface $router Router interface
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
        foreach ($this->getRoutes($event->getName()) as $item) {
            $routeName = $item->getRouteName();

            if ($this->router instanceof Router) {
                $url = $this->router->generate($routeName, $item->getParams());
            } else {
                $url = $this->router->getRouteCollection()->get($routeName)->getPath();
            }

            $item->setUrl($url);
            $event->addItem($item);
        }

        return $event;
    }
}