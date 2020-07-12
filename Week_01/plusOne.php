<?php
class Solution {

/**
* @param Integer[] $digits
* @return Integer[]
*/
function plusOne($digits) {
    $count = count($digits);
    for ($i = $count -1; $i>=0; $i--){
        if($digits[$i] < 9){
            $digits[$i] ++;
            return $digits;
        }
        $digits[$i] = 0;
    }
    array_unshift($digits,1);
    return $digits;
    }
}
$obj = new Solution();
print_r($obj->plusOne([9]));