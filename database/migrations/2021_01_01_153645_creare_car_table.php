<?php
/*
 * @Author: your name
 * @Date: 2021-01-01 15:36:45
 * @LastEditTime: 2021-01-05 20:15:25
 * @LastEditors: Please set LastEditors
 * @Description: In User Settings Edit
 * @FilePath: \testd:\phpstudy_pro\WWW\2021\database\migrations\2021_01_01_153645_creare_car_table.php
 */

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreareCarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('car', function (Blueprint $table) {
            $table -> bigIncrements('id');
            $table -> string('car_num',20) -> notNull();
            $table -> string('plate_num',20) -> notNull();
            $table -> string('color',20) -> notNull();
            $table -> string('type',50) -> notNull();
            $table -> string('car_state',20)-> notNull();
            $table -> string('use_state',20) -> notNull();
            $table -> string('seat_num',10) -> notNull();
            $table -> timestamp('add_time');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('car');
    }
}
