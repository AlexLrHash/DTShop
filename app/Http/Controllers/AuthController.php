<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthLoginRequest;
use App\Http\Requests\AuthRegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function user()
    {
        return Auth::user();
    }

    public function login(AuthLoginRequest $request)
    {
        if (!Auth::attempt($request->only('email', 'password'))) {
            abort(401, 'Invalid credentials');
        }

        $user = Auth::user();

        $token = $user->createToken('jwt')->plainTextToken;

        return response([
            'status' => 'succeed',
            'data' => [
                'user' => $user,
                'token' => $token
            ]
        ], 200);
    }

    public function register(AuthRegisterRequest $request)
    {
        $user = User::create($request->all());

        Auth::login($user);

        $token = $user->createToken('jwt')->plainTextToken;

        return response([
            'status' => 'succeed',
            'data' => [
                'user' => $user,
                'token' => $token
            ]
        ], 200);
    }
}
