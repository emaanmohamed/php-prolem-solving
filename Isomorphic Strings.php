<?php

class Solution
{

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isIsomorphic($s, $t)
    {
        $firstHash = [];
        for ($i = 0; $i < strlen($s); $i++) {
            if (!isset($firstHash[$s[$i]])) {
                $firstHash[$s[$i]] = $i;
            }
        }

        $secondHash = [];
        for ($j = 0; $j < strlen($t); $j++) {
            if (!isset($secondHash[$t[$j]])) {
                $secondHash[$t[$j]] = $j;
            }
        }


        if (count($firstHash) != count($secondHash)) {
            return false;
        } else {
            return true;
        }
    }

}