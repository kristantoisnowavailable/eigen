<?php 
	$string = 'NEGIE1';

	echo("input: ".$string."<br>");

	$string_huruf = preg_replace("/[^A-Za-z]/", '', $string);
	$string_balik_huruf = strrev($string_huruf);
	$string_angka = preg_replace("/[^0-9]/", '', $string);

	echo('huruf: '.$string_huruf);	echo "<br>";
	echo('huruf dibalik: 	'.$string_balik_huruf);	echo "<br>";
	echo('angka: 			'.$string_angka);	echo "<br>";

	echo('hasil akhir: 		'.$string_balik_huruf.$string_angka);echo "<br>";
 ?>	