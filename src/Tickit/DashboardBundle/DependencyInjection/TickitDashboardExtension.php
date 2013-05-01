<?php

/**
 * @author Mark Wilson <mark@89allport.co.uk>
 */

namespace Tickit\DashboardBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;

/**
 * DashboardBundle DI extension
 *
 * @package Tickit\DashboardBundle\DependencyInjection
 */
class TickitDashboardExtension extends Extension
{
    /**
     * Loads a specific configuration.
     *
     * @param array            $config    An array of configuration values
     * @param ContainerBuilder $container A ContainerBuilder instance
     *
     * @return void
     */
    public function load(array $config, ContainerBuilder $container)
    {
        $xmlLoader = new XmlFileLoader($container, new FileLocator(__DIR__ . '/../Resources/config'));
        $xmlLoader->load('services.xml');
    }

    /**
     * {@inheritDoc}
     *
     * @return string
     */
    public function getAlias()
    {
        return 'tickit_dashboard';
    }

}
