<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
</head>

<body class="antialiased">
<div><p>Category - Create</p></div>
    <div>
        <p><a href="{{ route('categories.index') }}">Back</a></p>
    </div>    
    @if ($errors->any())
        <div><p>Errors:</p></div>
            @foreach ($errors->all() as $error)
            <div><p>{{ $error }}</p></div>
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
</body>

</html>