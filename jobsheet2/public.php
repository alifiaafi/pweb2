<?php

//membuat class mahasiswa
class mahasiswa{
    //property public
    public $nama;
    //property private
    private $nim = "220202076";

    //public method
    function tampilkan_nama(){
        //nilai kembalian
        return "Nama Saya Alifia </br>";
    }

    //membuat protected method
    function tampilkan_nim(){
        return "NIM saya " . $this -> nim;
    }
}

//instansiasi objek mahasiswa ke dalam variabel $mahasiswa
$mahasiswa = new mahasiswa();
$nim = new mahasiswa();

//memanggil method tampilkan_nama
echo $mahasiswa -> tampilkan_nama();
echo $mahasiswa -> tampilkan_nim();
?>