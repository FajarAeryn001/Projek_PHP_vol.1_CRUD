<?php
	include 'koneksi.php';
	$query = "SELECT * FROM db_siswa";
	$sql = mysqli_query($con,$query);
$no = 0;

?>
<!DOCTYPE html>
<html lang="en">
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
    <a class="navbar-brand" href="#">Generasi Emas :) </a>
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


<div class="container-fluid">
<h1 style="text-align: center;">Daftar Siswa</h1>
    <blockquote style="text-align: center;">
        Membuat Sistem CRUD dari tabel data siswa 
    </blockquote>

    <button class="btn btn-primary" ><a href="kelola.php" style="color:white; text-decoration:none;">
      <i class="bi bi-plus-circle"></i>
      Tambah Data</a></button>

    <div class=" table-responsive ">
<table class="table align-middle mt-4 table-striped table-hover table-bordered">
    <thead style="text-align: center;">
    <tr>
     
        <th>Nama</th>
        <th>Email</th>
        <th>No HP</th>
        <th>Alamat</th>
        <th>Aksi</th>
    </tr>
    <thead>

 
       <tbody class="table-group-divid^er">
<?php while($result = mysqli_fetch_assoc($sql)){

?>
    <tr>
        
        <td>
		<?php echo $result['Nama']; ?>

</td>
        <td>
	<?php echo $result['Email']; ?>

</td>
        
        <td>
	<?php echo $result['NomorHP']; ?>

</td>
        <td>
	<?php echo $result['Alamat']; ?>
</td>        
        <td  style="text-align: end;">
          
            <button class="btn btn-warning"><a href="kelola.php?edit=	<?php echo $result['No']; ?>
">
              <i class="bi bi-pencil"></i>
                Edit
                </a>
            </button>
              <a href=proses.php?hapus=<?php echo $result['No']; ?>
    class="btn btn-danger">
                <i class="bi bi-trash"></i>
                Hapus
            </a>
        </td>
    </tr>
<?php 
}
?>

    </tbody>

</table>
</div>
</div>







<div class="footer" style="text-align: center; position: absolute; bottom: 1%; width: 100%;">
  <p>ProjekCRUD-Fajar@2025</p>
</div>


</body>
</html>
