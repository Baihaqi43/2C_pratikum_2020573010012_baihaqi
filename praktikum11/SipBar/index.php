<?php 
require "proses/session.php";
if (empty ($_GET['x'])){
  echo "<script>window.location ='home';</script>";
}elseif($_GET['x']=='home'){
  require "home.php";
}elseif($_GET['x']=='peminjaman'){
  require "peminjaman.php";
}elseif($_GET['x']=='mahasiswa'){
  require "mahasiswa.php";
}elseif($_GET['x']=='dosen'){
  require "dosen.php";
}elseif($_GET['x']=='staf'){
  require "staf.php";
}elseif($_GET['x']=='laporan'){
  require "laporan.php";
}elseif($_GET['x']=='profile'){
    require "profile.php";
}elseif($_GET['x']=='setting'){
      require "setting.php";
}elseif($_GET['x']=='databrg'){
    require "data_barang.php";
}else{
  echo "<script>window.location ='home';</script>";
}
?>