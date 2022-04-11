<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
</head>

<body class="antialiased">
    <div>category - create</div>
    <form method="post" action="{{ route('category.store') }}">
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