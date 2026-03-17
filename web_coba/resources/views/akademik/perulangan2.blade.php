<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h2>Perulangan Foreach</h2>
        <div class="col-md-6">
            <h4>Nama = {{ $nama }}, NIM = {{ $nim }}</h4>
                Nilai = 
                @foreach ($total_nilai as $nilai)
                 <div class="alert alert-info d-inline-block"> {{ $nilai }}</div>
                @endforeach
        </div>

        <h2>Perulangan Foreach if else</h2>
        <div class="col-md-6">
            <h4>Nama = {{ $nama }}, NIM = {{ $nim }}</h4>
                Nilai = 
            @forelse ($total_nilai as $val)
                @if (($val >= 0) and ($val < 50))
                    <div class="alert alert-warning d-inline-block"> {{ $val }} </div>
                @elseif (($val >= 50) and ($val < 100))
                    <div class="alert alert-success d-inline-block"> {{ $val }} </div>
                @endif
                @empty
                <div class="alert alert-danger d-inline-block"> Data tidak valid </div>
            @endforelse
        </div>
    </div>
</body>
</html>