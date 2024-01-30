<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Package;
use Illuminate\Http\Request;

class PackageController extends Controller
{
    public function create() {
        $menu = Menu::orderBy('name')->get();
        return view('pages.action.menu.createPackage', compact('menu'));
    }

    public function store(Request $request) {
        $data = $request->validate([
            'name'=>'required',
            'included'=>'required|array',
            'price'=>'required',
        ]);
        $data['included'] = implode(',', $data['included']);

        Package::create($data);
        return redirect()->route('menu.index');
    }
}
