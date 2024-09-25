<?php
include 'conection.php'?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"><!-- Define a codificação de caracteres para suportar acentuação -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- Garante que o site seja responsivo em dispositivos móveis -->
    <title>Resgistros de estudandes</title>
    <link rel="stylesheet" href="style.css"> <!-- Conecta o arquivo CSS externo -->
</head>
<body>
    <div class="container">
        <h2>Resgistros de estudandes</h2>
        <form action="process_registration.php" method="POST">
            <label for="nome">Nome</label><!-- Campo para o nome do aluno -->
            <input type="text" id="nome" name="nome" required>
            <label for="idade">Idade</label><!-- Campo para a idade do aluno -->
            <input type="text" id="idade" name="idade" required>
            <label for="sexo">Sexo</label><!-- Campo para o sexo do aluno -->
            <input type="text" id="sexo" name="sexo" required>
            <label for="email">Email</label><!-- Campo para o email do aluno -->
            <input type="email" id="email" name="email" required>
            <label for="telefone">Telefone</label><!-- Campo para o telefone do aluno -->
            <input type="text" id="telefone" name="telefone" required>
            <label for="curso">Curso</label><!-- Campo para o curso do aluno -->
            <input type="text" id="curso" name="curso" required>
            <button type="submit">Cadastrar</button> <!-- Botão de envio do formulário -->
        </form>
    </div>
</body>
</html>