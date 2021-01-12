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
        
        <h2 class="titulo">Gerir Serviços de <?php echo $_SESSION['user']; ?> </h2>
        <?php
    if(isset($_GET['servico']) && $_GET['servico'] == 'servicocontratado'){
              echo "<h3>Serviço contratado com sucesso</h3>";
        }
    else if(isset($_GET['servico']) && $_GET['servico'] == 'servicoduplicado'){
        echo "<h4 class='erro'>Não é possível contratar o mesmo serviço repetidas vezes</h4>";
    }
    
    if(isset($_GET['servico']) && $_GET['servico'] == 'servico_cancelado'){
        echo "<h3>Serviço cancelado!</h3>";
    }
    else if(isset($_GET['servico']) && $_GET['servico'] == 'erro_cancela'){
        echo "<h4 class='erro'>Serviço ainda não foi ativo ou já foi cancelado.</h4>";
    }
?>
    
        <section id='meusservicos'>

           <br>
            
            <h1>Serviços Ativos</h1>
 
             <div class="dados">       

                    <?php include('servico_contratado.php')?>


                <br>
             
                </div>
        </section>
        
        <section id='ativos'>
            
            
            <form action='insere_servico.php' method='POST'>
                
            
            <h1>Ativar Serviços</h1>
            <br>

                <div class='dados'>
                    <select name='servico'>
                        <option disabled selected='true'>Selecione o serviço...</option>
                        <option value='1'>Biometria</option>
                        <option value='2'>Analise de Risco</option>
                        <option value='3'>Workshop</option>
                        <option value='4'>Serviços de Segurança</option>
                    </select>
                    
                  <br><br>
                    <input type='submit' value='Ativar' id='ativar' name='servicos'>
                
                </div> 
            
            </form>
        </section> 
        
        
        
        <section>
            
            <form action='cancela_servico.php' method='POST'>
                    
                
                <h1>Cancelar Serviço</h1>
               
    
                    <div class='dados'>
                        <select name='servico'>
                            <option disabled selected='true'>Selecione o serviço...</option>
                            <option value='1'>Biometria</option>
                            <option value='2'>Analise de Risco</option>
                            <option value='3'>Workshop</option>
                            <option value='4'>Serviços de Segurança</option>
                        </select>
                        
                      <br><br>
                        <input type='submit' value='Cancelar' id='cancela_servico' name='cancela_servico'>
                    
                    </div> 
                </form>
            </section>
        
        <br><br>
                        

        <footer>
            <div><h5>United Security©2020 Todos os direitos reservados</h5></div>
        </footer>
    </div>
</body>
</html>