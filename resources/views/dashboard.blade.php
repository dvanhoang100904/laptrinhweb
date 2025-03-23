<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Nhúng style bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <title>Dashboard</title>
</head>

<body>

    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light border border-2 border-dark m-3 mt-4">
        <div class="container">
            <a class="navbar-brand mx-auto mx-lg-0" href="#">Logo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="#!">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Đăng Nhập</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="{{ route('user.registerUser') }}">Đăng ký</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link " href="{{ route('user.createUser') }}">Create</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('signout') }}">Đăng xuất</a>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')
    <!-- Footer -->
    <footer class="bg-light border border-2 border-dark m-3 mt-5">
        <div class="container text-center py-3">
            <p class="mb-0">Lập trình web 2025</p>
        </div>
    </footer>

    <!-- Nhúng js bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>

</body>

</html>
