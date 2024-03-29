<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Customer Order') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="relative overflow-x-auto bg-white rounded-xl hover:shadow-md transition-all">
                <table class="w-full text-sm text-left rtl:text-right border border-slate-100 rounded-md relative z-10">
                    <thead class="text-xs uppercase bg-gray-50">
                        <tr>
                            <th scope="col" class="p-4">
                                No
                            </th>
                            <th scope="col" class="p-4">
                                Customer Name
                            </th>
                            <th scope="col" class="p-4">
                                Email
                            </th>
                            <th scope="col" class="p-4">
                                Phone Number
                            </th>
                            <th scope="col" class="p-4">
                                Country
                            </th>
                            <th scope="col" class="p-4">
                                Date,Time & Person
                            </th>
                            <th scope="col" class="p-4">
                                Menu
                            </th>
                            <th scope="col" class="p-4">
                                Payment Method
                            </th>
                            <th scope="col" class="p-4">
                                Affiliate
                            </th>
                            <th scope="col" class="p-4">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr class="bg-white border-b">
                                <th class="p-4">
                                    {{ $loop->iteration }}
                                </th>
                                <th class="p-4 truncate">
                                    {{ $item->name }}
                                </th>
                                <td class="p-4">
                                    {{ $item->email }}
                                </td>
                                <td class="p-4">
                                    {{ $item->phone }}
                                </td>
                                <td class="p-4">
                                    {{ $item->country }}
                                </td>
                                <td class="p-4">
                                    {{ $item->date }} - {{ $item->time }} - {{ $item->person }}
                                </td>
                                <td class="p-4">
                                    {{ $item->menu }}
                                </td>
                                <td class="p-4">
                                    {{ $item->payment }}
                                </td>
                                <td class="p-4">
                                    {{ $item->affiliate }}
                                </td>
                                <td class="p-4 flex flex-row items-center gap-x-1">
                                    <a href="mailto:{{ $item->email }}" class="p-1 rounded-md bg-blue-50 text-blue-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 12 3.269 3.125A59.769 59.769 0 0 1 21.485 12 59.768 59.768 0 0 1 3.27 20.875L5.999 12Zm0 0h7.5" />
                                        </svg>
                                    </a>
                                    <a href="wa.me/{{ $item->phone }}" class="p-1 rounded-md bg-green-50 text-green-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" />
                                        </svg>                                      
                                    </a>
                                    <button class="p-1 rounded-md bg-orange-50 text-orange-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                        </svg>                                      
                                    </button>
                                    <button class="p-1 rounded-md bg-red-50 text-red-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                        </svg>                                      
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>