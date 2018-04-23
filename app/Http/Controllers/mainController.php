<?php

namespace App\Http\Controllers;

use Session;
use Auth;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Routing\Redirector;


class mainController extends Controller
{
    public function getIndex(){
		if(Session::has('category')) {

			
			if(Session::get('category') == 'admin') {
				$controller = new homeController;
    			return $controller->home();
			}
		}
		return view('login');
	}

	public function loginprocess(Request $req){
		$pengurus_nama = $req->input('userName');
		$pengurus_password = md5($req->input('userPassword'));

		$check_user = DB::table('pengurus_bas')->where('pengurus_nama', '=',$pengurus_nama)->where('pengurus_password', '=', $pengurus_password)->first();

		if($check_user){
			//Session::put('category', 'admin');
			Session::put('user', $check_user);
			//return view('dashboard');

			$controller = new homeController;

    		return $controller->home();
		} 
		else {
				echo '<script type="text/javascript">';
				echo 'alert("Nama Pengguna atau Kata Laluan yang salah.")';
				echo '</script>';
				return view('login');
			}
					/*else {
			$check_user2 = DB::table('tbl_nso')->where('username', '=', $username)->where('password', '=', $password)->first();
			if($check_user2){
				Session::put('category', 'staff');
				Session::put('user', $check_user2);
				$controller = new nsoHomeController;
    			return $controller->home();
			} else {
				$check_user3 = DB::table('tbl_patient')->where('username', '=', $username)->where('password', '=', $password)->first();

				if($check_user3){
					Session::put('category', 'patient');
					Session::put('user', $check_user3);
					return view('patient/patienthome');
				} else {
					echo '<script type="text/javascript">';
					echo 'alert("Nama Pengguna atau Kata Laluan yang salah.")';
					echo '</script>';
					return view('login');
				}
			}
		}*/
	}

	public function logoutprocess() {
		Auth::logout();
		Session::flush();
		return Redirect::to('/');
	}
}
