<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exam_log', function (Blueprint $table) {
            $table->increments('id');
            $table->date("crnt_date");
            $table->string("fname");
            $table->string("lname");
            $table->integer("viewcnt");
            $table->string("ip_addr");
            $table->string("referer");
            $table->string("usr_agent");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('exam_log');
    }
}
