<?php
    require "db.php";
    $nome= $_POST['nome'];
    $idade= $_POST['idade'];
    $email= $_POST['email'];
    $curso= $_POST['curso'];

    $sql = "INSERT into alunos(nome, idade, email, curso) 
    values ('$nome','$idade','$email','$curso')";

    if($conn->query($sql)=== true){
        echo "Aluno cadastrado!";
        header('../index.php',true);
    } else{
        echo "ERROR: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
// fim D:30/09 H:10:55
?>