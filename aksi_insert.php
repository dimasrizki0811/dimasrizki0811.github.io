<?php
//jika tombol submit di klik
if(isset($_POST['submit'])){
    //ambil data dari form
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $kelas = $_POST['kelas'];
};

//insert data
$sql = "INSERT INTO data_mahasiswa ('id', 'nim', 'nama', 'jurusan', 'kelas') VALUES (NULL,'$nim','$nama','$jurusan', '$kelas');"

if($sql){
    header("Location:../index.php");
}else {
    echo 'Data Belum Dimasukan';
};

