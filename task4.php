<?
$mas = [-2,-6];

for ($m = 0; $m < count($mas); $m++){
	if ($mas[$m] < 0) {
		$m += $m;
	}
	echo $m;
}

?>