<?php
    
    $id = $_SESSION['id'];
                
    $sql = "SELECT * FROM cadastro WHERE id = $id";
    
                
        
    $resultados = mysqli_query($conn , $sql);
                
                
    
                
    if(mysqli_num_rows($resultados) > 0){
        echo " <h1>Meus dados</h1>";
        exibir($resultados);
    } else{
        echo "Erro ao consultar informações";
    }
    
                
    function exibir($dados){
        
      while($linha = mysqli_fetch_assoc($dados)){
        echo "<div class='dados'> <p>Seu apelido: $linha[apelido]</p> <p>Nome Completo: $linha[nome]</p> <p>CPF: $linha[cpf]</p> <p>Telefone: $linha[telefone]</p> <p>Senha: $linha[senha]</p></div>" ;
      }

    } 
                
?>