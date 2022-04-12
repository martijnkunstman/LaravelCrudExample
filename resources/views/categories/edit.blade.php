<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Category - Edit') }}
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
    <form method="post" action="{{ route('categories.update', $category->id) }}">
        @csrf
        @method('PUT')
        <label for="name">name</label>
        <input type="text" id="name" name="name" value="{{ $category->name }}"><br>
        <label for="description">description</label>
        <input type="text" id="description" name="description" value="{{ $category->description }}"><br>
        <label for="active">active</label>
        <input type="checkbox" id="active" name="active" {{$category->active===1?"checked":""}}><br>
        <button type="submit" class="btn btn-success">edit</button>
    </form>
</x-app-layout>