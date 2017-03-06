<?php 

require_once 'db_connect.php';

if($_POST) {
	$nama = $_POST['nama'];
	$kodepeserta = $_POST['kodepserta'];
	$asalsekolah = $_POST['asalsekolah'];
	$nilai = $_POST['nilai'];

	$sql = "INSERT INTO user (nama, kodepeserta, asalsekolah, nilai, active) VALUES ('$nama', '$kodepeserta', '$asalsekolah', '$nilai', 1)";
	if($connect->query($sql) === TRUE) {
		echo "<p>New Record Successfully Created</p>";
		echo "<a href='../create.php'><button type='button'>Back</button></a>";
		echo "<a href='../index.php'><button type='button'>Home</button></a>";
	} else {
		echo "Error " . $sql . ' ' . $connect->connect_error;
	}

	$connect->close();
}

?>