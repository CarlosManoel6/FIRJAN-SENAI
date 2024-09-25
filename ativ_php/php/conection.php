<?php
$servername = "localhost"; // O XAMPP roda na máquina local
$username = "CarlosM66"; // Usuário padrão do MySQL no XAMPP
$password = "carlos668_fnaf"; // Senha padrão, vazia, a menos que você tenha definido uma
$dbname = "senai_ta_aulaphp"; // Nome do banco de dados que estamos utilizando
// Cria a conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);
// Verifica se a conexão falhou
if ($conn->connect_error) {
    // Se a conexão falhar, exibimos uma mensagem de erro
    die("Conexão falhou: " . $conn->connect_error);
}
?>