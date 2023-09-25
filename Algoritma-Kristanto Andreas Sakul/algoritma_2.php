<?php 
	$string = "Saya sangat senang mengerjakan soal algoritma";
	echo('input: '.$string."<br><br>");

	$cari_kata  = explode(' ', $string);

	$mulai_cari = 0; $kata_terpanjang = '';

	foreach ($cari_kata as $kata) {
	   if (strlen($kata) > $mulai_cari) {
	      $mulai_cari = strlen($kata);
	      $kata_terpanjang = $kata;
	   }
	}

	echo('longest(string)<br>'.$kata_terpanjang.' '.strlen($kata_terpanjang).'character');echo "<br>";
 ?>	