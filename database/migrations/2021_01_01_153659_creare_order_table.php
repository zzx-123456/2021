<?php
/*
 * @Author: your name
 * @Date: 2021-01-01 15:36:59
 * @LastEditTime: 2021-01-05 20:30:20
 * @LastEditors: Please set LastEditors
 * @Description: In User Settings Edit
 * @FilePath: \testd:\phpstudy_pro\WWW\2021\database\migrations\2021_01_01_153659_creare_order_table.php
 */

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreareOrderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order', function (Blueprint $table) {
            $table -> bigIncrements('id');
            $table -> string('order_num',20) -> notNull();
            $table -> string('plate_num',20) -> notNull();
            $table -> string('user',20) -> notNull();
            $table -> string('station_up') -> notNull();
            $table -> string('station_down') -> notNull();
            $table -> string('people_num',10) -> notNull();
            $table -> timestamp('order_time');
            $table -> string('order_state',20) -> notNull();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('order');
    }
}
