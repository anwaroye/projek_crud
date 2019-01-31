<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_event');
            $table->string('title_event');
            $table->string('img_event')->nullable()->default(null);
            $table->string('status_event')->nullable()->default(null);
            $table->text('desc_event');
            $table->softDeletes();
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
        Schema::dropIfExists('table_events');
    }
}
