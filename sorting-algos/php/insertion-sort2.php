<?php
    // in this insertion sorting algo, in every pass, we choose one element from the right most part and place ot on correct position in left most part.
    // this algo time complexity is not good. but better than selection sort and bubble sort, due to less comparisons.
    // time complexity of this algo is Worst Case: O(n^2) big-oh, Best Case O(n).
    // in-place and stable sorting algorithm.
    $inp = [2,7,4,1,5,3];
    $size = count($inp);
    
    echo "Original arr:\n";
    print_r($inp);
    
    echo "input arr size: ";
    print_r($size);
    
    echo "\nSorted arr:\n";
    insertion_sort($inp, $size);
    
    function insertion_sort($inp, $n) {
        for($i = 1; $i < $n; $i++) {
            $tmp = $inp[$i];
            $hole = $i;
            
            while($hole > 0 && $inp[$hole-1] > $tmp) {
                $inp[$hole] = $inp[$hole-1];
                $hole--;
            }
            
            $inp[$hole] = $tmp;
        }
        
        print_r($inp);
    }
?>