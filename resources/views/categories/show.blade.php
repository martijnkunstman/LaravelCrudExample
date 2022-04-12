<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categories - Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <label for="name">name</label>
                    <input type="text" disabled id="name" name="name" value="{{ $category->name }}"><br>
                    <label for="description">description</label>
                    <input type="text" disabled id="description" name="description" value="{{ $category->description }}"><br>
                    <label for="active">active</label>
                    <input type="checkbox" disabled id="active" name="active" {{$category->active===1?"checked":""}}><br>
                    <div>
                        <a href="{{ route('categories.index') }}">
                            <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 ml-3">Back</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>