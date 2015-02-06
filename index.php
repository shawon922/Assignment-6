    <?php
     
    $arr = array();
     
    for($i=0;$i<100;$i++){
    	$arr[$i] = rand(1, 150);
    }
     
    print_r($arr);
     
    $min = $max = $arr[0];
     
    for($j=1;$j<100;$j++){
    	if($arr[$j]<$min){
    		$min = $arr[$j];
    	}
	    if($arr[$j]>$max){
	    	$max = $arr[$j];
	    }
    }
     
    echo 'The minimum value is '.$min.' and maximum value is '.$max;
    ?>
