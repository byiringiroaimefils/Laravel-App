<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <nav style="display: flex;justify-content: space-evenly">
        <h3>DashBoard</h3>
        <p>User Name: {{ $data->username }}</p>
        <form action="{{ route('logout') }}" method="post">
            @csrf
            @method('POST')
            <button>Logout</button>
        </form>
    </nav>
    <br><br><br>
    <div>
        <h2>All user Register in this system</h2>
        @if (Session::has('success'))
            <div>{{ Session::get('success') }}</div>
        @endif
        <br>
        <table style="width: 50%" border="2px">
            <tr>

                <th>id</th>
                <th>username</th>
                <th>email</th>
                <th>Action</th>
            </tr>
            @foreach ($get_user as $users)
                <tr>
                    <td>{{ $users->id }}</td>
                    <td>{{ $users->username }}</td>
                    <td>{{ $users->email }}</td>
                    <td style="display:flex;justify-content: space-evenly;padding: ">
                        <button> <a style="text-decoration: none"
                                href="{{ route('user.edit', $users->id) }}">update</a></button>
                        <form action="{{ route('delete_user', $users->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button onclick="alert('do you want to delete')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>

    </div>

</body>

</html>
