<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Tugas PHP </title>
</head>
<body>
<h2>Form Input</h2>
<form method="post" action=>
<label>Nama: </label>
<input type="text" name="nama"> <br />
<label>Tanggal lahir: </label>
<input type="date" name="ttl"><br />
<label>Pekerjaan: </label>
<input type="text" name="pekerjaan"> <br />
<input type="submit" value="Kirim">
</form>
<?php
echo 'Hay ' . $_POST['nama'];
echo "<br /> Umur " . date("Y-m-d"); "<br />"
?>
 
</body>
</html>