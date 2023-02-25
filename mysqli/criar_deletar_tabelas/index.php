<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "databasemysqli";

$conn = new mysqli($host, $user, $pass, $db);

if($conn->connect_errno) {
    echo "Erro na conexão! <br>";
    echo "Erro: " . $conn->connect_error;
}

//$query = "CREATE TABLE teste (nome VARCHAR(100), sobrenome VARCHAR(100))";

$query = "DROP TABLE teste";

$result = $conn->query($query); //Executando a query

print_r($result);

$conn->close();