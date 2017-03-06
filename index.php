<?php require_once 'action/db_connect.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>PPDB Online yuk</title>

	<style type="text/css">
		.manageMember {
			width: 50%;
			margin: auto;
		}

		table {
			width: 100%;
			margin-top: 20px;
		}

	</style>

</head>
<body>

<div class="manageMember">
	<a href="create.php"><button type="button">Add Member</button></a>
	<table border="1" cellspacing="0" cellpadding="0">
		<thead>
			<tr>
				<th>Nama</th>
				<th>Kode Peserta</th>
				<th>Asal Sekolah</th>
				<th>Nilai</th>
			</tr>
		</thead>
		<tbody>
			<?php
			$sql = "SELECT * FROM user WHERE active = 1";
			$result = $connect->query($sql);

			if($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					echo "<tr>
						<td>".$row['nama']."</td>
						<td>".$row['asalsekolah']."</td>
						<td>".$row['nilai']."</td>
						<td>".$row['kodepeserta']."</td>
						<td>
							<a href='edit.php?id=".$row['id']."'><button type='button'>Edit</button></a>
							<a href='remove.php?id=".$row['id']."'><button type='button'>Remove</button></a>
						</td>
					</tr>";
				}
			} else {
				echo "<tr><td colspan='5'><center>No Data Avaliable</center></td></tr>";
			}
			?>
		</tbody>
	</table>
</div>

</body>
</html>