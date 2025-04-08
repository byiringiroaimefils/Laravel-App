<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('style/app.css') }}">
</head>

<body>
    <h2>User Form</h2>
    <form action="{{ route('users.store') }}" method="post">
        @csrf
        @method('POST')
        @if (Session::has('success'))
            <div>{{ Session::get('success') }}</div>
        @endif

        <input type="text" name="name" placeholder="name"><br>
        <span style="color: red">
            @error('name')
                {{ $message }}
            @enderror
        </span> <br><br>
        <input type="email" name="email" placeholder="email"><br>
        <span style="color: red">
            @error('email')
                {{ $message }}
            @enderror
        </span> <br><br>
        <input type="password" name="password" placeholder="password"><br>
        <span style="color: red">
            @error('password')
                {{ $message }}
            @enderror
        </span> <br><br>
        <input type="submit" name="submit">
    </form>
</body>

</html>
