<!DOCTYPE html>
<html>
<head>
    <title>Hasil Booking</title>
</head>
<body>

<h2 align="center">HASIL PEMESANAN</h2>

<table border="1" align="center" cellpadding="10">
    <tr><td>Nama</td><td>{{ $nama }}</td></tr>
    <tr><td>Alamat</td><td>{{ $alamat }}</td></tr>
    <tr><td>Kota</td><td>{{ $kota }}</td></tr>
    <tr><td>Harga</td><td>Rp {{ number_format($harga,0,',','.') }}</td></tr>
    <tr><td>Diskon</td><td>Rp {{ number_format($diskon,0,',','.') }}</td></tr>
    <tr><td>Total Bayar</td><td><b>Rp {{ number_format($bayar,0,',','.') }}</b></td></tr>
</table>

<br>
<center>
    <a href="/tiket">Kembali</a>
</center>

</body>
</html>