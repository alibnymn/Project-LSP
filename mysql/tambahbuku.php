<html>
    <head>
        <title> Tambah Buku </title>
    </heaad>
    <body>
    <form method="post" action="prosestambahbuku.php">
       <center>
            <h1>Tambah Buku</h1> 
            <table>
                <tr>
                   <td>Judul Buku </td>
                   <td> <input type="text" name="judul" placeholder="Masukan judul buku"></td>
                </tr>
                <tr>
                   <td>Pengarang </td>
                   <td> <input type="text" name="pengarang" placeholder="Masukan judul pengarang"></td>
                </tr>
                <tr>
                   <td>Tahun Terbit </td>
                   <td> <input type="number" name="tahun" placeholder="Masukan tahun terbit"></td>
                </tr>
                <tr>
                   <td>Kategori </td>
                   <td> <input type="text" name="kategori" placeholder="Masukan kategori"></td>
                </tr>
                <tr>
                   <td></td>
                   <td> <input type="submit" value="Tambah data"/></td>
                </tr>
            </table>
            </form>
        </center>
    </body>
</html>