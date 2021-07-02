<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays </title>
</head>
<body>
    
<?php

//váriaveis
$carro1 = "bmw"; 
$carro2 = "Veloster"; 
$carro3 = "Hilux"; 

// arrays
// 1=> define a posição dos índices no array
$carros = array(1=>"BMW", 2=>"Veloster", 3=>"Hilux");
$carros[] = "Amarok"; // Inserindo mais conteúdo no array
$carros [10] = "Camaro";
//echo $carros[10]; Mostrar a posição dos índices
print_r($carros);  //usado para ver os índices dos arrays

echo "<br>";

$motos = array();
$motos[] = "Yamaha";
$motos[] = "Honda";
$motos[] = "Suzuki";
print_r($carros); 

echo "<br>"; 

$clientes = ["Carlos", "Luiza", "Valentina", "Sammy"]; 
print_r($clientes); 

?>


</body>
</html>