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
    $d = date("D");
    if ($d=="Sat")
    echo "Selamat hari pekan!";
    elseif($d=="Fri")
    echo "Selamat Menunaikan Sholat jum'at bagi muslim!";
    else 
    echo "selamat belajar";
    ?>
</body>
</html>