<?php
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
            $min = $inp[$i];
            for($j = $i + 1; $j < $n; $j++) {
                if($inp[$j] < $min) {
                    $tmp = $inp[$j];
                    $inp[$j] = $min;
                    $min = $tmp;
                }
            }
            
            $inp[$i] = $min;
        }
        
        print_r($inp);
    }
?>