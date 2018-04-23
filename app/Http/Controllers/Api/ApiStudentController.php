<?php

namespace App\Http\Controllers\Api;

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
            'pelajar_sesi' => 'required'
        ]);

        $pelajar = new Pelajar;
        $pelajar->pelajar_nama = $request->pelajar_nama;
        $pelajar->sekolah_id = $request->sekolah_id;
        $pelajar->pelajar_umur = $request->pelajar_umur;
        $pelajar->pelajar_sesi = $request->pelajar_sesi;
        $pelajar->penjaga_id = \Auth::guard('api')->penjagas()->id;
        $pelajar->save();

        return response()->json([
            'error' => false,
            'pelajar_nama' => $pelajar->pelajar_nama,
            'sekolah_id' => $penjaga->sekolah_id,
            'pelajar_umur' => $post->pelajar_umur,
            'pelajar_sesi' => $post->pelajar_sesi
        ], 200);
    }
}
