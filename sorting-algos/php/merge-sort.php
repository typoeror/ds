<?php
    // in this merge sorting algo, we subdivided the array into small arrays and then start merging them to form sorted array;
    // this algo time complexity is good. but better than selection sort and bubble sort and insertion sort.
    // time complexity of this algo is all Case: O(nlogn) big-oh.
    // not a in-place sorting, but a stable sorting algorithm.
    $inp = [2,7,4,1,5,3];
    $size = count($inp);
    
    echo "Original arr:\n";
    print_r($inp);
    
    echo "input arr size: ";
    print_r($size);
    
    echo "\nSorted arr:\n";
    merge_sort($inp, 0, $size - 1);
    print_r($inp);
    
    function merge_sort(&$inp, $l, $r) {
        if($l < $r) {
            $mid = ceil(($l + ($r - 1)) / 2);
            merge_sort($inp, $l, $mid);
            merge_sort($inp, $mid + 1, $r);
            merge($l, $mid, $r, $inp);   
        }
    }
    
    function merge($l, $m, $r, &$inp) {
        $n1 = $m - $l + 1;
        $n2 = $r - $m;
        $i = $j = 0;
        $k = $l;
    
        $L = array_slice($inp, $l, $nl);
        $R = array_slice($inp, $m + 1, $nr);
        
        while($i < $n1 && $j < $n2) {
            if($L[$i] < $R[$j]) {
                $inp[$k] = $L[$i];
                $i++;
            }
            else {
                $inp[$k] = $R[$j];
                $j++;
            }
            $k++;
        }
        
         while($i < $n1) {
            $inp[$k] = $L[$i];
            $i++;
            $k++;
        }
        
        while($j < $n2) {
            $inp[$k] = $R[$j];
            $j++;
            $k++;
        }
    }
?>