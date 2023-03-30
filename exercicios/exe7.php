<?php

$Peso = $_POST['num1']."<br>";
$Altura = $_POST['num2']."<br>";
$imc;

$imc = $Peso / ($Altura * $Altura);

echo " Seu imc é:  " . $imc, 2;
?>
