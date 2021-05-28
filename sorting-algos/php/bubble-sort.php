<?php
	// in this bubble sorting algo, in every pass, we bubble up highest element in the array to the right top most position.
    // this algo time complexity is not good. similar as selection sort.
    // time complexity of this algo is Worst Case: O(n^2) big-oh, Best Case O(n).
    // in-place and stable sorting algorithm.
    $inp = [2,7,4,1,5,3];
    $size = count($inp);
    
    echo "Original arr:\n";
    print_r($inp);
    
    echo "input arr size: ";
    print_r($size);
    
    echo "\nSorted arr:\n";
    bubble_sort($inp, $size);
    
    function bubble_sort($inp, $n) {
        for($i = 0; $i < $n - 1; $i++) {
            $flag = 0; 
            // use dto check if iteration goes without pass, that means array is sorted in leftmost part.
            for($j = 0; $j < $n-$i-1; $j++) {
                if($inp[$j] > $inp[$j+1]) {
                    $tmp = $inp[$j+1];
                    $inp[$j+1] = $inp[$j];
                    $inp[$j] = $tmp;
                    $flag = true;
                }
            }
            
            if(!$flag) break;
        }
        
        print_r($inp);
    }
?>