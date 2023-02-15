<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <center>
    <img src="img/kwa.png" alt="" class="border border-1 rounded-circle mt-5 " style="width: 150px;">
    </center>
<div class="container">
        <div class="register">
            <form action="/regis" method="post">
                @csrf 
                <h1>Register</h1>
                <label for="">Nama</label>
                <input type="name" name="name" placeholder="name">

                <label for="">Email</label>
                <input type="text" name="email" placeholder="Your Email">

                <label for="">Password</label>
                <input type="password" name="password" placeholder="Password">
                <button class="mt-2">Register</button>
                <p>
                    <a href="/login">Login</a>
                </p>
            </form>
        </div>
</body>
</html>