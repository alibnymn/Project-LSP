<?php 
include 'db_koneksi.php';
$id_suhu = $_POST['id_suhu'];
$id_siswa = $_POST['id_siswa'];
$suhu = $_POST['suhu'];
$keterangan = $_POST['keterangan'];

if($suhu >37)
{
	$keterangan = "siswa harus isolasi";
}
elseif($suhu <37)
{
	$keterangan = "normal";
}

    $sql = "update tb_suhu set id_siswa = '$id_siswa', suhu = '$suhu', keterangan = '$keterangan' where id_suhu = '$id_suhu'";
    
	//echo "sql ". $sql;
	$query = mysqli_query($db, $sql);

    if( $query ) {
       echo ("<script LANGUAGE='JavaScript'>
		window.alert('Data Berhasil Disimpan!');
		window.location.href='index.php?status=sukses';
		</script>");
        
    } else {
     header('Location: edit.php?status=gagal');
       
    }
?>