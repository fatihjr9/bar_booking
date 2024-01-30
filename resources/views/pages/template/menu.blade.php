<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Menu') }}
            </h2>
            <button id="dropdownHoverButton" data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover"  class="text-white bg-orange-400 hover:bg-orange-500 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center" type="button">
                Add
                <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                </svg>
            </button>
            <div id="dropdownHover" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                <ul class="py-2 text-sm text-black dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                    <li>
                      <a href="{{ route('menu.create') }}" class="block px-4 py-2 hover:bg-orange-100 text-black hover:text-orange-600">Add Menu</a>
                    </li>
                    <li>
                      <a href="{{ route('category.create') }}" class="block px-4 py-2 hover:bg-orange-100 text-black hover:text-orange-600">Add Category</a>
                    </li>
                    <li>
                      <a href="{{ route('package.create') }}" class="block px-4 py-2 hover:bg-orange-100 text-black hover:text-orange-600">Add Package</a>
                    </li>
                </ul>
            </div>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="bg-white p-4 rounded-lg space-y-6">
                <h5 class="text-xl font-medium">Package</h5>
                <div class="grid grid-cols-1 gap-2">
                    @forelse ($package as $item)
                    <div class="border shadow-sm rounded-lg flex flex-row justify-between items-center">
                        <div class="flex flex-row items-center gap-2 w-full">
                            <img class="w-24 h-fit bg-center object-cover rounded-l-lg" src="{{ asset('menu/'.$item->image) }}" alt="{{ $item->name }}">
                            <div class="flex flex-col space-y-1">
                                <h5 class="font-semibold">{{ $item->name }}</h5>
                                <h5 class="font-semibold">Rp {{ number_format($item->price, 0, ',', '.') }}</h5>
                                <h5 class="text-slate-800 text-sm">{{ $item->included }}</h5>
                            </div>
                        </div>
                        <div class="flex flex-row gap-x-1 justify-end pr-4 w-40">
                            <a href="" class="p-2 bg-orange-50 text-orange-500 rounded-md w-fit h-fit">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                </svg>                                  
                            </a>
                            <form action="{{ route('menu.destroy', ['id' => $item->id]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 bg-red-50 p-2 w-fit h-fit rounded-md">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                    </svg>                                      
                                </button>
                            </form>
                        </div>
                    </div>
                    @empty
                        <tr class="bg-white border-b text-black">
                            <td colspan="7" class="px-6 py-4 text-center">
                                No Data Available
                            </td>
                        </tr>
                    @endforelse
                </div>
            </div>
            <div class="bg-white p-4 rounded-lg space-y-6">
                <h5 class="text-xl font-medium">Menu</h5>
                <div class="grid grid-cols-1 gap-2">
                    @forelse ($menu as $item)
                    <div class="border shadow-sm rounded-lg flex flex-row justify-between items-center">
                        <div class="flex flex-row items-center gap-2 w-full">
                            <img class="w-24 h-fit bg-center object-cover rounded-l-lg" src="{{ asset('menu/'.$item->image) }}" alt="{{ $item->name }}">
                            <div class="grid grid-cols-1 space-y-2">
                                <div class="grid grid-cols-2 divide-x">
                                    <div class="flex flex-col col-start-1 space-y-1">
                                        <h5 class="font-semibold">{{ $item->name }}</h5>
                                        <h5 class="px-2 text-sm text-yellow-500 bg-yellow-50 rounded-md w-fit">{{ $item->category }}</h5>
                                    </div>
                                    <div class="flex flex-col items-start gap-y-1 col-start-2 pl-2">
                                        <h5 class="font-semibold">Rp {{ number_format($item->price, 0, ',', '.') }}</h5>
                                        <div class="flex flex-row items-center gap-x-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                                            </svg>                              
                                            <h5 class="">{{ $item->stock }}</h5>
                                        </div>
                                    </div>
                                </div>
                                <h5 class="text-slate-800">{{ $item->description }}</h5>
                            </div>
                        </div>
                        <div class="flex flex-row gap-x-1 justify-end pr-4 w-40">
                            <a href="" class="p-2 text-orange-500 bg-orange-50 rounded-md w-fit h-fit">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                </svg>                                  
                            </a>
                            <form action="{{ route('menu.destroy', ['id' => $item->id]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 bg-red-50 p-2 w-fit h-fit rounded-md">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                    </svg>                                      
                                </button>
                            </form>
                        </div>
                    </div>
                    @empty
                        <tr class="bg-white border-b text-black">
                            <td colspan="7" class="px-6 py-4 text-center">
                                No Data Available
                            </td>
                        </tr>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
