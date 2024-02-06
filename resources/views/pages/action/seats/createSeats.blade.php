<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Seats') }}
            </h2>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('seats.store') }}" method="POST" enctype="multipart/form-data" class="grid grid-cols-1 space-y-4 bg-white border border-slate-200 w-6/12 mx-auto p-4 gap-4 rounded-lg">
                @csrf
                <section class="grid grid-cols-1 gap-2">
                    <div class="flex flex-col space-y-1">
                        <p>Date</p>
                        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg" type="date" name="date" id="">
                    </div>
                    <div class="flex flex-col space-y-1">
                        <p>Available Seats</p>
                        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg" type="number" name="seat" id="">
                    </div>
                    <div class="flex flex-col space-y-1">
                        <p>Time</p>
                        <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg" type="time" name="time" id="">
                    </div>
                </section>
                <button type="submit" class="w-full bg-orange-500 hover:bg-orange-600 text-white transition-all py-2 rounded-lg">Add Seats</button>
            </form>
        </div>
    </div>
</x-app-layout>
