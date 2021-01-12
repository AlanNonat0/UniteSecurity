<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>United Security© - cadastro</title>
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
            <div class="menu">
                <nav>
                <ul>
                    <li><a href="index.php">Início</a></li>
                    <li><a href="servicos.php"> Serviços</a></li>
                    <li><a href="contato.php"> Contato</a></li>
                    <li><a href="sobre.php"> Sobre</a></li>
                </ul>
            </nav>
            </div>
        </header>
        
            <?php 
                if(isset($_GET['cadastro']) && $_GET['cadastro'] == 'erro'){
                echo "<h1 class='titulo'>Cadastre-se</h1>";
                echo "<h4 class='erro'>Apelido já existente. Por favor, digite um apelido único</h4>";
                }
        
            else{
                 echo "<h1 class='titulo'>Cadastre-se</h1>";
            }
          ?>
        
           
            <form id="cadastro" action="insere.php" method="POST">
                <fieldset>
                    <p>Preencha o Formulário a seguir</p>

                    <fieldset id="img_pessoal"><legend>Dados Pessoais</legend>
                        <label for="name">Nome<b>*</b>:</label><input type="text" id="name" name="name" placeholder="Digite seu nome completo" required/><div id="vdNome"></div><br>
                        <label for="cpf">CPF<b>*</b>:</label><input type="text" id="cpf" name="cpf" placeholder="Digite somente números" maxlength="11" required/><div id="vdCpf"></div><br>
                        <label for="tel">Telefone<b>*</b>:</label><input type="tel" id="tel" name="tel" placeholder="Somente Numeros" maxlength="20" required/><br>

                    </fieldset>

                    <fieldset class="img_log"><legend>Dados para Login</legend>
                        <label for="nick">Apelido<b>*</b>:</label><input type="text" id="nick" name="nick" placeholder="Digite um apelido único" required/><div id="vdNick"></div><br>
                        <label for="password">Senha<b>*</b>:</label><input type="password" id="password" name="password" placeholder="Digite sua senha" required/><div id="vdPass"></div>
                        <input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">
                            
                    </fieldset><br>


                </fieldset>
            </form>

        <footer>
            <div><h5>United Security©2020 Todos os direitos reservados</h5></div>
        </footer>
    </div>
</body>
</html>