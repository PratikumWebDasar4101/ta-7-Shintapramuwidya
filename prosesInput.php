<?php
session_start();
require_once("database.php");

if (isset($_POST['kirim'])) {

$nama= $_POST['nama'];
$_SESSION['nama'] = $nama;

$nim= $_POST['nim'];
$_SESSION['nim'] = $nim;

$jenis_kelamin= $_POST['jenis_kelamin'];
$_SESSION['jenis_kelamin'] = $jenis_kelamin;

$prodi= $_POST['prodi'];
$_SESSION['prodi'] = $prodi;

$fakultas= $_POST['fakultas'];
$_SESSION['fakultas'] = $fakultas;

$asal= $_POST['asal'];
$_SESSION['asal'] = $asal;

$moto_hidup= $_POST['moto_hidup'];
$_SESSION['moto_hidup'] = $moto_hidup;
}

$sql="INSERT INTO form(nama, nim, jenis_kelamin, programStudi, fakultas, asal, MotoHidup) 
		VALUES ('$nama','$nim','$jenis_kelamin','$prodi','$fakultas','$asal','$moto_hidup')";

if (mysqli_query($conn,$sql)) {
	header("Location:halamanData.php");
} 
else{
	echo "Eror:".$sql."<br>".mysqli_error($conn);
}
mysqli_close($conn);

?>