<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableObjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_objects', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('id_object');
            $table->string('object_name');
            $table->string('type_object')->nullable()->default(null);
            $table->text('object_desc');
            $table->string('object_img')->nullable()->default(null);;
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
        Schema::dropIfExists('table_objects');
    }
}
