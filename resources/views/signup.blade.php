<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
</head>
<body>
    Sign up

    <form action="{{ route('login') }}">
        <input type="text" placeholder="full name" required>
        <input type="date" placeholder="date of birth" required>
        <input type="text" placeholder="email" required>
        <input type="text" placeholder="password" required>
        <input type="text" placeholder="confirm password" required>
        <button>Create my account</button>
    </form>
<br>
<br>
<br>
    <a href="{{ route('welcome') }}">return to home</a>
</body>
</html>