<?php
function addOne($arr) {
    $count = count($arr);
    $j = 1;
    for ($i = $count - 1; $i >= 0; $i--) {
        $sum = $arr[$i] + $j;
        $arr[$i] = $sum % 10;
        $j = $sum / 10;
        if ($j == 0) {
            break;
        }
    }
    if ($j > 0) {
        $result = array();
        $result[0] = $j;
        for ($i = 0; $i < $count; $i++) {
            $result[$i+1] = $arr[$i];
        }
        return $result;
    } else {
        return $arr;
    }
}

$input = array(1, 0, 0);
$result = addOne($input); 
print_r($result);
?>