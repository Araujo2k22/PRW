<?php
    $n1=5;
    $n2=3;
    $multiplicacao = $n1*$n2;
    do{
        $soma=$n2++;
    }while($n2<=$multiplicacao);
    echo "A multiplicação pela soma será: ".$soma;
?>