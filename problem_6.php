<?php


//Problem 06
//In linear algebra, the transpose of a matrix is another matrix created by writing the
//rows of as the columns of , for example:
//    Write a function transpose that transposes a matrix, for example:
//
//    transpose( [ [1,2], [3,4] ] ) # returns [ [1,3], [2,4] ]
//transpose( [ [1,2,3,4], [5,6,7,8] ] ) # returns [ [1,5], [2,6], [3,7], [4,8] ]


class Transpose{
    public function TransposeMatrix($matrix){
        $transposedMatrix = [];
        foreach ($matrix as $rowKey => $row){
            foreach ($row as $colKey => $col){
                $transposedMatrix[$colKey][$rowKey] = $col;
            }
        }
        return $transposedMatrix;
    }
}

$transpose = new Transpose();
print_r($transpose->TransposeMatrix([[1,2], [3,4]]));
print_r($transpose->TransposeMatrix( [ [1,2,3,4], [5,6,7,8] ] ) );