<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $conn = mysqli_connect("localhost","root","","praktikum6") or die ("koneksi gagal");
    $hasil = mysqli_query($conn, "select *from liga");
    while ($row = mysqli_fetch_array($hasil)){
        echo "liga&emsp;".$row ["negara"]."&emsp;"; //array asosiatif
        echo "mempunyai&emsp;". $row [2].""; //array numerik
        echo "wakil di liga champion <br/>";
    }
    ?>
</body>
</html>