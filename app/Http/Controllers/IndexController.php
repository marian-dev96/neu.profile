<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Menu;
use App\Slider;
use App\Skill;
use App\About;
use App\Portfolio;
use Mail;

class IndexController extends Controller
{
    //
	
	public function execute(Request $request) {
		
		
		if($request->isMethod('post')){
			
			$messages = [
				'required' => 'Поле :attribute обязательное к заполнению',
				'email' => 'Поле :attribute должно соответствувать email адресу',
			];

			
			$this->validate($request,[
								'name' => 'required|max:255',
								'email' => 'required|email',
								'text' => 'required',
			], $messages);
			
			$data = $request->all();
			//dd($data);
			

			$result = Mail::send('site.email',['data' => $data], function($message) use ($data){
				
				$mail_admin = env('MAIL_ADMIN');
				
				$message->from($data['email'],$data['name']);
				$message->to($mail_admin)->subject('Question');
				
			});

			return redirect()->route('home')->with('status','E-Mail is send');
			
		}
		
		
		
		
		$menu = Menu::all();
		$sliders = Slider::all();
		$abouts = About::all();
		
		
		$portfolios = Portfolio::get(['name','filter','images']);
		$tags = DB::table('portfolios')->distinct()->pluck('filter');
		
		
		
		$skills_programming = Skill::where('type','programming')->get();
		$skills_designing = Skill::where('type','designing')->get();
		
		$menu_array = array();
		foreach($menu as $value) {
			
			$item = array('title' => $value->title, 'alias'=>$value->alias, 'atributes'=>$value->atributes);
			array_push($menu_array,$item);
			
		}
		
		
		
		return view('site.index',[
			'title' => 'Neu Profile - Single page website',
			'longtitle' => 'I create beautiful responsive websites, Yes I am a UX geek',
			'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse interdum erat et neque tincidunt volutpat. Cras eget augue id dui varius pretium. Cras posuere dolor risus. Pellentesque elementum ultricies quam, sit amet rhoncus nisl viverra in. Cras imperdiet nisi a euismod molestie. Ut a metus arcu. Pellentesque feugiat dictum erat. Nulla vehicula condimentum purus, quis imperdiet nisl ultricies eleifend. Nulla quis rhoncus risus. Ut vel vehicula urna.',
			'author' => 'WebThemez',
			'adress' => 'WebThemez Company<br> 134 Stilla. Tae., 414515<br> Leorislon, SA 02434-34534 USA<br>',
			'phone' => '12345-49589-2',
			'menu' => $menu_array,
			'sliders' => $sliders,
			'skills_programming' => $skills_programming,
			'skills_designing' => $skills_designing,
			'abouts' => $abouts,
			'tags' => $tags,
			'portfolios' => $portfolios
		]);
	
	}
	
	
	
}
