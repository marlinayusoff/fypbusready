<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Query\Builder;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;

use DB;

class attendanceController extends Controller
{

	public function list(){
		$attendance = DB::table('jadual')
					->join('pemandu_bas','pemandu_bas.pemandu_id','=','jadual.pemandu_id')
					->join('pelajar','pelajar.pelajar_id','=','jadual.pelajar_id')
					->select('jadual.*','pemandu_bas.*','pelajar.*')
					->get();
    	return view('attendance.attendance_list', compact('attendance'));
    }
    
    public function viewAtt(){
		//type here
    	return view('attendance.attendance_list', compact('attendance'));
    }
}
