<?php
    
    include("conecta.php");
    require_once "valida_sessao.php";
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
            echo("<div class='login'><a href='logoff.php'>Sair</a></div>");
        }
            
          
                
        ?>    

            <div class="logo">
                <a href="index.php"><img src="src/logo.png" alt="United Security©" title="United Security©"></a>
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
        
        <h2 class="titulo">Área de <?php echo $_SESSION['user'] ?> </h2>;
        
        <?php if(isset($_GET['atualiza']) && $_GET['atualiza'] == 'sucesso'){ echo "<h3>Dados Alterados com Sucesso</h3>";}     ?>
        
        
            <section id="dados">
                
                        <?php include('meus_dados.php')?>

         </section>

        <br><br>
        <div class="linkancora">
            <h3><a href="meus_servicos.php">Clique aqui para gerenciar seus serviços</a></h3>
            <h3><a href="atualiza.php">Clique aqui para atualizar seus dados</a></h3>
        </div> 
       
                           

        <footer>
            <div><h5>United Security©2020 Todos os direitos reservados</h5></div>
        </footer>
    </div>
</body>
</html>