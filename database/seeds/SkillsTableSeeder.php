<?php

use Illuminate\Database\Seeder;
use App\Skill;

class SkillsTableSeeder extends Seeder
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
			['title' => 'HTML5','progress'=>'90','type'=>'programming'],
			['title' => 'CSS/CC3','progress'=>'90','type'=>'programming'],
			['title' => 'JavaScript','progress'=>'80','type'=>'programming'],
			['title' => 'jQuery/Ajax','progress'=>'90','type'=>'programming'],
			['title' => 'Photoshop','progress'=>'90','type'=>'designing'],
			['title' => 'Illustrator','progress'=>'80','type'=>'designing'],
			['title' => 'Indesign','progress'=>'75','type'=>'designing']
		];
		

		foreach($data_array as $data){
			Skill::create($data);
		}
		
    }
}
