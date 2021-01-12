<?php
    session_start();
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
                <div id="slider"> <img id="id"></div>             
        </section>

        <div class="content">
            <h1 class="titulo">United Security©</h1>
            <h3>Maior seurança. A tecnologia a seu favor</h3>

            <p>A United Security visa contribuir com seus serviços personalizados de acordo com o cliente e suas 
            necessidades da melhor forma possível, tornando a experiência de consultoria e aplicação de procedimentos de 
            segurança da informação lógicos (Segurança Lógica Atenta contra ameaças ocasionadas por vírus, acessos remotos à rede,
             backup desatualizados, violação de senhas, furtos de identidades, etc.) o melhor do mercado.</p>


        </div>

        <div class="content">
            <h1 class="titulo">Serviços Prestados</h1>
            <div class="content"><a href="servicos.php"><img src="src/biometria.jpeg" alt="Controle Biometrico"></a></div>
            <div class="content"><a href="servicos.php"><img src="src/analise.png" alt="Analise de Risco"></a></div>
            <div class="content"><a href="servicos.php"><img src="src/workshop.jpg" alt="Workshop"></a></div>
            <div class="content"><a href="servicos.php"><img src="src/servicoseguranca.jpg" alt="Segurança"></a></div>

        </div>


        <footer>
            <div><h5>United Security©2020 Todos os direitos reservados</h5></div>
        </footer>
    </div>
</body>
</html>