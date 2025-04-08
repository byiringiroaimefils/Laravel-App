<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update User</title>
</head>
<body>
    <h2>Update User</h2>
    <form action="{{ route('update', $update->id) }}" method="post">
        @csrf
        @method('PUT')
        @if (Session::has('success'))
            <div>{{ Session::get('success') }}</div>
        @endif
        <input type="text" name="name" placeholder="name" value="{{ $update->name }}"><br>
        <span style="color: red">
            @error('name')
                {{ $message }}
            @enderror
        </span> <br><br>
        <input type="email" name="email" placeholder="email" value="{{ $update->email }}"><br>
        <span style="color: red">
            @error('email')
                {{ $message }}
            @enderror
        </span> <br><br>
        <input type="password" name="password" placeholder="password" value="{{ $update->password }}"><br>
        <span style="color: red">
            @error('password')
                {{ $message }}
            @enderror
        </span> <br><br>
        <button type="submit">Update User</button>
    </form>
    <br>
    <a href="{{ route('display') }}">Back to List</a>
</body>
</html>
