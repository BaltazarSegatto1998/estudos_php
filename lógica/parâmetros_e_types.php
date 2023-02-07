function somar(int $n1 = 0, int $n2 = 0, int $n3 = 0){
	$total = $n1 + $n2 + $n3;
	return $total;

}

$a = somar(1,3,4);
$b = somar(4,3,1);
$c = somar(3,6,7);

$d = somar($a,$b,$c);



echo  "TOTAL: ".$d;
