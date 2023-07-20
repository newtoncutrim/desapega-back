<?php

namespace App\Http\Controllers;

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

    public function signup(): JsonResponse
    {
        return response()->json([
            'method' => 'signup'
        ]);

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
