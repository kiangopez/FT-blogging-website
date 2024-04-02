<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    Login
    <br>
    <br>
    <br>
    <form action="{{ route('dashboard') }}">
        <input type="text" placeholder="email" required>
        <input type="text" placeholder="password" required>
        <button>Log in</button>
    </form>
        <a href="{{ route('welcome') }}">return to home</a>
</body>
</html>