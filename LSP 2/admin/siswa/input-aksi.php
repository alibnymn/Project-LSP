<?php 
include 'db_koneksi.php';
$id_siswa = $_POST['id_siswa'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
 
$sql=("INSERT INTO tb_siswa VALUES('$id_siswa','$nama','$kelas')");
$query = mysqli_query($db, $sql);

if( $query ) {
	echo ("<script LANGUAGE='JavaScript'>
	 window.alert('Data Berhasil Ditambah!');
	 window.location.href='index.php?status=sukses';
	 </script>");
	 
 } else {
  header('Location: input.php?status=gagal');
	
 }

?>