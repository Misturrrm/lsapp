<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDeptIdToCatalogues2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::table('catalogues', function (Blueprint $table) {
    $table->integer('dept_id')->unsigned();

    $table->foreign('dept_id')->references('dept_id')->on('department')->onDelete("NO ACTION");
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('catalogues', function($table){
            $table->dropColumn('dept_id');
        });
    }
}
