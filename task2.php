<?
// Задание 1

$a = -2;
$b = 5;
if ($a >=0 and $b >= 0) {
	echo 'Разность чисел равна: '.($a - $b);
} 
elseif ($a < 0 and $b < 0) {
	echo 'Произведение чисел равно: '.($a * $b);
} 
elseif (($a >= 0 and $b < 0) or ($a < 0 and $b >= 0)) {
	   echo 'Сумма чисел равна: '.($a + $b);
}
echo "<br>";


// Задание 2 

$a = 8;
echo "Последовательность чисел от ".$a." до 15: <br>";
	switch ($a) {
		case 1:
			echo "1";
			echo "<br>";
		case 2:
			echo "2";
			echo "<br>";
		case 3:
			echo "3";
			echo "<br>";
		case 4:
			echo "4";
			echo "<br>";
		case 5:
			echo "5";
			echo "<br>";
		case 6:
			echo "6";
			echo "<br>";
		case 7:
			echo "7";
			echo "<br>";
		case 8:
			echo "8";
			echo "<br>";
		case 9:
			echo "9";
			echo "<br>";
		case 10:
			echo "10";
			echo "<br>";
		case 11:
			echo "11";
			echo "<br>";
		case 12:
			echo "12";
			echo "<br>";
		case 13:
			echo "13";
			echo "<br>";
		case 14:
			echo "14";
			echo "<br>";
		case 15:
			echo "15";
			echo "<br>";
		break;
	}
?>