<?php
	
	$entero = 10;
	$float = 12.34;
	$string = "123 234";
	$array = array("key1" => "hola","key2" => "mundo");
	$array2 = array("key","hola","key2","mundo");
	$verd = true;
	$falso = false;

	class StrValTest{
		private $mivar = "clase 1";
		public $mivar2 = "clase 2";
		public function __toString(){
			return __CLASS__;
		}
		public function example(){
			return "esto es una prueba";
		}

	}
	print "entero ".intval($entero)."<br/>";
	print "float ".intval($float)."<br/>";
	print "string ".intval($string)."<br/>";
	print "bool verdadero ".intval($verd)."<br/>";
	print "bool falso ".intval($falso)."<br/>";
	
	echo "hexa ".intval(0x165)."<br/>";

	echo "string ".strval($string)."<br/>";
	echo "string entero ".strval($entero)."<br/>";

	echo "class string".strval(new StrValTest)."<br/>";

	echo "array int ".(int)$array2."<br/>"; 
	echo "array verd ".(float)$verd."<br/>";

	var_dump((array)new StrValTest());

	echo"<br/>";
	var_dump((object)$float);

?>

