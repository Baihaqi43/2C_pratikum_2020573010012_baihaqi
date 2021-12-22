<?php
    session_start();

    if (empty ($_SESSION['username'])){
        echo "<script>
        window.location = '../index.php';
    </script>";
    }
?>