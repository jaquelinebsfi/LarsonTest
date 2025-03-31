<?php
$numeros = array(10,4,3,50,23,90);



if (count($numeros)>=3 && is_array($numeros)) {
    for($i=0; $i <3; $i++) {
        if (!is_numeric($numeros[$i])) {
            return "El array no es numérico";
        }else {
            $result[$i]= max($numeros);          
            unset($numeros[array_search($result[$i],$numeros,$strict=true)]);
            }
      }

    ECHO '[',$result[0],',', $result[1],',', $result[2],']';
    //return $result;
}else {
    echo "El array tiene menos de 3 elementos";
}
?>