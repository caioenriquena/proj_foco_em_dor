<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cadastroagendamento2";

// Cria a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>