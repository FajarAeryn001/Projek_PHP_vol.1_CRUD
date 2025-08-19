<?php
	include "koneksi.php";

?>

<html>
<head>
 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.html">Generasi Emas :) </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<form method="POST" action="proses.php">
 <button class="btn btn-danger mt-4 bck"><a href="index.php">
  <i class="bi bi-arrow-left-circle"></i>
  Kembali</a></button>
<div class="container border mt-3">

  <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label mt-2">Nama :</label>
  <input type="text" name="nama" class="form-control" id="nama" placeholder="Ex : John Cena">

  <label for="exampleFormControlInput1" class="form-label mt-2">Email :</label>
  <input type="email" name="email" class="form-control" id="email" placeholder="example@gmail.com">

  <label for="exampleFormControlInput1" class="form-label mt-2">No HP/WA :</label>
  <input type="number" name="noHp" class="form-control" id="noHp" placeholder="0812345678">

     <label for="exampleFormControlTextarea1" class="form-label mt-2">Alamat :</label>
  <textarea class="form-control" name="alamat" id="alamat" rows="3"></textarea>

  <div style="text-align: end;">

  <?php

  if(isset($_GET['action'])) {
?>
  <button type="submit" value="edit" name="aksi" class="btn btn-primary mt-4">
    <i class="bi bi-plus-circle"></i>
    Simpan</button>
<?php
  } else{
?>

    <button type="submit" value="add" name="aksi" class="btn btn-primary mt-4">
 <i class="bi bi-plus-circle"></i>
 Tambahkan</button>

<?php
  }
 ?>







  </div>
  </form>
</div>
</div>



<div class="footer mt-4" style="text-align: center; position: fixed-bottom; bottom: 1%; width: 100%;">
  <p>ProjekCRUD-Fajar@2025</p>
</div>
</body>
</html>
