<?php
include 'database.php';
$con = new database('localhost', 'root','', 'sibuku');
$list_buku = $con->get('buku');
//print_r($list_buku);

$penulis = $con->get('penulis');
//print_r($penulis);


$newBuku = array('judul_buku'=>'test update judul');
//echo $con->insert('buku', $newBuku);


//echo $con->update('buku', $newBuku, 'isbn', '12345');

$con->delete('buku', 'isbn', '12345');
?>
