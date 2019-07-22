<?php

if(isset($_POST['submit'])){
    $input1 =$_POST['input1'];
    if ($input1 == true){
        echo "Hasil akar yaitu ".akarkuadrat($input1);
    }
}

function akarkuadrat($input1){
    $hasilakarkuadrat= sqrt($input1);
    return $hasilakarkuadrat;
}

?>