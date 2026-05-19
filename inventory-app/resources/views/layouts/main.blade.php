<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIPRO - Sistem Produk</title>
    <meta name="author" content="Yori Adi Atma">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: #f8fafc;
        }
        .page-title {
            letter-spacing: -.03em;
        }
        .table-wrap {
            overflow-x: auto;
        }
        .table td, .table th {
            vertical-align: middle;
        }
        .pagination .page-link {
            padding: .25rem .5rem;
            font-size: .85rem;
        }
        .pagination .page-item:first-child .page-link,
        .pagination .page-item:last-child .page-link {
            border-radius: .25rem;
        }
    </style>
</head>
<body>
    <div class="container-lg py-4">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
