<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form matakuliah</title>
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        form {
            background-color: lightcoral;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .h1 {
            font-size: 40px;
            margin: 50px auto;
            font-variant: small-caps;
        }

        .garis hr {
            width: 100%;
            background-color: black;
            padding: 2px;
        }

        .konten {
            font-size: 20px;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-variant: small-caps
        }

        .konten th input {
            padding: 10px;
            background-color: lightseagreen;
            margin-left: -30px;
            border: 2px solid black;
            border-radius: 10px;
            cursor: pointer;
        }

        option {
            font-size: 20px;
            background-color: cadetblue;
        }

        .submit {
            font-size: 40px;
        }
    </style>
</head>

<body>
    <center>
        <form action="<?= base_url(); ?>matakuliah/cetak" method="POST">
            <table>
                <tr>
                    <th colspan="3" class="h1">form input data matakuliah</th>
                </tr>
                <tr>
                    <th colspan="3" class="garis">
                        <hr>
                    </th>
                </tr>
                <tr class="konten">
                    <th>nama mahasiswa </th>
                    <th><input type="text" placeholder="masukan nama mahasiswa" name="mahasiswa"><?php echo form_error('mahasiswa', '<small style="color: black">') ?></th>
                </tr>
                <tr class="konten">
                    <th>nim mahasiswa </th>
                    <th><input type="number" placeholder="masukan nim mahasiswa" name="nim"><?php echo form_error('nim', '<small style="color: black">') ?></th>
                </tr>
                <tr class="konten">
                    <th>tanggal lahir </th>
                    <th><input type="date" placeholder="masukan tanggal lahir" name="tanggal"><?php echo form_error('tanggal', '<small style="color: black">') ?></th>
                </tr>
                <tr class="konten">
                    <th>jenis kelamin </th>
                    <th><select name="kelamin" id="vital">
                            <option value="laki-laki">laki-laki</option>
                            <option value="perempuan">perempuan</option>
                            <option value="gay">gay</option>
                            <option value="lesbian">lesbian</option>
                            <option value="lainnya">lainnya</option>
                        </select><?php echo form_error('kelamin', '<small style="color: black">') ?></th>
                </tr>
                <tr class="konten">
                    <th>kode matkul </th>
                    <th><input type="text" placeholder="input kode matkul" name="kode"><?php echo form_error('kode', '<small style="color: black">') ?></th>
                </tr>
                <tr class="konten">
                    <th>nama matkul </th>
                    <th><input type="text" placeholder="input nama matkul" name="matkul"><?php echo form_error('matkul', '<small style="color: black">') ?></th>
                </tr>
                <tr class="konten">
                    <th>sks matkul </th>
                    <th><input type="number" placeholder="input sks matkul" name="sks"><?php echo form_error('sks', '<small style="color: black">') ?></th>
                </tr>
                <tr class="konten">
                    <th>dosen pengajar </th>
                    <th><input type="text" placeholder="masukan nama dosen pengajar" name="dosen"><?php echo form_error('dosen', '<small style="color: black">') ?></th>
                </tr>
                <tr class="submit">
                    <th><input type="submit"></th>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>