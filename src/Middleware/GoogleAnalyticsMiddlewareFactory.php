<?php

namespace AdvancedIdeasMechanics\MezzioGaMiddleware\Middleware;

use Mezzio\Template\TemplateRendererInterface;
use Psr\Container\ContainerInterface;

class GoogleAnalyticsMiddlewareFactory
{
    public function __invoke(ContainerInterface $container): GoogleAnalyticsMiddleware
    {
        $config = $container->get('config');
        $gaConfig = $config['google_analytics'];
        $template = $container->get(TemplateRendererInterface::class);

        return new GoogleAnalyticsMiddleware($template, $gaConfig);
    }
}