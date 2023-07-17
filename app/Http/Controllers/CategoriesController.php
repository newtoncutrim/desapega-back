<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function index(Request $r, Category $category): JsonResponse {
        $data = $category->all();
        return response()->json(['data' => $data]);
    }
}
