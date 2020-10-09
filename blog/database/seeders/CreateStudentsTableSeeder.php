<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CreateStudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (DB::table('students')->count() === 0){
        	DB::table('students')->insert([
        		[

        			'name'=>'nghuyen van A',
        			'phone'=>'0123456789',
        			'age'=>20,
        			'gender'=>1
        		]
        	]);


    }else{
    	echo "bang da co data" . PHP_EOL;
        }
    }
}
