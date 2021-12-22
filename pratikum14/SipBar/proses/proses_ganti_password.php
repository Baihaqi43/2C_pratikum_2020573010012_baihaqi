<?php
if (isset($_POST['simpan'])) {
    require "proses/koneksi.php";

    $username = $_POST['username'];
    $passwordbaru = md5($_POST['passwordbaru']);
    $passwordlama = md5($_POST['passwordlama']);

    $query1 = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username'");
    $hasil = mysqli_fetch_array($query1);

    if ($passwordlama == $hasil['password']){
        if ($passwordbaru == $passwordlama) {
            echo '<script>alert("Password yang anda masukkan sama dengan password lama, mohon masukkan password yang berbeda");</script>';
            echo '<script>window.location="setting.php";</script>';
        } else {
            if ($hasil['username'] == $username) {
                $update = mysqli_query($conn, "UPDATE tb_user SET Password = '$passwordbaru' WHERE username = '$username'");
            }
            if ($update) {
                echo '<script>alert("Password berhasil diubah");</script>';
                echo '<script>window.location="setting.php";</script>';
            } else {
                echo '<script>alert("Maaf Password gagal diubah");</script>';
                echo '<script>window.location="setting.php";</script>';
            }
        }
    } else {
        echo '<script>alert("Password lama yang anda masukkan salah");</script>';
        echo '<script>window.location="setting.php";</script>';
    }
} else {
    header("Location: setting.php");
}