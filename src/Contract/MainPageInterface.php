<?php

namespace App\Contract;

interface MainPageInterface
{
    public function getTitle(): string;
    public function getCopyright(): string;
    public function getMainPageConfiguration(): array;
}
