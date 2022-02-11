<!DOCTYPE html>
<?php
//Koneksi
include 'koneksi.php';

//Ambil data dari database
$sql = "SELECT * FROM data_mahasiswa";
$result = mysqli_query($conn, $sql);

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Crud Catatan Si Dimboy</title>
</head>
<body>

<h2>DATA MAHASISWA</h2>

<!-- TOMBOL INPUT -->
<a href="insert.php">
<input type="submit" value="Tambah" style="margin-bottom:10px;">
</a>

<!-- CREATE TABLE -->
<table border="1" cellspacing="">
    <tr>
        <th>NO</th>
        <th>NIM</th>
        <th>NAMA</th>
        <th>JURUSAN</th>
        <th>KELAS</th>
    </tr>
    
    <tr>
    <?php
    //Check apakah data di database ada atau tidak 
    if(mysqli_num_rows($result) > 0){
        //kalau data ada maka tampilkan data
        while($row = mysqli_fetch_assoc($result)):
    ?>
        <td><?php echo $row['nama'];?></td>
        <td>201943500578</td>
        <td>Dimas Rizki N</td>
        <td>Teknik Informatika</td>
        <td>Y5C</td>
    <?php
        endwhile; }
    ?>
    </tr>
</table>
</body>
</html>