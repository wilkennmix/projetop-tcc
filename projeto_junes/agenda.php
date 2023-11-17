<?php

include_once('config.php');

// Função para sanitizar dados
function sanitize($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  
  // Handle form submission
  if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Get form data
    $nome = sanitize($_POST['nome']);
    $telefone = sanitize($_POST['telefone']);
    $email = sanitize($_POST['email']);
    $data_evento = sanitize($_POST['data_evento']);
    $horario_evento = sanitize($_POST['horario_evento']);
    $data_retirada = sanitize($_POST['data_retirada']);
    $horario_retirada = sanitize($_POST['horario_retirada']);
    $data_devolucao = sanitize($_POST['data_devolucao']);
    $horario_devolucao = sanitize($_POST['horario_devolucao']);
    $nome_atendente = sanitize($_POST['nome_atendente']);
  
    // Valida os dados
    if (empty($nome)) {
      echo "O nome é obrigatório.";
      exit;
    }
  
    if (empty($data_evento)) {
      echo "A data do evento é obrigatória.";
      exit;
    }
  
    if (empty($horario_evento)) {
      echo "O horário do evento é obrigatório.";
      exit;
    }
  
    if (empty($data_retirada)) {
      echo "A data da retirada é obrigatória.";
      exit;
    }
  
    if (empty($horario_retirada)) {
      echo "O horário da retirada é obrigatório.";
      exit;
    }
  
    if (empty($data_devolucao)) {
      echo "A data da devolução é obrigatória.";
      exit;
    }
  
    if (empty($horario_devolucao)) {
      echo "O horário da devolução é obrigatório.";
      exit;
    }
  
    // Processa os dados
    $data_retirada = date('Y-m-d', strtotime($data_retirada));
    $horario_retirada = date('H:i', strtotime($horario_retirada));
    $data_devolucao = date('Y-m-d', strtotime($data_devolucao));
    $horario_devolucao = date('H:i', strtotime($horario_devolucao));
  
    // Salva os dados no banco de dados
    $sql = "INSERT INTO agendamentos (nome, data_retirada, horario_retirada, nome_atendente, telefone, email)
    VALUES ('$nome', '$data_retirada', '$horario_retirada', '$nome_atendente', '$telefone', '$email')";

  
    // Exibe uma mensagem de sucesso
    echo "Agendamento realizado com sucesso!";
  }

  // Função para formatar data e hora
  function formatarDataHora($data, $horario) {
    return date('d/m/Y H:i', strtotime($data . ' ' . $horario));
  }

  
  ?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title>Agendamento</title>
</head>
<body>

  <h1>AGENDAMENTO</h1>
  <a href="home.php"><img src="../imagem/logo.png" alt=""></a>
  <form action="agenda.php" method="post">
  <fieldset>
        <legend><b>Dados do aluguel</b></legend>
        <div class="inputBox">
          <label for="nome">NOME</label>
          <input type="text" name="nome" id="nome" required>
        </div>
        <div class="inputBox">
          <label for="email">EMAIL</label>
          <input type="text" name="email" id="email" required>
        </div>
        <div class="inputBox">
          <label for="telefon">TELEFONE</label>
          <input type="text" name="telefone" id="telefone" required>
        </div>
        <div class="inputBox">
          <label for="data_evento">Data do evento</label>
          <input type="date" name="data_evento" id="data_evento" required>
        </div>
        <div class="inputBox">
          <label for="horario_evento">Horário do evento</label>
          <input type="time" name="horario_evento" id="horario_evento" required>
        </div>
        <div class="inputBox">
          <label for="data_retirada">Data da retirada</label>
          <input type="date" name="data_retirada" id="data_retirada" required>
        </div>
        <div class="inputBox">
          <label for="horario_retirada">Horário da retirada</label>
          <input type="time" name="horario_retirada" id="horario_retirada" required>
        </div>
        <div class="inputBox">
          <label for="data_devolucao">Data da devolução</label>
          <input type="date" name="data_devolucao" id="data_devolucao" required>
        </div>
        <div class="inputBox">
          <label for="horario_devolucao">Horário da devolução</label>
          <input type="time" name="horario_devolucao" id="horario_devolucao" required>
          <div class="inputBox">
          <label for="nome_atendente">NOME ATENDENTE</label>
          <input type="text" name="nome_atendente" id="nome_atendente" required>
        </div>
        </div>
        <input type="submit" value="Enviar">
      </fieldset>
  </form>

</body>
</html>
<style>
body{
  background-image: url(logo.pge.webp);
  background-repeat: no-repeat;
  background-size: cover;
  font: 900;
  
  margin-left: 50%;
  
}

  
  h1 {
    margin-top: 0;
  }
  
  main {
    margin-top: 10px;
  }
  
  fieldset {
   background-color: #778899;
    width: 60%;
  }
  
  legend {
    font-size: 1.2em;
  }
  
  .inputBox {
    margin-bottom: 10px;
  }
  
  input {
    width: 90%;
    padding: 5px;
    border: 1px solid #ccc;
  }
  
  input[type="submit"] {
    background-color: #000;
    color: #fff;
    padding: 5px;
    border: none;
    cursor: pointer;
   
  }

</style>