<?php

use Illuminate\Database\Seeder;

class ProductBrandTableSeeder extends Seeder
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
        		'brand_name'=>'VERSACE',
        		'brand_status'=>'1',
        	],
        	[
        		'brand_name'=>'J CREW',
        		'brand_status'=>'1',
        	],
        	[
        		'brand_name'=>'CALVIN KLEIN',
        		'brand_status'=>'1',
        	],
        	[
        		'brand_name'=>'TOMMY HILFIGER',
        		'brand_status'=>'1',
        	],
        	[
        		'brand_name'=>'RALPH LAUREN',
        		'brand_status'=>'1',
        	]
        ];
        DB::table('product_brand')->insert($data);
    }
}
