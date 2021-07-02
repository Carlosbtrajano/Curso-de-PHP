<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escopo de variaveis</title>
</head>
<body>


<?php
// ESCOPO GLOBAL
$nome = "Carlos Brito"; 
$a = 1;
$b = 3;
$c = 7;

function exibeNome(){
    global $nome;
    echo $nome;
}

exibeNome(); 
echo "<hr>"; 
///////////////////////////////

function exibeCidade(){
    // ESCOPO LOCAL
    global $cidade; 
    $cidade = "São Paulo"; 
    
}

exibeCidade(); 
echo $cidade;
echo "<hr>"; 
//////////////////////////////

function soma(){
    echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
}

soma(); 

echo "<br>";










?>
    
</body>
</html>