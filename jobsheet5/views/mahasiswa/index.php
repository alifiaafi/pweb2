<?php
//memanggil class model database
include_once '../../config.php';
include_once '../../controllers/MahasiswaController.php';
require '../../index.php';

//instansiasikan class database
$database = new database;
$db = $database -> getKoneksi();

$mahasiswaController = new MahasiswaController($db);
$mahasiswa = $mahasiswaController -> getAllMahasiswa();
?>

<div class="px-2">
<br>
<h3>Data Mahasiswa</h3>
<a class="btn btn-primary mb-2 mt-2" href="tambahMahasiswa">Tambah Mahasiswa</a>

<?php
error_reporting(E_ERROR | E_PARSE);
if ($_GET ['succes'] === "tambah") {
 echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Data Mahasiswa Berhasil Ditambahkan!</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
else if ($_GET ['succes'] === "update") {
 echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">
  <strong>Data Mahasiswa Berhasil Diupdate!</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
else if ($_GET ['succes'] === "hapus") {
 echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Data Mahasiswa Berhasil Dihapus!</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
?>

<div class="table-responsive small">
<table class="table table-striped table-border">
    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Tempat Lahir</th>
        <th>Jenis Kelamin</th>
        <th>Agama</th>
        <th>Alamat</th>
        <th>Aksi</th>
    </tr>

<?php
$no = 1;
foreach($mahasiswa as $x){
    ?>
<tr>
    <td><?php echo $no++ ?></td>
    <td><?php echo $x['nim'] ?></td>
    <td><?php echo $x['nama'] ?></td>
    <td><?php echo $x['tempat_lahir'] ?></td>
    <td><?php echo $x['jenis_kelamin'] ?></td>
    <td><?php echo $x['agama'] ?></td>
    <td><?php echo $x['alamat'] ?></td>
    <td>
        <a class="btn btn-warning" href="editMahasiswa?id=<?php echo $x['id']; ?> ">Edit</a>
        <a class="btn btn-danger" href="hapusMahasiswa?id=<?php echo $x['id']; ?> "onclick="return confirm('Apakah yakin akan menghapus...?')">Hapus</a>
    </td>
</tr>
<?php
}
?>
</table>
</div>
</div>