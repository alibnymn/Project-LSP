<?php

  // Menangkap isi variabel dari file yang telah kita isi pada form.php
  $nama = $_POST['nama'];
  $kelas = $_POST['kelas'];
  $kehadiran = $_POST['kehadiran'];

  // Format data yang akandiparsing
  $data = ",\n$nama,$kelas,$kehadiran";

  // Buka file kehadiransiswa.txt, kemudian tuliskan isi variabel di atas kedalam kehadiransiswa.txt
  $fh = fopen("kehadiransiswa.txt", "a");
  fwrite($fh, $data);

  // Tutup file data.txt
  fclose($fh);

  // Keterangan bila data berhasil di input maka akan tampil ke halaman index
//   print "Data Telah Tersimpan.</br><a href='index.php'>Kembali ke Index >></a>";
header("location:index.php");

?>