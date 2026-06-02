<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory App</title>
    <!-- Memanggil CSS Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="d-flex flex-column min-vh-100 bg-light">

    <!-- BAGIAN ATAS: NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">Inventory App</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav me-auto">
                    <!-- Navigasi Home -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                    </li>
                    <!-- Navigasi Produk -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('products.index') }}">Product</a>
                    </li>
                    <!-- Navigasi Kategori -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('categories.index') }}">Category</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- BAGIAN TENGAH: KONTEN DINAMIS -->
    <main class="container my-5 flex-grow-1 d-flex flex-column justify-content-center">
        @yield('content')
    </main>

    <!-- BAGIAN BAWAH: FOOTER -->
    @if(!Route::is('products.*') && !Route::is('categories.*'))
        <footer class="bg-dark text-white text-center py-3 mt-auto">
            <div class="container">
                <p class="mb-0">&copy; 2026 Inventory App - Manajemen Informatika PNP</p>
            </div>
        </footer>
    @endif

</body>
</html>