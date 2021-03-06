<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDeptNameToCatalogues1 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
      public function up()
    {
         Schema::table('catalogues', function($table){
            $table->integer('dept_id')->unsigned();
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
