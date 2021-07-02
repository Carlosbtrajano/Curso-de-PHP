<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Tipos de dados </title>
</head>
<body>
    
<?php

// Tipos de dados ESCALARES PHP
// String
$nome =  "Olá, Mundo!"; 
var_dump($nome); // var_dump mostra informações sobre a váriavel

// Função para validar um tipo de dado
if(is_string($nome)): // if(is_string($nome)): verifica se a váriavel é uma string
    echo "É uma string";
else:
    echo "Não é uma string";
endif;

echo "<hr>";

// int = Números inteiros

$idade = 26;
var_dump($idade); 
if(is_int($idade)):
    echo "é um inteiro";
else:
    echo "Não é um inteiro ";
endif; 
echo "<hr>";

// float =  Números flutuante 
$preco = 18.5; 

var_dump($preco);
if(is_float($preco)):
    echo "é float";
else:
    echo "Não é float"; 
endif; 

// boolean VERDADEIRO OU FALSO

$admin = true; 

var_dump($admin); 
if(is_bool($admin)):
    echo "É um booleano";
else:
    echo "Não é um booleano";
endif; 
echo "<hr>"; 

// Tipos de dados COMPOSTOS 

// array
$carros = array ("Gol", "Uno", "Camaro",12,20.6,true);

var_dump($carros); 
if(is_array($carros)):
    echo "É um array";
else:
    echo "Não é um array";
endif;
echo "<hr>";

// object
class cliente{
    public $nome;
    public function atribuirNome($nome){
        $this->$nome = $nome; 
    }
}

$cliente = new Cliente();
$cliente->atribuirNome("Carlos");
var_dump($cliente); 
if(is_object($cliente)):
    echo "É um object";
else:
    echo "Não é um object";
endif;
echo "<hr>";

// Tipos de dados ESPECIAIS

$cidade =  NULL;
var_dump($cidade); 

?>






</body>
</html>