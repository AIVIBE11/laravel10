<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <title>Mahasiswa</title>
</head>
<body>
    < class="text-center">
        <h1 class="bg-dark text-danger p-3 d-inline-block">
            {{ $nama }}
        </h1>
        <h1 class="bg-dark text-danger p-3 d-inline-block">
            {{ $nilai }}
        </h1>
        <br>
        @if (($nilai >= 85) and ($nilai <= 100))
            <h1 class="bg-dark text-success p-3 d-inline-block">
                A
            </h1>
            @elseif (($nilai >= 70) and ($nilai <= 84))
            <h1 class="bg-dark text-success p-3 d-inline-block">
                B
            </h1>
        
        @elseif (($nilai >= 55) and ($nilai <= 69))
            <h1 class="bg-dark text-warning p-3 d-inline-block">
                C
            </h1>

        @elseif (($nilai >= 40) and ($nilai <= 54))
            <h1 class="bg-dark text-danger p-3 d-inline-block">
                D
            </h1>
        @elseif (($nilai >= 0) and ($nilai <= 39))
            <h1 class="bg-dark text-danger p-3 d-inline-block">
                E
            </h1>
        @else
        <div class="alert alert-warning d-inline-block">{{ $nilai }}
                Nilai tidak Valid
        </div>
        @endif
        <br>
        @if (($nilai >= 0) and ($nilai <= 100))
            <div class="alert alert-success d-inline-block">
                Lulus
            </div>
        @elseif (($nilai >= 50) and ($nilai <= 100))
            <div class="alert alert-success d-inline-block">
                Tidak Lulus
            </div>
        @else
            <div class="alert alert-success d-inline-block">
                Nilai tidak Valid
            </div>
        @endif
        <br>
        @forelse ($nilai2 as $val)
        @if($val >= 50) and ($val <=100)
    </div>
    <script src="{{ asset('/js/bootstrap.js') }}"></script>
    <script src="{{ asset('/js/bootstrap.bundle.js') }}"></script>
</body>
</html>