<?php
    session_start();

    if(!isset($_SESSION['autenticado']) && $_SESSION['autenticado'] != true){
        header('Location: login.php?login=acessonegado');
    }
    
?>