<?php
include '../classes/database.php';
$db = new database();

$aksi = $_GET['aksi'];
if ($aksi == "tambah") {
    $db -> tambah_mhs ($_POST['nim'], $_POST['nama'], $_POST['alamat']);
    header("location:tampil_mhs.php?succes=tambah");
}
else if ($aksi == "update") {
    $db -> update($_POST ['id'], $_POST['nim'], $_POST['nama'], $_POST['alamat']);
    header("location:tampil_mhs.php?succes=update");
}
else if ($aksi == "hapus") {
    $db -> hapus($_GET['id']);
    header("location:tampil_mhs.php?succes=hapus");
}
?>