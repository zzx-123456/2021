<?php
/*
 * @Author: your name
 * @Date: 2021-01-01 15:37:12
 * @LastEditTime: 2021-01-01 15:45:33
 * @LastEditors: Please set LastEditors
 * @Description: In User Settings Edit
 * @FilePath: \testd:\phpstudy_pro\WWW\2021\database\migrations\2021_01_01_153712_creare_evaluation_table.php
 */

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreareEvaluationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evaluation', function (Blueprint $table) {
            $table -> bigIncrements('id');
            $table -> string('order_num',20) -> notNull();
            $table -> string('driver',20) -> notNull();
            $table -> string('user') -> notNull();
            $table -> enum('grade',[1,2,3,4,5]);
            $table -> text('content') -> nullable();
            $table -> timestamp('evaluate_time');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('evaluation');
    }
}
