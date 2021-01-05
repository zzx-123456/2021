<?php
/*
 * @Author: your name
 * @Date: 2021-01-01 15:49:58
 * @LastEditTime: 2021-01-04 15:51:34
 * @LastEditors: Please set LastEditors
 * @Description: In User Settings Edit
 * @FilePath: \testd:\phpstudy_pro\WWW\2021\app\Order.php
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $table = 'order';
    public $timestamps = false;

    // 关联车辆模型
    public function car()
    {
        return $this->belongsTo(Car::class, 'plate_num');
    }
}
