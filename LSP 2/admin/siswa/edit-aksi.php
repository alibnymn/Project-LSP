<?php 
include 'db_koneksi.php';
$id_siswa = $_POST['id_siswa'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];


    $sql = "update tb_siswa set nama = '$nama', kelas = '$kelas' where id_siswa = '$id_siswa'";
    
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