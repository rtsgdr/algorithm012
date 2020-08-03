<?php
class Solution {

    /**
     * @param Integer[] $bills
     * @return Boolean
     */
    function lemonadeChange($bills) {
        $five = $ten = 0;
        for ($i =0; $i < count($bills); $i++){
            if ($bills[$i] == 5){
                $five ++;
            } elseif ($bills[$i] == 10){
                if ($five == 0) return  false;
                $five--;
                $ten ++;
            } elseif ($bills[$i] == 20){
                if ($five > 0 && $ten > 0) {
                    $five--;
                    $ten--;
                }elseif ($five > 3) {echo 4;
                    $five-=3;
                }else{
                    return false;
                }
            }
        }
        return true;
    }
}
$obj = new Solution();
 var_dump($obj->lemonadeChange([5,5,5,10,20]));