<?php
/*
 * @Author: your name
 * @Date: 2021-01-06 14:07:15
 * @LastEditTime: 2021-01-06 14:48:19
 * @LastEditors: Please set LastEditors
 * @Description: In User Settings Edit
 * @FilePath: \testd:\phpstudy_pro\WWW\2021\database\migrations\2021_01_06_140715_creare_basic_config_table.php
 */

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreareBasicConfigTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basic_config', function (Blueprint $table) {
            $table -> bigIncrements('id');
            $table -> string('config_item',100) -> notNull();
            $table -> string('contents',100) -> notNull();
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
        Schema::dropIfExists('basic_config');
    }
}
