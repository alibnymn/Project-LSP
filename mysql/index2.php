<?php
include_once("koneksi.php");

$query=" SELECT * FROM tb_buku";

$hasil = mysqli_query($conn,$query );



?>
<html>
    <head>
         <title> Data Buku </title>
    </head>
    <body>

     <center>  
          <h1> Daftar Buku </h1> 
           <br>
                <a href="tambahbuku.php">Tambah Buku </a>
           </br>
     <table border="1" width="600px">
         <tr>
            <th>No</th>
            <th>Judul Buku</th>
            <th>Pengarang</th>
            <th>Tahun Terbit</th>
            <th>Kategori</th>
            <th>Aksi</th>
         </tr> 
         
         <?php 
             $nomor=1;
             while ($data=mysqli_fetch_array($hasil)) { 
            
            ?> 


         <tr>
            <td> <?php echo $nomor; ?> </td>
            <td> <?php echo $data['judul_buku']; ?> </td>
            <td> <?php echo $data['pengarang']; ?> </td>
            <td> <?php echo $data['tahun_terbit']; ?> </td>
            <td> <?php echo $data['kategori']; ?> </td>
            <td> 
            <a href="ubahbuku.php?id=<?php echo $data['id_buku'] ?>"> Ubah </a>
            
            <a href="hapusbuku.php?id=<?php echo $data['id_buku'] ?>"
            onclick="return confirm('Apakah anda yakin ingin menghapus buku <?php echo $data['judul_buku'];  ?> ?')"> hapus </a>
            
            </td>


         </tr>

         <?php $nomor++; }  ?>

     </table>
     </center>
    </body>
</html>