<?
$mas = [-2,-4,-6,7];

for ($m = 0; $m < count($mas); $m++){
	if ($mas[$m] < 0) {
		$m += $m;
		echo $m;
	}
}
?>