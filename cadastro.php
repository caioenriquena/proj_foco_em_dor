<?php
// Conexão com o banco de dados
include("config.php");

// Dados do agendamento
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$sintoma = $_POST['sintoma'];

// Inserção no banco de dados
$sql = "INSERT INTO agendamento (nome,cpf,telefone,sintoma) values ('$nome','$cpf','$telefone','$sintoma')";

if ($conn->query($sql) === TRUE) {
    // Mensagem de sucesso

    echo "<script>alert('Cadastro realizado com sucesso!'); window.location.href = 'agendado.html';</script>";

print($message->sid);

echo $message;
    exit;
} else {
    // Mensagem de erro, se houver
    echo "Erro: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
