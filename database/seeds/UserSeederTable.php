<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class UserSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
        	'name' => 'admin',
            'email' => 'admin@gmail.com',
            'image' => 'icon_vn.jpg',
            'password' => bcrypt('123456'),
        ]);
    }
}
