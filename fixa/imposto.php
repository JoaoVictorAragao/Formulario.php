<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        <?php
            function calculaImposto($salario){
                if((float) $salario <= 1903.98){
                    echo "Isento";
                }else if((float) $salario >= 1903.99 && (float) $salario <= 2826.65){
                    echo 'Imposto: '.(float) $salario * 0.075.'';
                }else if((float) $salario >= 2826.66 && (float) $salario <= 3751.05){
                    echo 'Imposto: ' .(float) $salario * 0.15.'';
                }else if((float) $salario >= 3751.06 && (float) $salario <= 4664.68){
                    echo 'Imposto: ' .(float) $salario * 0.225.'';
                }else{
                    echo 'Imposto: ' .(float) $salario * 0.275.'';
                }
            }
        
            calculaImposto(5000);

        ?>    


    </body>

</html>