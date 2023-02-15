<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <center>
    <img src="img/kwa.png" alt="" class="border border-1 rounded-circle mt-5 " style="width: 150px;">
    </center>
<div class="container">
        <div class="register">
            <form action="/pogin" method="POST">
                @csrf 
                <h1>Login</h1>
                <label for="">Email</label>
                <input type="text" name="email" placeholder="Your Email">

                <label for="">Password</label>
                <input type="password" name="password" placeholder="Password">
                <button type="submit" class="mt-2">login</button>
                <p>
                    <a href="/register">Register</a>
                </p>
            </form>
        </div>
</body>
</html>