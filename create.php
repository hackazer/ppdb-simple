<!DOCTYPE html>
<html>
<head>
	<title>Add Member</title>

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
	<legend>Add Member</legend>

	<form action="action/acreate.php" method="post">
		<table cellspacing="0" cellpadding="0">
			<tr>
				<th>Nama</th>
				<td><input type="text" name="nama" placeholder="Nama" /></td>
			</tr>		
			<tr>
				<th>Kode Peserta</th>
				<td><input type="text" name="kodepserta" placeholder="Kode Peserta" /></td>
			</tr>
			<tr>
				<th>Asal Sekolah</th>
				<td><input type="text" name="asalsekolah" placeholder="Asal Sekolah" /></td>
			</tr>
			<tr>
				<th>Nilai</th>
				<td><input type="text" name="nilai" placeholder="Nilai" /></td>
			</tr>
			<tr>
				<td><button type="submit">Save Changes</button></td>
				<td><a href="index.php"><button type="button">Back</button></a></td>
			</tr>
		</table>
	</form>

</fieldset>

</body>
</html>