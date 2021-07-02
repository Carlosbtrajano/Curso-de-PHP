<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays Função Count</title>
</head>
<body>


<?php

// Count
$carros = array("Veloster", "Camaro", "Fusca");
$carros[] = "Stilo"; 
$carros[] = "Palio"; 
$totalcarros =  count($carros); // Mostra quantos elementos tem no array
echo $totalcarros
echo "<hr>"; 

// Foreach
foreach($carros as $valor){
    echo $valor; 
}




?>

    
</body>
</html>