<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\SignInRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(Request $r, User $user): JsonResponse
    {
        $data = $user->all();
        return response()->json(['data' => $data]);
    }

    public function signup(CreateUserRequest $cr, User $user): JsonResponse
    {
        $request = $cr->only(['name', 'email', 'password', 'state_id']);
        $request['passwor'] = Hash::make($request['password']);
        $data = $user->create($request);

        $response = [
            'error' => '',
            'token' => $data->createToken('Register_token')->plainTextToken
        ];
        return response()->json($response);

    }

    public function signin(SignInRequest $request): JsonResponse
    {
        $data = $request->only(['email', 'password']);
        if(Auth::attempt($data)){
            $user = Auth::user();
            $response = [
                'error' => '',
                'token' => $user->createToken('login_token')->plainTextToken
            ];
            return response()->json($response);
        }
        return response()->json([
            'error' => 'usuario ou senha invalido'
        ]);


    }
    public function data(): JsonResponse
    {
        $user = Auth::user();

        $response = [
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
            'state' => $user->state->name,
            'ads' => $user->adverts
        ];
        return response()->json($response);

    }
}
