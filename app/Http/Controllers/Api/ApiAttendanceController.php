<?php

namespace App\Http\Controllers\Api;
use DB;
use Session;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;
use App\Pelajar;
use App\Jadual;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiAttendanceController extends Controller
{

     public function view()
    {
        $parentId  = \Auth::guard('api')->user()->id;
        $student = DB::table('pelajar')
                ->join ('jadual','jadual.pelajar_id','pelajar.pelajar_id')
                ->select('pelajar.*','jadual.*')
                ->whereDate('jadual.jadual_scan', DB::raw('CURDATE()'))
                ->where('pelajar.penjaga_id',$parentId)
                ->orderBy('pelajar.pelajar_id','asc')
                ->get();
        return $student;
    }

    public function scan(Request $request)
    {
        $this->validate($request, [
            'pelajar_id' => 'required',
            
        ]);

        $jadual = new Jadual;
        $jadual->pelajar_id = $request->pelajar_id;
        $jadual->pemandu_id = 1;
        $jadual->jadual_scan = Carbon::now()->toDateTimeString();
        $jadual->save();

        return response()->json([
            'error' => false,
            'pelajar_id' => $jadual->pelajar_id
        ], 200);
    
    }

    

    public function countCheckpoint(){

        $laluan = DB::table('laluan_bas')->select('laluan_bas.*')->where('laluan_bas.pemandu_id','1')->get();


        $test = DB::table('pelajar')
                ->join('checkpoint','checkpoint.checkpoint_id','pelajar.checkpoint_id')
                ->select(DB::raw('pelajar.checkpoint_id as checkpoint'), DB::raw('count(pelajar.pelajar_id) as total_student'), 'checkpoint.checkpoint_nama')
                //->where($laluan)
                ->groupBy('pelajar.checkpoint_id')
                ->get();

         return $test;       
    }

    public function countCurrentstudent(){

        $test2 = DB::table('pelajar')
                ->join ('checkpoint','checkpoint.checkpoint_id','pelajar.checkpoint_id')
                ->select( DB::raw('count(pelajar.pelajar_id) as total_student'))
                ->groupBy('pelajar.checkpoint_id')
                ->get();

        $checkpoint = DB::table('checkpoint');
        $pelajar = DB::table('pelajar');

        $current = DB::table('tidakhadir')
                    ->union($pelajar)
                    ->union($checkpoint)
                    ->select(DB::raw('count(tidakhadir.pelajar_id) as total_tidakhadir'))
                    ->whereDate('tidakhadir.updated_at', DB::raw('CURDATE()'))
                    ->groupBy('pelajar.checkpoint_id')
                    ->get();

           $test2 = $test2 - $current;

           return $test2;    
    }
}
