<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    
	public static function home(){
		return view('pages.home')->withHeroes(\App\Hero::all());
	}

}
