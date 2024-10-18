<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">


    <nav>
        <ul class="flex justify-center gap-5 pt-5 font-extrabold">
            <li> <a href="/" class="">Home</a> </li>
            <li><a href="/userData" class=""> User</a></li>
            <li><a href="/About" class="">Docum</a> </li>
        </ul>
    </nav><br> <br>


    <div class="Container">
        <div class="text-center">
            <h2 class="text-2xl font-bold">Update your information</h2>
            <p class="text-md">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam, quo.</p>
        </div>
        <form action="{{ url('/userData/' . $user->id . '/edit') }}" method="POST"
            class="flex flex-col justify-center m-10">
            @csrf
            @method('Put')

            <label for="">User Name</label>
            <input type="text" name="name" value={{ $user->name }} class="border p-2 rounded-md bg-transparent">
            @error('name')
                <span style="color: red">{{ $message }}</span>
            @enderror
            <br>
            <label for="">Email</label>
            <input type="text" name="email" value={{ $user->email }} class="border p-2 rounded-md bg-transparent">
            @error('emai')
                <span style="color: red">{{ $message }}</span>
            @enderror
            <br>
            <label for="">Level</label>
            <input type="number" name="level" value={{ $user->level }} class="border p-2 rounded-md bg-transparent">
            @error('level')
                <span style="color: red">{{ $message }}</span>
            @enderror
            <br>
            <label for="">Student Code</label>
            <input type="number" name="studentCode" value={{ $user->studentCode }}
                class="border p-2 rounded-md bg-transparent">
            @error('studentCode')
                <span style="color: red">{{ $message }}</span>
            @enderror
            <br>
            <button type="button " class="bg-black text-white p-2 rounded-full">Update</button>
        </form>
    </div>
</body>

</html>
