<?php

namespace IndraBasuki\Enum;

use Illuminate\Support\ServiceProvider;
use IndraBasuki\Enum\Commands\MakeEnum;

class EnumServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                MakeEnum::class,
            ]);
        }
    }
}
