<!doctype html>
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <meta charset="utf-8">
  <title>Formulir Pendaftaran</title>
</head>
<div class="container">
    <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <h1 class="fs-4">Formulir Pendaftaran</h1>
      </a>
    </header>
</div>
<form action="postdata.php" method="POST" enctype="multipart/form-data">

<div class="container mt-5">
  <div class="mb-3">
    <label>ID</label><br>
    <input type="text" class="form-control" name="id" placeholder="kolom tidak perlu diisi"><br> 
  </div>
  
  <div class="mb-3">
    <label>Masukkan Nama</label><br>
    <input type="text" class="form-control" name="nama" value=""><br> 
  </div>
  <div class="mb-3">
    <label>Masukkan Email</label><br>
    <input type="text" class="form-control" name="email" value=""><br>  
  </div>
  <div class="mb-3">
    <label>Masukkan Alamat</label><br>
    <input type="text" class="form-control" name="alamat" value=""><br>
  </div>
  <div class="mb-3">
    <label>Tanggal Lahir</label><br>
    <input type="date" class="form-control" name="tanggallahir" value=""><br>
  </div>
  <div class="mb-3">
    <p>Jenis Kelamin</p>
  <input class="form-check-input" type="radio" name="gender" id="gender1" value="putra">
    <label class="form-check-label" for="gender">
        Putra
    </label>
    <input class="form-check-input" type="radio" name="gender" id="gender2" value="putri">
    <label class="form-check-label" for="gender">
        Putri
    </label>
  </div> 
  <div class="mb-3">
    <label>Masukkan Kelas</label><br>
    <select name="kursus" class="form-select">
        <option value="1">Kelas Programmer</option>
        <option value="2">Kelas Progammer</option>
        <option value="3">Kelas Enggres</option>
    </select> 
  </div>

  <div class="mb-3">
    <label>Masukkan Foto</label><br>
    <input type="file" class="form-control" name="foto" value=""><br> 
  </div>
</div>
    <input type="submit" class="btn btn-primary mb-3" value="kirim">
</div>
</form>

  