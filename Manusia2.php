<?php
class Manusia2
{
    //menentukan property dengan private
    public  $nama = "ngadimin";    
    
    //method public
    public function tampilkan_nama(){
        return "Nama saya " .$this->nama;
    }
}
$Manusia = new Manusia2();
echo $Manusia->tampilkan_nama();
//echo $Manusia->nama; //error karena aksesnya property private
?>