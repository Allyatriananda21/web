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
        <h2>Perulangan For</h2>
        <div class="col-md-6">
            @for ($i = 0; $i < 5; $i++)
                Looping ke- {{ $i }} <br/>
            @endfor
        </div>
        <br>

        <h2>Perulangan While</h2>
        <div class="col-md-6">
            <?php $i=1; ?>
            @while ($i < 5)
                Looping ke- {{ $i }} <br/>
                <?php $i++ ?>
            @endwhile
        </div>
    </div>
</body>
</html>