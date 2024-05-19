<?php


//Problem 08
//Given an integer array of length n, find the index of the first duplicate element in the
//array and state the runtime and space complexity of your implementation, for example:
//
//# returns 3, assuming the index starts with 0
//    index_of_first_duplicate( [ 5, 17, 3, 17, 4, -1 ] )


class FirstDuplicate
{
    public function IndexOfFirstDuplicate($arr)
    {
        $hashmap = [];
        foreach ($arr as $key => $val){
            if (isset($hashmap[$val])){
                return $key;
            }
            $hashmap[$val] = $key;
        }
    }
}

$firstDuplicate = new FirstDuplicate();
echo $firstDuplicate->IndexOfFirstDuplicate([5, 17, 3, 17, 4, -1]);



// The time complexity of this implementation is O(n) and the space complexity is O(n) as well.`