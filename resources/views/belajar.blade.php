<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar Passing Data</title>
</head>
<body>
    <h2>Belajar Passing Data Array</h2>
    {{-- nama, mata kuliah yang diambil(list = Pemrograman Akuntansi 1, Laravel, Bahasa Indonesia) --}}
    <p>Nama: {{ $nama }}</p>
    <p>Mata Kuliah:</p>
    <ul>
        @foreach ($mataKuliah as $mk)
            <li>{{ $mk }}</li>
        @endforeach
    </ul>
</body>
</html>