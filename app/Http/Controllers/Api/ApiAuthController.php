<?php

namespace App\Http\Controllers\api;

use Validator;
use \App\Penjaga;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ApiAuthController extends Controller
{
    public function loginParents(Request $request)
	{
		$this->validate($request, [
            'username' => 'required',
            'password' => 'required'
        ]);


        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            // Authentication passed
           $user = Auth::user();
           $user->api_token = str_random(60);
           $user->save();
        }else
        {
// Authentication failed
            return response()->json([
            'error' => true,
            'message' => 'Login failed wrong user credentials',
        ], 400);
        }
        // Return token
        return response()->json([
            'error' => false,
            'message' => 'login successful',
            'token' => $user->api_token,
        ], 200);

	}


	 public function registerParents(Request $request)
	    {
	        $this->validate($request, [
	            'username' => 'required',
	            'password' => 'required|min:6', 
	            'penjaga_nama' => 'required',
	            'penjaga_tel' => 'required',
	            'penjaga_alamat' => 'required'
	        ]);

	        $user = new Penjaga;
	        $user->username = $request->username;
	        $user->penjaga_nama = $request->penjaga_nama;
	        $user->penjaga_alamat = $request->penjaga_alamat;
	        $user->penjaga_tel = $request->penjaga_tel;
	        $user->password = bcrypt($request->password);
	        $user->save();

	        return response()->json([
	            'error' => false,
	            'message' => 'register successful',
	        ], 200);
	    }
}
