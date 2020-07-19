<?php
/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($value) { $this->val = $value; }
 * }
 */
class Solution {

    /**
     * @param TreeNode $root
     * @return Integer[]
     */
    function inorderTraversal($root) {
        $res = [];
        $this->help($root,$res);
        return  $res;
    }
    function help($root, &$res = [])
    {
        if ($root == null) return null;
        $this->help($root->left, $res);
        $res[] = $root->val;
        $this->help($root->right, $res);
    }
}