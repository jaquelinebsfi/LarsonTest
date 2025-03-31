<?php


function processNumbers($nums) {
    if(!is_array($nums)) {
        return "La variable de entrada no es un array";
    }
    // elseif(in_array(0, $nums)) {
    //     return "El 0 no es válido para el proceso";
    // } 
    else{
        for($i=0; $i < count($nums); $i++) {
            if (!is_numeric($nums[$i])) {
                return "El array contiene un valor no numérico";
      
              }elseif($nums[$i]%2 == 0 && is_numeric($nums[$i])) {
                #array_push($result[$i], $nums[$i]*2);
                $result[$i]= $nums[$i]*2;
             
              }elseif($nums[$i] == 0) {
                #array_push($result[$i], $nums[$i]*2);
                $result[$i]= 0;
             
              }  

            else {
                $result[$i]= $nums[$i]*3;
                }
          }
      return $result;
    }
   
}
//para pruebas unitarias
$nums = 'hola';
$nums1 = array(0,5);
$nums2 = array(10,5);
$nums3 = array(10,5,'o');

//para pruebas
print_r(processNumbers($nums));
echo ("\n");
print_r(processNumbers($nums1));
echo ("\n");
print_r(processNumbers($nums2));
echo ("\n");
print_r(processNumbers($nums3));

?>