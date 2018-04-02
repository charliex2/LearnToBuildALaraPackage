<?php
/**
 * Created by PhpStorm.
 * User: W
 * Date: 2018/4/2
 * Time: 22:44
 */

namespace XcWong\CarPackage;


use Illuminate\Support\ServiceProvider;

class CarPackageServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . "/Routes/web.php");
//        $this->loadRoutesFrom(__DIR__ . "/Resources/Views", 'carpackage');

        $this->publishes([
            __DIR__ . '/Assets' => public_path('vendor/carpackage')
        ], 'public');
    }

    public function register()
    {
        $this->app->bind('car_package', function () {
            return new CarPackage();
        });
    }

}