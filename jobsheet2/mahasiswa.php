<?php
//membuat class
class mahasiswa {
    //menuliskan property
    var $nim;
    var $nama;
    var $alamat;
    
    //method untuk menampilkan NIM
    function tampil_nim(){
        return "NIM mahasiswa : 220202076";
    }
    
    //method untuk menampilkan nama
    function tampil_nama(){
        return "Nama mahasiswa  : Alifia Muthi Afifa";
    }

    //method untuk menampilkan alamat
    function tampil_alamat(){
        return "Alamat mahasiswa : Banjaranyar";
    }
}

class dosen {
    //menuliskan property
    var $nidn;
    var $nama;
    var $prodi;
    
    //method untuk menampilkan nama
    function tampil_nidn(){
        return "NIDN dosen : 12345";
    }
    
    //method untuk menampilkan alamat
    function tampil_nama(){
        return "Nama dosen :  Afi";
    }

    //method untuk menampilkan alamat
    function tampil_prodi(){
        return "Prodi : D3 Teknik Informatika";
    }
}

//membuat objek nama_mahasiswa dan nama_dosen
$nama_mahasiswa = new mahasiswa();
$nama_dosen = new dosen();

//menampilkan objek ke Layar
echo $nama_mahasiswa -> tampil_nim() . "<br>";
echo $nama_mahasiswa -> tampil_nama() . "<br>";
echo $nama_mahasiswa -> tampil_alamat() . "<br>" . "<br>";
echo $nama_dosen -> tampil_nidn() . "<br>";
echo $nama_dosen -> tampil_nama() . "<br>";
echo $nama_dosen -> tampil_prodi() . "<br>";
?>