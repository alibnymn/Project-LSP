<?php
$server = "localhost";
$user = "root";
$password = "";
$name_database = "satgas_smknegeri4padalarang";
$db = mysqli_connect($server, $user, $password, $name_database);
if( !$db){
    die("Gagal terhubung dengan database: " . mysqli_connnect_error());
}
?>