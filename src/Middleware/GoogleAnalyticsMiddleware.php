<?php

namespace AdvancedIdeasMechanics\MezzioGaMiddleware\Middleware;

use Mezzio\Template\TemplateRendererInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\MiddlewareInterface;
use Psr\Http\Server\RequestHandlerInterface;

class GoogleAnalyticsMiddleware implements MiddlewareInterface
{
    private TemplateRendererInterface $template;
    private array $gaConfig;

    public function __construct(TemplateRendererInterface $template, array $gaConfig)
    {
        $this->template = $template;
        $this->gaConfig = $gaConfig;
    }

    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler): ResponseInterface
    {
        $gaId = $this->gaConfig['measurement_id'] ?? null;

        if ($gaId) {
            $this->template->addDefaultParam(
                TemplateRendererInterface::TEMPLATE_ALL,
                'measurement_id',
                $gaId
            );
        }

        return $handler->handle($request);
    }
}