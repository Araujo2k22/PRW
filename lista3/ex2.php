<?php
    $a = "Paralelepipedo";
    $P = strlen($a);
    
    for($i=0; $i < $P; $i++) {
        switch ($a[$i]) {
            case 'a': $a[$i] = "x"; break;
            case 'e': $a[$i] = "x"; break;
            case 'i': $a[$i] = "x"; break;
            case 'o': $a[$i] = "x"; break;
            case 'u': $a[$i] = "x"; break;
            default: $a[$i] = $a[$i]; break;
        }
    }

    echo $a;
?>