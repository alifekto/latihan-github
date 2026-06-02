<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Perkuliahan</title>
</head>
<body>
    <form action="/hasil" method="get">
        <h1 align="center">Form Pendaftaran</h1>
        <table align="center">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Tempat Lahir</td>
                <td>:</td>
                <td><input type="text" name="tempat_lahir"></td>
            </tr>
            <tr>
                <td>Tanggal Lahir</td>
                <td>:</td>
                <td><input type="date" name="tanggal_lahir"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki
                    <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
                </td>
            </tr>
            <tr>
                <td>Nomor HP</td>
                <td>:</td>
                <td><input type="number" name="nomor"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><textarea name="alamat" id="" cols="30" rows="10"></textarea></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td>
                    <select name="jurusan" >
                        <option value="">Pilih Jurusan</option>
                        <option value="SI">SI</option>
                        <option value="SIA">SIA</option>
                        <option value="ILKOM">ILKOM</option>

                    </select>
                </td>
            </tr>
            <tr>
                <td>Biaya Sumbangan</td>
                <td>:</td>
                <td><input type="number" name="biaya_sumbangan"></td>
            </tr>
            <tr>
                <td>Biaya Semester</td>
                <td>:</td>
                <td>
                    <select name="biaya_semester" id="">
                        <option value="Semester 1">Semester 1</option>
                        <option value="Semester 2">Semester 2</option>
                        <option value="Semester 3">Semester 3</option>
                        <option value="Semester 4">Semester 4</option>
                        <option value="Semester 5">Semester 5</option>
                        <option value="Semester 6">Semester 6</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Metode Pembayaran</td>
                <td>:</td>
                <td>
                    <input type="radio" name="metode_pembayaran" value="BNI"> BCA
                    <input type="radio" name="metode_pembayaran" value="MANDIRI"> BNI
                    <input type="radio" name="metode_pembayaran" value="INDOMARET"> INDOMARET
                </td>
            </tr>
            <tr>
                <td>Tanggal Bayar</td>
                <td>:</td>
                <td><input type="date" name="tanggal_bayar"></td>
            </tr>

            <tr>
                <td>
                    <input type="submit" value="Submit">
                    <input type="reset" value="Reset">
                </td>
            </tr>
        </table>
</body>
</html>