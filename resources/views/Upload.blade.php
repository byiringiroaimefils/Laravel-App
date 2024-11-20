
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">
    <nav>
        <ul class="flex justify-center gap-5 pt-5 font-extrabold">
            <li> <a href="/Home" class="">Home</a> </li>
            <li><a href="/userData" class=""> User</a></li>
            <li><a href="/About" class="">Docum</a> </li>
            <li><a href="/logout" class="">Logout</a> </li>
        </ul>
    </nav> <br><br>

    <div class="Container">
        <div class="text-center">
            <h2 class="text-2xl font-bold">UPLOAD YOUR STORY </h2>
            <p class="text-md">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam, quo.</p>
        </div>
        <form action="{{url('userData') }}" method="post" class="flex flex-col justify-center m-10">
            @csrf
            @method('post')

            <label for="">Title of Story</label>
            <input type="text" name="tstory" class="border p-2 rounded-md bg-transparent">
            @error('name')
                <span style="color: red">{{ $message }}</span>
            @enderror
            <br>
            <label for="">Author</label>
            <input type="text" name="author" class="border p-2 rounded-md bg-transparent">
            @error('emai')
                <span style="color: red">{{ $message }}</span>
            @enderror
            <br>
            <label for=""> Type your story</label>
            <textarea cols="30" rows="10" name="story" class="border p-2 rounded-md bg-transparent"></textarea>
            @error('level')
                <span style="color: red">{{ $message }}</span>
            @enderror
            <br>

            <button type="button " class="bg-black text-white p-2 rounded-full">Submit</button>
        </form>
    </div>
</body>

</html>




