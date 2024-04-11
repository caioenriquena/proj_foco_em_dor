<?php
include("config.php");

$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$telefone = $_POST['telefone'];
$sintoma = $_POST['sintoma'];

$sql = "INSERT INTO agendamento (nome,cpf,telefone,sintoma) values ('$nome','$cpf','$telefone','$sintoma')";

if($conn->query($sql) === TRUE) {
    // Mensagem de sucesso
    echo "<script>alert('Cadastro realizado com sucesso!'); window.location.href = 'formulario-consulta.html';</script>";
    exit;
} else {
    // Mensagem de erro, se houver
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
