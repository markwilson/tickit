<?php

namespace Tickit\CoreBundle\Navigation\Event;

use Symfony\Component\EventDispatcher\Event;

/**
 * Before navigation build event.
 *
 * Event that is fired before a navigation component is built.
 *
 * @package Tickit\CoreBundle\Navigation\Event
 * @author  James Halsall <james.t.halsall@googlemail.com>
 */
class BeforeBuildEvent extends Event
{
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
}
