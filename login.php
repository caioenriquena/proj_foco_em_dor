<?php 
session_start();

if(isset($_SESSION['usuario_id']) && $_SESSION['usuario_id'] != null ){

    echo "<script>alert('Você já está logado'); window.location.href = 'formulario-consulta.php';</script>";

}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/index2.css">
</head>
<body>
    <div class="container">
        <a href="index.html" class="logo">
            <img src="img/logo.png" alt="Logo">
        </a>
        <form action="verifica-login.php" method="POST" class="login-form">
            <fieldset>
                <legend>Login</legend>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="exemplo@gmail.com" required>
                </div>
                <div class="mb-3">
                    <label for="senha" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="senha" name="senha" placeholder="********" required>
                </div>
                <div class="text-center">
                    <a href="cadastro_usuario.html">Ainda não possui login? Cadastre-se</a> <br><br>
                    <button type="submit" class="btn">Acessar</button>
                </div>
            </fieldset>
        </form>
    </div>
</body>
</html>