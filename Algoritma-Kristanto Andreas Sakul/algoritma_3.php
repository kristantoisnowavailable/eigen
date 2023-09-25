<?php 
	$INPUT = array('xc', 'dz', 'bbb', 'dz');
	$QUERY = array('bbb', 'ac', 'dz');
	$HASIL = array();
	$OUTPUT = array();

	echo "INPUT: ['". $INPUT[0]."', '". $INPUT[1]."', '".$INPUT[2]."', '".$INPUT[3]."']";echo "<br>";
	echo "QUERY: ['". $QUERY[0]."', '".$QUERY[1]."', '".$QUERY[2]."']";echo "<br><br>";

	foreach ($QUERY as $value) {
		$no = 0;
		foreach ($INPUT as $value2) {
			if ( $value==$value2 ) {
				$no+=1;
			}
		}
		if ( $no == 0) {
			array_push($HASIL, $no);
			array_push($OUTPUT, "kata '".$value."' tidak ada pada INPUT");
		} else {
			array_push($HASIL, $no);
			array_push($OUTPUT, "kata '".$value."' terdapat ".$no." pada INPUT");
		}
	}

	echo "OUTPUT = [".implode(", ",$HASIL)."] karena ".$OUTPUT[0].", ".$OUTPUT[1].", dan ".$OUTPUT[2];
 ?>	