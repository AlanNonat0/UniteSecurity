<?php
include('conecta.php');

    $nome = $_POST['name'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    if($conn){
    $sql = "INSERT INTO `contato`( `nome`, `telefone`, `email`, `mensagem`) VALUES ( '$nome','$tel','$email','$mensagem')";
    $insere = mysqli_query($conn, $sql);
    header('Location: contato.php?contato=sucesso');
    }else{
        echo('<script>alert("ERRO: falha na conexão")</script>');
    }
?>