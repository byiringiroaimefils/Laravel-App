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
    <h1>Register</h1>
    <form action="{{ route('register.store') }}" method="post">
        @method('post')
        @csrf
        @if (Session::has('success'))
            <div>{{ Session::get('success') }}</div>
        @endif

        <input type="text" name="username" placeholder="User Name"><br>
        <span style="color: red" >
            @error('username')
                {{ $message }}
            @enderror
        </span> <br>
        <input type="email" name="email" placeholder="email"><br>
        <span style="color: red">
            @error('email')
                {{ $message }}
            @enderror
        </span><br>
        <input type="password" name="password" placeholder="PassWord"><br>
        <span style="color: red">
            @error('password')
                {{ $message }}
            @enderror
        </span> <br>
        <a href="/login"> Login</a>
        <button>Register</button>
    </form>
</body>

</html>
