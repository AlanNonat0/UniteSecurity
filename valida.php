<?php
    include("conecta.php");
    session_start();
    $autenticado = false;
    $usuario_id = null;
    $user = null;
    $senha = null;
    $id= null;
   

    //definido servidor e conexão

    $username = $_POST['username'];
    $password = $_POST['password'];

    //verificando se existe na base de dados
    $login = mysqli_query($conn, "SELECT id, apelido, senha FROM cadastro WHERE apelido = '$username' AND senha = '$password'");
    
        
        while($linha = mysqli_fetch_assoc($login)){
            $id = $linha[id];
        }
       
        if(mysqli_num_rows($login)>0){
            $autenticado = true;
            $_SESSION['id'] = $id;
            $_SESSION['user'] = ucfirst($username);
            $_SESSION['senha'] = ucfirst($password);
            header('Location: login.php?login=saudacaolog');
        }





    if($autenticado){
        $_SESSION['autenticado'] = true;
        
    }else{
        $_SESSION['autenticado'] = false;
        header('Location: login.php?login=erroautenticacao');
    }

    

?>