<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">
    <div class="Container  p-36 pl-48 pr-48  ">
        <div class="text-center">
            <h2 class="text-2xl font-bold"> Sign In </h2>
            <p class="text-md">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam, quo.</p>
        </div>
        <form action="{{ route('login') }}" method="get" class="flex flex-col justify-center m-10">
            @csrf
            <label for="">Email</label>
            <input type="text" name="email" class="border p-2 rounded-md bg-transparent">
            @error('email')
            <span style="color: red">{{ $message }}</span>
            @enderror
            <br>
            <label for="">Password</label>
            <input type="password" name="password" class="border p-2 rounded-md bg-transparent">
            @error('password')
                <span style="color: red">{{ $message }}</span>
            @enderror
            <br>
            <p>create account ? <a href="/signUp" class="text-grey">Sign up</a> </p><br>
            <button type="submit" class="bg-black text-white p-2 rounded-full">Login </button>
        </form>
    </div>
</body>

</html>
