<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h2>Display Operator</h2> <br>
    <a href="{{ route('index') }}">Add user</a>

    <div>
        @if (Session::has('success'))
            <div>{{ Session::get('success') }}</div>
        @endif
    </div>
    <table>
        <tr>
            <th>Id</th>
            <th>User Name</th>
            <th>Email</th>
            <th>Password</th>
        </tr>

        @foreach ($all_users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->password }}</td>
                <td>
                    <button><a href="{{ route('select', $user->id) }}">update</a></button>
                    <form action="{{ route('delete', $user->id) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you sure?')">delete</button>
                    </form>
                </td>
            </tr>
        @endforeach


    </table>
</body>

</html>
