<?php   
include("conecta.php");

            $id = $_SESSION['id'];
            $select_servico = "SELECT * FROM servico_contratado WHERE id_cliente = $id ";
            $select_query = mysqli_query($conn, $select_servico); 
        
            
                while($linha = mysqli_fetch_array($select_query)){
                    $id_cliente = $linha['id_cliente'];
                    $id_servico = $linha['id_servico'];
                    
                    if($id_servico == 1){
                        echo ("<p>Biometria <input type='checkbox' checked='checked' disabled></p>");
                    }

                    if($id_servico == 2){
                        echo ("<p>Análise de Riscos <input type='checkbox' name='analiseRiscos' value='AnaliseRiscos' checked='checked' disabled></p>");
                    }
                    
                    if($id_servico == 3){
                        echo ("<p>Workshop <input type='checkbox' name='workshop' value='workshop' checked='checked' disabled></p>");
                    }
                    
                    if($id_servico == 4){
                        echo(' <p>Serviços de Segurança <input type="checkbox"  name="servicoSeguranca" value="seguranca" checked="checked" disabled></p>');
                    }
                    
                }        
?>