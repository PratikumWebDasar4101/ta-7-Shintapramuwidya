<?php
require_once("database.php");

//simpan data kode
$nim =$_GET['nim'];
//query sql
$sql = "DELETE FROM form where nim=$nim ";
mysqli_query($conn,$sql);
header("Location:halamanData.php");
?>
