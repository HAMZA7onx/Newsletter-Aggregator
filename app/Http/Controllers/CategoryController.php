<?php

namespace App\Http\Controllers;

use App\Models\AdminSide\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::take(30)->get();

        return view('UserSide.categories', compact('categories'));
    }
}
