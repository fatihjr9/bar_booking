<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::latest()->get();
        return view('pages.template.menu', compact('categories'));
    }

    public function create() {
        return view('pages.action.menu.createCategory');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'category' => 'required'
        ]);
        Category::create($data);
        return redirect()->route('menu.index');
    }
}
