<?php

namespace App\Service;

use App\Contract\MainPageInterface;

final class MainPageService implements MainPageInterface
{
    private string $title = 'Symfony 7 application';
    private string $copyright = 'made by Alexey Yakovlev';


    public function getTitle(): string
    {
        return $this->title;
    }

    public function getCopyright(): string
    {
        return $this->copyright;
    }
    public function getConfiguration(): array
    {
        return [
            'title' => $this->getTitle(),
            'copyright'=>$this->getCopyright()];
        // TODO: Implement getMainPage() method.
    }
}
