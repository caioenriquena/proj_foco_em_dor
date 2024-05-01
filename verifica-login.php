<?php 

include("config.php");

$email = $_POST["email"];
$senha = $_POST["senha"];

$sql = "SELECT * FROM usuario WHERE email='$email' AND senha='$senha'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    
    $row = $result->fetch_assoc();
    $_SESSION['usuario_id'] = $row['id']; 
    $_SESSION['tipo_usuario'] = $row['tipo']; 

    if ($_SESSION['tipo_usuario'] === 'comum') {
        echo "<script>alert('Login efetuado'); window.location.href = 'formulario-consulta.php';</script>";
    } elseif ($_SESSION['tipo_usuario'] === 'admin') {
        header("Location: consultar-agendamento.php");
    }else{
      //  header ("Location : login.php?erro=1");
        echo $_SESSION;
    }
    
}

$conn->close();

?>