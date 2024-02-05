@extends('layouts.client')
@section('content')
    <form action="{{ route('client.store') }}" method="POST" enctype="multipart/form-data" class="border border-slate-100 p-6 rounded-lg w-full md:w-10/12 mx-auto flex flex-col">
        @csrf
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="flex flex-col space-y-1">
                <p class="font-medium">Your Name</p>
                <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg" type="text" name="name" id="">
            </div>
            <div class="flex flex-col space-y-1">
                <p class="font-medium">Your Email</p>
                <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg" type="email" name="email" id="">
            </div>
            <div class="flex flex-col space-y-1">
                <p class="font-medium">Your Phone</p>
                <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg" type="tel" name="phone" id="">
            </div>
            <div class="flex flex-col space-y-1">
                <p class="font-medium">Country</p>
                <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg" type="text" name="country" id="">
            </div>
            <div class="flex flex-col space-y-1">
                <p class="font-medium">Date Time and Seat left</p>
                <div class="flex flex-row justify-between px-4 items-center gap-x-2 bg-gray-50 border border-gray-300 text-gray-900 rounded-lg">
                    <input class="border-none bg-transparent" type="date" name="date" id="">
                    <hr class="rotate-90 border-x border-slate-300 w-9">
                    <input class="border-none bg-transparent" type="time" name="time" id="">
                    <hr class="rotate-90 border-x border-slate-300 w-9">
                    <p class="text-sm md:text-base whitespace-nowrap ">8 seats left</p>
                </div>
            </div>
            <div class="flex flex-col space-y-1">
                <p class="font-medium">Person</p>
                <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg" type="text" name="person" id="">
            </div>
            <div class="flex flex-col space-y-1">
                <p class="font-medium">Affiliate</p>
                <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg" type="text" name="affiliate" id="">
            </div>
            <div class="flex flex-col space-y-1">
                <p class="font-medium">Menu</p>
                <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg" type="text" name="menu" id="">
            </div>
            <div class="flex flex-col space-y-1">
                <p class="font-medium">Payment</p>
                <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg" type="text" name="payment" id="">
            </div>
        </div>
        <button type="submit" class="w-full py-2 bg-indigo-800 text-white rounded-lg mt-4">Continue</button>
    </form>
@endsection