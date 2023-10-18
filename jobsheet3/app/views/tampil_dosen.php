<?php
//memanggil class database
include '../classes/database.php';
//instansiasi class database
$db = new database;
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SIAKAD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>


<div class="px-4 py-3">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">SIAKAD</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tampil_mhs.php">Mahasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tampil_dosen.php">Dosen</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="px-2">
<br>
<h3>Data Dosen</h3>
<a class="btn btn-primary mb-2 mt-2" href="input_dosen.php">Tambah Dosen</a>

<?php
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
?>

<div class="table-responsive small">
<table class="table table-striped table-border">

    <tr>
        <th>No</th>
        <th>NIDN</th>
        <th>Nama</th>
        <th>Matkul</th>
        <th>Alamat</th>
        <th>Aksi</th>
    </tr>
<?php
$no = 1;
foreach($db -> tampil_dosen() as $d){
    ?>
<tr>
    <td><?php echo $no++ ?></td>
    <td><?php echo $d['nidn'] ?></td>
    <td><?php echo $d['nama'] ?></td>
    <td><?php echo $d['matkul'] ?></td>
    <td><?php echo $d['alamat'] ?></td>
    <td>
        <a class="btn btn-warning" href="edit_dosen.php?id=<?php echo $d['id']; ?>&aksi=edit_dosen">Edit</a>
        <a class="btn btn-danger" href="proses_dosen.php?id=<?php echo $d['id']; ?>&aksi=hapus_dosen">Hapus</a>
    </td>
</tr>
</div>
<?php
}
?>
</table>
</div>
</div>
</div>