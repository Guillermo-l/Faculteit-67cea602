<?php

echo "Van welk getal wil je de faculteit weten?" .PHP_EOL;

$getal = readline("> ");
$totaal = 1;

for($i = $getal; $i > 0; $i--){
    $totaal *= $i;
}

echo "De faculteit van $getal is $totaal" .PHP_EOL;

?>