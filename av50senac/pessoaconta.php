<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pessoa / Conta</title>
</head>
<body>
    
<?php

include_once "./Classes/Pessoa.class.php";
include_once "./Classes/Conta.class.php";

$luis = new Pessoa;

$luis->Codigo       = 01;
$luis->Nome         = "Luis Fernando";
$luis->Altura       = 1.60;
$luis->Idade        = 23;
$luis->Nascimento   = "04/07/1998";
$luis->Escolaridade = "Ensino Médio Completo";

echo "Manipulando o objeto {$luis->Nome}: <br><br>";

echo "{$luis->Nome} é formado em: {$luis->Escolaridade}<br>";
$luis->Formar('Programador');
echo "{$luis->Nome} é formado em: {$luis->Escolaridade}<br>";

echo "{$luis->Nome} possui {$luis->Idade}<br>";
$luis->Envelhecer(9);

echo "<br>";

$conta_luis = new Conta(6678,"CC.1234.56","17/08/2008",$luis,1234,1540.00,false);

echo "<hr>";

echo "Manipulando a conta de {$luis->Nome}:<br><br>";
echo "O saldo atual é R/$ {$conta_luis->ObterSaldo()}<br>";
$conta_luis->Depositar(100);
$conta_luis->Retirar(58);

?>

</body>
</html>