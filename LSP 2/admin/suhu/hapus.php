<?php 
include 'db_koneksi.php';
$id_suhu = $_GET['id_suhu'];

$sql = ("DELETE FROM tb_suhu WHERE id_suhu='$id_suhu'")or die(mysqli_error());
$query = mysqli_query($db, $sql);
 
// header("location:index.php?pesan=hapus");
echo ("<script LANGUAGE='JavaScript'>
		window.alert('Hapus data suhu tubuh berhasil?!');
		window.location.href='index.php?pesan=hapus';
		</script>");
?>