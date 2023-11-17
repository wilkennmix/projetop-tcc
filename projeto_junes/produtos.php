<?php
 if(isset($_POST['submit']))
 {
// Conexão com o banco de dados
include_once ('config.php');

// Dados do formulário

$nome = $_POST["nome"];
$preco = $_POST["preco"];
$quantidade = $_POST["quantidade"];
$categoria = $_POST["categoria"];
$imagem = $_POST["imagem"]["name"];

// Upload da imagem
move_uploaded_file($_POST["imagem"]["tmp_name"], "PAGINAS/pimagem" . $imagem);

// Inserção dos dados no banco de dados
$result = mysqli_query($conexao, "INSERT INTO produtos(nome,preco,quantidade,categoria,imagem) VALUES ('$nome','$preco','$quantidade','$categoria','$imagem')");
$conexao->query($sql);



 }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Produto</title>
</head>
<body>
    <h1>CADASTRO DE PRODUTOS
    <a href="adm.php"><img src="../imagem/logo.png" alt=""></a>
    </h1>    
    <form action="produtos.php " method="post" enctype=" ">
        <div class="campos">
            <label for="nome">Nome do produto</label>
            <input type="text" name="nome" id="nome" required>
        </div>
        <div class="campos">
            <label for="preco">Preço</label>
            <input type="number" name="preco" id="preco" required>
        </div>
        <div class="campos">
            <label for="quantidade">Quantidade</label>
            <input type="number" name="quantidade" id="quantidade" required>
        </div>
        <div class="campos">
            <label for="categoria">Categoria</label>
            <select name="categoria" id="categoria" required>
                <option value="eletronicos">GALA</option>
                <option value="roupas">CASAMENTO</option>
                <option value="alimentos">INFANTIL</option>
                <option value="outros">OUTROS</option>
            </select>
        </div>
        <div class="campos">
            <label for="imagem">Imagem</label>
            <input type="text" name="imagem" id="imagem" required>
        </div>
        <input type="submit" value="enviar">
    </form>
</body>
</html>

<style>
body{
    font-family: Arial, Helvetica, sans-serif;
    background-image: url(terno.jpg);
    background-repeat: no-repeat;
    background-size: cover;
}
h1 {
  text-align: center;
  font-size: 24px;
  margin-bottom: 20px;
  display: flex;
  flex-direction: column ;
}

form {
  width: 550px;
  margin: 0 auto;
  padding: 20px;
  background-color: rgba(0, 0, 0, 0.6);
  border-radius: 10px;
  
    
}

.campos {
  margin-bottom: 10px;
  padding: 2px;
}

label {
  display: block;
  margin-bottom: 5px;
}

input, select {
  width: 98%;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

input[type="submit"] {
  background-color: #00008B;
  color: #fff;
  padding: 10px 20px;
  border: none;
  cursor: pointer;
  border-radius: 5px;
  font-size: 20px;
}

input[type="submit"]:hover {
  background-color: #4169E1;
}

</style>

