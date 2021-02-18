<?php
    class Div{
        public function divide($a, $b){
            $store = 0;
    
            while($a >= $b){
                $store = $store + 1;
                $a -= $b;
            }
    
            return $store;
        }
    }

    $go = new Div();
    echo $go->divide(8,4)."<br>";
    echo $go->divide(7,2)."<br>";
?>

