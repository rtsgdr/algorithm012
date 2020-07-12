<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        $search = [];
        foreach ($nums as $key => $value){
            if (isset($search[$target - $value]) && $search[$target - $value] != $key){
                return [$search[$target - $value], $key];
            }
            $search[$value] = $key;
        }
        return [];
    }
}
$obj = new Solution();
$obj->twoSum([2,7,11,15],9);