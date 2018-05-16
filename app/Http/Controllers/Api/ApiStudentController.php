<?php

namespace App\Http\Controllers\Api;
use DB;
use Session;
use Illuminate\Support\Facades\Input;
use App\Pelajar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiStudentController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return Post::all();
        //return 'jakaka';
        return Pelajar::with('user')->get();
    }

    public function school()
    {
        return DB::table('sekolah')->get();
    }

     public function checkpoint()
    {
        return DB::table('checkpoint')->get();
    }

    public function currentId()
    {
        $currentId = Pelajar::orderBy('pelajar_id', 'desc')->first()->pelajar_id + 1;
        //return $currentId;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'pelajar_nama' => 'required',
            'sekolah_id' => 'required',
            'pelajar_umur' => 'required',
            'pelajar_sesi' => 'required',
            'checkpoint_id' => 'required'
        ]);

        $pelajar = new Pelajar;
        $pelajar->pelajar_nama = $request->pelajar_nama;
        $pelajar->sekolah_id = $request->sekolah_id;
        $pelajar->pelajar_umur = $request->pelajar_umur;
        $pelajar->pelajar_sesi = $request->pelajar_sesi;
        $pelajar->checkpoint_id = $request->checkpoint_id;
        $pelajar->penjaga_id = \Auth::guard('api')->user()->id;
        $pelajar->save();
        $currentId = $pelajar->pelajar_id;

        return response()->json([
            'error' => false,
            'pelajar_nama' => $pelajar->pelajar_nama,
            'sekolah_id' => $pelajar->sekolah_id,
            'pelajar_umur' => $pelajar->pelajar_umur,
            'pelajar_sesi' => $pelajar->pelajar_sesi,
            'checkpoint_id' => $pelajar->checkpoint_id
        ], 200);
    }

     public function view()
    {
        // return Post::all();
        //return 'jakaka';
        $parentId  = \Auth::guard('api')->user()->id;
        $student = DB::table('pelajar')
                ->join ('checkpoint','checkpoint.checkpoint_id','pelajar.checkpoint_id')
                ->join('sekolah', 'sekolah.sekolah_id','pelajar.sekolah_id')
                ->select('pelajar.*','checkpoint.*','sekolah.*')
                ->where('pelajar.penjaga_id',$parentId)
                ->orderBy('pelajar.pelajar_id','asc')
                ->get();
        return $student;
    }
}
