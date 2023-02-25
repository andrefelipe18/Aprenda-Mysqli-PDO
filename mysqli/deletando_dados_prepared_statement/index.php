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

//Removendo dados com prepared statement

//Preparando a query
$query = "DELETE FROM itens WHERE id = ?";
$stmt = $conn->prepare($query);

//Definindo os valores
$id = 1;

//Definindo os parâmetros
$stmt->bind_param("i", $id); //i = inteiro

//Executando a query
$stmt->execute();

//Fechando a conexão
$conn->close();
