<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Driver;
use App\Patient;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;


class driverController extends Controller
{
  public function create(){
    $sekolah_details = DB::table('sekolah')->get();
    return view('driver/add_driver', compact('sekolah_details'));
  }

  public function insert(Request $req){

    $pemandu_nama = $req->input('pemandu_nama');
    $pemandu_tel = $req->input('pemandu_tel');
    $pemandu_username = $req->input('pemandu_username');
    $pemandu_password = md5($req->input('pemandu_password'));
    $pemandu_noPlat = $req->input('pemandu_noPlat');
    $sekolah_id = Input::get('sekolah_id');

    $data = array('pemandu_nama'=>$pemandu_nama,'pemandu_tel'=>$pemandu_tel,'pemandu_username'=>$pemandu_username,'pemandu_password'=>$pemandu_password,'pemandu_noPlat'=>$pemandu_noPlat,'sekolah_id'=>$sekolah_id);

    DB::table('pemandu_bas')->insert($data); 

    echo '<script type="text/javascript">';
    echo 'alert("BERJAYA!")';
    echo '</script>';

    return Redirect::to('/driver/driver_list');
  }


  public function driverList(){

    $data = Driver::paginate(20);
    return view('driver/driver_list')->withData($data);
  }

  public function searchDriver(Request $req){

    $data = DB::table('pemandu_bas')->where('pemandu_nama', 'like', '%' . Input::get('searchby') . '%')->paginate();

    //return view('driver/driver_list')->withData($data);
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
 public function edit($pemandu_id)
  {

    $item = Driver::findOrfail($pemandu_id);
    $sekolah_details = DB::table('sekolah')->get();
    return view('driver.edit_driver',  compact('item','sekolah_details'));

  }

  public function update()
  {
      
      $pemandu_nama = Input::get('pemandu_nama');
      $pemandu_tel = Input::get('pemandu_tel');
      $pemandu_username = Input::get('pemandu_username');
      $pemandu_password = Input::get('pemandu_password');
      $pemandu_noPlat = Input::get('pemandu_noPlat');
      $sekolah_id = Input::get('sekolah_id');
      $pemandu_id = Input::get('pemandu_id');
 

      $data = array('pemandu_nama'=>$pemandu_nama,'pemandu_tel'=>$pemandu_tel,'pemandu_username'=>$pemandu_username,'pemandu_password'=>$pemandu_password,'pemandu_noPlat'=>$pemandu_noPlat,'sekolah_id'=>$sekolah_id);
      DB::table('pemandu_bas')->where('pemandu_id', $pemandu_id)->update($data);

   return Redirect::to('driver/driver_list/');
   
  }

  public function destroy($pemandu_id)
	{

      $item = Driver::find($pemandu_id);
      $item->delete();
			session()->flash('List has been deleted.');
			return redirect('driver/driver_list');
	}

}
