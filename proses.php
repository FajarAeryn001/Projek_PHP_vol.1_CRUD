<?php
include "koneksi.php";

 if(isset($_POST['aksi'])){
     if($_POST['aksi'] == "add"){
	

	$nama = $_POST['nama'];
	$email = $_POST['email'];
	$nohp = $_POST['noHp'];
	$alamat = $_POST['alamat'];

	$query = "INSERT INTO db_siswa VALUES(null,'$nama','$email','$nohp','$alamat')";
	$sql = mysqli_query($con,$query);

	if($sql){
	header("location:index.php");
}else{
echo "data gagal";
}

         echo "tambah data <a href='index.php' > home </a>";
    }else if($_POST['aksi'] == "edit"){
        echo "edit data <a href='index.php'> home </a>";
    }
}

if(isset($_GET['hapus'])){
   $no = $_GET['hapus'];
    $query = "DELETE FROM db_siswa WHERE No = '$no'";
	$sql = mysqli_query($con,$query);

  if($sql){
        header("location:index.php");
}else{
echo $query;
}
}

?>
