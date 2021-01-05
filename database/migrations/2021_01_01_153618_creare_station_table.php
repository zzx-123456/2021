<?php
/*
 * @Author: your name
 * @Date: 2021-01-01 15:36:18
 * @LastEditTime: 2021-01-05 23:35:28
 * @LastEditors: Please set LastEditors
 * @Description: In User Settings Edit
 * @FilePath: \testd:\phpstudy_pro\WWW\2021\database\migrations\2021_01_01_153618_creare_station_table.php
 */

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreareStationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('station', function (Blueprint $table) {
            $table -> bigIncrements('id');
            $table -> string('station_name',100) -> notNull();
            $table -> string('serial_num',20) -> notNull();
            $table -> string('circle_num',20) -> notNull();
            $table -> string('location') -> notNull();
            $table -> decimal('latitude',20,14) -> notNull();
            $table -> decimal('longitude',20,14) -> notNull();
            $table -> timestamps();
    });
}
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('station');
    }
}
