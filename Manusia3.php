<?php
class Manusia3{
	protected $nama_saya;
	function berinama($saya){
		$this->nama_saya=$saya;
	}
}
class Teman extends Manusia3{
	public $nama_teman;
	function berinamateman($teman){
		$this->nama_teman =$teman;
	}
	function namasaya($sayalagi){
		$this->nama_saya =$sayalagi;
	}
	function getnamasaya(){
		return $this->nama_saya;
	}
}
$malasngoding = new teman;
$malasngoding->berinama("MALAS NGODING");
$malasngoding->berinamateman("Diki");
//echo "Nama Saya :" . $malasngoding->nama_saya ."<br/>";
echo "Nama Teman Saya :" . $malasngoding->nama_teman . "<br/>";
$malasngoding->namasaya ("SREGEP NGODING");
echo "Nama Saya Sekarang :". $malasngoding->getnamasaya();
?>