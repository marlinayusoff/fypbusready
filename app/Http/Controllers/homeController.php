<?php

namespace App\Http\Controllers;


use Session;

use Illuminate\Http\Request;

use DB;

use Illuminate\Support\Facades\Redirect;

use Illuminate\Support\Facades\Input;


class homeController extends Controller
{
	public function Home(){
		return view('home');
	}
}
