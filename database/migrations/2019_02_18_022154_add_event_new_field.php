<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddEventNewField extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('table_events',function($table){
          $table->string('time_event')->after('img_event')->nullable();
          $table->string('end_event')->after('time_event')->nullable();
          $table->string('location_event')->after('end_event')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::table('table_events',function($table){
        $table->string('time_event')->after('img_event')->nullable();
        $table->string('end_event')->after('time_event')->nullable();
        $table->string('location_event')->after('end_event')->nullable();


      });
    }
}
