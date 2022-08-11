<?php
include 'class_laptop.php';
// cara membuat objek / instance objek
$laptop1 = new Laptop();

// cara memberikan value kepada property
$laptop1->merk  =   "ASUS";
$laptop1->type  =   "A42JZ";

// cara membaca value dari property
echo $laptop1->merk;
echo $laptop1->type;
echo "<br>";

// cara memanggil method dari class laptop
echo $laptop1->hidup();
echo "<br>";
echo $laptop1->mati();

// contoh menggunaan method Setter
$laptop1->setMerk('Axioo');
echo $laptop1->merk;

// contoh penggunaan method Getter
echo $laptop1->getMerk();

?>
