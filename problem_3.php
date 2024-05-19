<?php


//Problem 03
//Given a string containing characters (a-z), implement a function runLengthEncode that
//compresses repeated ‘runs’ of the same character by storing the length of that run, and
//provide a function runLengthDecode to reverse the compression. The output can be
//anything, as long as you can recreate the input with it.
//For example:
//runLengthEncode("aaaaaaaaaabbbaxxxxyyyzyx") # returns "a10b3a1x4y3z1y1x1"
//runLengthDecode("a10b3a1x4y3z1y1x1") # returns "aaaaaaaaaabbbaxxxxyyyzyx"


class Encode
{
    public function runLengthEncode($str)
    {
        $encodedStr = '';
        $count = 1;
        for ($i = 0; $i < strlen($str); $i++) {
            if ($i < (strlen($str) - 1) && $str[$i] == $str[$i + 1]) {
                $count++;
            } else {
                $encodedStr .= $str[$i] . $count;
                $count = 1;
            }
        }
        return $encodedStr;
    }

    public function runLengthDecode($str)
    {
        $arr = [];
        $decodedStr = '';
        $count = '';
        for ($i = 0; $i < strlen($str); $i++) {
            if (is_numeric($str[$i])) {
                $count .= $str[$i];
            } else {
                //$decodedStr .= str_repeat($str[$i], (int)$count);
                $arr[$str[$i]][] = $count;
                $count = '';
            }

        }
        print_r($arr);
        return $decodedStr;
    }

}

$encodeStr = new Encode();
//echo $encodeStr->runLengthEncode("aaaaaaaaaabbbaxxxxyyyzyx");
//echo "\n";
echo $encodeStr->runLengthDecode("a10b3a1x4y3z1y1x1");
