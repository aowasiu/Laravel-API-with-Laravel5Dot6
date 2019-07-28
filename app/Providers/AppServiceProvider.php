<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

/* Fix Laravel issue on string length. This affects Laravels migration to MySQL and MariaDB */
use Illuminate\Support\Facades\Schema;

//Strike out data wrapping in API
//use Illuminate\Http\Resources\Json\Resource;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /* Fix Laravel issue on string length. This affects Laravels migration to MySQL and MariaDB */
        Schema::defaultStringLength(191);

        //If you want to disable Data Wrapping as specified in documentation, otherwise comment this out
  //      Resource::withoutWrapping();
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
