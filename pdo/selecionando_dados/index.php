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

//Selecionando dados com PDO
$stmt = $conn->prepare("SELECT * FROM tabela"); //Prepara a query

$stmt->execute(); //Executa a query

//Verifica se a query foi executada com sucesso
if($stmt->execute()){
    echo "Dados selecionados com sucesso!";
}else{
    echo "Erro ao selecionar dados!";
}
//Fechando a conexão
$conn = null;