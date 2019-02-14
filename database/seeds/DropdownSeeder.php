<?php

use Illuminate\Database\Seeder;

class DropdownSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_benda')->insert([
          'kat_benda' => 'elektronik',
        ]);

        DB::table('jeniskelamins')->insert([
          'jenis_kelamin'=> 'laki-laki'
        ]);
        
        DB::table('position_managers')->insert([
         'position_manag' => 'pemilik'
        ]);

    }
}
