<?php

namespace Tickit\CoreBundle\Navigation;

/**
 * Navigation builder interface.
 *
 * Builders provide functionality for building navigation elements in the application.
 *
 * @package Tickit\CoreBundle\Navigation
 */
interface BuilderInterface
{
    /**
     * Builds the navigation component.
     *
     * @return mixed
     */
    public function build();
}
