<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
        	[
        		'name'=>'ngo van hoang',
        		'user'=>'hoangbk93',
        		'email'=>'hoangbk93@gmail.com',
        		'password'=>bcrypt('hoang0214'),
        		'level'=>1
        	],
        	[
        		'name'=>'ngo van hoang',
        		'user'=>'hoangbk931',
        		'email'=>'hoangbk931@gmail.com',
        		'password'=>bcrypt('hoang0214'),
        		'level'=>1
        	],
        	[
        		'name'=>'ngo van hoang',
        		'user'=>'hoangbk932',
        		'email'=>'hoangbk932@gmail.com',
        		'password'=>bcrypt('hoang0214'),
        		'level'=>1
        	],
        	[
        		'name'=>'ngo van hoang',
        		'user'=>'hoangbk933',
        		'email'=>'hoangbk933@gmail.com',
        		'password'=>bcrypt('hoang0214'),
        		'level'=>1
        	]
        ];
        DB::table('users')->insert($data);
    }
}
