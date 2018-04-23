<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;

class loginController extends Controller
{

  public function login(Request $req){
    /*$returning = ['loginMessage' => 'YEA!!'];
      echo json_encode($returning);

     $con = mysqli_connect("127.0.0.1:8000","root","","busready");
    
     if (mysqli_connect_errno()) {
       echo "Nope" . mysqli_connect_error();
     }
     $username = $req -> input('username');
     $password = $req -> input('password');
    
     $data = DB::table('pemandu_bas')->where('pemandu_username', '=', $username)->where('pemandu_password', '=', $password);
    
     while ($row = mysqli_fetch_assoc($data)){
       $array[] = $row;
     }
     header('Content-Type:Application/json');
     if (!empty($array)) {
       $returning = ['loginMessage' => 'YEA!!'];
       echo json_encode($returning);
     } else {
       $returning = ['loginMessage' => 'NO!!'];
       echo json_encode($returning);
    }
    mysqli_free_result($result);
    mysqli_close($con);*/

    

    


    //return Redirect::to('/school/school_list');
  }


}
