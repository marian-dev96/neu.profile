<?php

use Illuminate\Database\Seeder;
use App\Menu;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		
		$data_array = [
			['title' => 'Home','alias'=>'home'],
			['title' => 'About Us','alias'=>'aboutUs'],
			['title' => 'Skills','alias'=>'skills'],
			['title' => 'Portfolio','alias'=>'portfolio'],
			['title' => 'Contact Us','alias'=>'contactUs']
		];
		

		foreach($data_array as $data){
			Menu::create($data);
		}
		
		
    }
}
