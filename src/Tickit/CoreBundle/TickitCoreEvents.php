<?php

namespace Tickit\CoreBundle;

/**
 * CoreBundle events collection.
 *
 * This class contains a collection of constants representing event names for the core bundle
 *
 * @package Tickit\CoreBundle
 * @author  James Halsall <jhalsall@rippleffect.com>
 */
class TickitCoreEvents
{
    /**
     * Constant representing the name of the "main navigation build" event
     *
     * @const string
     */
    const MAIN_NAVIGATION_BUILD = 'tickit.event.main_navigation_build';

    /**
     * Constant representing the name of the "sub navigation build" event
     *
     * @const string
     */
    const SUB_NAVIGATION_BUILD = 'tickit.event.sub_navigation_build';
}
