<?php 
include 'db_koneksi.php';
$id_guru = $_GET['id_guru'];

$sql = ("DELETE FROM tb_login WHERE id_guru='$id_guru'")or die(mysqli_error());
$query = mysqli_query($db, $sql);
 
// header("location:index.php?pesan=hapus");
echo ("<script LANGUAGE='JavaScript'>
		window.alert('Hapus data  berhasil?!');
		window.location.href='index.php?pesan=hapus';
		</script>");
?>