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
    <h2>Log In</h2>
    <form action="{{ route('login') }}" method="post">
        @method('post')
        @csrf
        @if (Session::has('success'))
            <div>{{ Session::get('success') }}</div>
        @endif
        <input type="email" name="email" placeholder="email"><br><br>
        <span style="color: red">
            @error('email')
                {{ $message }}
            @enderror
        </span> <br>
        <input type="password" name="password" placeholder="password"><br><br>
        <span style="color: red">
            @error('password')
                {{ $message }}
            @enderror
        </span> <br>
        <button>Log in</button>
        <a href="/">register</a>
    </form>
</body>

</html>
