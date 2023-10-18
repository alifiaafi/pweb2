<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Data Dosen</title>
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
          <a class="nav-link" href="tampil_mhs.php">Mahasiswa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tampil_dosen.php">Dosen</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<br>
<h3>Tambah Data Dosen</h3>
<br>

<form action="proses_dosen.php?aksi=tambah_dosen" method="post">
        <div class="mb-3">
            <label for="nim" class="form-label">NIDN</label>
            <input type="text" class="form-control" name="nidn">
        </div>
        <div class="mb-3">
            <label for="nim" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama">
        </div>
        <div class="mb-3">
            <label for="nim" class="form-label">Mata Kuliah</label>
            <input type="text" class="form-control" name="matkul">
        </div>
        <div class="mb-3">
            <label for="nim" class="form-label">Alamat</label>
            <textarea class="form-control" cols="30" rows="5" name="alamat"></textarea>
        </div>
        <div>
        <a href="tampil_mhs.php" type="submit" class="btn btn-primary">Kembali</a>
        <input type="submit" class="btn btn-success" value="Simpan">
        </div>
</form>