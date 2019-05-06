<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>input crud</title>
</head>

<body>
	<form action="<?php echo base_url().'crud/tambah_aksi'; ?>" method="post">
		<table>
			<tr>
				<td>nama</td>
				<td><input type=" text" name="nama">
				</td>
			</tr>
			<tr>
				<td>alamat</td>
				<td><input type="text" name="alamat" id=""></td>
			</tr>
			<tr>
				<td>pekerjaan</td>
				<td><input type="text" name="pekerjaan" id=""></td>
			</tr>
			<td><input type="submit" value="input"></td>
		</table>
	</form>
</body>

</html>
