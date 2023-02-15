<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/sidebar.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav class="sidebar">

            <ul class="list-unstyled mt-5 text-center">
                <li>
                    <a href="/dashboard" data-toggle="collapse" aria-expanded="false" class="fw-bold text-dark">Dashboard</a>
                </li>
                <li>
                    <a class="text-dark fw-bold" href="/table">Kelola data Produk</a>
                </li>
                <li class="logout">
                    <a class="text-dark fw-bold" href="/">Logout</a>
                </li>
            </ul>     
        </nav>

        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>