<?php

namespace App\Contract;

interface HealthServiceInterface
{
    public function getStatus(): array;
}
