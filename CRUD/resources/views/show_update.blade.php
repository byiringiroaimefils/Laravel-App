<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>show_update</title>
</head>
<body>
    <h2>Update Task</h2>
    <form action="{{ route('todo.update', $todo->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="task_name" value="{{ $todo->task_name }}" placeholder="Task name">
        <button type="submit" onclick="return confirm('Are you sure?')">Update Task</button>
    </form>
</body>
</html>
