<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>United SecurityUnited© - Serviços</title>
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
 

        <section>
            <h1 class='titulo'>SERVIÇOS</h1>
            
           
<?php
     
            include('conecta.php');
        
    $sql = "SELECT * FROM produtos";
        
    $resultados = mysqli_query($conn , $sql);
        
    if(mysqli_num_rows($resultados)> 0){
        echo " <h3>Entre em contato conosco e solicite um orçamento sem compromisso</h3><br>";
        exibir($resultados);
    } else{
        echo "Produtos não encontrados";
    }
        
    function exibir($dados){
        
        while($linha = mysqli_fetch_assoc($dados)){
            echo "<div class='wrapper'> <div class='produto'> <h2>$linha[nome_produto]</h2> <br> $linha[descricao_produto] <br><br> <img src=src/$linha[imagem]> </div></div>" ;
            
        }
    }
?>
        </section>


        <footer>
            <div><h5>United Security©2020 Todos os direitos reservados</h5></div>
        </footer>
    </div>
</body>
</html>