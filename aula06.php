<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-color: lightpink;
        }
    </style>
</head>
<body>
<?php
echo "<h1>Arrays - Vetores</h1>";

// Inicializando o array
$carros = array('Fiesta', 'Palio', 'Corsa', 'Siena');

// Acessando e exibindo elementos do array
echo $carros[1], "<br>"; // Resultado: Palio
echo $carros[3], "<br>"; // Resultado: Siena

// Adicionando novos elementos
$carros[4] = "Clio";
$carros[11] = "Versa";
$carros[5] = "Sandero"; // Corrigido para definir um valor no índice 5

// Exibindo elementos adicionados
echo $carros[4], "<br>";  // Resultado: Clio
echo $carros[5], "<br>";  // Resultado: Sandero
echo $carros[11], "<br>"; // Resultado: Versa
echo isset($carros[12]) ? $carros[12] . "<br>" : "Índice 12 não definido<br>"; // Índice 12 não foi definido

// Usando string como índice
$carros["s1"] = "Siena";
echo $carros["s1"], "<br>"; // Resultado: Siena

// Adicionando outro elemento
$carros[13] = "Ferrari";
echo $carros[13], "<br>"; // Resultado: Ferrari

// Alterando o valor de um elemento existente
$carros[5] = "Fusca";
echo $carros[5], "<br>"; // Resultado: Fusca

// Impressão completa do array
echo "<h1>Impressão completa do Array</h1>";

echo "<pre>";
print_r($carros);
echo "</pre>";

echo "<h1>Detalhamento do Array</h1>";

echo "<pre>";
var_dump($carros);
echo "</pre>";
?>
</body>
</html>
