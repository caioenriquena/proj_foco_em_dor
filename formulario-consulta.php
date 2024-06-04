<?php 
include("sessao_config.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento de Consulta</title>
    <script src="script.js"></script>
    <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBIZa51eHFqY0CajMvwEJRqPQ1ELFnz_ww&callback=initMap&libraries=maps,marker&v=beta"></script>
    <link rel="stylesheet" href="css/teste.css">
</head>
<body>
    <div class="container">
        <form action="cadastro.php" method="POST" class="login-form">
            <fieldset>
                <legend>Agende sua consulta:</legend>
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input class="form-control" name="nome" type="text" id="nome" placeholder="Digite seu nome" required>
                </div>
                <div class="mb-3">  
                    <label for="cpf" class="form-label">CPF</label>
                    <input class="form-control" name="cpf" type="text" id="cpf" placeholder="XXX.XXX.XXX-XX" required>
                </div> 
                <div class="mb-3"> 
                    <label for="telefone" class="form-label">Telefone</label>
                    <input class="form-control" name="telefone" type="tel" id="telefone" placeholder="Digite um telefone para contato" required>
                </div> 
                <div class="mb-3">
                    <label for="sintoma" class="form-label">Descreva o motivo do seu contato</label>
                    <textarea class="form-control" name="sintoma" id="sintoma" cols="30" rows="6" placeholder="Descreva seus sintomas (local da dor, intensidade e quando começou)" required></textarea>
                </div> 
                <div class="text-center">
                    <button type="submit" class="btn">Agendar</button>
                </div>
                <br>
                <div class="text-center">
                    <a href="logout.php">Sair</a>
                </div>
            </fieldset>
        </form>
    </div>
</body>
</html>
