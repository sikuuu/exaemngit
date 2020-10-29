<?php

/**

* funcio fer_pi
*@param $n es una dada
*@return torna num pi
*/


function programador1($n) {
    $result = 1;
    $multiplicador = -1;
    $signe = -1;
    for ($i=2;$i<$n;$i++) {
        //echo "$result = $result + $signe / (2 * $i -1);<br>";
        $result = $result + $signe / (2 * $i -1);
        $signe = $multiplicador * $signe;
    }
    $pi = 4 * $result;
    
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
>>>>>>> programador2

    return $pi;
}
