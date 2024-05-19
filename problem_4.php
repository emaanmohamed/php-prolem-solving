<?php

//Problem 04
//Let f and g be two one-argument functions. The composition f after g is defined to be the
//function . Define a function compose that implements composition. For
//example, if inc is a function that adds 1 to its argument, and square is a function that
//squares its argument, then:
//h = compose(square, inc) # create a new function h by composing inc and square
//h(6) # returns 49

class Compose
{
    public function composeFunction($f, $g)
    {
        return function($x) use ($f, $g){
            return $f($g($x));
        };
    }

    public function inc($x)
    {
        return $x + 1;
    }

    public function square($x)
    {
        return $x * $x;
    }

}

$compose = new Compose();
$h = $compose->composeFunction([$compose, 'square'], [$compose, 'inc']);
echo $h(6); // returns 49