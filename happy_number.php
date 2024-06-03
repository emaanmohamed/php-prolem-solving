<!--Write an algorithm to determine if a number n is happy.-->
<!---->
<!--A happy number is a number defined by the following process:-->
<!---->
<!--Starting with any positive integer, replace the number by the sum of the squares of its digits.-->
<!--Repeat the process until the number equals 1 (where it will stay), or it loops endlessly in a cycle which does not include 1.-->
<!--Those numbers for which this process ends in 1 are happy.-->
<!--Return true if n is a happy number, and false if not.-->
<!---->
<!---->
<!---->
<!--Example 1:-->
<!---->
<!--Input: n = 19-->
<!--Output: true-->
<!--Explanation:-->


<?php

class Solution {

    /**
     * @param Integer $n
     * @return Boolean
     */
    function isHappy($n) {
        while($n != 1 && !isset($hashmap[$n])){
            $sum = 0;
            $hashmap[$n] = true;
            $arr = str_split($n);
            print_r($arr);
            for($i = 0; $i < count($arr) ; $i++){
                print_r($n[$i]);
                $sum += $n[$i] * 2;
            }
            print_r($sum);
            $n = $sum;
        }
        
        return $n == 1;

    }
}

$n = 19;
$obj = new Solution();
echo $obj->isHappy($n);