<?php

/**
 * @author Mark Wilson <mark@89allport.co.uk>
 */

namespace Tickit\TeamBundle\Listener;

use Tickit\CoreBundle\Entity\NavigationItem;
use Tickit\CoreBundle\Listener\NavigationBuilder as AbstractNavigationBuilder;

/**
 * Team navigation builder
 *
 * @package Tickit\TeamBundle\Listener
 */
class NavigationBuilder extends AbstractNavigationBuilder
{
    /**
     * {@inheritDoc}
     */
    public function getRoutes($name)
    {
        switch ($name) {
            case 'main':
                return array(
                    new NavigationItem('Teams', 'team_index', 5)
                );
            default:
                return array();
        }
    }
}