<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDepartmentTable2 extends Migration
{
   /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('department', function (Blueprint $table) {
            $table->increments('dept_id');
            $table->string('dept_name');
            $table->timestamps();
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('department');
    }
}
