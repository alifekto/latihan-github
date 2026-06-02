<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PEMBIMBING AKADEMIK</title>
</head>

<body>
    <h2>PEMBIMBING AKADEMIK</h2>
    <table>
        <tr>
            <td>Periode Akademik</td>
            <td>
                <select name="periode_akademik" id="periode_akademik">
                    <option value="">Pilih Periode Akademik</option>
                    <option value="2023/2024">2023/2024</option>
                    <option value="2024/2025">2024/2025</option>
                </select>
            </td>
            <td>Status KRS</td>
            <td>
                <select name="status_krs" id="status_krs">
                    <option value="">Pilih Status KRS</option>
                    <option value="Diajukan">Diajukan</option>
                    <option value="Disetujui">Disetujui</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Periode Masuk</td>
            <td>
                <select name="periode_masuk" id="periode_masuk">
                    <option value="">Pilih Periode Masuk</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                </select>
            </td>
            <td>Sistem Kuliah</td>
            <td>
                <select name="sistem_kuliah" id="sistem_kuliah">
                    <option value="">Pilih Sistem Kuliah</option>
                    <option value="Reguler">Reguler</option>
                    <option value="Non-Reguler">Non-Reguler</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Status Semester</td>
            <td>
                <select name="status_semester" id="status_semester">
                    <option value="">Pilih Status Semester</option>
                    <option value="Aktif">Aktif</option>
                    <option value="Tidak Aktif">Tidak Aktif</option>
                </select>
            </td>
            <td>Status Data</td>
            <td>
                <select name="status_data" id="status_data">
                    <option value="">Pilih Status Data</option>
                    <option value="Lengkap">Lengkap</option>
                    <option value="Tidak Lengkap">Tidak Lengkap</option>
                </select>
            </td>
        </tr>
    </table>
    <hr>

    <table>
        <tr>
            <td>
                <select name="filter" id="filter">
                    <option value="">Semua</option>
                    <option value="Lengkap">Lengkap</option>
                    <option value="Tidak Lengkap">Tidak Lengkap</option>
                </select>
            </td>
            {{-- search --}}
            <td>
                <input type="text" name="search" id="search" placeholder="Cari mahasiswa...">
                <button type="submit">Cari</button>
            </td>
        </tr>
    </table>


    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Program Studi</th>
            <th>Angkatan</th>
            <th>Status SMT</th>
            <th>SMT</th>
            <th>SKS</th>
            <th>Batas SKS</th>
            <th>Total SKS</th>
            <th>IPS</th>
            <th>IPK Lulus</th>
            <th>KRS Diajukan?</th>
            <th>KRS Disetujui?</th>
            <th>Point KMHS</th>
            <th>No SK</th>
            <th>Tgl SK</th>
            <th>Aksi</th>
        </tr>
        {{-- Data mahasiswa akan ditampilkan di sini --}}
        <tr>
            <td>1</td>
            <td>Giska Saputra</td>
            <td>Teknik Informatika</td>
            <td>2024</td>
            <td>Aktif</td>
            <td>3</td>
            <td>20</td>
            <td>24</td>
            <td>60</td>
            <td>3.5</td>
            <td>3.4</td>
            <td>ya</td>
            <td>ya</td>
            <td>10</td>
            <td>SK-123</td>
            <td>2024-06-01</td>
            <td></td>

        </tr>
    </table>
</body>

</html>