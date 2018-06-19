<?php

//
// This is only a SKELETON file for the "Hamming" exercise. It's been provided as a
// convenience to get you started writing code faster.
//

function distance($a, $b)
{	
	$hamming = 0;	
	if (strlen($a) == strlen($b)) {
		for ($i=0; $i<strlen($a); $i++) {
			if ($a[$i] != $b[$i]) {
				$hamming++;
			}
		}
		echo $hamming;
	} else {
		die('DNA strands must be of equal length.');
	}

}
