<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    public $res = [];
    function permute($nums) {
        if (count($nums) == 0 ) return [];
        $this->backtracking($nums, []);
        return $this->res;
    }

    function backtracking($nums, $array)
    {
        if (count($array) == count($nums))
        {
            $this->res[] = $array;
        }
        foreach ($nums as $value) {
            if (in_array($array, $value)) continue;
            $array[] = $value;
            $this->backtracking($nums, $array);
            array_pop($array);
        }
    }
}