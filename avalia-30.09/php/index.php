<!DOCTYPE html> 
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Alunos</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="container">
        <form action="processa_cadastro.php" method="POST">
            <label for="nome">nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="idade">idade:</label>
            <input type="number" id="idade" name="idade">

            <label for="email">email:</label>
            <input type="email" id="email" name="email" required>

            <label for="curso">curso:</label>
            <input type="text" id="curso" name="curso" required>

            <button type="submit" id= "submit">Cadastrar</button>
        </form>
    </div>
    <div>
        <?php // fim D:30/09 H:10:30
        require "db.php";
        $sql = "Select * from alunos order by id desc limit 10";
        $result = $conn->query($sql);
        if($result->num_rows>0){
            echo "<table border='1'>
            <tr>
            <tr>id</tr>
            <tr>nome</tr>
            <tr>idade</tr>
            <tr>email</tr>
            <tr>curso</tr>
            </tr>";
            while($row = $result->fetch_assoc()){
                echo "<tr>
                <tr>".$row['id']."</tr>
                <tr>".$row['nome']."</tr>
                <tr>".$row['idade']."</tr>
                <tr>".$row['email']."</tr>
                <tr>".$row['curso']."</tr>
                </tr>";
            }
            echo "</table>;";
        } else{
            echo "Nenhum dado encontrado";
        }
    ?>
    <form action="./php/deletar.php" method="post">
        <label for="id">Deletar usuario</label>
        <input type="number" placeholder="Insira o ID do aluno" name="id">
        <button type="submit" id="submit">Confirmar</button>
    </div>
</body> 
</html>
