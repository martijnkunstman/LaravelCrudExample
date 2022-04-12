<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Category - Create') }}
        </h2>
    </x-slot>
    <div>
        <p><a href="{{ route('categories.index') }}">Back</a></p>
    </div>
    @if ($errors->any())
    <div>
        <p>Errors:</p>
    </div>
    @foreach ($errors->all() as $error)
    <div>
        <p>{{ $error }}</p>
    </div>
    @endforeach
    @endif
    <form method="post" action="{{ route('categories.store') }}">
        @csrf
        <label for="name">name</label>
        <input type="text" id="name" name="name"><br>
        <label for="description">description</label>
        <input type="text" id="description" name="description"><br>
        <label for="active">active</label>
        <input type="checkbox" id="active" name="active"><br>
        <button type="submit" class="btn btn-success">create</button>
    </form>
</x-app-layout>