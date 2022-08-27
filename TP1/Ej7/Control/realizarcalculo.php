<?php
    if ($_POST){
        $valor1 = $_POST['input1'];
        $valor2 = $_POST['input2'];

        $operacion = $_POST['select'];
        if ($operacion == "1"){
            echo "Resultado: ".$valor1+$valor2.".</h2>";
        }elseif($operacion == "2"){
            echo "Resultado: ".$valor1-$valor2.".</h2>";
        }else {
            echo "Resultado: ".$valor1*$valor2.".</h2>";
        }
    }

?>