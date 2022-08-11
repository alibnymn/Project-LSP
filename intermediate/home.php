<?php require_once("header.php"); ?>
<main>
   selamat datang di coding php, tempat belajar online.

   <h2>implode dan Explode</h2>



<?php
//implode (separator, array)
$pekerjaan = ["pekerjaan", "desainer", "manager"];
echo implode (" | ", $pekerjaan);

echo "<br>";

$pelajaran = "html css javascript php";
print_r( explode(" ", $pelajaran) );

?> 

<h2> fungsi date</h2>
<?php
echo date ("d - M - Y");
?>

<h2>Trim dan strip tags</h2>

<?php
    $text = " ini input user ";
echo "sebelum" . $text . "disini";
echo "<br>";
echo "sesudah" . trim($text) . "disini";
echo "<br>";

$text2 = "<script>alert('halo semuanya!')</script>";
$text3 = "<b> halo </b> semuanya!";
echo strip_tags ($text3, '<b>');
?>

</main>

<?php require_once("footer.php"); ?>