<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh form dengan post</title>
</head>
<body>
    <h1>Buku Tamu</h1>
    komentar sangat di butuhkan dalam situs kami, untuk meningkatkan kualitas situs kami.
    <hr>
    <form action="proses_bukutamu.php" method="post">
        <pre>
            Nama anda            : <input type="text" name="nama" size="25" maxlength="50">
            Email address        : <input type="email" name="email" size="40" maxlength="50">
            Komentar             : <textarea name="komentar" id="" cols="40" rows="5"></textarea>
            <input type="submit" value="kirim">
            <input type="reset" value="ulangi">
        </pre>
    </form>
</body>
</html>