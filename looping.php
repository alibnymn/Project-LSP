<?php
for($i=1;$i<=10;$i++){
    echo $i."<br>";
}

// cara kedua
$fruints = array();
$fruints[2]="melon";
$fruints[]="mangga";
$fruints[]="aple";

foreach ($fruints as $fruit){
    echo $fruit.'<br>';
}
?>
