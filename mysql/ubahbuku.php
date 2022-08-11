<?php
    include_once("koneksi.php");
    $id=$_GET['id'];

    $query="SELECT * FROM tb_buku WHERE id_buku=" . $id;

    $hasil=mysqli_query($conn,$query);




?>
<h1>Ubah Buku</h1> 
            <form method="post" action="proseseditbuku.php">

            <?php while($data=mysqli_fetch_array($hasil)) { ?>

            <table>
                <tr>
                   <td>Judul Buku </td>
                   <td> <input type="text" name="judul" value="<?php echo $data ['judul_buku'] ?>"/></td>
                </tr>
                <tr>
                   <td>Pengarang </td>
                   <td> <input type="text" name="pengarang" value="<?php echo $data ['pengarang'] ?>"/></td>
                </tr>
                <tr>
                   <td>Tahun Terbit </td>
                   <td> <input type="number" name="tahun" value="<?php echo $data ['tahun_terbit'] ?>"/></td>
                </tr>
                <tr>
                   <td>Kategori </td>
                   <td> <input type="text" name="kategori" value="<?php echo $data ['kategori'] ?>"/></td>
                </tr>
                <tr>
                   <td></td>
                   <td> 
                   <input type="hidden" name="id" value="<?php echo $data['id_buku'] ?> " >
                   <input type="submit" value="ubah data"/></td>
                </tr>
            </table>

            <?php } ?>
            </form>