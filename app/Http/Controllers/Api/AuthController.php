<?php

namespace App\Http\Controllers\Api;

use App\Models\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        $user = admin::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
        ]);
    }

    public function login(Request $request)
    {
        // dd(Auth::attempt($request->only('email', 'password')));
        // if (!Auth::attempt($request->only('email', 'password'))) {
        //     dd($request->all());

        // return response()->json([
        // 'message' => 'Invalid login details'
        //            ], 401);
        //        }
        //        dd($request->all());

        $user = admin::where('email', $request['email'])->firstOrFail();

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
        ]);
    }

    public function user(Request $request)
    {
        return $request->user();
    }

    public function logout(Request $request)
    {
        if (Auth::check()) {
            $request->user()->tokens->each(function ($token, $key) {
                $token->delete();
            });
        }

        return response()->json([
            'message' => 'User successfully logout.'
        ]);
    }
}
