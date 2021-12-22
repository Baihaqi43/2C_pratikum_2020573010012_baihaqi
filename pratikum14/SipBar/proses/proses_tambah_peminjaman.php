<?php
require "koneksi.php";
session_start();

$kd_brg  = $_POST['kode_brg'];
//$wkt_kembali  = date("Y-m-d H:i:s"($_POST['wkt_pengembalian']));


if(empty($_POST['wkt_pengembalian'])){
    echo"<script>alert('waktu peminjaman tidak boleh kosong')</script>";
    echo"<script>window.location='../peminjaman'</script>"; 
}else{
    $wkt_kembali = $_POST['wkt_pengembalian'];
}

$select1 = mysqli_query($conn,"SELECT barang FROM tb_peminjaman WHERE barang='$kd_brg'&& (status=1 || status=2)");
$hasil1 = mysqli_fetch_array($select1);

if ($hasil1){
    echo"<script>alert('peminjaman gagal di tambahkan, barang telah dipinjam')</script>";
    echo"<script>window.location='../peminjaman'</script>"; 
}else{
    $select = mysqli_query($conn,"SELECT id FROM tb_user WHERE username='$_SESSION[username]'");
    $hasil = mysqli_fetch_array($select);

if ($hasil){
    $mysql = mysqli_query($conn,"INSERT INTO tb_peminjaman (user, barang, waktu_pengembalian,status) VALUES ('$hasil[id]','$kd_brg','$wkt_kembali',1)");
    if ($mysql){
    echo"<script>alert('peminjaman berhasil di tambahkan')</script>";
    echo"<script>window.location='../peminjaman'</script>";
             }
        }
}