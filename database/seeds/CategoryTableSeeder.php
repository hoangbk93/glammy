<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
        	[
        		'parent_id'=>'0',
        		'name'=>'woman',
        		'description'=>'woman category',
        		'url'=>'woman',
        		'status'=>1
        	],
        	[
        		'parent_id'=>'0',
        		'name'=>'man',
        		'description'=>'man category',
        		'url'=>'man',
        		'status'=>1
        	],
        	[
        		'parent_id'=>'0',
        		'name'=>'shoes',
        		'description'=>'shoes category',
        		'url'=>'shoes',
        		'status'=>1
        	]
        ];
        DB::table('categories')->insert($data);
    }
    }
}
