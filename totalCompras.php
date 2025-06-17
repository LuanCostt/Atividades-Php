<?php
$arr = [10,11,20,23,11];
$total = 0;

foreach( $arr as $number){
    echo "Valor: $". $number. "<br>";
        $total += $number;
}
echo "Total: $". $total ."<br>";
?>