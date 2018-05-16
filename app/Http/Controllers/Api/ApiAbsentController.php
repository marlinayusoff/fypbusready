<?php

namespace App\Http\Controllers\Api;
use DB;
use Session;
use App\TidakHadir;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiAbsentController extends Controller
{
   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'pelajar_id' => 'required'
        ]);

        $absent = new TidakHadir;
        $absent->pelajar_id = $request->pelajar_id; 
        $absent->save();

        return response()->json([
            'error' => false,
            'pelajar_id' => $absent->pelajar_id
        ], 200);
    }

    public function viewAbsent(){
        $absentStudent = DB::table('pelajar')
        ->join ('tidakhadir','tidakhadir.pelajar_id','pelajar.pelajar_id')
        ->join('checkpoint','pelajar.checkpoint_id','checkpoint.checkpoint_id')
        ->select('pelajar.pelajar_nama','tidakhadir.updated_at','checkpoint.checkpoint_nama')
        ->whereDate('tidakhadir.updated_at', DB::raw('CURDATE()'))
        ->orderBy('pelajar.pelajar_id','asc')
        ->get();

        return $absentStudent;
    }

}
