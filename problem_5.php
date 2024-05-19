<?php

//Problem 05
//Write a function unique that takes an array of strings as input and returns an array of
//the unique entries in the input, for example:
//
//    unique(['apples', 'oranges', 'flowers', 'apples']) # returns ['oranges', 'flowers']
//x ↦ f(g(x))
//
//unique(['apples', 'apples'])


class Unique
{
    public function GetUniqueValues($arr)
    {
        $hashmap = [];

        foreach ($arr as $key => $val) {
            if (isset($hashmap[$val])) {
                unset($hashmap[$val]);
            } else {
                $hashmap[$val] = $key;
            }
        }
        return array_keys($hashmap);
    }
}

$unique = new Unique();
//print_r($unique->GetUniqueValues(['apples', 'oranges', 'flowers', 'apples']));
print_r($unique->GetUniqueValues(['apples', 'apples']));

