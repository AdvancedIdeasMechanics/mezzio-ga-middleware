<?php
namespace AdvancedIdeasMechanics\MezzioGaMiddleware;

class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'dependencies' => $this->getDependencies(),
        ];
    }

    public function getDependencies(): array
    {
        return [
            'factories' => [
                // Point the middleware directly to its dedicated factory class string
                Middleware\GoogleAnalyticsMiddleware::class => Middleware\GoogleAnalyticsMiddlewareFactory::class,
            ],
        ];
    }
}