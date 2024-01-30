<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-row items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Create Category') }}
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
            <form action="{{ route('package.store') }}" method="POST" enctype="multipart/form-data" class="grid grid-cols-1 space-y-2 bg-white border border-slate-200 w-6/12 mx-auto p-4 rounded-lg">
                @csrf
                <div class="flex flex-col space-y-1">
                    <p>Package name</p>
                    <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg" type="text" name="name" id="">
                </div>
                <div class="flex flex-col space-y-1">
                    <p>Inside Package</p>
                    <select name="included[]" multiple class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        @foreach($menu as $item)
                            <option value="{{ $item->name }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="flex flex-col space-y-1">
                    <p>Price</p>
                    <input class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg" type="text" name="price" id="">
                </div>
                <button type="submit" class="w-full bg-orange-500 hover:bg-orange-600 text-white transition-all py-2 rounded-lg">Add Package</button>
            </form>
        </div>
    </div>
</x-app-layout>
