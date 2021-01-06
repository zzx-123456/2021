<?php
/*
 * @Author: your name
 * @Date: 2021-01-06 14:07:29
 * @LastEditTime: 2021-01-06 14:48:08
 * @LastEditors: Please set LastEditors
 * @Description: In User Settings Edit
 * @FilePath: \testd:\phpstudy_pro\WWW\2021\database\migrations\2021_01_06_140729_creare_text_config_table.php
 */

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreareTextConfigTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('text_config', function (Blueprint $table) {
            $table -> bigIncrements('id');
            $table -> string('text_item',100) -> notNull();
            $table -> string('update_at',50) -> notNull();
            $table -> text('contents') -> nullable();
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
        Schema::dropIfExists('text_config');
    }
}
