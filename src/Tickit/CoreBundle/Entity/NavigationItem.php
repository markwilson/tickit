<?php

/**
 * @author Mark Wilson <mark@89allport.co.uk>
 */

namespace Tickit\CoreBundle\Entity;

use Symfony\Component\Routing\Route;

/**
 * Navigation item
 *
 * @package Tickit\CoreBundle\Entity
 */
class NavigationItem
{
    /**
     * Text to display in navigation
     *
     * @var string $text
     */
    private $text;
    /**
     * Navigation route
     *
     * @var Route $route
     */
    private $route;

    /**
     * Create a navigation item
     *
     * @param string $text  Text to display in navigation
     * @param Route  $route Navigation route
     */
    public function __construct($text, Route $route)
    {
        $this->text  = $text;
        $this->route = $route;
    }

    /**
     * Get text to display in navigation
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Get navigation route
     *
     * @return Route
     */
    public function getRoute()
    {
        return $this->route;
    }

    /**
     * Shortcut function to get navigation path
     *
     * @return string
     */
    public function getRoutePath()
    {
        return $this->getRoute()->getPath();
    }
}