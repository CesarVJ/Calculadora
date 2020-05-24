<?php 
    function calculadora($x, $y, $operacion){
        if($operacion == "suma"){
            return $x + $y;
        }else if($operacion == "resta"){
            return $x - $y;
        }else if($operacion == "multiplica"){
            return $x * $y;
        }else if($operacion == "divide"){
            if($y == 0) return 0;
            return $x / $y;
        }else{
            echo "Nop";
        }
        return 0;
    }
?>
