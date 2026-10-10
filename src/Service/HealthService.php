<?php

namespace App\Service;

use App\Contract\HealthServiceInterface;

final class HealthService implements HealthServiceInterface
{
    public function getStatus(): array
    {
        return [
            'status' => 200,
            'service' => 'ecommerce-api',
        ];
    }
}
