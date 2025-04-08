<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Crud operation</title>
</head>

<body>
    <h2>Crud operation</h2>
    <form action="{{ route('todo.store') }}" method="post">
        @csrf
        <input type="text" name="task_name" placeholder="Task name">
        <button>+Add</button>
    </form>
    <br>
    <h2>Todo List Web Application</h2>
    <table>
        <tr>
            <th>#</th>
            <th>Task Name</th>
            <th>Action</th>
        </tr>
        @foreach ($todo_task as $key => $task)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $task->task_name }}</td>
                <td>
                    <button><a href="{{ route('todo.edit', $task->id) }}">update</a></button>
                    <form action="{{ route('todo.delete', $task->id) }}" method="POST" style="display:inline">
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
