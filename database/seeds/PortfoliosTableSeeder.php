<?php

use Illuminate\Database\Seeder;
use App\Portfolio;

class PortfoliosTableSeeder extends Seeder
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
			['name' => 'Project Name','images'=>'img1.jpg','filter'=>'webdesign'],
			['name' => 'Project Name','images'=>'img2.jpg','filter'=>'photography'],
			['name' => 'Project Name','images'=>'img3.jpg','filter'=>'photography'],
			['name' => 'Project Name','images'=>'img4.jpg','filter'=>'print'],
			['name' => 'Project Name','images'=>'img5.jpg','filter'=>'photography'],
			['name' => 'Project Name','images'=>'img6.jpg','filter'=>'webdesign'],
			['name' => 'Project Name','images'=>'img7.jpg','filter'=>'print'],
			['name' => 'Project Name','images'=>'img8.jpg','filter'=>'photography'],
			['name' => 'Project Name','images'=>'img9.jpg','filter'=>'print']
		];
		

		foreach($data_array as $data){
			Portfolio::create($data);
		}
    }
}
