<!DOCTYPE html>
<html>
    <head>
        <title>HTML Form</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <form action="form-proses.php" method="POST">
            <h3>Textbox</h3>
            <table >
                <tr>
                    <td>Text</td>
                    <td><input type="text" name="nama" value="nuris akbar"  placeholder="masukan Nama"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="email" name="email" placeholder="email"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" placeholder="Password"></td>
                </tr>
                <tr>
                    <td>Date</td>
                    <td><input type="date" name="tanggal" placeholder="masukan tanggal"></td>
                </tr>
                <tr><td>File</td><td>
                        <input type="file" name="foto">
                    </td></tr>
            </table>

            <h3>Dropdown</h3>
            <table>
                <tr><td>Single</td>
                    <td>
                        <select name="agama">
                            <option value="i">Islam</option>
                            <option value="k" selected="">Kristen</option>
                        </select></td>
                </tr>
                <tr><td>Multiple</td>
                    <td>
                        <select name="jurusan[]" multiple="">
                            <option value="IF">Informatika</option>
                            <option value="tkj" selected="">Teknik Komputer Jaringan</option>
                        </select></td></tr>
            </table>
            
            <h3>Radio Button & Chekbox</h3>
            <table>
                <tr><td>Radio Button</td>
                    <td>
                        <input type="radio" value="L" name="jenis_kelamin" checked=""> Laki Laki
                        <input type="radio" value="P" name="jenis_kelamin"> Perempuan
                    </td></tr>
                <tr><td>Chekbox</td><td>
                        <input type="checkbox" name="hobi[]" value="m"> Membaca
                        <input type="checkbox" name="hobi[]" value="b"> Berenang
                        <input type="checkbox" name="hobi[]" value="t" checked=""> Tidur
                    </td></tr>
            </table>
            
            <h3>Textarea & Button</h3>
            <table>
                <tr><td>Textarea</td>
                    <td><textarea name="alamat" cols="30" rows="3">sdsds</textarea></td>
                </tr>
                <tr><td>Button</td>
                    <td><button onclick="test()" type="button">Normal Button</button></td>
                </tr>
                <tr>
                    <td>Button Submit</td>
                    <td><button type="submit">Submit Button</button></td>
                </tr>
                <tr><td>Button Reset</td>
                    <td><button type="reset">Reset Button</button>
                    </td></tr>
            </table>
        </form>
        
        <script type="text/javascript">
            function test(){
                alert('anda klik button');
            }
    </script>
    </body>
</html>
