<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
</head>

<body class="antialiased">
    <div><p>Categories - Overview</p></div>

    <div>
        <p><a href="{{ route('categories.create') }}"> Create New Category</a></p>
    </div>

    @if ($message = Session::get('success'))
    <div>
        <p>{{ $message }}</p>
    </div>
    @endif

    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
        @foreach ($data as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ \Str::limit($value->description, 100) }}</td>
            <td>{{ $value->cat }}</td>
            <td><input disabled type="checkbox" id="active" name="active" {{$value->active===1?"checked":""}}></td>
            <td>
                <form action="{{ route('categories.destroy',$value->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('categories.show',$value->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('categories.edit',$value->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>


</body>

</html>