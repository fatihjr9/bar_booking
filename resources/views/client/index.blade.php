@extends('layouts.client')
@section('content')
    <div class="ring-1 ring-slate-100 p-4 rounded-xl flex flex-col space-y-4 bg-white shadow-md md:w-8/12 mx-auto">
        <h5 class="text-xl font-semibold">Reservation</h5>
        <x-form-order/>
        <x-seat/>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            {{-- Person --}}
            <div class="flex flex-col space-y-1">
                <h5 class="font-medium">How much Person</h5>
                <x-select-person/>
            </div>
            {{-- Menu --}}
            <div class="flex flex-col space-y-1 items-start">
                <h5 class="font-medium">Select Menu</h5>
                <x-menu/>
            </div>
        </div>
        <a href="/payment" class="w-fit ml-auto px-4 py-2 bg-orange-600 text-white rounded-md">Send Order</a>
    </div>
@endsection