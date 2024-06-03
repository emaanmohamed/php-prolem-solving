<?php

class Solution
{

    /**
     * @param String $pattern
     * @param String $s
     * @return Boolean
     */
    function wordPattern($pattern, $s)
    {
        $hashMap = [];
        $arr = explode(" ", $s);
        if (strlen($pattern) != count($arr)) {
            return false;
        }
        for ($i = 0; $i < strlen($pattern); $i++) {

            if (isset($hashMap[$pattern[$i]]) && ($hashMap[$pattern[$i]] != $arr[$i])
                || (in_array($arr[$i], $hashMap) && $hashMap[$pattern[$i]] != $arr[$i])
            ) {
                return false;
            }
            $hashMap[$pattern[$i]] = $arr[$i];

        }
        print_r($hashMap);
        return true;
    }
}

$pattern = "abba";
$s = "dog cat cat dog";
$obj = new Solution();
echo $obj->wordPattern($pattern, $s);