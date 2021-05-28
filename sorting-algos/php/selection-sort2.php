<?php
	// in this selection sorting algo, we swap elememts only when we found min element index in given input.
    // this algo complexity is less than previous one. 
    // time complexity of this algo is O(n^2) big-oh.
    // in-place and stable sorting algorithm.
    $inp = [2,7,4,1,5,3];
    $size = count($inp);
    
    echo "Original arr:\n";
    print_r($inp);
    
    echo "input arr size: ";
    print_r($size);
    
    echo "\nSorted arr:\n";
    selection_sort($inp, $size);
    
    function selection_sort($inp, $n) {
        for($i = 0; $i < $n - 1; $i++) {
            $min = $i;
            for($j = $i + 1; $j < $n; $j++) {
                if($inp[$j] < $inp[$min]) {
                    $min = $j;
                }
            }
            
            $tmp = $inp[$min];
            $inp[$min] = $inp[$i];
            $inp[$i] = $tmp;
        }
        
        print_r($inp);
    }
?>