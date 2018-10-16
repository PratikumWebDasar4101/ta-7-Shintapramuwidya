<?php

session_start();
require_once("database.php");

$nim 		= $_GET['nim'];
$form		=mysqli_query($conn,"SELECT * FROM form where NIM='$nim'");
$row 		= mysqli_fetch_array($form);
$Fakultas   = array('FIK,FIT,FEB,FKB');

$query  = mysqli_query($conn,"SELECT * FROM form WHERE NIM='$nim' ");
$row 	= mysqli_fetch_array($query);

function active_radio_button($value,$input){
$result = $value == $input?'chacked':'';
return $result;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<input type="hidden" value="<?php echo $row['NIM'];?>" name="nim">
	<table >
		<form action="prosesedit.php" method="POST">
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" value="<?php echo $row['Nama']; ?>" name="nama"></td>
			</tr>

			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="number" value="<?php echo $row['NIM']; ?>" name="nim"></td>
			</tr>

			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td><input type="radio" name="jenis_kelamin"<?php if($row['jenis_kelamin'] == "Laki-Laki"){ ?> checked <?php } ?> value="Laki-Laki">Laki-Laki
				<input type="radio" name="jenis_kelamin"<?php if($row['jenis_kelamin'] == "Perempuan"){ ?> checked <?php } ?> value="Perempuan">Perempuan</td>
				
			</tr>

			<tr>
				<td >Program Studi</td>
				<td>:</td>
				<td><select name="prodi">
					<option value="SI" <?php if($row['programStudi'] == "SI") { ?> selected="selected" <?php } ?>>SI</option>
					<option value="TK" <?php if($row['programStudi'] == "TK") { ?> selected="selected" <?php } ?>>TK</option>
					<option value="TT" <?php if($row['programStudi'] == "TT") { ?> selected="selected" <?php } ?>>TT</option>
					<option value="IF" <?php if($row['programStudi'] == "IF") { ?> selected="selected" <?php } ?>>IF</option>
				</select></td>
			</tr>

			<tr>
				<td>Fakultas</td>
				<td>:</td>
				<td><select name="prodi">
					<option value="FIK" <?php if($row['programStudi'] == "FIK") { ?> selected="selected" <?php } ?>>FIK</option>
					<option value="FIT" <?php if($row['programStudi'] == "FIT") { ?> selected="selected" <?php } ?>>FIT</option>
					<option value="FEB" <?php if($row['programStudi'] == "FEB") { ?> selected="selected" <?php } ?>>FEB</option>
					<option value="FKB" <?php if($row['programStudi'] == "FKB") { ?> selected="selected" <?php } ?>>FKB</option>
				</select></td>
			</tr>

			<tr>
				<td>Asal</td>
				<td>:</td>
				<td><input type="text" value="<?php echo $row['Asal']; ?>" name="asal"></td>
			</tr>

			<tr>
				<td>Moto Hidup</td>
				<td>:</td>
				<td><input type="text" value="<?php echo $row['MotoHidup']; ?>" name="moto_hidup"></td>
			</tr>

			<tr>
				<td><input type="submit" name="simpan" value="simpan"></td>
			</tr>
		</form>
	</table>
</body>
</html>