<?php


namespace Feeloho\Obs;

use Illuminate\Support\ServiceProvider;

class ObsServiceProvider extends ServiceProvider
{
    public function boot()
    {
    }

    public function register()
    {
        $this->app->singleton('Obs',function() {
            //return new TestService();
            return new Obs(
                config('obs.accessKey'),
                config('obs.secretKey'),
                config('obs.bucket'),
                config('obs.endpoint')
            );
        });
    }
}