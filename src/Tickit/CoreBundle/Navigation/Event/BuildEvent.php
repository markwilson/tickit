<?php

namespace Tickit\CoreBundle\Navigation\Event;

use Symfony\Component\EventDispatcher\Event;
use Symfony\Component\Routing\Route;
use SplPriorityQueue;
use Tickit\CoreBundle\Entity\NavigationItem;

/**
 * Before navigation build event.
 *
 * Event that is fired when a navigation component is being built.
 *
 * @package Tickit\CoreBundle\Navigation\Event
 * @author  James Halsall <james.t.halsall@googlemail.com>
 * @author  Mark Wilson <mark@89allport.co.uk>
 */
class BuildEvent extends Event
{
    /**
     * The feature item (if any)
     *
     * @var array
     */
    protected $featuredItem;

    /**
     * Navigation items.
     *
     * @var SplPriorityQueue $item
     */
    protected $items;

    /**
     * Initialise the navigation items
     */
    public function __construct()
    {
        $this->items = new SplPriorityQueue();
    }

    /**
     * Adds an item to the navigation.
     *
     * @param string  $text     The text for the item (this is what will be output in the navigation view)
     * @param Route   $route    The route for the item
     * @param integer $priority The order priority number, the higher this is the further up the navigation it will sit
     *
     * @return void
     */
    public function addItem($text, Route $route, $priority)
    {
        $navigationItem = new NavigationItem($text, $route);
        $this->items->insert($navigationItem, $priority);
    }

    /**
     * Sets the featured item on the navigation.
     *
     * NOTE: Not all navigation components support featured items. In that case the featured item will
     * be included amongst the regular items.
     *
     * @param string $name The name of the item (this is what will be output in the navigation view)
     * @param string $url  The URL for the item (this can be relative or absolute)
     *
     * @return void
     */
    public function addFeaturedItem($name, $url)
    {
        //todo
    }

    /**
     * Gets the featured item on the navigation
     *
     * @return array
     */
    public function getFeaturedItem()
    {
        return $this->featuredItem;
    }

    /**
     * Gets navigation items
     *
     * @return array
     */
    public function getItems()
    {
        return $this->items;
    }
}
