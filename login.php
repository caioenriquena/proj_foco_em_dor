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
    <link rel="stylesheet" href="/css/style.css">
    
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="verifica-login.php" method="POST" class="bg-athletic" >
                    <h2 class="text-center text-white">Login</h2>
                    <div class="mb-3">
                        <label for="email" class="form-label text-white">email</label>
                        <input type="text" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="senha" class="form-label text-white">senha</label>
                        <input type="password" class="form-control" id="cpf" name="senha" required >
                    </div>
                    <div class="text-center">
                        <a href="cadastro_usuario.html"> Ainda não possui login? Cadastre-se</a> <br><br>
                        <button  type="submit" class="btn btn-primary">Acessar</button>

                    </div>
                </form>
            </div>
        </div>
    </div>
        
    </body>
    </html>