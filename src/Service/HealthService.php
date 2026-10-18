<?php

namespace App\Service;

use App\Contract\HealthServiceInterface;

final class HealthService implements HealthServiceInterface
{
    /**
     * @return array<string, string|int>
     */
    public function getStatus(): array
    {
        return [
            'status' => 200,
            'service' => 'ecommerce-api',
        ];
    }
}
