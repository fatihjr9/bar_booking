<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Seat') }}
            </h2>
            <a href="{{ route('seats.create') }}" class="block px-4 py-2 text-white bg-orange-400 rounded-md">Add Seats</a>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-2 md:grid-cols-2 lg:grid-cols-5 gap-2.5">
            @foreach ($grouped as $date => $seatsByDate)
                <div class="bg-white p-4 rounded-lg space-y-2 md:space-y-6">
                    <h2 class="font-bold text-sm md:text-lg">{{ $date }}</h2>
                    <div class="grid grid-cols-2">
                        @foreach ($seatsByDate as $seat)
                            <div class="flex flex-row items-center gap-x-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>                              
                                <h5 class="text-sm">{{ $seat->time }}</h5>
                            </div>
                            <div class="flex flex-row items-center gap-x-1">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                </svg>                                                               
                                <h5 class="text-sm">{{ $seat->seat }} Seats</h5>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>