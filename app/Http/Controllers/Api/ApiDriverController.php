<?php

namespace App\Http\Controllers\Api;
use DB;
use Session;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiDriverController extends Controller
{
   
 public function view()
{
    $parentId  = \Auth::guard('api')->user()->id;
    $student = DB::table('pelajar')
                ->join('sekolah', 'sekolah.sekolah_id','pelajar.sekolah_id')
                ->select('pelajar.*','sekolah.*')
                ->where('pelajar.penjaga_id',$parentId)
                ->get();
    $school = DB::table('pelajar')
                ->join('sekolah', 'sekolah.sekolah_id','pelajar.sekolah_id')
                ->select('sekolah.sekolah_id','sekolah.sekolah_nama')
                ->where('pelajar.pelajar_id',$student)
                ->get();
    return $school;
}

}
