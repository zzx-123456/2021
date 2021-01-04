<?php
/*
 * @Author: your name
 * @Date: 2021-01-01 15:33:02
 * @LastEditTime: 2021-01-04 15:07:26
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
    $router->resource('user', UserController::class); // 用户
    $router->resource('driver', DriverController::class); // 安全员
    $router->resource('station', StationController::class); // 站点
    $router->resource('order', OrderController::class); // 订单
    $router->resource('car', CarController::class); // 车辆
    $router->resource('evaluation', EvaluationController::class); // 订单评价
});
