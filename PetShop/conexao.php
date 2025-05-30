<?php

function loadEnv($path) {
    if (!file_exists($path)) return;

    $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        if (strpos(trim($line), '#') === 0) continue;
        list($name, $value) = explode('=', $line, 2);
        putenv(trim($name) . "=" . trim($value));
    }
}

// ✅ Carregar o .env
loadEnv(__DIR__ . '/.env');

// ✅ Pega as variáveis corretas
$host = getenv('DB_HOST');
$username = getenv('DB_USER');
$password = getenv('DB_PASS');
$dbname = getenv('DB_NAME');

// ✅ Criando a conexão
$conn = new mysqli($host, $username, $password, $dbname);

// ✅ Verificando a conexão
if ($conn->connect_error) {
    die("❌ Falha na conexão: " . $conn->connect_error);
}
?>
