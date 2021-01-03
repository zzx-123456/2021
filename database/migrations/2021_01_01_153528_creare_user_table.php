<?php
/*
 * @Author: your name
 * @Date: 2021-01-01 15:35:28
 * @LastEditTime: 2021-01-01 15:41:23
 * @LastEditors: Please set LastEditors
 * @Description: In User Settings Edit
 * @FilePath: \testd:\phpstudy_pro\WWW\2021\database\migrations\2021_01_01_153528_creare_user_table.php
 */

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreareUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table -> bigIncrements('id');
            $table -> string('nickname',20) -> notNull();
            $table -> string('password') -> notNull();
            $table -> string('avatar') -> nullable();
            $table -> string('phone',11);
            $table -> timestamp('reg_time');
            $table -> rememberToken();
            $table -> enum('user_state',[0,1]) -> notNull() -> default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
