<?php
/*
 * @Author: your name
 * @Date: 2021-01-01 15:36:01
 * @LastEditTime: 2021-01-01 15:41:58
 * @LastEditors: Please set LastEditors
 * @Description: In User Settings Edit
 * @FilePath: \testd:\phpstudy_pro\WWW\2021\database\migrations\2021_01_01_153601_creare_driver_table.php
 */

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreareDriverTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('driver', function (Blueprint $table) {
            $table -> bigIncrements('id');
            $table -> string('name',20) -> notNull();
            $table -> string('number',20) -> notNull();
            $table -> string('password') -> notNull();
            $table -> string('phone',11) -> notNull();
            $table -> timestamp('add_time');
            $table -> rememberToken();
            $table -> enum('num_state',[0,1]) -> notNull() -> default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('driver');
    }
}
