<?php
class Manusia1
{
	var $nama;
	var $warna;
	function __construct(){
		echo "ini adalah isi method construct <br/>";
	}
	    function __destruct(){
        echo "ini adalah isi method destruct <br/>";
    }

	function tampilkan_nama(){
		return "nama saya muhammad nasuha mahali <br/>";
	}
}
$Manusia1 = new Manusia1();
echo $Manusia1->tampilkan_nama();
?>