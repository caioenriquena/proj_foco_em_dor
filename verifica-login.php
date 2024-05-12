<?php 

include("config.php");

session_start();

$email = $_POST["email"];
$senha = $_POST["senha"];

// Verificação de Usuário
$sqlUsuario = "SELECT * FROM usuario WHERE email='$email'";
$resultUsuario = $conn->query($sqlUsuario);

if ($resultUsuario->num_rows > 0) {
    $rowUsuario = $resultUsuario->fetch_assoc();

        // verificar senha
    if ($rowUsuario['senha'] === $senha) {
        $_SESSION['usuario_id'] = $rowUsuario['id']; 
        $_SESSION['tipo_usuario'] = $rowUsuario['tipo']; 
        if ($_SESSION['tipo_usuario'] === 'comum') {
            echo "<script>alert('Login efetuado'); window.location.href = 'formulario-consulta.php';</script>";
        } elseif ($_SESSION['tipo_usuario'] === 'admin') {
           echo "<script>alert('Login efetuado'); window.location.href = 'consultar-agendamento.php';</script>";
        } else {
           echo "<script>alert('Usuário não faz parte do sistema'); window.location.href = 'login.php';</script>";
        }
    } else {
        
       echo "<script>alert('Usuário ou senha invalida !'); window.location.href = 'login.php';</script>";
    }
} else {
    echo "<script>alert('Usuário ou senha invalida'); window.location.href = 'login.php';</script>";
}

$conn->close();

?>
