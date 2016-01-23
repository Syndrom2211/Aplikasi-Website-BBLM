<?php
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{
include "../../../config/koneksi.php";
include "../../../config/fungsi_seo.php";

$module=$_GET[module];
$act=$_GET[act];

// Input kategori
if ($module=='redaksi' AND $act=='input'){
  mysql_query("INSERT INTO redaksi (isi_redaksi) VALUES('$_POST[isi_redaksi]')");
  header('location:../../media.php?module='.$module);
}

// Update kategori
elseif ($module=='redaksi' AND $act=='update'){
  $kategori_seo = seo_title($_POST['isi_redaksi']);
  mysql_query("UPDATE redaksi SET isi_redaksi='$_POST[isi_redaksi]'
               WHERE id = '$_POST[id]'");
  header('location:../../media.php?module='.$module);
}
}
?>