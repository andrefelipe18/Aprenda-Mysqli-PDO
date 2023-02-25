<?php

//Se conecta ao banco de dados com PDO
$host = 'localhost';
$banco = 'banco';
$usuario = 'usuario';
$senha = 'senha';

$conn = new PDO("mysql:host=$host;dbname=$banco", $usuario, $senha); //Conecta ao banco de dados

//Verifica a conexão
if($conn){
    echo "Conectado com sucesso!";
}else{
    echo "Erro ao conectar!";
}
