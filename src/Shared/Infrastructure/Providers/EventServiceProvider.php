<?php

namespace Shared\Infrastructure\Providers;

use Laravel\Lumen\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        \Shared\Infrastructure\Events\ExampleEvent::class => [
            \Shared\Infrastructure\Listeners\ExampleListener::class,
        ],
    ];
}
