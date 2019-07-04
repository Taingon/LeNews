<?php

use Illuminate\Database\Seeder;

class consumers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('Consumers')->insert([
        	'id'=>'1',
        	'name'=>'siv',
        	'age'=>20,
        	'gender'=>'Male',
        	'special_access'=>'Yes'
        ]);
    }
}
