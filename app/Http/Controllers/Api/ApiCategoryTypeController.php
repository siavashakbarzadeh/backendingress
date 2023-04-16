<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;

use App\Models\CategoryType;
use Illuminate\Http\Request;

class ApiCategoryTypeController extends Controller
{
    public function show(CategoryType $categoryType)
    {
//        dd('ok');
        $categorytypes=CategoryType::all();
//        dd(categorytypes);
        return response()->json([
            'categorytypes' => $categorytypes,
        ]);
//        return view('Categories/categories-show',compact('categories'));
    }
}
