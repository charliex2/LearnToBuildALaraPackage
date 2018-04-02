<?php
/**
 * Created by PhpStorm.
 * User: W
 * Date: 2018/4/2
 * Time: 22:52
 */

namespace XcWong\CarPackage\Facades;


use Illuminate\Support\Facades\Facade;

class CarPackage extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'car_package';
    }

}