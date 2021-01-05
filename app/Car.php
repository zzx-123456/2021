<?php
/*
 * @Author: your name
 * @Date: 2021-01-01 15:49:51
 * @LastEditTime: 2021-01-04 15:49:47
 * @LastEditors: Please set LastEditors
 * @Description: In User Settings Edit
 * @FilePath: \testd:\phpstudy_pro\WWW\2021\app\Car.php
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    //
    protected $table = 'car';
    public $timestamps = false;

    // 关联订单模型
    public function order()
    {
        return $this->hasMany(Order::class, 'plate_num');
    }
}
