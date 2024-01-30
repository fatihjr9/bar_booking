<?php

namespace App\Http\Controllers;
use Carbon\Carbon;
use App\Models\Seats;
use Illuminate\Http\Request;

class SeatsController extends Controller
{
    public function index() {
        $seats = Seats::orderBy('date')->orderBy('time')->get();

        $grouped = $seats->groupBy(function ($item) {
            return \Carbon\Carbon::parse($item->date)->format('l, d F Y');
        });
    
        return view('pages.template.seat', compact('grouped'));
    }

    public function create() {
        return view('pages.action.seats.createSeats');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'date'=>'required',
            'seat'=>'required',
            'time'=>'required',
        ]);

        Seats::create($data);
        return redirect()->route('seats.index');
    }
}
