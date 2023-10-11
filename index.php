<?php

    require_once 'funciones.php';

    $texto = 'Este texto se tiene que imprimir';
    imprimeTexto($texto);

    $num1=5;$num2=3;
    $restulado = sumarNumeros($num1,$num2);
    echo '<br> Suma: {$num1} + {$num2} = {$resultado}.';

?>
