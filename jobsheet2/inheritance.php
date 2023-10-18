<?php
class manusia{
    public $nama_saya;

    function panggil_nama($saya){
        $this -> nama_saya = $saya;
    }
}

//class turunan atau sub class dari class manusia
class mahasiwa extends manusia {
    public $nama_mahasiswa;

    function panggil_mahasiswa($mahasiswa) {
        $this -> nama_mahasiswa = $mahasiswa;
    }
}

//instansiasi class mahasiswa
$informatika = new mahasiwa();

$informatika -> panggil_nama("Alifia Muthi Afifa");
$informatika -> panggil_mahasiswa("Afi");

//tampilkan isi property
echo "Nama Depan Saya : " . $informatika -> nama_saya . "<br>";
echo "Nama Belakang : " . $informatika -> nama_mahasiswa . "<br>";
echo "<br>";


//MEMPRAKTIKAN ENKAPSULASI PROTECTED DAN PRIVATE KE DALAM KELAS PEWARISAN

//CLASS PROTECTED
echo "CLASS PROTECTED <br>";
class Laptop {
    protected $nama_laptop;

    function panggil_laptop ($laptop) {
        return $this -> nama_laptop = $laptop;
    }
    
    //menambahkan fungsi getter supaya bisa diakses di luar class laptop
    function getNamaLaptop() {
        return $this -> nama_laptop;
    }

    protected function OS() {
        return "WINDOWS";
    }
}

class Msi extends Laptop {
    protected $jenis;

    function panggil_jenis($jenis_laptop) {
        $this -> jenis = $jenis_laptop;
    }

    function getJenisLaptop() {
        return $this -> jenis;
    }

    //memanggil metode OS yang dilindungi dari kelas laptop
    function getOS() {
        return $this -> OS();
    }
}

$ryder = new Msi();
$ryder -> panggil_laptop("MSI Ryder");
$ryder -> panggil_jenis("Gaming");

echo "Nama laptop ini = " . $ryder -> getNamaLaptop() . "<br>";
echo "Jenis laptop ini = " . $ryder -> getJenisLaptop() . "<br>";
echo "OS laptop ini = " . $ryder -> getOS() . "<br>";
echo "<br>";


//CLASS PRIVATE
echo "CLASS PRIVATE <br>";
class Mobil {
    private $merk;
    private $tahun;

    public function __construct ($merk, $tahun) {
        $this -> merk = $merk;
        $this -> tahun = $tahun;
    }

    public function getMerk() {
        return $this -> merk;
    }

    public function getTahun(){
        return $this->tahun;
    }
}

class klasik extends Mobil {
    private $warna;

    public function __construct ($merk, $tahun, $warna) {
        parent :: __construct ($merk, $tahun);
        $this -> warna = $warna;
    }

    private function detailKlasik() {
        return
        "Merk Mobil : " . $this -> getMerk() . "<br>" .
        "Tahun Produksi : " . $this -> getTahun() . "<br>" .
        "Warna : " . $this -> warna . "<br>";
    }

    public function tampilkanDetailKlasik() {
        return $this -> detailKlasik();
    }
}

$klasik = new klasik("Porsche 911 Classic", 2019, 'Merah');

echo $klasik -> tampilkanDetailKlasik();
?>