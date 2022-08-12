<?php 
include 'db_koneksi.php';
$id_suhu = $_POST['id_suhu'];
$id_siswa = $_POST['id_siswa'];
$suhu = $_POST['suhu'];



if($suhu >37)
{
	$keterangan = "siswa harus isolasi";
}
elseif($suhu <37)
{
	$keterangan = "normal";
}


 
$sql=("INSERT INTO tb_suhu VALUES('$id_suhu','$id_siswa','$suhu','$keterangan')");
$query = mysqli_query($db, $sql);


 
// header("location:index.php?pesan=input");
echo ("<script LANGUAGE='JavaScript'>
		window.alert('Data Berhasil Ditambah!');
		window.location.href='index.php?status=sukses';
		</script>");
?>