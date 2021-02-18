<?php
    for($i=1; $i<=50; $i++){
        echo $i.". ";
        if($i%3==0){
            echo "Foo <br>";
        } else if($i%5==0){
            echo "Bar <br>";
        } else{
            echo "FooBar <br>";
        }
    }
?>