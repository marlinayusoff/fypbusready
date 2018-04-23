<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\CheckPoint;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;


class routeController extends Controller
{
  
  public function show() {
    $locations = DB::table('checkpoint')->get();
      return view('route/list-bus-route',compact('locations'));

  }

  public function marker() {
      return view('route/route-marker');

  }

  public function destroy($checkpoint_id)
	{

      $item = CheckPoint::find($checkpoint_id);
      $item->delete();
			session()->flash('List has been deleted.');
			return redirect('route/list-bus-route');
	}

	public function list(){

    $driver = DB::table('pemandu_bas')
              ->select('pemandu_nama')
              ->distinct()
              ->groupBy('pemandu_nama')
              ->orderBy('pemandu_nama', 'asc')
              ->get();

    $laluan_details = DB::table('laluan_bas')
    					->join('pemandu_bas','laluan_bas.pemandu_id','=','pemandu_bas.pemandu_id')
    					->join('checkpoint','laluan_bas.checkpoint_id','=','checkpoint.checkpoint_id')
              ->select('pemandu_bas.*', 'laluan_bas.*', 'checkpoint.*')
              ->groupBy('pemandu_bas.pemandu_nama')
    					->get();

    return view('route/bus-route', compact('laluan_details','driver'));

	}
}
