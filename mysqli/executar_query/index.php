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

$query = "SELECT * FROM itens"; //Query SQL

$result = $conn->query($query); //Executando a query

print_r($result);

$conn->close();