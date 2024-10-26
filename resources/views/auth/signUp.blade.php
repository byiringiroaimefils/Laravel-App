<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">
    <div class="Container">
        <div class="text-center">
            <h2 class="text-2xl font-bold">Create Acount</h2>
            <p class="text-md">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam, quo.</p>
        </div>
        <form action="{{url('register') }}" method="post" class="flex flex-col justify-center m-10">
            @csrf
            @method('post')

            <label for="">User Name</label>
            <input type="text" name="username" class="border p-2 rounded-md bg-transparent">
            {{-- @error('emai')
            <span style="color: red">{{ $message }}</span>
            @enderror --}}
            <br>
            <label for="">Email</label>
            <input type="email" name="email" class="border p-2 rounded-md bg-transparent">
            {{-- @error('emai')
            <span style="color: red">{{ $message }}</span>
            @enderror --}}
            <br>
            <label for="">PassWord</label>
            <input type="password" name="password" class="border p-2 rounded-md bg-transparent">
            {{-- @error('name')
                <span style="color: red">{{ $message }}</span>
            @enderror --}}
            <br>

            <button type="button " class="bg-black text-white p-2 rounded-full"> Sign Up </button>
        </form>
    </div>
</body>

</html>
