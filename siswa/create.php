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
        <legend>Input Data Siswa</legend>
        <form action="/siswa/proses.php?aksi=tambah" method="post">
            <table>
                <tr>
                    <th>Nomor Induk Siswa</th>
                    <td><input type="number" name="nis" require></td>
                </tr>
                <tr>
                    <th>Nama Siswa</th>
                    <td><input type="text" name="nama" require></td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td><textarea name="alamat" id="" cols="40" require></textarea></td>
                </tr>
                <tr>
                    <th><input type="submit" name="save" value="Simpan"></th>
                </tr>
            </table>
        </form>
    </fieldset>



    
</body>
</html>