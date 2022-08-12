<?php 
include 'db_koneksi.php';
$id_guru = $_POST['id_guru'];
$username = $_POST['username'];
$nama = $_POST['nama'];
$password = $_POST['password'];
 
$sql=("INSERT INTO tb_login VALUES('$id_siswa','$username','$nama','$password')");
$query = mysqli_query($db, $sql);


 
header("location:index.php?pesan=input");
echo ("<script LANGUAGE='JavaScript'>
		window.alert('Data Berhasil Ditambah!');
		window.location.href='index.php?status=sukses';
		</script>");
?>