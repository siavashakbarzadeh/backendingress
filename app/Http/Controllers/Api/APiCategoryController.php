<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class APiCategoryController extends Controller
{
    public function show($id)
    {
        $category = Category::query()->where($id)->firstOrFail();
//        dd('ok');
//        $categories=Category::all();
//        dd($categories);
        return response()->json([
            'categories' => $category,
        ]);
//        return view('Categories/categories-show',compact('categories'));
    }
}
