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

//Utilizando o prepared statement

//Preparando a query
$query = "INSERT INTO itens (nome, descricao) VALUES (?, ?)";
$stmt = $conn->prepare($query);

//Definindo os valores
$nome = "Item 1";
$descricao = "Descrição do item 1";

//Definindo os parâmetros
$stmt->bind_param("ss", $nome, $descricao);

//Executando a query
$stmt->execute();

//Fechando a conexão
$conn->close();
