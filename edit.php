<?php
include 'koneksi.php';

$user = $_POST['username'];
$pass = $_POST['password'];
$nama = $_POST['nama'];
$email = $_POST['email'];

$result = mysqli_query($koneksi, "UPDATE SET tbl_siswa (`siswa_id`,`siswa_username`, `siswa_password`, `siswa_nama` , `siswa_email`) VALUES (NULL, '$user', '$pass', '$nama', '$email' ) ");
if(!$result) {
    echo 'Gagal menyimpan data...!';
} else {
    echo 'Data berhasil disimpan...!';
    header('location:index.php');
}


?>