<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Streams\Core\Support\Facades\Images;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Images::addPath('unsplash', 'https://source.unsplash.com/');
    }
}
