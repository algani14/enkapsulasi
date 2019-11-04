<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <fieldset>
        <legend>Input Biodata</legend>
        <form action="proses.php?aksi=tambah" method="post">
            <table>
                <tr>
                    <th>Nama</th>
                    <td><input type="text" name="nama" require></td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td><textarea name="alamat" id="" cols="40" require></textarea></td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td><input type="radio" name="jenis_kelamin" value = "laki laki">Laki-Laki</td>
                    <td><input type="radio" name="jenis_kelamin" value = "perempuan">perempuan</td>
                </tr>
                <tr>
                    <th>Agama</th>
                    <td><input type="text" name="agama" require></td>
                </tr>
                <tr>
                    <th>Tanggal Lahir</th>
                    <td><input type="date" name="tgl_lahir" require></td>
                </tr>
                <tr>
                    <th>Umur</th>
                    
                </tr>
                <tr>
                    <th><input type="submit" name="save" value="Simpan"></th>
                </tr>
            </table>
        </form>
    </fieldset>
    
</body>
</html>