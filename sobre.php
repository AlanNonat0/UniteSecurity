<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>United Security© - Sobre</title>
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


        <section id="sectionSobre">
            <H1 class="titulo">United Security </H1>
            <h3>Profissionalismo. Excelência. Pontualidade.</h3>
            <br>
            
                <p>Desde a nossa fundação, a United Security é conhecida por serviços de qualidade, eficiência excepcional e o mais alto nível de profissionalismo. 
            Não importa o serviço de segurança que esteja procurando, nós garantimos não apenas atender, mas exceder suas expectativas e garantir sua total satisfação.</p>

                <p>Nossa equipe está preparada para qualquer serviço, gerenciando projetos com a habilidade e experiência que nossos clientes esperam. 
                Entre em contato para obter mais informações sobre nossa equipe, nossa empresa ou os serviços que oferecemos.</p> 
            <br>
            
            <h1 class="titulo">Objetivo</h1>
            
                <p>A United Security visa como prestadora de serviços prover com responsabilidade e comprometimento a  análise e implementação de serviços voltados a segurança da informação. Com a implementação de procedimentos de segurança com base nas tecnologias mais avançadas do mercado como cloud computing, gerenciamento de firewall, blockchain, controles biométricos, entre outras, podemos identificar com sucesso técnicas e procedimentos que melhor se apliquem ao seu negócio, protegendo e auxiliando no controle das informações pessoais e corporativas dos clientes e colaboradores da sua organização.</p>

        </section>


        <footer>
            <div><h5>United Security©2020 Todos os direitos reservados</h5></div>
        </footer>
    </div>
</body>
</html>