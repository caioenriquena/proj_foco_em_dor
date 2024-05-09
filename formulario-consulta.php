<?php 

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento de Consulta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url(/img/bolanocampo.jpg);
            
            color: #333; /* cor do texto */
        }
        .container {
            padding-top: 50px;
        }
        .bg-athletic {
            background-color: #803235; /* cor de fundo alegre e atlética */
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="cadastro.php" method="POST" class="bg-athletic" >
                    <h2 class="text-center text-white">Agende sua Consulta</h2>
                    <div class="mb-3">
                        <label for="nome" class="form-label text-white">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" required>
                    </div>
                    <div class="mb-3">
                        <label for="cpf" class="form-label text-white">CPF</label>
                        <input type="text" class="form-control" id="cpf" name="cpf" required>
                    </div>
                    <div class="mb-3">
                        <label for="telefone" class="form-label text-white">Telefone</label>
                        <input type="tel" class="form-control" id="telefone" name="telefone" required>
                    </div>
                    <div class="mb-3">
                        <label for="sintoma" class="form-label text-white">Sintomas</label>
                        <textarea type="text" class="form-control" id="sintoma" name="sintoma" rows="3" required></textarea>
                    </div>
                    <div class="text-center">
                        <button href="cadastro.php" type="submit" class="btn btn-primary">Agendar</button>
                    </div>
                    <div>
                        <a href="logout.php" >Logoff</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Inclusão do JS do Bootstrap via CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<!-- Botão de consultar agendamento com estilo semelhante ao botão de cadastrar -->
<div class="container text-center consultar-btn">
    <a href="consultar-agendamento.php" class="btn btn-primary">Consultar Agendamento</a>
</div>

<!-- Incluindo Bootstrap JS (opcional) -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>
</html>
