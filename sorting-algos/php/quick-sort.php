<?php
    // in this quick sorting algo, we divide the array into 2 sub arrays using a pivot element;
    // this algo time complexity is good. this algo is more feasible than merge sort.
    // time complexity of this algo is average Case: O(nlogn) big-oh. and worst case is O(n^2).
    // a in-place sorting, but not a stable sorting algorithm.
    $inp = [2,7,4,1,5,3];
    $size = count($inp);
    
    echo "Original arr:\n";
    print_r($inp);
    
    echo "input arr size: ";
    print_r($size);
    
    echo "\nSorted arr:\n";
    quick_sort($inp, 0, $size - 1);
    print_r($inp);
    
    function quick_sort(&$inp, $l, $r) {
        if($l < $r) {
            $pindex = partition($inp, $l, $r);
            quick_sort($inp, $l, $pindex - 1);
            quick_sort($inp, $pindex + 1, $r);
        }
    }
    
    function partition(&$inp, $start, $end) {
        $pivot = $inp[$end];
        $pindex = $start;
        
        for($i = $start; $i < $end; $i++) {
            if($inp[$i] <= $pivot) {
                $tmp = $inp[$pindex];
                $inp[$pindex] = $inp[$i];
                $inp[$i] = $tmp;
                $pindex++;
            }
        }
        
        $tmp = $inp[$pindex];
        $inp[$pindex] = $pivot;
        $inp[$end] = $tmp;
        return $pindex;
    }
?>