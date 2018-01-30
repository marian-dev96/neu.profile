<?php

use Illuminate\Database\Seeder;

class TestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		
		DB::table('tests')->insert([
			['name' => 'Maryan','firstname' => 'Vengryn','age' => '21','phone' => '3355','city' => 'Lviv'],
			['name' => 'Maryan','firstname' => 'Vengryn','age' => '21','phone' => '3355','city' => 'Lviv'],
			['name' => 'Maryan','firstname' => 'Vengryn','age' => '21','phone' => '3355','city' => 'Lviv']
		]);
		
		
    }
}
