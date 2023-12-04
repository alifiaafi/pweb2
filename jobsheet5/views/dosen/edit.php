<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Data Dosen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

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
          <a class="nav-link" href="mahasiswa">Mahasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="dosen">Dosen</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<br>
<h3>Edit Data Dosen</h3>
<br>

<?php

include_once '../../config.php';
include_once '../../controllers/DosenController.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $dosenController = new DosenController($db);
    $dosenData = $dosenController->getDosenById($id);

    if($dosenData) {
        if (isset($_POST['submit'])) {
            $nidn = $_POST['nidn'];
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];
            $matkul = $_POST['matkul'];

            $result = $dosenController->updateDosen($id, $nidn, $nama, $alamat, $matkul);

            if ($result) {
                header ("location:dosen?succes=update");
            } else {
                header("location:editDosen");
            }
        }
    } else {
        echo "Dosen tidak ditemukan";
    }
}
?>

<?php
if ($dosenData) {
?>
    <form action="" method="post">
      <div class="row">
        <?php
        foreach ($dosenData as $d => $value) {
        ?>
          <div class="col-md-5 mb-3">
            <?php
            echo $d;
            ?>
              <label for="<?php echo $d ?>" class="form-label"></label>
              <input type="text" class="form-control" id="<?php echo $d ?>" name="<?php echo $d ?>" value="<?php echo $value ?>">
          </div>
        <?php
        }
        ?>
        </div>
            <div class="row">
            <div class="col-md-5 mb-3">
              <a href="dosen" type="submit" class="btn btn-primary">Kembali</a>
              <input type="submit" name="submit" class="btn btn-success" value="Simpan">
            </div>
            </div>
        </form>
      <?php
      }
      ?>

<!-- <div class="mb-3">
    <label for="<?php echo $d ?>" class="form-label"><?php echo ucfirst($d) ?></label>
    <input type="text" class="form-control" id="<?php echo $d ?>" name="<?php echo $d ?>" value="<?php echo $value ?>">
</div> -->