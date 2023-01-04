<?php
function randomTirage() {
    $result = array();
    for ($i = 0; $i < 6 ; $i++) {
        $random = rand(1, 49);
        while (in_array($random, $result)){
            $random = rand(1, 49);
        } 
        $result[] = $random;
    }
    echo print_r($result);
}

randomTirage();

?>