<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload Blog</title>
</head>
<body>
    Create a Blog

    <form action="{{ route('dashboard') }}">
        <input type="text" placeholder="title" required>
        <input type="text" placeholder="description" required>
        <textarea name="" placeholder="enter your content" id="" cols="30" rows="10"></textarea>
        <button>Upload Blog</button>
    </form>

    <br>
    <br>
    <br>
    <br>
    <a href="{{ route('dashboard') }}">back</a>

</body>
</html>