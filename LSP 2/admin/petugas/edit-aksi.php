<?php 
include 'db_koneksi.php';
$id_guru = $_POST['id_guru'];
$username = $_POST['username'];
$nama = $_POST['nama'];
$password = $_POST['password'];


    $sql = "update tb_login set username = '$username', nama = '$nama', password = '$password' where id_guru = '$id_guru'";
    
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