<?php

namespace Darinlarimore\StatamicCalendarLinks;

use Statamic\Providers\AddonServiceProvider;
use Darinlarimore\StatamicCalendarLinks\Fieldtypes\CalendarLink;

class ServiceProvider extends AddonServiceProvider
{
    protected $vite = [
        'input' => [
            'resources/js/main.js',
            'resources/css/main.css',
        ],
        'publicDirectory' => 'resources/dist',
    ];

    protected $fieldtypes = [
        CalendarLink::class,
    ];

    public function bootAddon()
    {
        parent::bootAddon();
    }
}
