<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Untitled</title>
</head>

<body>
<table>

<tr>
<th>ID</th>
<th>Nama</th>
<th>Alamat</th>
<th>Jabatan</th>
</tr>

<?php

$connect = mysqli_connect("172.19.0.2", "root", "sqlpass", "trucorp-backup");

$sql = "SELECT * FROM users";
$result = $connect->query($sql);

while($row=$result->fetch_assoc())
{
?>
<tr>
<td> <?= $row["ID"]; ?></td>
<td> <?= $row["Nama"]; ?></td>
<td> <?= $row["Alamat"]; ?></td>
<td> <?= $row["Jabatan"]; ?></td>
</tr>

<?php
}
?>

</body>
</html>
