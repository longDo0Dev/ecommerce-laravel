<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'E-commerce')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <header class="bg-dark text-white p-3">
        <div class="container">
            <h2>My E-commerce</h2>
        </div>
    </header>

    <main class="container py-4">
        @yield('content')
    </main>

    <footer class="bg-dark text-white text-center py-3 mt-4">
        <p>© 2025 My E-commerce. All rights reserved.</p>
    </footer>
</body>
</html>
