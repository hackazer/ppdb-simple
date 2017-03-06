<?php 

require_once 'db_connect.php';

if($_POST) {
	$nama = $_POST['nama'];
	$kodepeserta = $_POST['kodepserta'];
	$asalsekolah = $_POST['asalsekolah'];
	$nilai = $_POST['nilai'];

	$id = $_POST['id'];

	$sql  = "UPDATE user SET nama = '$nama', kodepeserta = '$kodepeserta', asalsekolah = '$asalsekolah', nilai = '$nilai' WHERE id = {$id}";
	if($connect->query($sql) === TRUE) {
		echo "<p>Succcessfully Updated</p>";
		echo "<a href='../edit.php?id=".$id."'><button type='button'>Back</button></a>";
		echo "<a href='../index.php'><button type='button'>Home</button></a>";
	} else {
		echo "Erorr while updating record : ". $connect->error;
	}

	$connect->close();

}

?>