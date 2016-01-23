<?php
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{
$aksi="modul/mod_pelatihan/aksi_pelatihan.php";
switch($_GET[act]){
  // Manajemen Pelatihan
  default:
    echo "<h2>Manajemen Pelatihan</h2>
          <table class='list'><thead>
          <tr>
			<td class='center'><b>Nama Lembaga</b></td>
			<td class='center'><b>Alamat Lembaga</b></td>
			<td class='center'><b>Telepon / Fax</b></td>
			<td class='center'><b>Email</b></td>
			<td class='center'><b>Nama Peserta</b></td>
			<td class='center'><b>No.HP</b></td>
			<td class='center'><b>Jenis Pendidikan</b></td>
			<td class='center'><b>Aksi</b></td>
		</thead></tr>"; 
    $tampil=mysql_query("SELECT * FROM pelatihan ORDER BY id_pelatihan DESC");
    while ($r=mysql_fetch_array($tampil)){
       echo "<tr>
				<td class='center'>$r[nama_lembaga]</td>
				<td class='center'>$r[alamat_lembaga]</td>
				<td class='center'>$r[telepon_fax]</td>
				<td class='center'>$r[email_lembaga]</td>
				<td>1. $r[nama_peserta1]<br/>
					2. $r[nama_peserta2]<br/>
					3. $r[nama_peserta3]<br/>
					4. $r[nama_peserta4]<br/>
					5. $r[nama_peserta5]</td>
				<td>1. $r[no_telp1]<br/>
					2. $r[no_telp2]<br/>
					3. $r[no_telp3]<br/>
					4. $r[no_telp4]<br/>
					5. $r[no_telp5]</td>
				<td>1. $r[jenis_pendidikan1]<br/>
					2. $r[jenis_pendidikan2]<br/>
					3. $r[jenis_pendidikan3]</td>
				<td>
					<a href='$aksi?module=pelatihan&act=hapus&id=$r[id_pelatihan]'>Hapus</a>
				</td>
			</tr>";
    }
    echo "</table>";
    break;
}
}
?>