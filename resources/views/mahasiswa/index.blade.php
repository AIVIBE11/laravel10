<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}">
    <title>Mahasiswa</title>
</head>
<body>
    
    <h2>Daftar Mahasiswa {{ $kelas }}</h2>
    <ol>
    @foreach($data as $nama)
        <li>{{$nama}}</li>
    @endforeach
    </ol>
    <script src="{{  asset('/js/bootstrap.bundle.js') }}"></script>
    <script src="{{  asset('/js/bootstrap.js') }}"></script>

</body>
</html>