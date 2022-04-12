<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Project - Details') }}
        </h2>
    </x-slot>

    <div>
        <p><a href="{{ route('projects.index') }}">Back</a></p>
    </div>
    <label for="name">name</label>
    <input disabled type="text" id="name" name="name" value="{{ $project->name }}"><br>
    <label for="description">description</label>
    <input disabled type="text" id="description" name="description" value="{{ $project->description }}"><br>
    Category: 
    @foreach ($categories as $category => $cat)
    @if ($cat->id == $project->category_id)
    {{$cat->name}}
    @endif
    @endforeach<br>
    Image: <img src="/storage/{{ $project->image }}" style="width:50px; height:50px;">
    <label for="active">active</label>
    <input disabled type="checkbox" id="active" name="active" {{$project->active===1?"checked":""}}><br>
</x-app-layout>