<?php
            if(isset($_POST['cpf'])) {
                $cpf = preg_replace("/[^\d]/","",$_POST['cpf']); // String => 01054145148
                
                $pos0 = substr($cpf, 0, -10);
                
                $pos1 = substr($cpf, 1, -9);
                
                $pos2 = substr($cpf, 2, -8);
                
                $pos3 = substr($cpf, 3, -7);
                
                $pos4 = substr($cpf, 4, -6);
                
                $pos5 = substr($cpf, 5, -5);
                
                $pos6 = substr($cpf, 6, -4);
                
                $pos7 = substr($cpf, 7, -3);
                
                $pos8 = substr($cpf, 8, -2);
                
                $pos9 = substr($cpf, 9, -1);
                
                $pos10 = substr($cpf, 10, 10);
                
                // A VERIFICAÇÃO DO PRIMEIRO DÍGITO ABAIXO:
                $multiplicacao1 = $pos0 * 10 + $pos1 * 9 + $pos2 * 8 + $pos3 * 7 + 
                $pos4 * 6 + $pos5 * 5 + $pos6 * 4 + $pos7 * 3 + $pos8 * 2;
                
                $multiplicacao2 = $multiplicacao1 * 10;
                $resto = $multiplicacao2 % 11;
                $digito1 = $resto;
                
                // AGORA, A VERIFICAÇÃO DO SEGUNDO DÍGITO:
                $multiplicacao1 = $pos0 * 11 + $pos1 * 10 + $pos2 * 9 + $pos3 * 8 + 
                $pos4 * 7 + $pos5 * 6 + $pos6 * 5 + $pos7 * 4 + $pos8 * 3 + $pos9 * 2;
                
                $multiplicacao2 = $multiplicacao1 * 10;
                $resto = $multiplicacao2 % 11;
                $digito2 = $resto;
                
                if($digito1 == $pos9 && $digito2 == $pos10){
                    echo "<h1 class='bg-info'>O CPF É VÁLIDO.</h1>";
                } else {
                    echo "<h1 class='bg-danger'>O CPF É INVÁLIDO.</h1>";
                }
                 
            }
        ?>