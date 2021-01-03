<?php
/*
 * @Author: your name
 * @Date: 2021-01-01 15:33:02
 * @LastEditTime: 2021-01-01 15:56:51
 * @LastEditors: Please set LastEditors
 * @Description: In User Settings Edit
 * @FilePath: \testd:\phpstudy_pro\WWW\2021\app\Admin\routes.php
 */

use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('user', UserController::class);
    $router->resource('driver', DriverController::class);
    $router->resource('station', StationController::class);
    $router->resource('order', OrderController::class);
    $router->resource('car', CarController::class);
    $router->resource('evaluation', EvaluationController::class);
});
