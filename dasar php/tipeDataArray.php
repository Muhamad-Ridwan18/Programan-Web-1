<?php

    $values = array(10, 4, 78, 34, 34,5);
    var_dump($values);
    echo "\n";

    $names = ["Iqbal", "Heriyadi"];
    var_dump($names);
    echo "\n";

    var_dump($names[0]);
    echo "\n";

    var_dump($names[1]);
    echo "\n";

    $data = array("mannga", "jeruk", "pisang");
    var_dump($data);
    echo $data[0] . PHP_EOL;
    echo $data[1] . PHP_EOL;
    echo $data[2] . PHP_EOL;
    
    foreach($data as $buah){
        echo "Nama Buah : " . $buah . PHP_EOL;
    }



?>

    