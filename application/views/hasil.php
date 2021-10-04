<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data matakuliah</title>
</head>

<body>
    <center>
        <table>
            <tr>
                <th colspan="3" class="h1">form data matakuliah</th>
            </tr>
            <tr>
                <th colspan="3" class="garis">
                    <hr>
                </th>
            </tr>
            <tr class="konten">
                <th>nama mahasiswa </th>
                <th><?= $mahasiswa; ?></th>
            </tr>
            <tr class="konten">
                <th>nim mahasiswa </th>
                <th><?= $nim; ?></th>
            </tr>
            <tr class="konten">
                <th>tanggal lahir </th>
                <th><?= $tanggal; ?></th>
            </tr>
            <tr class="konten">
                <th>jenis kelamin </th>
                <th><?= $kelamin; ?></th>
            </tr>
            <tr class="konten">
                <th>kode matkul </th>
                <th><?= $kode; ?></th>
            </tr>
            <tr class="konten">
                <th>nama matkul </th>
                <th><?= $matkul; ?></th>
            </tr>
            <tr class="konten">
                <th>sks matkul </th>
                <th><?= $sks; ?></th>
            </tr>
            <tr class="konten">
                <th>dosen pengajar </th>
                <th><?= $dosen; ?></th>
            </tr>
            <tr class="submit">
                <th><a href="<?= base_url() ?>matakuliah/cetak" title="kembali">kembali</a></th>
            </tr>
        </table>
    </center>
</body>

</html>