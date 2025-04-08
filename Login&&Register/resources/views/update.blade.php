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
    <h3>Update User</h3>
    <form action="{{ route('update_user',$edit_user->id) }}" method="post">
        @method('Put')
        @csrf
        <input type="text" name="username" placeholder="User Name" value="{{$edit_user->username}}"><br>
        <span style="color: red">
            @error('username')
                {{ $message }}
            @enderror
        </span> <br>
        <input type="email" name="email" placeholder="email" value="{{$edit_user->email}}"><br>
        <span style="color: red">
            @error('email')
                {{ $message }}
            @enderror
        </span><br>
        <button>update</button>
        <button><a href="{{route('dashbord')}}">cancel</a></button>
    </form>
</body>

</html>
