<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>United Security© - Login</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <div id="master">
        <header>
            
        
        <?php
        if(empty($_SESSION['autenticado'])){
            echo("<div class='login'><a href='login.php'>Entre ou Cadastre-se</a></div>");

           
        }else {
            echo("<div class='login'><a href='logoff.php'>Sair</a></div>><div><a href='conta.php'>Meus Serviços</a></div>");
        }
        
        ?>    

            <div class="logo">
                <a href="index.php"><img src="src/logo.png" alt="United Security©" title="United Security©"></a>
                <h2 class="subtitulo">Maior segurança. A tecnologia à seu favor.</h2>

            </div>
            <br>
            <div class="menu">
            <nav>
                <ul>
                    <li><a href="index.php">Início</a></li>
                    <li><a href="servicos.php">Serviços</a></li>
                    <li><a href="contato.php"> Contato</a></li>
                    <li><a href="sobre.php"> Sobre</a></li>
             
                </ul>
            </nav>
            </div>
        </header>
        
        
       
            <form id="LogIn" action="valida.php" method="POST">
                
                    <?php 
                        if(isset($_GET['login']) && $_GET['login'] == 'erroautenticacao'){
                            echo "<h1 class='titulo'>Login</h1>";
                            echo "<script>alert('Login e/ou senha incorretos. Por favor, tente novamente.')</script>";
                            
                        } else if(isset($_GET['login']) && $_GET['login'] == 'saudacaolog'){
                             header('Location: conta.php?login=saudacaolog');
                            
                            
                        }else if(isset($_GET['login']) && $_GET['login'] == 'saudacaocad'){
                            echo("<h1 class='titulo'>Login</h1>");
                            echo("<h3>Cadastro feito com sucesso! Faça seu login!</h3>");

                        }else if(isset($_GET['login']) && $_GET['login'] == 'acessonegado'){
                            echo("<h1 class='titulo'>Login</h1>");
                            echo("<h3>Faça seu login para ter acesso</h3>");

                        }else{
                            echo("<h1 class='titulo'>Login</h1>");
                        }  
                ?> 
                
            <fieldset class="contatos">
                    <img id="logologin" src="src/logo.png" alt="United Security©">
                    <p>Use sua conta United</p>
                <label for="username">Login<b>*</b>:</label><input type="text" id="username" name="username" placeholder="Digite seu apelido" required/>
                <br>
                <label for="password">Senha<b>*</b>:</label><input type="password" id="password" name="password" placeholder="Digite sua Senha" required><br>
                <input type="submit" value="Login" id="logar" name="logar">

                
                <a id="aCadastro" href="cadastro.php">Cadastre-se!</a>
            </fieldset>
                
        </form>
        

        <footer>
            <div><h5>United Security©2020 Todos os direitos reservados</h5></div>
        </footer>
    </div>
</body>
</html>