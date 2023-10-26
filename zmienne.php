<?php
	// $foo='Bob';
	// $bar=&$foo;
	// $bar='Andy';
	// echo $bar, $foo; //output AndyAndy

	function test(){
		static $licznik=0;
		echo $licznik . "<br>";
		$licznik++;


	}
	test();
	test();
	test();

?>
