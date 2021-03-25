<?php

$Valor1 = $_POST['valor1'];
$Valor2 = $_POST['valor2'];
$tipo = $_POST['tipo'];


    switch($tipo)

    {
        case 'Somar' : $resultado = $Valor1 + $Valor2; break;
        case 'Subtrair' : $resultado = $Valor1 - $Valor2; break;
        case 'Multiplicação' : $resultado = $Valor1 * $Valor2; break;
        case 'Divisão' : $resultado = ($Valor2 != 0) ? $Valor1 / $Valor2 : '0 não é divisivel'; break;
        
    }

 
    echo $resultado;



?>
