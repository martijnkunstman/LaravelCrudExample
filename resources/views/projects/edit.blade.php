<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
</head>

<body class="antialiased">
    <div><p>Project - Edit</p></div>
    <div>
        <p><a href="{{ route('projects.index') }}">Back</a></p>
    </div>    
    @if ($errors->any())
        <div><p>Errors:</p></div>
            @foreach ($errors->all() as $error)
            <div><p>{{ $error }}</p></div>
            @endforeach
    @endif
    <form method="post" action="{{ route('projects.update', $project->id) }}">
        @csrf
        @method('PUT')
        <label for="name">name</label>
        <input type="text" id="name" name="name" value="{{ $project->name }}"><br>
        <label for="description">description</label>
        <input type="text" id="description" name="description" value="{{ $project->description }}"><br>
        <label for="active">active</label>
        <input type="checkbox" id="active" name="active" {{$project->active===1?"checked":""}} ><br>
        <button type="submit" class="btn btn-success">edit</button>
    </form>
</body>

</html>