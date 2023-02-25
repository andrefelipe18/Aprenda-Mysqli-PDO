<?php

//Fazendo a conexão com o banco de dados via MySQLi
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'databasemysqli';
$conn = new mysqli($host, $user, $pass, $db);

if($conn->connect_errno) {
    echo "Erro na conexão! <br>";
    echo "Erro: " . $conn->connect_error;
}