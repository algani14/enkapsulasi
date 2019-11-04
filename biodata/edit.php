<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Latihan CRUD - Edit Data</title>
</head>

<body>
    <?php
    include '../database.php';
    $siswa = new Biodata();
    foreach ($siswa->edit($_GET['id']) as $data) {
        $id = $data['id'];
        $nama = $data['nama'];
        $alamat = $data['alamat'];
        $jenis = $data['jenis_kelamin'];
        $agama = $data['agama'];
        $tanggal = $data['tgl_lahir'];
        $umur = $data['umur'];
        
    }
    ?>
    
        <form action="/biodata/proses.php?aksi=update" method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <table>
                <tr>
                    <th>Nama</th>
                    <td><input type="text" name="nis" value="<?php echo $nama; ?>" required></td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td><textarea name="alamat" cols="40" required><?php echo $alamat; ?></textarea></td>
                </tr>
                <tr>
                    <th>Jenis Kelamin</th>
                    <td><input type="radio" name="jenis_kelamin" value = "laki laki">Laki-Laki</td>
                    <td><input type="radio" name="jenis_kelamin" value = "perempuan">perempuan</td>
                </tr>
                <tr>
                    <th>Agama</th>
                    <td><input type="text" name="agama" value="<?php echo $agama; ?>" required></td>
                </tr>
                <tr>
                    <th>tanggal lahir</th>
                    <td><input type="date" name="tgl_lahir" value="<?php echo $tanggal; ?>" required></td>
                </tr>
                <tr>
                    <th><input type="submit" name="save" value="Simpan"></th>
                </tr>
                
                
            </table>
        </form>
    
</body>

</html>
