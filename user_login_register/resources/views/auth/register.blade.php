<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h2>Register</h2>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div>
            <label>Name:</label>
            <input type="text" name="name" required>
        </div>

        <div>
            <label>Email:</label>
            <input type="email" name="email"  required>
        </div>

        <div>
            <label>Password:</label>
            <input type="password" name="password" required>
        </div>
        <div>
            <button type="submit">Register</button>
        </div>

        <div>
            <a href="{{ route('login') }}">Already have an account? Login</a>
        </div>
    </form>
</body>
</html>
