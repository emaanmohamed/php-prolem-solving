<?php


//Problem 01
//A palindrome is a word or sequence of characters which reads the same backward or
//forward. For example the words: level, anna, noon, rotator are all palindromes.
//Write a function palindrom that accepts a string as an argument and returns a boolean
//indicating whether the input is a palindrome or not, for example:
//        palindrome("anna") # returns True
//palindrome("apple") # returns False


class Palindrome
{
    public function isPalindrome($str)
    {
        $splittedStr = str_split($str);
        $reversedStr = array_reverse($splittedStr);
        return ($splittedStr == $reversedStr) ? 'True' : 'False';
    }
}

$palindrome = new Palindrome();
echo $palindrome->isPalindrome('level') . "\n";
echo $palindrome->isPalindrome('anna') . "\n";
echo $palindrome->isPalindrome('apple') . "\n";
echo $palindrome->isPalindrome('hello');




