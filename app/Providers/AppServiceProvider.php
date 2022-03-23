<?php

namespace App\Providers;

use Cloudinary\Cloudinary;
use Illuminate\Support\ServiceProvider;
use Statamic\Statamic;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Cloudinary::class, function () {
            return new Cloudinary(
                [
                    'cloud' => [
                        'cloud_name' => config('services.cloudinary.cloud_name'),
                        'api_key' => config('services.cloudinary.api_key'),
                        'api_secret' => config('services.cloudinary.api_secret'),
                    ],
                ]
            );
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Statamic::script('app', 'cp');
        // Statamic::style('app', 'cp');
        $this->app->bind(\Statamic\Contracts\Assets\Asset::class, \App\Entries\CustomAsset::class);
    }
}
