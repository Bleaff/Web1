<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Site Visitka')</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <header class="bg-dark text-white py-3">
        <nav class="container d-flex justify-content-between">
            <a href="{{ route('home') }}" class="text-white">Home</a>
            <a href="{{ route('contact') }}" class="text-white">Contact</a>
            <a href="{{ route('gallery') }}" class="text-white">Gallery</a>
            <a href="{{ route('feedback') }}" class="text-white">Feedback</a>
            @auth
                <a href="{{ route('dashboard') }}" class="text-white">Dashboard</a>
                <form action="{{ route('logout') }}" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit" class="btn btn-link text-white">Logout</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="text-white">Login</a>
                <a href="{{ route('register') }}" class="text-white">Register</a>
            @endauth
        </nav>
    </header>

    <!-- Page Content -->
    <main class="container py-4">
        @yield('content')
    </main>

    <footer class="bg-dark text-white py-3 mt-5">
        <div class="container text-center">
            <p>© 2023 Site Visitka</p>
        </div>
    </footer>
</body>
</html>
