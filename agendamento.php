<?php
require_once 'vendor/autoload.php'; // Carrega a biblioteca Twilio

use Twilio\Rest\Client;

// Dados do agendamento
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$sintoma = $_POST['sintoma'];

// Conexão com o banco de dados
include("config.php");

// Inserção no banco de dados
$sql = "INSERT INTO agendamento (nome,cpf,telefone,sintoma) values ('$nome','$cpf','$telefone','$sintoma')";


if ($conn->query($sql) === TRUE) {
    // Mensagem de sucesso

    echo "<script>alert('Cadastro realizado com sucesso!'); window.location.href = 'formulario-consulta.html';</script>";

    $sid    = "AC5aade1fe84be034e358e4e5f501e911c";
    $token  = "9e60e27cc9c83457b7c1079f689c4688";
    $twilio = new Client($sid, $token);

    $data_atual = date('d-m-Y'); // mostrar a data de hoje

    $zap = "O cliente : $nome! Fez o agendamento ". $data_atual ." no sistema";

    $message = $twilio->messages
        ->create("whatsapp:+558387698885", // to
            array(
                "from" => "whatsapp:+14155238886",
                "body" => $zap
            )
      );

print($message->sid);

echo $message;
    exit;
} else {
    // Mensagem de erro, se houver
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
