<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Imam;
use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthAPIController extends Controller {

    public function login(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if(Imam::where('username', $validatedData['username'])->exists()){
            $user = Imam::where('username', $validatedData['username'])->first();
            if(password_verify($validatedData['password'], $user->password)){
                $token = $user->createToken('authToken')->plainTextToken;
                return response()->json([
                    'status' => true,
                    'data' => $user,
                    'token' => $token,
                    'message' => 'Login Berhasil'
                ], 200);
            }else{
                return response()->json([
                    'status' => false,
                    'data' => null,
                    'message' => 'Password Salah'
                ], 401);
            }
        }else{
            return response()->json([
                'status' => false,
                'data' => null,
                'message' => 'Data Tidak ditemukan'
            ], 401);
        }
    }


}

?>
