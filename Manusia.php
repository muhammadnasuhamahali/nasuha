<?php 
class Manusia{
	var $nama;
	var $warna;

	function tampilkan_nama(){
	return "nama saya ... <br/>";
	}
	function warna_kulit(){
	return "warna kulit saya hitam <br/>";
	}
}
//instansiasi class manusia
$manusia = new manusia();
echo $manusia->tampilkan_nama();
echo $manusia->warna_kulit();
?>