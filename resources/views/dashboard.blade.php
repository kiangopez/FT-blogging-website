<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>

    <style>
        .post {
            border: 1px solid black
        }
    </style>
</head>
<body>
    <h1>Welcome, this is your dashboard</h1>

    <a href="{{ route('createBlog') }}"> Create a blog</a>
    <br>
    <a href="{{ route('myBlogs') }}"> My Blogs</a>

    <br>
    <br>
    <br>



    <h2> Your Feed</h2>
    <div class="post">
        <div class="details">
           <a href="{{ route('blog') }}"><h2>Blog title</h2></a> 
            <p>blog description</p>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro obcaecati veniam laudantium placeat architecto quod mollitia consectetur sint? Quas, dolorum?</p>
            <br>
            <p><b>Kian Gopez - 04/02/2024</b></p>
        </div>
    </div>
</body>
</html>