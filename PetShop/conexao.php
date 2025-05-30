<?php
$host = 'localhost';     // Endereço do servidor MySQL (geralmente 'localhost')
$username = 'root';      // Nome de usuário do MySQL
$password = '';          // Senha do MySQL (se houver)
$dbname = 'bd-petshop';          // Nome do banco de dados

// Criando a conexão
$conn = new mysqli($host, $username, $password, $dbname);

// Verificando a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

?> 
