<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Edit data</title>
</head>

<body>
	<?php
 foreach ($user as $u) { ?>

	<form action="<?php echo base_url(). 'crud/update'; ?>" method="post">
	<table>
		<tr>
			<td> Nama</td>
			<td><input type="text" name="nama" value="<?php echo $u->nama ?>"></td>
			<td><input type="hidden" name="id" value="<?php echo $u->id ?>"></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><input type="text" name="alamat" id="" value="<?php echo $u->alamat ?>"></td>
		</tr>
		<tr>
			<td>Pekerjaan</td>
			<td><input type="text" name="pekerjaan" value="<?php echo $u->pekerjaan ?>"></td>
		</tr>
		<td><input type="submit" value="update"></td>
    </table>
    </form>
    <?php
 } 
    ?>
</body>

</html>
