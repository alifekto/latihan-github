<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create UMKM</title>
</head>
<body>
    <h2>Tambah Data UMKM</h2>
    <form action="/umkmd" method="POST">
        @csrf
        <label for="nama">Nama UMKM:</label><br>
        <input type="text" id="nama" name="nama"><br>

        <label for="pemilik">Pemilik:</label><br>
        <input type="text" id="pemilik" name="pemilik"><br>

        <label for="alamat">Alamat:</label><br>
        <input type="text" id="alamat" name="alamat"><br>

        <label for="no_hp">No HP:</label><br>
        <input type="text" id="no_hp" name="no_hp"><br>

        <label for="jenis_usaha">Jenis Usaha:</label><br>
        <input type="text" id="jenis_usaha" name="jenis_usaha"><br>

        <label for="tahun_berdiri">Tahun Berdiri:</label><br>
        <input type="number" id="tahun_berdiri" name="tahun_berdiri"><br><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>