<?php

namespace App\Helper;

use Illuminate\Routing\Route;

class Config
{
    public function getActiveTheme(): string
    {
        return 'iPortfolio';
    }

    public function getWebsiteName(): string
    {
        return 'RocketCv';
    }

    public function getWebsiteTitle(): string
    {
        return 'RocketCv';
    }

    public function getWebsiteMenu(): array
    {
        return [
            'Home' => '/',
            'CVs' => '/cvs',
            'Add CV' => '/cvs/create',
        ];
    }
}
