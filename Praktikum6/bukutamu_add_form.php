<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simpan Buku tamu</title>
</head>
<body>
    <h1>Simpan buku tamu mysql</h1>
    <?php
    $nama = $_POST ["nama"];
    $email = $_POST ["email"];
    $komentar = $_POST ["komentar"];
    $conn = mysqli_connect("localhost","root","","praktikum6") or die ("Koneksi gagal");
    echo "Nama      : $nama <br>";
    echo "email     : $email <br>";
    echo "komentar  : $komentar <br>";

    $sqlstr = "INSERT INTO `bukutamu`(`nama`, `email`, `komentar`) VALUES ('[$nama]','[$email]','[$komentar]')";
    $hasil = mysqli_query($conn,$sqlstr);
    echo "simpan bukutamu berhasil dilakukan";
    ?>
</body>
</html>