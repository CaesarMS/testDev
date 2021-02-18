<?php
    $aplikasi = array("gtAkademik", "gtFinansi","gtPerizinan","eCampuz","eOviz");
    $i = 0;

    while($i<count($aplikasi)){
        echo "\$aplikasi[".$i."] = '".$aplikasi[$i]."'; <br>";
        $i++;
    }
?>