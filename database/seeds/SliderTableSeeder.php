<?php

use Illuminate\Database\Seeder;
use App\Slider;

class SliderTableSeeder extends Seeder
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
			['title' => 'Webdesigner','text'=>'Amazing free responsive website for free, enjoy!!!'],
			['title' => 'UX/UI Developer','text'=>'I develop website using Bootstrap front-end framew...'],
			['title' => 'HTML5/CSS3','text'=>'HTML5 is a markup language used for structuring an...'],
			['title' => 'JavaScript/jQuery','text'=>'jQuery: Write Less, Do More...'],
		];
		

		foreach($data_array as $data){
			Slider::create($data);
		}
		
    }
}
