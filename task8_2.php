<?
// Задание 1 
function power($val, $pow){
    if ($pow == 1) {
        return $val;
    }
    $res = $val * power($val, $pow - 1);
    return $res;
}
echo power(9, 3);
echo "<br>";

//Задание 2 
function time($hour, $minute) {
    $resulth = ($hour <= 10) ? $hour % 10 : $hour % 20;
    switch ($resulth) {
        case 1:
            echo "$hour час ";
            break;
        case 2:
        case 3:
        case 4:
            echo "$hour часа ";
            break;
        default:
            echo "$hour часов ";
            break;
    }
    $resultm = ($minute <= 10) ? $minute % 10 : $minute % 20;
    switch ($resultm) {
        case 1:
            return "$minute минута";
        case 2:
        case 3:
        case 4:
            return "$minute минуты";
        default:
            return "$minute минут";
    }
}
$hour = (15);
$minute = (25);
echo time($hour, $minute);
?>