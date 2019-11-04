<?php

namespace App\Providers;

use DigitalRisks\LaravelEventStore\EventStore;
use DigitalRisks\LaravelEventStore\ServiceProvider as EventStoreApplicationServiceProvider;

class EventStoreServiceProvider extends EventStoreApplicationServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        parent::boot();
    }

    /**
     * Set the eventToClass method.
     *
     * @return void
     */
    public function eventClasses()
    {
        EventStore::eventToClass();
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        parent::register();
    }
}
