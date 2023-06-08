<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
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

        if(Auth::attempt($request->only('username', 'password'))) {
            $user = Auth::user();
            $token = $user->createToken('API Token')->plainTextToken;

            return response()->json([
                'status' => true,
                'data' => $token,
                'message' => 'Login Berhasil',
            ]);
        } else {
            return response()->json([
                'status' => false,
                'data' => null,
                'message' => 'Login gagal. Email atau kata sandi salah.',
            ]);
        }
    }

}

?>
