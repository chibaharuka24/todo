<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index () {
        $categories = Category::all();
        return view('index', compact('categories'));
    }

    public function store () {
        return redirect('/');
    }

    public function update () {

    }

    public function delete () {

    }
}
