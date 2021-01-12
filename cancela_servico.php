<?php
    include("conecta.php");
    require_once("valida_sessao.php");
    


    $id_servico = $_POST['servico'];
    $id_usuario = $_SESSION['id'];

    
    
    $sqldel = "DELETE FROM servico_contratado WHERE id_cliente = '$id_usuario' AND id_servico = '$id_servico'";
    $sqlselect = "SELECT * FROM servico_contratado WHERE id_cliente = '$id_usuario' AND id_servico = '$id_servico'";
    $queryselect = mysqli_query($conn, $sqlselect);
    $row = mysqli_num_rows($queryselect);

        if($row > 0){
            $querydel = mysqli_query($conn, $sqldel);
            header("Location:meus_servicos.php?servico=servico_cancelado");

            
        }else{
        header("Location:meus_servicos.php?servico=erro_cancela");        
    }

         
?>