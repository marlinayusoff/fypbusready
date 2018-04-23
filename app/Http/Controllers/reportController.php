<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use DB;
use App\Driver;
use App\School;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;


class reportController extends Controller
{
  public function show(){

  	 $sekolah_id = Session::get('sekolah_id');

    $total_driver = Driver::count();

    $total_school = School::count();

    $school = DB::table('sekolah')->get();


    $morning_session =  DB::table('pelajar')
    ->select('sekolah_id', DB::raw('count(*) as total'))
    ->where('pelajar_sesi', 'like', 'Morning')
    ->groupBy('sekolah_id')
    ->pluck('total','sekolah_id')->all();

	 $afternoon_session =  DB::table('pelajar')
    ->select('sekolah_id', DB::raw('count(*) as total'))
    ->where('pelajar_sesi', 'like', 'Afternoon')
    ->groupBy('sekolah_id')
    ->pluck('total','sekolah_id')->all();


    $jan = DB::table('jadual')->where('jadual_tarikh', 'like', '%-01-%')->count();

    $fab = DB::table('jadual')->where('jadual_tarikh', 'like', '%-02-%')->count();

    $mar = DB::table('jadual')->where('jadual_tarikh', 'like', '%-03-%')->count();

    $apr = DB::table('jadual')->where('jadual_tarikh', 'like', '%-04-%')->count();

    $may = DB::table('jadual')->where('jadual_tarikh', 'like', '%-05-%')->count();

    $jun = DB::table('jadual')->where('jadual_tarikh', 'like', '%-06-%')->count();

    $jul = DB::table('jadual')->where('jadual_tarikh', 'like', '%-07-%')->count();

    $aug = DB::table('jadual')->where('jadual_tarikh', 'like', '%-08-%')->count();

    $sep = DB::table('jadual')->where('jadual_tarikh', 'like', '%-09-%')->count();

    $oct = DB::table('jadual')->where('jadual_tarikh', 'like', '%-10-%')->count();

    $nov = DB::table('jadual')->where('jadual_tarikh', 'like', '%-11-%')->count();

    $dec = DB::table('jadual')->where('jadual_tarikh', 'like', '%-12-%')->count();

    $visit = array ( $jan, $fab, $mar, $apr, $may, $jun, $jul, $aug, $sep, $oct, $nov, $dec );


    

    return view('report/view_report',compact('total_driver','total_school','school','morning_session','afternoon_session','visit'));


  }

}
