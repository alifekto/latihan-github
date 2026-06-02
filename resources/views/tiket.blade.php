<!DOCTYPE html>
<html>
<head>
    <title>Booking Tiket</title>
</head>
<body>

<h2 align="center">FORM PEMBELIAN TIKET</h2>

<form action="/tiket_hasil" method="POST">
    {{ csrf_field() }}

    <table border="1" align="center" cellpadding="10">
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama"></td>
        </tr>

        <tr>
            <td>Alamat</td>
            <td><textarea name="alamat"></textarea></td>
        </tr>

        <tr>
            <td>Kota Tujuan</td>
            <td>
                <select name="kota">
                    <option value="">--Pilih--</option>
                    <option value="Solo">Solo</option>
                    <option value="Semarang">Semarang</option>
                    <option value="Yogyakarta">Yogyakarta</option>
                    <option value="Surabaya">Surabaya</option>
                </select>
            </td>
        </tr>

        <tr>
            <td>Jumlah Tiket</td>
            <td><input type="number" name="jumlah"></td>
        </tr>

        <tr>
            <td colspan="2" align="center">
                <button type="submit">Simpan</button>
                <button type="reset">Batal</button>
            </td>
        </tr>
    </table>
</form>

</body>
</html>