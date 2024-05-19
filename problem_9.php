<?php

//Problem 09
//Given the below tree structure, write a function sum that accepts a node and returns the
//sum of integers for the whole tree represented by the given node argument
//
//struct Node {
//    value: Integer,
//children: [Node] # array of nodes
//}

class Node
{
    public $value;
    public $children;

    public function __construct($value, $children = [])
    {
        $this->value = $value;
        $this->children = $children;
    }

    public function sum($node)
    {
        $sum = $node->value;
        foreach ($node->children as $child){
            $sum += $this->sum($child);
        }
        return $sum;
    }


}

$node1 = new Node(1);
$node2 = new Node(2);
$node3 = new Node(3);
$node4 = new Node(4);
$node5 = new Node(5);
$node6 = new Node(6);
$node7 = new Node(7);
$node8 = new Node(8);
$node9 = new Node(9);

$node1->children = [$node2, $node3, $node4];
$node2->children = [$node5, $node6];
$node3->children = [$node7];
$node4->children = [$node8, $node9];

$node = new Node(0, [$node1]);
echo $node->sum($node);