<?php

namespace Hirenbuhecha\LaravelEvents;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    use ConfiguredEvents;
}
