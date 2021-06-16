<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRateToCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('cursos', function (Blueprint $table) {
            $table->integer('rate1');
            $table->integer('rate2');
            $table->integer('rate3');
            $table->integer('rate4');
            $table->integer('rate5');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cursos', function (Blueprint $table) {
            $table->dropColumn('rate1','rate2','rate3','rate4','rate5');
        });
    }
}
