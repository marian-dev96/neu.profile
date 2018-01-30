<?php

use Illuminate\Database\Seeder;
use App\About;

class AboutsTableSeeder extends Seeder
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
			['title' => 'Responsive <span class="id-color">Design</span>','text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse interdum erat et neque tincidunt volutpat. Cras eget augue id dui varius pretium.','icon'=>'fa-desktop'],
			['title' => 'HTML5/CSS3 <span class="id-color">Dev</span>','text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse interdum erat et neque tincidunt volutpat. Cras eget augue id dui varius pretium.','icon'=>'fa-css3'],
			['title' => 'JavaScript <span class="id-color">jQuery</span>','text'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse interdum erat et neque tincidunt volutpat. Cras eget augue id dui varius pretium.','icon'=>'fa-lightbulb-o']
		];
		

		foreach($data_array as $data){
			About::create($data);
		}

    }
}
