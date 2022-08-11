<?php
// memanggil class parent
include 'class_laptop.php';

// membuat class child
class Komputer extends Laptop{
    
    function __construct() {
        ;
    echo "<p>ini adalah function contruct</p>";
    }
    
    function __destruct() {
        ;
    echo "<p>objek ditutup</p>";
    }
    
}



// membuat objek baru
$komputer1 = new Komputer();

$komputer1->setMerk('Asus Komputer');
$komputer1->merk="ABC";

echo $komputer1->getMerk();

echo '<hr>';
$komputer12 = new Komputer();
$komputer12->setMerk('Axio Komputer');

?>
