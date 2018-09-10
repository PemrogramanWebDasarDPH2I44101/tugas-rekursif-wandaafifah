<?php
function rekursif($col, $d){
	global $i;
	rekursif2($i, $col, $d);
	echo "<br>";
	if (--$col > $i) {
		rekursif($col, $d);
	}
}
function rekursif2($j, $col, $print){
	global $i;
	if ($j > $i - $col) {
		echo "$print";
		rekursif2($j - 1, $col, $print);
}
}
$i = 0;
rekursif(5, "*");
echo"<br>/*=============================*/<br><br>";
$angka=5;
function rekursif3($g,$h,$angka){
	if ($g<=$angka) {
		if ($h<=$g) {
			echo $h;
			$h++;
			rekursif3($g,$h,$angka);
		}
		else{
			echo"<br>";
			$g++;
			rekursif3($g,1,$angka);
	}
	}
}
	rekursif3(1,1,$angka);

?>
