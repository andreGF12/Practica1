<?php
    $numeros = array(10, 20);
    $suma = 0;
    foreach ($numeros as $numero) {
        $suma += $numero;
    }
    
    echo nl2br("La Suma es: \n"); 
    echo "$suma";
?>
