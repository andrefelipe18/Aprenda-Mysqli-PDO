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

//Inserindo dados com PDO
$stmt = $conn->prepare("INSERT INTO tabela (nome, email) VALUES (:nome, :email)"); //Prepara a query

$nome = "Nome"; //Variável com o nome
$email = "dominguesandredev@gmail.com"; //Variável com o email

$stmt->bindParam(":nome", $nome); //Vincula o valor da variável com o parâmetro
$stmt->bindParam(":email", $email); //Vincula o valor da variável com o parâmetro

$stmt->execute(); //Executa a query

//Verifica se a query foi executada com sucesso
if($stmt->execute()){
    echo "Dados inseridos com sucesso!";
}else{
    echo "Erro ao inserir dados!";
}

//Fechando a conexão
$conn = null;