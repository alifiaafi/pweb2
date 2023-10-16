<?php
//membuat class
class mahasiswa {
    //menuliskan property
    var $nim;
    var $nama;
    var $alamat;
    
    function __construct()
    {
        echo "Saya Mahasiwa Teknik Informatika";
        echo "<br>" . "</br>";
    }

    function __destruct()
    {
        echo "Politeknik Negeri Cilacap";
    }

    function tampil_mahasiswa(){
        return "Tidak akan menjadi joki atau menggunakan jasa joki sampai lulus kuliah";
    }


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


//membuat objek nama_mahasiswa
$nama_mahasiswa = new mahasiswa();

//menampilkan objek ke Layar
echo $nama_mahasiswa -> tampil_nim() . "<br>";
echo $nama_mahasiswa -> tampil_nama() . "<br>";
echo $nama_mahasiswa -> tampil_alamat() . "<br>";
echo $nama_mahasiswa -> tampil_mahasiswa() . "<br>" . "<br>";
?>