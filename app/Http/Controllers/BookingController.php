<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Menu;
use App\Models\Seats;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BookingController extends Controller
{
    public function index() {
        $data = Booking::latest()->get();
        return view('pages.template.order', compact('data'));
    }

    public function create() {
        $menu = Menu::latest()->get();
        return view('client.index', compact('menu'));
    }

    public function store(Request $request) {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'date' => 'required',
            'time' => 'required',
            'person' => 'required',
            'menu' => 'required',
            'country' => 'required',
            'payment' => 'required',
            'affiliate' => 'required'
        ]);
        Booking::create($data);
        return redirect()->route('client.success');
    }
}
