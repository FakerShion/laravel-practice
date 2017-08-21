<?php
declare(strict_types=1);

namespace IntelliHR\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'IntelliHR\Events\SomeEvent' => [
            'IntelliHR\Listeners\EventListener',
        ],
    ];
}
