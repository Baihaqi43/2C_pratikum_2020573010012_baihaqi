<?php
session_start();
    require "koneksi.php";
    $username = $_POST ['username'];
    $password = md5($_POST ['password']);

    $hasil = mysqli_query ($conn,"select * from login where username = '$username' && password ='$password'");
    $row = mysqli_fetch_array($hasil);

    if (isset ($row ['username'])){
        $_SESSION ['username']= $row['username'];
        echo "<script>
        window.location = '../index.php';
    </script>";
    }
    else {
        echo "<script>
        alert ('Mohon maaf passwor atau username yang anda masukan salah');
        window.location = '../sign-in/index.html';
        </script>";
    }
?>

