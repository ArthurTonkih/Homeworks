<?

$day = date('w', mktime(0, 0, 0, 6, 6, 2006));
$day1 = date('w');
$dayholiday = date('w', mktime(0, 0, 0, 1, 18, 2008));
$week = ["Воскресенье","Понедельник","Вторник","Среда","Четверг","Пятница","Суббота"];
echo "Сегодня: ".$week[$day1];
echo "<br>";
echo "2006: ".$week[$day];
echo "<br>";
echo "День рождение: ".$week[$dayholiday];
echo "<br>";

$mon = date('n');
$month = ["Декабрь","Январь","Февраль","Март","Апрель","Май","Июнь","Июль","Август","Сентябрь","Октябрь","Ноябрь"]; 
echo "Сейчас: ".$month[$mon];
echo "<br>";

$day2 = date('t');
echo "Дней в месяце: ".$day2;
echo "<br>";


$d = date('w');
$dayholiday = date('w', mktime(0, 0, 0, 1, 18, 2008));
$week2 = ["Воскресенье","Понедельник","Вторник","Среда","Четверг","Пятница","Суббота"];
echo "Сегодня: ".$week2[$d];
echo "<br>";


$Date = date_create('2025-12-31');
date_modify($Date, '2 days 1 month');
date_modify($Date, '3 days 1 year');
date_modify($Date, '- 3 days');
echo date_format($Date, 'd.m.Y');
echo "<br>";


$date = date_create();
$datka = date_format($date, 'd.n.Y');
$newYear = 12;
$arr = explode('.', $datka);
$month = [];

for($i = 1; $i <=12; $i++) {
    $month[$i] = date("t", mktime(0, 0, 0, $i, $arr[0], $arr[2]));
}
$ostatok = 0;

for($j = $arr[1]; $j <=12; $j++) {
    $ostatok= $ostatok + $month[$j];
}
echo 'Количество дней до Нового года: ' . ($ostatok - $arr[0]);
echo "<br>";


function isleap( $year )
{
    if( $year % 4 == 0 )
        echo 'Год високосный';
    else
        echo 'Год не високосный';
}
echo isleap(2001);


?>