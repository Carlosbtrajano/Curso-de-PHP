<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constantes</title>
</head>
<body>
    
<?php

// Constantes 

define("NOME", "Carlos Brito");  
define("IDADE", 24);
define("ALTURA", 1.75);  
define("ESTADO_CIVIL","namorando");


echo "meu nome é ". NOME. "Minha idade é ". IDADE. ", minha altura é ". ALTURA. ", Meu estado civil é ". ESTADO_CIVIL;

print "<br>"; 

define("TIMES", ['vasco', 'flamengo', 'santos']); 

echo TIMES[2];

var_dump(TIMES);





?>



</body>
</html>