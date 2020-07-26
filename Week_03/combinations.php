<?php
class Solution {

    /**
     * @param Integer $n
     * @param Integer $k
     * @return Integer[][]
     */
    public  $res = [];
    function combine($n, $k) {
        if ($n < $k || $n == 0 || $k == 0) {
            return [];
        }
        $this->help($n, $k, 1, []);
        return $this->res;
    }
    function  help($n, $k, $start , $list)
    {
        if (count($list) == $k) {
            $this->res[] = $list;
        }
        for ($i = $start; $i <= $n; $i++) {
            $list[] = $i;
            $this->help($n, $k, $i, $list);
            array_pop($list);
        }
    }
}