<?php

function pow($base,$exp) {
    $result=1;
    if($exp==0){
       return $result;
    }
    else{
       for($i=1;$i<=$exp;$i++)
	    {
		  $result = $result * $base;
		}
    }
	return $result;
}

function SRoot(num){
    document.getElementById("SRoot").innerHTML = Math.sqrt(num); 
}

?>
