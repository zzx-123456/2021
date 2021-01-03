<?php
/*
 * @Author: your name
 * @Date: 2021-01-01 15:49:28
 * @LastEditTime: 2021-01-01 15:50:56
 * @LastEditors: your name
 * @Description: In User Settings Edit
 * @FilePath: \testd:\phpstudy_pro\WWW\2021\app\User.php
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    protected $table = 'user';
    public $timestamps = false;
}
