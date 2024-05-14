 <?php 
include('sessao_config.php');
?> 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento de Consulta</title>
    <script src="script.js"></script>
    <script src=""></script>
    <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBIZa51eHFqY0CajMvwEJRqPQ1ELFnz_ww&callback=initMaplibraries=maps,marker&v=beta"></script>
    <link rel="stylesheet" href="css/style.css">
   
</head>
<body>
    <header>
        <nav>
            <div class="container">
              <a href="index.html" class="logo">
                <img src="img/logo.png" alt="Logo">
              </a>
              <ul class="menu">
                <li><a href="index.html" class="active">Home</a></li>
                <li><a href="#">Consultorio</a></li>
                <li><a href="#">Contato</a></li>
              </ul>
              <div class="contact">
                <a href="#" class="phone">
                  <img src="img/contato.svg" alt="Telefone">
                </a>
                <a href="https://wa.me/5583999269208?text=Ol%C3%A1%20Andr%C3%A9%20Moreira,%20vim%20atrav%C3%A9s%20do%20seu%20site%20e%20gostaria%20de%20marcar%20um%20hor%C3%A1rio." class="whatsapp" target="_blank">
                  <img src="img/wpp.svg" alt="WhatsApp">
                </a>
              </div>
            </div>
          </nav>
    </header>

<main>
        <div class="perfil">
            <form action="cadastro.php" method="POST">
                <h1>Agende sua consulta:</h1>
                <label for="nome">Nome</label>
                <input class="campo" name="nome" type="text" id="nome" placeholder="Digite seu nome" required>
                <label for="cpf">CPF</label>
                <input class="campo" name="cpf" type="cpf" id="cpf" placeholder="XXX.XXX.XXX-XX" required>
                <label for="telefone">Telefone</label>
                <input class="campo" name="telefone" for="telefone" type="tel" id="telefone" placeholder="Digite um telefone para contato" required>
                <label for="sintoma">Descreva o motivo do seu contato</label>
                <textarea class="campo" name="sintoma" id="sintoma"  cols="30" rows="6" placeholder="Descreva seus sintomas(local da dor, intensidade e quando comecou)" required></textarea>
                <div class="btn-enviar">
                    <a href="cadastro.php">
                        <button type="submit">Agendar</button>
                    </a>
                </div>
                <div>
                    <a href="logout.php" >Logoff</a>
                </div>
            </form>
        </div>
        <br><br><br><br><br><br><br><br><br><br><br>
        <div class="base">
          <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d253414.09503899913!2d-35.03084243792725!3d-7.056754369697824!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7acdd8543b27539%3A0x50d1b5f0c34fc6d4!2sFOCO%20EM%20DOR%20-%20Fisioterapeuta%20Andr%C3%A9%20Moreira!5e0!3m2!1spt-BR!2sbr!4v1713371618913!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>        
    </main>


</body>
</html>
