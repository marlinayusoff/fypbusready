<?php

namespace App\Http\Controllers\api;

use Validator;
use \App\Driver;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class ApiPemanduBasController extends Controller
{
    /*public function __construct(){
        $this->middleware('auth:pemandu_bas');
   }*/
	public function loginPemandu(Request $request)
	{

		$this->validate($request, [
            'username' => 'required',
            'password' => 'required'
        ]);


        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            // Authentication passed
           $pemandu_bas = Auth::guard('pemandu_bas')->user();
           $pemandu_bas->api_token = str_random(60);
           $pemandu_bas->save();
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
            'token' => $pemandu_bas->api_token,
        ], 200);

	}

}
