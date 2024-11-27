<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')

</head>
<body>
    <nav>
        <ul class="flex justify-center gap-5 pt-5 font-extrabold">
            <li> <a href="/Home" class="">Home</a> </li>
            <li><a href="/userData" class=""> User</a></li>
            <li><a href="/About" class="">Docum</a> </li>
            <li><a href="/logout" class="">Logout</a> </li>
        </ul>
    </nav>
    <main class="Container">
       {{$slot}}
    </main>
</body>
</html>