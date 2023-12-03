<?php
class HomeController {
    public function home() {
        header("location:http://localhost/jobsheet5/index.php");
    }
    public function mahasiswa() {
        header("location:http://localhost/jobsheet5/views/mahasiswa/index.php");
    }

    public function dosen() {
        header("location:http://localhost/jobsheet5/views/dosen/index.php");
    }
}
?>