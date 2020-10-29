<?php

/**
*@param $n pasa una dada
*@return numero pi
*/

function programador2($n) {
    $result = 1;

    for ($i=3;$i<$n;$i=$i+2) {
        $result = $result * $i * $i / (($i - 1) * ($i + 1));
    }
    $pi = 4 / $result;

    return $pi;
}
