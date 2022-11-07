<?
/* Задание 1 */



/* Задание 2 */

$a = 10;
$b = 0;
function p($b) {
  if ($b == 0) {
    return "$b" . ' - это ноль<br>';
  }
  if ($b % 2) {
    return "$b" . ' - нечетное число<br>';
  } 
  else {
    return "$b" . ' - четное число<br>';
  }
}
 
do {
  echo p($b);
  $b++;
} while ($b <= $a);
?>