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
                <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full" type="tel" name="phone" id="phone">
            </div>
            <div class="flex flex-col space-y-1">
                <p class="font-medium">Country</p>
                <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg" name="country" id="">
                    <x-country/>
                </select>            
            </div>
            <div class="flex flex-col space-y-1">
                <p class="font-medium">Date Time and Seat left</p>
                <div class="grid grid-cols-2 divide-x px-4 items-center gap-x-2 bg-gray-50 border border-gray-300 text-gray-900 rounded-lg">
                    <input class="border-none bg-transparent text-sm" type="date" name="date" id="">
                    <select name="time" class="bg-transparent border-none text-gray-900 text-sm rounded-lg w-full" id="">
                        <option value="2 persons">10.00 - 8 Seats left</option>
                    </select>
                </div>
            </div>
            <div class="flex flex-col space-y-1">
                <p class="font-medium">Person</p>
                <select class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg" name="person" id="">
                    <x-person/>
                </select>            
            </div>
            <div class="flex flex-col space-y-1">
                <p class="font-medium">Affiliate</p>
                <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg" type="text" name="affiliate" id="">
            </div>
            <div class="flex flex-col space-y-1">
                <p class="font-medium">Menu</p>
                <div onclick="openModal()" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg p-2 text-center">Choose menu</div>
                
                <div id="myModal" class="fixed inset-0 z-20 bg-black bg-opacity-75 justify-center hidden">
                    <div class="bg-white w-6/12 rounded-md shadow-md mx-auto items-center mt-20 p-6">
                        <h5 class="text-2xl font-bold mb-4">Menu</h5>
                        @foreach ($menu as $item)
                            <div class="flex flex-row justify-between gap-2 items-center border-b pb-1 mb-4">
                                <div class="flex flex-row items-center gap-x-4">
                                    <input type="checkbox" id="">
                                    <div class="flex flex-col space-y-1.5">
                                        <div class="flex flex-col">
                                            <h5 class="text-lg font-semibold">{{ $item->name }}</h5>
                                            <p class="text-sm text-slate-700">{{ $item->description }}</p>
                                        </div>
                                        <p class="text-sm  font-semibold">Rp {{ number_format($item->price, 0, ',', '.') }}</p>
                                    </div>
                                </div>
                                <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-16 ml-auto" type="number" name="quantity" id="quantity" value="1" min="1">
                            </div>
                        @endforeach
                    </div>
                </div>
                {{-- <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg" type="text" name="menu" id=""> --}}
            </div>
            <div class="flex flex-col space-y-1">
                <p class="font-medium">Payment</p>
                <select name="payment" id="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg">
                    @foreach ($menu as $item)
                        <option value="">Local Bank</option>
                        <option value="">Paypal</option>
                        <option value="">Cash</option>
                    @endforeach
                </select>            
            </div>
            <div class="flex flex-col space-y-1">
                <p class="font-medium">Payment</p>
                <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg" disabled />          
            </div>
        </div>
        <button type="submit" class="w-full py-2 bg-indigo-800 text-white rounded-lg mt-4">Continue</button>
    </form>
    <script>
        function openModal() {
            document.getElementById('myModal').classList.remove('hidden');
        }

        // Function to close the modal
        function closeModal() {
            document.getElementById('myModal').classList.add('hidden');
        }

        // Close the modal if the overlay is clicked
        window.onclick = function(event) {
            if (event.target === document.getElementById('myModal')) {
                closeModal();
            }
        };
    </script>
@endsection