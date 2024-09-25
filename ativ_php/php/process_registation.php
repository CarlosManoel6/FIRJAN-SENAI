<?php
include 'conection.php'; // Inclui o arquivo de conexão para poder interagir com o banco de dados
// Verifica se o formulário foi enviado usando o método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os dados enviados pelo formulário
    $nome = $_POST['Nome'];
    $idade = $_POST['Idade'];
    $sexo = $_POST['Sexo'];
    $email = $_POST['Email'];
    $telefone = $_POST['telefone'];
    $curso = $_POST['curso'];
    // Prepara uma consulta SQL para inserir os dados na tabela 'alunos'
    $sql = "INSERT INTO alunos (Nome, Idade, Sexo, Email, telefone, curso) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql); // Prepara a declaração SQL para execução
    $stmt->bind_param("ssss", $nome, $idade, $sexo, $email, $telefone, $curso); // Vincula os parâmetros (as variáveis) ao SQL
    // Tenta executar a consulta preparada
    if ($stmt->execute()) {
        // Se bem-sucedido, exibe uma mensagem de sucesso
        echo "Aluno cadastrado com sucesso!";
    } else {
        // Caso haja erro, exibe uma mensagem de erro com detalhes
        echo "Erro ao cadastrar: " . $stmt->error;
    }
    // Fecha a declaração e a conexão com o banco de dados
    $stmt->close();
    $conn->close();
}
?>