<?php

namespace Symfony\Component\Routing\Loader\Configurator;

use App\Controller\HealthController;

return Routes::config([
    'api_php_health' => [
        'path' => '/api/php-health',
        'controller' => [HealthController::class, 'phpHealth'],
        'methods' => ['GET'],
    ],
]);
