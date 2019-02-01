<?php

use Illuminate\Database\Seeder;

class UserAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB:table('users')->insert([
          'name'=> 'anwar',
          'email' => 'anwar@gmail.com'
          'password'=> bcrypt('admin'),
        ]);
    }
}
