<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "databasemysqli";

$conn = new mysqli($host, $user, $pass, $db); //Criando a conexão

if($conn->connect_errno) {
    echo "Erro na conexão! <br>";
    echo "Erro: " . $conn->connect_error;
}

//Atualizando dados com prepared statement

//Preparando a query
$query = "UPDATE itens SET nome = ?, descricao = ? WHERE id = ?";
$stmt = $conn->prepare($query);

//Definindo os valores
$id = 1;
$nome = 'Item 1';
$descricao = 'Descrição do item 1';

//Definindo os parâmetros
$stmt->bind_param("ssi", $nome, $descricao, $id); //s = string, i = inteiro


//Executando a query
$stmt->execute(); 

//Fechando a conexão
$conn->close();

