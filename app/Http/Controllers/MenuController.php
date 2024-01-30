<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Menu;
use App\Models\Package;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $package = Package::latest()->get();
        $menu = Menu::latest()->get();
        return view('pages.template.menu', compact('menu','package'));
    }
    public function create()
    {
        $categories = Category::latest()->get();
        return view('pages.action.menu.create', compact('categories'));
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'image' => 'required|image|mimes:png,jpg,jpeg|max:1024',
            'name' => 'required',
            'category' => 'required',
            'description' => 'required',
            'price' => 'required',
            'stock' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            // Move the file to the public/menu directory
            $image->move(public_path('menu/'), $imageName);

            // Store only the file name and extension in the database
            $data['image'] = $imageName;
        }

        Menu::create($data);
        return redirect()->route('menu.index');
    }

    public function destroy($id) {
        $menu = Menu::findOrFail($id);

        // Delete the associated image file from public/menu if it exists
        if ($menu->image) {
            $imagePath = public_path('menu/') . $menu->image;
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }
        $menu->delete();

        return redirect()->route('menu.index');
    }
}
