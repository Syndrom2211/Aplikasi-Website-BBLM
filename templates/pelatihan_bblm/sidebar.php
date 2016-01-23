<?php
/* Widget List

$tipe = cari		| Form Pencarian
$tipe = populer		| Postingan Terpopuler
$tipe = kategori	| List Katergori
$tipe = poling		| Polling / Voting
$tipe = download	| List Download
$tipe = agenda		| List Agenda
$tipe = komentar	| Komentar Terbaru
$tipe = banner		| Banner List

Edit Widget => FolderTemplate/widgets.php
*/
?>
<div id="sidebar">
	<?php 
	/* 
	Menambahkan widget di sidebar
	  
	echo add_widget('$tipe','sidebar');
	*/
	echo add_widget('kategori','sidebar');
	echo add_widget('populer','sidebar');
	echo add_widget('agenda','sidebar');
	echo add_widget('banner','sidebar');
	?>
</div>