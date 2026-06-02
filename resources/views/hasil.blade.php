<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hasil Pendaftaran</title>
</head>
<body>

     <h1 align="center">Hasil Pendaftaran</h1>
    <table align="center" >
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td>{{ $nama }}</td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td>:</td>
            <td>{{ $tempat_lahir }}</td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td>{{ $tanggal_lahir }}</td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>{{ $jenis_kelamin }}</td>
        </tr>
        <tr>
            <td>Nomor HP</td>
            <td>:</td>
            <td>{{ $nomor }}</td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td>{{ $alamat }}</td>
        </tr>
        <tr>
            <td>Jurusan</td>
            <td>:</td>
            <td>{{ $jurusan }}</td>
        </tr>
        <tr>
            <td>Biaya Sumbangan</td>
            <td>:</td>
            <td>{{ $biaya_sumbangan }}</td>
        </tr>
        <tr>
            <td>Biaya Semester</td>
            <td>:</td>
            <td>{{ $biaya_semester }}</td>
        </tr>
        <tr>
            <td>Metode Pembayaran</td>
            <td>:</td>
            <td>{{ $metode_pembayaran }}</td>
        </tr>
        <tr>
            <td>Tanggal Bayar</td>
            <td>:</td>
            <td>{{ $tanggal_bayar }}</td>
        </tr>
    </table>
    <p align="center"><a href="/pendaftaran">Form Pendaftaran</a></p>
</body>
</html>