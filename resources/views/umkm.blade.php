<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data UMKM</title>
</head>
<body align="center">
    <h2>Data UMKM</h2>
    <table border="1" align="center">
        <thead>
            <tr> </tr>
                <th>Nama</th>
                <th>Pemilik</th>
                <th>Alamat</th>
                <th>No HP</th>
                <th>Jenis Usaha</th>
                <th>Tahun Berdiri</th>
            </tr>
        </thead>
        <tbody>
            @foreach($umkm as $data)
            <tr>
                <td>{{ $data->nama }}</td>
                <td>{{ $data->pemilik }}</td>
                <td>{{ $data->alamat }}</td>
                <td>{{ $data->no_hp }}</td>
                <td>{{ $data->jenis_usaha }}</td>
                <td>{{ $data->tahun_berdiri }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>