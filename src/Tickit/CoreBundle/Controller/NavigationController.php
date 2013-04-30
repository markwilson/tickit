<?php

namespace Tickit\CoreBundle\Controller;

use Symfony\Component\HttpFoundation\Response;

/**
 * Provides actions related to the application navigation
 *
 * @package Tickit\CoreBundle\Controller
 * @author  James Halsall <james.t.halsall@googlemail.com>
 */
class NavigationController extends AbstractCoreController
{
    /**
     * Renders the top navigation bar for the application based on the current user type
     *
     * @return Response
     */
    public function topNavigationAction()
    {
        $items = $this->get('tickit.main_navigation_builder')->build();

        return $this->render('TickitCoreBundle:Navigation:top-navigation.html.twig', array('navigation' => $items));
    }

    /**
     * Renders the secondary navigation area for specific pages (if applicable -- not all pages contain a
     * second navigation, in which case this method will return an empty string)
     *
     * @todo
     *
     * @return Response
     */
    public function subNavigationAction()
    {
        $items = $this->get('tickit.sub_navigation_builder')->build();

        return $this->render('TickitCoreBundle:Navigation:sub-navigation.html.twig', array('navigation' => $items));
    }
}
