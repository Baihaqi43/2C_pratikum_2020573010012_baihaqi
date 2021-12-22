<?php
require "koneksi.php";
$kd_brg = $_POST['kd_brg'];

$delete = mysqli_query($conn,"DELETE FROM tb_barang WHERE kode_barang = '$kd_brg'");

if ($delete){
    echo "<script>window.location='../databrg';</script>";
}else{
    echo "<script>alert('Mohon maaf data gagal di dihapus');
        window.location='../databrg';</script>";
}
