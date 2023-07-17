<?php

namespace App\Http\Controllers;

use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class StatesController extends Controller
{
    public function index(Request $r, State $state): JsonResponse {
        $data = $state->all();
        return response()->json(['data' => $data]);
    }
}
