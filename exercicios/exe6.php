<?php

$nota1 = $_POST['num1']."<br>";
$nota2 = $_POST['num2']."<br>";
$nota3 = $_POST['num3']."<br>";
$nota4 = $_POST['num4']."<br>";


$media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;


echo "A média das quatro notas é: " . $media;
?>
