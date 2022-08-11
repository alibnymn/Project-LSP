<?php
// nilai 85 - 100 = A
// nilai 75 - 84  = B
// nilai 65 - 74  = C
// nilai < 64     = D

$nilai=65;

if($nilai>85){
    echo "A";
}
elseif($nilai>=75 and $nilai<=84){
    echo "B";
}
elseif ($nilai>=65 && $nilai<=74) {
    echo "C";
}
else{
    echo "D";
}

?>
