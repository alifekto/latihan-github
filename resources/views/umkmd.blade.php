<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data UMKM</title>
</head>
<body>
    <h2>Data UMKM</h2>
    <a href="/umkmd/create">Tambah UMKM</a>
    <table border="1">
        <tr>
            <th>Nama UMKM</th>
            <th>Pemilik</th>
            <th>Alamat</th>
            <th>No HP</th>
            <th>Jenis Usaha</th>
            <th>Tahun Berdiri</th>
        </tr>
        @foreach ($Umkm as $data)
        <tr>
            <td>{{ $data->nama }}</td>
            <td>{{ $data->pemilik }}</td>
            <td>{{ $data->alamat }}</td>
            <td>{{ $data->no_hp }}</td>
            <td>{{ $data->jenis_usaha }}</td>
            <td>{{ $data->tahun_berdiri }}</td>
        </tr>
        @endforeach
    </table>
</body>>
</html> 
