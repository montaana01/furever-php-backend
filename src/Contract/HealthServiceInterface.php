<?php

namespace App\Contract;

interface HealthServiceInterface
{
    /**
     * @return array<string, string|int>
     */
    public function getStatus(): array;
}
