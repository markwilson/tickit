<?php

namespace Tickit\CoreBundle\Navigation\Event;

use Symfony\Component\EventDispatcher\Event;

/**
 * Before navigation build event.
 *
 * Event that is fired when a navigation component is being built.
 *
 * @package Tickit\CoreBundle\Navigation\Event
 * @author  James Halsall <james.t.halsall@googlemail.com>
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
     * @var array
     */
    protected $items = array();

    /**
     * Adds an item to the navigation.
     *
     * @param string  $name  The name of the item (this is what will be output in the navigation view)
     * @param string  $url   The URL for the item (this can be relative or absolute)
     * @param integer $order The order priority number, the higher this is the further up the navigation it will sit
     *
     * @return void
     */
    public function addItem($name, $url, $order)
    {
        //todo
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
}
