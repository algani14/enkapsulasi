<?php 
include '../database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/dataTables.bootstrap4.min.css">
</head>
<body>
    <center>Biodata</center>
    <a href="/biodata/create.php">Input Data</a>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Lahir</th>
            <th>Agama</th>
            <th>umur</th>
            <th colspan="3">Aksi</th>
        </tr>
        </thead>
        <tbody>
        
        <?php
            $dat = new Biodata();
            $no = 1;
            foreach($dat->index() as $data) {
        ?>
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['alamat']; ?></td>
            <td><?php echo $data['jenis_kelamin']; ?></td>
            <td><?php echo $data['tgl_lahir']; ?></td>
            <td><?php echo $data['agama']; ?></td>
            <td><?php echo $data['umur']; ?></td>

            <td><a href="show.php?id=<?php echo $data['id']; ?>&aksi=show">Show</a></td>
            <td><a href="edit.php?id=<?php echo $data['id']; ?>&aksi=edit">Edit</a></td>
            <button class="btn btn-outline-danger my-2 my-sm-0"><td><a href="proses.php?id=<?php echo $data['id']; 
            ?>&aksi=delete" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?');ALTER TABLE nama_tabel_lama RENAME TO nama_tabel_baru;">Delete</a></td></button>
        </tr>
        
        <?php }?>
        </tbody>
    </table>

     <script src="../assets/js/bootstrap.bundle.js"></script>
    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/juery.js"></script>
    <script src="../assets/js/dataTables.bootstrap4.min.js"></script>
    <script src="../assets/js/jquery.dataTables.min.js"></script>
    <script>$(document).ready(function() {
    $('#example').DataTable();
} );</script>
</body>
</html>