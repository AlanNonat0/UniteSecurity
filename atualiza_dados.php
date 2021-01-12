<?php
    include("conecta.php");
    require_once("valida_sessao.php");

    $id = $_SESSION['id'];
    $tel = $_POST['telAtt'];
    $senha_atual = $_POST['passwordAtt'];
    $senha_nova = $_POST['passwordAtt1'];
    $senha_nova_conf = $_POST['passwordAtt2'];

    

    $select = "SELECT id, senha FROM cadastro WHERE id=$id ";
    $query = mysqli_query($conn, $select);

    while($linha = mysqli_fetch_array($query)){
        $senha_banco = $linha['senha'];
    }

    if($senha_banco == $senha_atual){
        if($senha_nova == $senha_nova_conf){
            $sql_update = "UPDATE `cadastro` SET `telefone`= $tel, `senha`='$senha_nova' WHERE id=$id;";
            $queryInsert = mysqli_query($conn, $sql_update);
            header("Location: conta.php?atualiza=sucesso");

        }else{
            header("Location: atualiza.php?atualiza=senhadivergente");
        }
    }else{
        header("Location: atualiza.php?atualiza=senhaincorreta");
    }
    

?>