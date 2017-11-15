<?php

namespace Basdegroot\PhpwkhtmltopdfLaravel;

use Illuminate\Support\ServiceProvider;

class PhpwkhtmltopdfLaravelServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // Config file
        $this->publishes([
            __DIR__.'/config/pdf.php' => config_path('phpwkhtmltopdf-laravel.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/config/pdf.php', 'phpwkhtmltopdf-laravel'
        );
    }
}
