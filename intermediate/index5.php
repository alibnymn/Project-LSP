<?php

echo time() ;

   if( isset($_POST['submit']) ){
       //var_dump($_FILES);
       //print_r($_FILES);
       //echo $_FILES['gambar']['name'];
       
       $time = time();
       $nama = $_FILES['gambar']['name'];
       $eror = $_FILES['gambar']['error'];
       $size = $_FILES['gambar']['size'];
       $asal = $_FILES['gambar']['tmp_name'];
       $format = $_FILES['gambar']['type'];
       $namafile = 'upload/'. $nama;
        

       if( $eror == 0 ){
          if($size < 100000){

            if($format == 'image/jpeg'  ){

                if(file_exists($namafile)){
                  $namafile = str_replace(".jpg","", $namafile);
                  $namafile = $namafile. " ". $time . ".jpg";
                  die($namafile);
                }
                //mengupload
                move_uploaded_file($asal, 'upload/'. $nama);


                echo 'berhasil upload';
            }else{
                echo 'formatnya harus jpeg';
            }
             
          }else{
              echo 'gambarnya kegedean';
          }
       }else{
           echo 'ada error';
       }
       
   }

?>

<form action="index5.php" method="post" enctype="multipart/form-data" >
  <input type="file" name="gambar">
  <input type="submit" name="submit" value="upload">
</form>