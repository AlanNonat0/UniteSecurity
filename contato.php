<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>United Security© - Contato</title>
    <link rel="stylesheet" href="css/style.css">
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


        <section id="SectionContato">
            <H1 class="titulo">CONTATO</H1>
            <?php
            if(isset($_GET['contato']) && $_GET['contato'] == 'sucesso'){
                echo "<h3 class='erro'>Mensagem enviada com sucesso!</h3>";
                }
            ?>
        
            <form id="contato" action="insere_contato.php" method="POST">


                <fieldset class="contatos">
                
                
                    <h3>Preencha o formulário para falar conosco</h3><br>

                        <div>
                        <label for="nome">Nome<b>*</b>:</label><input type="text" id="nome" name="name" placeholder="Digite seu nome completo" required/><div id="vdNome"></div>
                        <label for="telefone">Telefone<b>*</b>:</label><input type="tel" id="telefone" name="tel" placeholder="Somente Numeros" required/><br>
                        <label for="email">E-mail<b>*</b>:</label><input type="email" id="email" name="email" placeholder="Informe seu e-mail" required/><br>
                        <label for="mensagem">Mensagem<b>*</b>:</label><br><textarea id="mensagem" name="mensagem"></textarea>
                    
                       </div>
                      
                        
                        <br>
                        <input type="submit" value="Enviar" id="enviar" name="contato">
                            
                    
                </fieldset>


                
            </form>
      

        </section>


        <footer>
            <div><h5>United Security©2020 Todos os direitos reservados</h5></div>
        </footer>
    </div>
</body>
</html>