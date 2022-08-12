<?php 
include 'db_koneksi.php';
$id_siswa = $_GET['id_siswa'];

$sql = ("DELETE FROM tb_siswa WHERE id_siswa='$id_siswa'")or die(mysqli_error());
$query = mysqli_query($db, $sql);
 
// header("location:index.php?pesan=hapus");
echo ("<script LANGUAGE='JavaScript'>
		window.alert('Hapus data suhu tubuh berhasil?!');
		window.location.href='index.php?pesan=hapus';
		</script>");
?>