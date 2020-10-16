<?php

namespace ZContent\ICalendar;

use Illuminate\Support\ServiceProvider;

class ICalendarServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
		require_once(__DIR__ . '../vendor/zcontent/icalendar/zapcallib.php');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
