<?php
    session_start();
    include("conecta.php");


    $nome = $_POST['name'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['tel'];
    $apelido = $_POST['nick'];
    $password = $_POST['password'];

    $query_select = "SELECT apelido FROM cadastro WHERE apelido = '$apelido'";
    $select = mysqli_query($conn, $query_select);
    $array = mysqli_fetch_array($select);
    $logarray = $array['apelido'];

        if($logarray == $apelido){

        header('Location: cadastro.php?cadastro=erro');
        }
        
        else{

        
    $sql = "INSERT INTO cadastro (nome, cpf, telefone, apelido, senha) VALUES ('$nome', '$cpf', '$telefone', '$apelido', '$password')";
        
    $insere = mysqli_query($conn , $sql);
        }
        
    if($insere){
        echo " <script> alert('Usuário Cadastrado com sucesso!') </script> ";
        Header('Location: login.php?login=saudacaocad');

    } else{
        echo "<script> Não foi possível cadastrar </script>";
    }



 
 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>United Security©</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="js/javascript.js"></script>
</head>
    
<body onload="slide1()">
    <div id="master">
        <header>
        <?php
        if(empty($_SESSION['autenticado'])){
            echo("<div class='login'><a href='login.php'>Entre ou Cadastre-se</a></div>");
           
        }else {
            echo("<div class='login'><a href='logoff.php'>Sair</a></div>");
        }
        
        ?>
            
            <div class="logo">
                <a href="index.php"><img src="src/logo.png" alt="United Security©"></a>
                <h2 class="subtitulo">Maior segurança. A tecnologia à seu favor.</h2>
                

            </div>
          <br>
             
        <?php
            if(empty($_SESSION['autenticado'])){
                echo("<div class='menu'>
            <nav>
                <ul>
                    <li><a href='index.php'>Início</a></li>
                    <li><a href='servicos.php'> Serviços</a></li>
                    <li><a href='contato.php'> Contato</a></li>
                    <li><a href='sobre.php'> Sobre</a></li>
                    
                </ul>
            </nav>
        </div>");
            
            }else {
                echo("<div class='menu2'><nav>
                <ul>
                    <li><a href='index.php'>Início</a></li>
                    <li><a href='servicos.php'> Serviços</a></li>
                    <li><a href='contato.php'> Contato</a></li>
                    <li><a href='sobre.php'> Sobre</a></li>
                    <li><a href='conta.php'> Minha Área</a></li>
                </ul>
            </nav>
        </div>");
            }
        ?>
        
        </header>
        

        
        <section>
                <div id="slider"><img id="id"></div>
            
          
             
        </section>

        <footer>

        </footer>
    </div>
</body>
</html>