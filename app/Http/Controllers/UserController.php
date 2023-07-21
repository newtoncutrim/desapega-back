<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;


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
        $data = $user->create($request);
        return response()->json($data);

    }

    public function signin(): JsonResponse
    {
        return response()->json([
            'method' => 'signin'
        ]);

    }
    public function data(): JsonResponse
    {
        return response()->json([
            'method' => 'data'
        ]);

    }
}
