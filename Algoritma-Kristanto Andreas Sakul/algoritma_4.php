<?php 
	$matrix = array(
		[1, 2, 0], 
		[4, 5, 6], 
		[7, 8, 9]);

	$diagonal_pertama = array();
	$diagonal_kedua = array();

	echo"Matrix = [[1, 2, 0], [4, 5, 6], [7, 8, 9]]<br><br>";

	$baris = count($matrix);
	$jumlah_pertama = 0;
	$jumlah_kedua = 0;
	
	for($i = 0; $i < $baris; $i++){
		$jumlah_pertama += $matrix[$i][$i];
		array_push($diagonal_pertama, $matrix[$i][$i]);
		
		$jumlah_kedua += $matrix[$i][($baris-1)-$i];
		array_push($diagonal_kedua, $matrix[$i][($baris-1)-$i]);
	}
	$hasil = $jumlah_pertama - $jumlah_kedua;

	echo("diagonal pertama = ".implode(" + ",$diagonal_pertama)." = ".$jumlah_pertama."<br>");
	echo("diagonal kedua = ".implode(" + ",$diagonal_kedua)." = ".$jumlah_kedua."<br><br>");
	echo("maka hasilnya adalah ".$jumlah_pertama." - ".$jumlah_kedua." = ".$hasil);
 ?>	