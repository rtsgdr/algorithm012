<?php
class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function nthUglyNumber($n) {
        $index1 = $index2 = $index3 = 0;
        $dp[0] = 1;
        for($i = 1; $i< $n; $i++){
            $dp[$i] = min($dp[$index1]*2,$dp[$index2]*3,$dp[$index3]*5);
            if($dp[$i] == $dp[$index1]*2) $index1++;
            if($dp[$i] == $dp[$index2]*3) $index2++;
            if($dp[$i] == $dp[$index3]*5) $index3++;
        }
        return $dp[$n-1];
    }
}