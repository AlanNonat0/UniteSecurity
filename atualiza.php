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



        
        <h2 class="titulo">Atualizar dados de <?php echo $_SESSION['user'] ?> </h2>;

        <?php 
                        if(isset($_GET['atualiza']) && $_GET['atualiza'] == 'senhadivergente'){ echo "<h3>Nova senha diferente</h3>";}
                        if(isset($_GET['atualiza']) && $_GET['atualiza'] == 'senhaincorreta'){ echo "<h3>Senha atual Incorreta</h3>";}
                    
                    ?>
        
        
        
        <form class="cadastro" action="atualiza_dados.php" method="POST">
                <fieldset id="attField">
                    <p>Atualização cadastral</p>
                   

                    <fieldset class="img_log centraliza"><legend>Preencha o formulario</legend>
                        
                        <label for="telAtt">Telefone<b>*</b>:</label><input type="tel" id="telAtt" name="telAtt" placeholder="Somente Numeros"  maxlength="11" required/><br>
                        <label for="passwordAtt">Senha Atual<b>*</b>:</label><input type="password" id="passwordAtt" name="passwordAtt" placeholder="Digite sua senha" required/><div id="vdPassatt"></div>
                        <label for="passwordAtt2">Nova Senha<b>*</b>:</label><input type="password" id="passwordAtt1" name="passwordAtt1" placeholder="Digite sua senha" required/><div id="vdPassatt1"></div>
                        <label for="passwordAtt2"> Repetir Senha<b>*</b>:</label><input type="password" id="passwordAtt2" name="passwordAtt2" placeholder="Digite sua senha" required/><div id="vdPassatt2"></div>
                        
                        <input type="submit" value="Atualizar" id="atualizar" name="atualizar">
                            
                    </fieldset><br>

                    <div class="linkancora centraliza">
                        <h3><a href="meus_servicos.php">Clique aqui para gerenciar seus serviços</a></h3>
        </div>
                </fieldset>
            </form>

       
       
                           

        <footer>
            <div><h5>United Security©2020 Todos os direitos reservados</h5></div>
        </footer>
    </div>
</body>
</html>