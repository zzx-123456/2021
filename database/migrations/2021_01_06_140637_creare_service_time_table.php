<?php
/*
 * @Author: your name
 * @Date: 2021-01-06 14:06:37
 * @LastEditTime: 2021-01-06 14:23:27
 * @LastEditors: Please set LastEditors
 * @Description: In User Settings Edit
 * @FilePath: \testd:\phpstudy_pro\WWW\2021\database\migrations\2021_01_06_140637_creare_service_time_table.php
 */

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreareServiceTimeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('service_time', function (Blueprint $table) {
            $table -> bigIncrements('id');
            $table -> string('title',100) -> notNull();
            $table -> string('start_time',50) -> notNull();
            $table -> string('end_time',50) -> notNull();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('service_time');
    }
}
