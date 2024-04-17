<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta por CPF</title>
    <!-- Incluindo Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        /* Estilos adicionais para o botão de consulta */
        .consultar-btn {
            margin-top: 20px; /* Espaço entre o formulário e o botão */
        }
    </style>
</head>
<body>
<div class="container mt-5">
    <h2>Consulta por CPF</h2>
    <form action="consultar-agendamento.php" method="GET">
        <div class="form-group">
            <label for="cpf">CPF:</label>
            <input type="text" class="form-control" id="cpf" name="cpf" required>
        </div>
        <button type="submit" class="btn btn-primary">Consultar</button>

    </form>
    <br>
    <button onclick="voltar()" class="btn btn-primary">Agendar Novamente</button>

    <script>
        function voltar () {
        window.location.href = 'formulario-consulta.html';
    }
    </script>

</div>

<!-- Aqui você pode exibir os resultados da consulta -->
<div class="container mt-5">
    <?php
    include 'config.php';
    // Prepara o CPF para consulta
    $cpf = isset($_GET['cpf'])?$_GET['cpf']:null;

    // Consulta SQL para buscar registros por CPF
    $sql = "SELECT * FROM agendamento WHERE cpf = '$cpf'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Exibe os resultados da consulta
        echo "<h3>Resultados da consulta:</h3>";
        while($row = $result->fetch_assoc()) {
            echo "Nome: " . $row["nome"]. " - CPF: " . $row["cpf"]." - Sintoma:" .$row["sintoma"]."<br>";
        }
    } else {
        echo "<p>Nenhum resultado encontrado para o CPF informado.</p>";
    }

    // Fecha a conexão com o banco de dados
    $conn->close();
    ?>
</div>



<!-- Incluindo Bootstrap JS (opcional) -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
