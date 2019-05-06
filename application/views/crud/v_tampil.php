<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>tampil_data</title>
</head>
<body>
    <center><?php echo anchor('crud/tambah', 'Tambah Data!'); ?></center> <br><br>
    <table border="1">
    <t>
        <th>No</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>pekerjaan</th>
        <th colspan="2"> Action</th>
    </tr>
    <?php
    $no=1;
     foreach ($user as $value) { ?>
    <tr>
        <td><?php echo $no++ ?></td>  
        <td><?php echo $value->nama ?></td>
        <td><?php echo $value->alamat ?></td>
        <td><?php echo $value->pekerjaan ?></td>
        <td><?php echo anchor('crud/edit/'.$value->id, 'EDIT'); ?></td>
        <td><?php echo anchor('crud/delete/'.$value->id, 'DELETE'); ?></td>
    </tr>
    <?php } ?>
    </table>
</body>
</html>