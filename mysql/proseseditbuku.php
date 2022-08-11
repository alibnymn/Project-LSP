<?php
    include_once("koneksi.php");

    $id=$_POST['id'];
    $judul=$_POST['judul'];
    $pengarang=$_POST['pengarang'];
    $tahun=$_POST['tahun'];
    $kategori=$_POST['kategori'];

    $query="UPDATE tb_buku SET judul_buku='$judul', pengarang='$pengarang', 
            tahun_terbit='$tahun', kategori='$kategori' WHERE id_buku=$id";
    
    $hasil=mysqli_query($conn,$query) ;

    if($hasil){
        header('Location:index2.php');
    }else{
        echo "Update data gagal!";
    }

?>