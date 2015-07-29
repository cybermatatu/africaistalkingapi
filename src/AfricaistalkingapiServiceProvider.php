<?php

namespace Codeklan\Africaistalkingapi;

use Illuminate\Support\ServiceProvider;

class AfricaistalkingapiServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $this->package('');
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}