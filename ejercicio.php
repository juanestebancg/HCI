<?php

function checkt($num){
	if($num == 10){
		return "A";
	}
	else if($num == 11){
		return "B";
	}
	else if($num == 12){
		return "C";
	}
	else if($num == 13){
		return "D";
	}
	else if($num == 14){
		return "E";
	}
	else if($num == 15){
		return "F";
	}
	else{
		return $num;
	}
}
function checkr($num){
	if($num < 0 ){
		return 0;
	}
	else if($num > 255){
		return 255;
	}
	else{
		return $num;
	}
}
function rgb2hex($red,$green,$blue){
	$red = checkr($red);
	$green = checkr($green);
	$blue = checkr($blue);


	$a = intval($red/16);
	$da = $red-($a*16);

	$b = intval($green/ 16);
	$db = $green - ($b*16);
	
	
	$c = intval($blue/ 16) ;
	$dc = $blue - ($c*16);


	$arr = array($a,$b,$c,$da,$db,$dc);
	for($i = 0; $i < sizeof($arr);$i++){
		$arr[$i] = checkt($arr[$i]);
	}
	

	
	return "#".$arr[0].$arr[3].$arr[1].$arr[4].$arr[2].$arr[5];
}

 echo rgb2hex(250,250,250);

?>