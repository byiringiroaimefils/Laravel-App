<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')

</head>

<body class="bg-gray-100">
    <nav>
        <ul class="flex justify-center gap-5 pt-5 font-extrabold">
            <li> <a href="/Home" >Home</a> </li>
            <li><a href="/userData"> User</a></li>
            <li><a href="/About">Docum</a> </li>   
            <li><a href="/logout">Logout</a> </li>
        </ul>
    </nav>

    <div class="container mx-auto mt-10">
        <div class="text-center">
            <h2 class="text-2xl font-bold">All user's Information</h2>
            <p class="text-md">Lorem  dolor sit amet consectetur adipisicing elit. Quam, quo.</p>
        </div><br><br>
        <table class="min-w-full ">
            <thead>
                <tr>
                    <th class="py-2 ">ID</th>
                    <th class="py-2">Title</th>
                    <th class="py-2">Author</th>
                    <th class="py-2">Story</th>
                    <th class="py-2">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td class="border px-4 py-2">{{ $user->id }}</td>
                        <td class="border px-4 py-2">{{ $user->Tstory }}</td>
                        <td class="border px-4 py-2">{{ $user->author }}</td>
                        <td class="border px-4 py-2">{{ $user->story }}</td>
                        <td class="border px-4 py-3">
                            <a class="text-blue-500 " href="{{ url('/userData/' . $user->id . '/edit') }}">Edit</a>
                            <a class="text-red-500" href="{{ url('/userData/' . $user->id . '/delete') }}">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>
