<?php
    $servidor = "localhost";
    $usuario = "root" ;
    $senha = "" ;
    $base = "united";
        
    $conn = mysqli_connect($servidor, $usuario, $senha, $base);
        
    if(!$conn ){
        die("Erro encontrado: " . mysqli_connect_error());
        
    }

?>