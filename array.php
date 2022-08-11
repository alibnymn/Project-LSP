<?php
// cara pertama membuat array
echo "<pre>";
$students = array (
    array('nim'=>'ti102132','nama'=>'nuris akbar','nilai'=>array('nilai_mtk'=>10,'nilai_pbo'=>20)),
    array('nim'=>'ti102133','nama'=>'zaki'),
);
print_r($students);
echo "</pre>";

echo $students[0]['nilai']['nilai_pbo'];
echo "<hr>";



// cara kedua
$fruints = array();
$fruints[2]="melon";
$fruints[]="mangga";
$fruints[]="aple";

print_r($fruints);

echo $fruints[4];

?>