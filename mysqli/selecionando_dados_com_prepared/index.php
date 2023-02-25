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

//Selecionadno dados  com prepared statement

//Preparando a query
$query = "SELECT * FROM itens WHERE id = ?";
$stmt = $conn->prepare($query);

//Definindo os valores
$id = 1;

//Definindo os parâmetros
$stmt->bind_param("i", $id); //i = inteiro

//Executando a query
$stmt->execute(); 

//Definindo os resultados
$stmt->bind_result($id, $nome, $descricao); //bind_result() é usado para definir os resultados

//fetch_all() retorna um array associativo com todos os resultados
$resultado = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);

print_r($resultado); //Exibindo os resultados

//Exibindo os resultados de outra forma
while($stmt->fetch()) { //fetch() retorna true enquanto houver dados
    echo "ID: " . $id . "<br>";
    echo "Nome: " . $nome . "<br>";
    echo "Descrição: " . $descricao . "<br>";
}

//Fechando a conexão
$conn->close();