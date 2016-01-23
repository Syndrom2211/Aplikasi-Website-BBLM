<?php
session_start();
 if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{
$aksi="modul/mod_redaksi/aksi_redaksi.php";
switch($_GET[act]){
  // Manajemen Redaksi
  default:
    echo "<h2>Manajemen Redaksi</h2>
          <table class='list'><thead>
			<tr>
				<td class='center'>Id</td>
				<td class='center'>Isi Redaksi</td>
				<td align='center'>Tanggal Redaksi</td>
				<td class='center'>Aksi</td>
			</thead></tr>"; 
    $tampil=mysql_query("SELECT * FROM redaksi ORDER BY id DESC");
    $id=1;
    while ($r=mysql_fetch_array($tampil)){
       echo "<tr>
			 <td class='center'>$id</td>
             <td class='center'>$r[isi_redaksi]</td>
			 <td class='center'>$r[tgl_redaksi]</td>
             <td class='center'><a href=?module=redaksi&act=editredaksi&id=$r[id]><img src='images/edit.png' border='0' title='edit' /></a>
             </td></tr>";
      $id++;
    }
    echo "</table>";
    break;

  // Form Edit Redaksi
  case "editredaksi":
    $edit=mysql_query("SELECT * FROM redaksi WHERE id='$_GET[id]'");
    $r=mysql_fetch_array($edit);

    echo "<h2>Edit Redaksi</h2>
          <form method=POST action=$aksi?module=redaksi&act=update>
          <input type=hidden name=id value='$r[id]'>
          <table class='list'>
          <tr>
			<td>Isi Redaksi</td><td> : <textarea type=text name='isi_redaksi'>".$r[isi_redaksi]."</textarea></td>
		  </tr>
		  <tr>
			<td>Tanggal Redaksi</td><td> : <input type='text' name='tgl_redaksi' value='$r[tgl_redaksi]'></td>
		  </tr>";
    echo "<tr><td colspan=2><input type=submit value=Update>
                            <input type=button value=Batal onclick=self.history.back()></td></tr>
          </table></form>";
    break;  
}
}
?>