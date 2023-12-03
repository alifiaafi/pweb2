<?php
//memanggil class model database
include_once '../../config.php';
include_once '../../controllers/DosenController.php';
require '../../index.php';

//instansiasikan class database
$database = new database;
$db = $database -> getKoneksi();

$dosenController = new DosenController($db);
$dosen = $dosenController -> getAllDosen();
?>

<div class="px-2">
<br>
<h3>Data Dosen</h3>
<a class="btn btn-primary mb-2 mt-2" href="tambahDosen">Tambah Dosen</a>

<!-- <?php
error_reporting(E_ERROR | E_PARSE);
if ($_GET ['succes'] === "tambah") {
 echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Data Dosen Berhasil Ditambahkan!</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
else if ($_GET ['succes'] === "update") {
 echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">
  <strong>Data Dosen Berhasil Diupdate!</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
else if ($_GET ['succes'] === "hapus") {
 echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Data Dosen Berhasil Dihapus!</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
?> -->

<div class="table-responsive small">
<table class="table table-striped table-border">
    <tr>
        <th>No</th>
        <th>NIDN</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Matkul</th>
        <th>Aksi</th>
    </tr>

<?php
$no = 1;
foreach($dosen as $x){
    ?>
<tr>
    <td><?php echo $no++ ?></td>
    <td><?php echo $x['nidn'] ?></td>
    <td><?php echo $x['nama'] ?></td>
    <td><?php echo $x['alamat'] ?></td>
    <td><?php echo $x['matkul'] ?></td>
    <td>
        <a class="btn btn-warning" href="editDosen?id=<?php echo $x['id']; ?> ">Edit</a>
        <a class="btn btn-danger" href="hapusDosen?id=<?php echo $x['id']; ?> "onclick="return confirm('Apakah yakin akan menghapus...?')">Hapus</a>
    </td>
</tr>
<?php
}
?>
</table>
</div>
</div>