<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\School;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;

class schoolController extends Controller
{
  public function create(){
    return view('school/add_school');
  }

  public function insert(Request $req){

    $sekolah_nama = $req->input('sekolah_nama');
    $sekolah_sesi_pagi = $req->input('sekolah_sesi_pagi');
    $sekolah_sesi_petang = $req->input('sekolah_sesi_petang');
    $sekolah_alamat = $req->input('sekolah_alamat');
    $sekolah_tel = $req->input('sekolah_tel');
    $pemandu_noPlat = $req->input('pemandu_noPlat');
    $sekolah_id = $req->input('sekolah_id');

    $data = array('sekolah_nama'=>$sekolah_nama,'sekolah_sesi_pagi'=>$sekolah_sesi_pagi,'sekolah_sesi_petang'=>$sekolah_sesi_petang,'sekolah_alamat'=>$sekolah_alamat,'sekolah_tel'=>$sekolah_tel);

    DB::table('sekolah')->insert($data);

    echo '<script type="text/javascript">';
    echo 'alert("Success!")';
    echo '</script>';

    return Redirect::to('/school/school_list');
  }


  public function schoolList(){

    $data = School::paginate(20);
    return view('school/school_list')->withData($data);
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
 public function edit($sekolah_id)
  {

    $item = School::findOrfail($sekolah_id);
    return view('school.edit_school',  compact('item'));

  }

  public function update()
  {
  
      $sekolah_nama = Input::get('sekolah_nama');
      $sekolah_tel = Input::get('sekolah_tel');
      $sekolah_sesi_pagi = Input::get('sekolah_sesi_pagi');
      $sekolah_sesi_petang = Input::get('sekolah_sesi_petang');
      $sekolah_alamat = Input::get('sekolah_alamat');
      $sekolah_id = Input::get('sekolah_id');
 

      $data = array('sekolah_nama'=>$sekolah_nama,'sekolah_tel'=>$sekolah_tel,'sekolah_sesi_pagi'=>$sekolah_sesi_pagi,'sekolah_sesi_petang'=>$sekolah_sesi_petang,'sekolah_alamat'=>$sekolah_alamat,'sekolah_id'=>$sekolah_id);
      DB::table('sekolah')->where('sekolah_id', $sekolah_id)->update($data);

    return Redirect::to('school/school_list/');
   
  }

  public function destroy($sekolah_id)
	{

      $item = School::find($sekolah_id);
      $item->delete();
			session()->flash('List has been deleted.');
			return redirect('school/school_list/');
	}

}
