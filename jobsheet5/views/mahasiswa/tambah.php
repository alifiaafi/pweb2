<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Data Mahasiswa</title>
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
<h3>Tambah Data Mahasiswa</h3>
<br>

<form action="proses_tambahMahasiswa" method="post">
        <div class="col-md-5 mb-3">
            <label for="nim" class="form-label">NIM</label>
            <input type="text" class="form-control" name="nim">
        </div>
        <div class="col-md-5 mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama">
        </div>
        <div class="col-md-5 mb-3">
            <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
            <input type="text" class="form-control" name="tempat_lahir">
        </div>
        <div class="col-md-5 mb-3">
            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
            <div>
                <select name = "jenis_kelamin">
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
        </div>
        <div class="col-md-5 mb-3">
            <label for="agama" class="form-label">Agama</label>
            <div>
                <select name = "agama">
                    <option value = "Islam">Islam</option>
                    <option value = "Kristen">Kristen</option>
                    <option value = "Katolik">Katolik</option>
                    <option value = "Hindu">Hindu</option>
                    <option value = "Budha">Budha</option>
                    <option value = "Konghucu">Konghucu</option>
                </select>
            </div>
        </div>
        <div class="col-md-5 mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea class="form-control" cols="30" rows="5" name="alamat"></textarea>
        </div>
        <div>
        <a href="mahasiswa" type="submit" class="btn btn-primary">Kembali</a>
        <input type="submit" name="submit" class="btn btn-success" value="Simpan">
        </div>
</form>