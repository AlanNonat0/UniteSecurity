<?php
    include("conecta.php");
    require_once("valida_sessao.php");
    


    $servico = $_POST['servico'];
    $id_usuario = $_SESSION['id'];

    
    $sql = "INSERT INTO servico_contratado (id_cliente, id_servico) VALUES ('$id_usuario', '$servico')";
    $query = mysqli_query($conn, $sql);
              
    if($query){
        header("Location:meus_servicos.php?servico=servicocontratado");
    }
    else{
        header("Location:meus_servicos.php?servico=servicoduplicado");
    }
    
    
         
?>