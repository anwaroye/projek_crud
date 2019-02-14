<?php

use Illuminate\Database\Seeder;

class DataBendaDummy extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('table_objects')->insert([
        'id_object'=> '7ff261ba-d209-480f-80da-1d1bccc440bb',
        'object_name' => 'telepon',
        'type_object'=> 'elektronik',
        'object_desc'=>'anjin',
        'object_img' => 'frame (1).png'
      ]);
  }
}
