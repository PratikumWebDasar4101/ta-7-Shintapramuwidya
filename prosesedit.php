<?php
require_once("database.php");

$nama=$_POST['nama'];
$nim=$_POST['nim'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$prodi=$_POST['prodi'];
$fakultas=$_POST['fakultas'];
$asal=$_POST['asal'];
$moto_hidup=$_POST['moto_hidup'];

$sql="UPDATE form SET nama='$nama', nim='$nim', jenis_kelamin='$jenis_kelamin', prodi='$prodi' fakultas='$fakultas', asal='$asal', moto_hidup='$moto_hidup' where nime='$nim' ";
if(mysqli_query($conn,$sql)){
	header("location:.php");
}else{
	echo "Error : ".$sql."<br>".mysqli_error($conn);
}
?>