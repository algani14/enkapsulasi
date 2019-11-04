<?php
include '../database.php';
$siswa = new Biodata();
$aksi = $_GET['aksi'];
if (isset($_POST['save'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    $tanggal = $_POST['tgl_lahir'];
    $umur =  date('Y') - $tanggal ;

}
if ($aksi == "tambah") {
    $siswa->create($nama, $alamat, $jenis, $agama, $tanggal, $umur);
    header("location:index.php");
} elseif ($aksi == "update") {
    $siswa->update($id, $nama, $alamat, $jenis, $agama, $tanggal, $umur);
    header("location:index.php");
} elseif ($aksi == "delete") {
    $siswa->delete($_GET['id']);
    header("location:index.php");
}
