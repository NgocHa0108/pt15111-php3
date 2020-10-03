<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;//co the su dung cac phuong thuc 

class CreateSubjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       if (DB::table('subjects')->count() === 0){
        	DB::table('subjects')->insert([
        		[

        			'toan'=>'8',
        			'van'=>'0',
        			'tieng_anh'=>'10',
        			
        		]
        	]);


    }else{
    	echo "bang da co data" . PHP_EOL;
        }
    
    }
}
