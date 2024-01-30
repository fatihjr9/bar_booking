@extends('layouts.client')
@section('content')
    <div class="ring-1 ring-slate-100 p-4 rounded-xl flex flex-col space-y-4 bg-white shadow-md w-10/12 md:ml-auto">
        <form action="" class="space-y-4">
            <h5 class="text-lg font-medium border-b border-slate-100 pb-2">Reservation</h5>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="flex flex-col space-y-1">
                    <p class="font-medium">Name</p>
                    <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg" type="text" name="" id="">
                </div>
                <div class="flex flex-col space-y-1">
                    <p class="font-medium">Email</p>
                    <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg" type="text" name="" id="">
                </div>
                <div class="flex flex-col space-y-1">
                    <p class="font-medium">Phone</p>
                    <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg" type="text" name="" id="">
                </div>
                <div class="flex flex-col space-y-1">
                    <p class="font-medium">Person</p>
                    <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg" type="date" name="" id="">
                        <option value="#">2 Person</option>
                        <option value="#">4 Person</option>
                        <option value="#">6 Person</option>
                        <option value="#">8 Person</option>
                    </select>                
                </div>
                <div class="flex flex-col space-y-1">
                    <p class="font-medium">Date</p>
                    <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg" type="date" name="" id="">
                </div>
                <div class="flex flex-col space-y-1">
                    <p class="font-medium">Time</p>
                    <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg" type="date" name="" id="">
                        <option value="#">12.00 - 8 Person Left</option>
                        <option value="#">15.00 - 8 Person Left</option>
                        <option value="#">18.00 - 8 Person Left</option>
                        <option value="#">21.00 - 8 Person Left</option>
                    </select>
                </div>
            </div>
            <h5 class="text-lg font-medium border-b border-slate-100 pb-2">Menu</h5>
            <button data-modal-target="default-modal" data-modal-toggle="default-modal" type="button" class="w-full bg-yellow-50 text-yellow-500 py-1.5 rounded-md">Choose menu</button>
            <div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-2xl max-h-full">
                    <!-- Modal content -->
                    <div class="relative bg-white rounded-lg shadow">
                        <!-- Modal header -->
                        <div class="flex items-center justify-between px-6 py-2 border-b rounded-t">
                            <h3 class="text-xl font-semibold text-gray-900">
                                Menu
                            </h3>
                            <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="default-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                </svg>
                            </button>
                        </div>
                        <!-- Modal body -->
                        <div class="p-4 md:p-5 space-y-4 grid grid-cols-1">
                            <div class="flex flex-col space-y-2">
                                <h5 class="text-lg font-semibold">Package</h5>
                            </div>
                            <div class="flex flex-col space-y-2">
                                <h5 class="text-lg font-semibold">Menu</h5>
                            </div>
                        </div>
                        <!-- Modal footer -->
                        <div class="flex flex-row justify-end px-6 py-2 border-t border-gray-200 rounded-b">
                            <button data-modal-hide="default-modal" type="button" class="ms-3 text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10">Decline</button>
                            <button data-modal-hide="default-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600">I accept</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <a href="/payment" class="w-fit ml-auto px-4 py-2 bg-orange-600 text-white rounded-md">Send Order</a>
    </div>
@endsection