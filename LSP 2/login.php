<?php 
// memulai session
session_start();
include 'db_koneksi.php';
 
$username = $_POST['username'];
$password = md5($_POST['password']);
 
$sql = "select * from tb_login where username='$username' and password='$password'";
$query = mysqli_query($db, $sql);
 
if($query > 0 ){
	session_start();
	$_SESSION['username'] = $username;
	$_SESSION['status'] = "login";
	header("location:admin/home.php");
}else{
	header("location:login.php");	
}
 
?>