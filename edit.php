<?php 

require_once 'action/db_connect.php';

if($_GET['id']) {
	$id = $_GET['id'];

	$sql = "SELECT * FROM user WHERE id = {$id}";
	$result = $connect->query($sql);

	$data = $result->fetch_assoc();

	$connect->close();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Member</title>

	<style type="text/css">
		fieldset {
			margin: auto;
			margin-top: 100px;
			width: 50%;
		}

		table tr th {
			padding-top: 20px;
		}
	</style>

</head>
<body>

<fieldset>
	<legend>Edit Member</legend>

	<form action="aupdate.php" method="post">
		<table cellspacing="0" cellpadding="0">
			<tr>
				<th>Nama</th>
				<td><input type="text" name="nama" placeholder="First Name" value="<?php echo $data['nama'] ?>" /></td>
			</tr>		
			<tr>
				<th>Kode Peserta</th>
				<td><input type="text" name="kodepeserta" placeholder="Last Name" value="<?php echo $data['kodepeserta'] ?>" /></td>
			</tr>
			<tr>
				<th>Asal Sekolah</th>
				<td><input type="text" name="asalsekolah" placeholder="Age" value="<?php echo $data['asalsekolah'] ?>" /></td>
			</tr>
			<tr>
				<th>Nilai</th>
				<td><input type="text" name="nilai" placeholder="Contact" value="<?php echo $data['nilai'] ?>" /></td>
			</tr>
			<tr>
				<input type="hidden" name="id" value="<?php echo $data['id']?>" />
				<td><button type="submit">Save Changes</button></td>
				<td><a href="index.php"><button type="button">Back</button></a></td>
			</tr>
		</table>
	</form>

</fieldset>

</body>
</html>

<?php
}
?>