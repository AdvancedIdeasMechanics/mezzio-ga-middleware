# Mezzio Google Analytics Measurement Protocol #
Mezzio Middleware for Google Analytics Middleware

### Composer ###

`composer require advancedideasmechanics/mezzio-ga-middleware`

#### Use ####

For pipeline.php Middleware Use.

Recommend placing just before $app->pipe(RouteMiddleware::class);

`$app->pipe(AdvancedIdeasMechanics\MezzioGaMiddle\Middleware\GoogleAnalyticsMiddleware::class);`

For route.php Middleware use.

`use AdvancedIdeasMechanics\MezzioGaMiddle\Middleware\GoogleAnalyticsMiddleware::class;`

`$app->get('/', [GoogleAnalyticsMiddleware:class, App\Handler\HomePageHandler::class], 'home');`