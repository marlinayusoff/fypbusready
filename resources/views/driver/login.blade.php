<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;

class schoolController extends Controller
{

  public function insert(Request $req){

    $pemandu_usernama = $req->input('pemandu_usernama');
    $pemandu_password = $req->input('pemandu_password');


    $data = array('pemandu_usernama'=>$pemandu_usernama,'pemandu_password'=>$pemandu_password);

    DB::table('pemandu_bas')->insert($data);


    //return Redirect::to('/school/school_list');
  }


}
