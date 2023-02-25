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

//Selecionadno dados  com prepared statement e obetendo apenas uma linha

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

//fetch_row() retorna um array com os resultados
$resultado = $stmt->get_result()->fetch_row(); 

//Exibindo os resultados
echo "ID: " . $resultado[0] . "<br>";
echo "Nome: " . $resultado[1] . "<br>";
echo "Descrição: " . $resultado[2] . "<br>";

//Fechando a conexão
$conn->close();
