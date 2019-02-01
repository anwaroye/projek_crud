<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableManagersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_managers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('id_manager',8);
            $table->string('position_manager')->nullable()->default(null);
            $table->string('name_manager');
            $table->string('gender')->nullable()->default(null);
            $table->string('birth_manager');
            $table->string('religion');
            $table->string('img_manager')->nullable()->default(null);
            $table->text('address');
            $table->string('desc_manager');
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
        Schema::dropIfExists('table_managers');
    }
}
