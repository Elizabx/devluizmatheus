<?php

    if(isset($_POST['submit']))
    {

        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];
        $genero = $_POST['genero'];
        $dataNascimento = $_POST['dataNascimento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, email, senha, telefone, genero, dataNascimento, cidade, estado, endereco) VALUES ('$nome', '$email', '$senha', '$telefone', '$genero', '$dataNascimento', '$cidade', '$estado', '$endereco')");
        
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fórmulario | PS</title>
    <link rel="stylesheet" href="/freture/css/formulario.css" />
</head>
<body>
    <a href="home.php">Voltar</a>
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Fórmulario de Clientes</b></legend>
                <br>
                <div class="inputbox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome">Nome Completo:</label>
                </div>
                <br>
                <br>
                <div class="inputbox">
                    <input type="email" name="email" id="email" class="inputUser" required>
                    <label for="email">Email:</label>
                </div>
                <br>
                <br>
                <div class="inputbox">
                    <input type="text" name="senha" id="senha" class="inputUser" required>
                    <label for="senha">Senha:</label>
                </div>
                <br>
                <br>
                <div class="inputbox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone">Telefone:</label>
                </div>
                <br>
                <p>Gênero:</p>
                <input type="radio" id="feminino" name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>
                <br>
                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>
                <br>
                <input type="radio" id="prefiroNaoInformar" name="genero" value="prefiroNaoInformar" required>
                <label for="prefiroNaoInformar">Prefiro Não Informar</label>
                <br>
                <br>
                <br>
                <label for="dataNascimento">Data de Nascimento:</label>
                <input type="date" name="dataNascimento" id="dataNascimento" required>
                <br>
                <br>
                <br>
                <div class="inputbox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade">Cidade:</label>
                </div>
                <br>
                <br>
                <div class="inputbox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado">Estado:</label>
                </div>
                <br>
                <br>
                <div class="inputbox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco">Endereço:</label>
                </div>
                <br>
                <br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>
