<?

$tabl = [
    ['Name' => 'Стол', 'Price' => 5000, 'Amount' => 5],
    ['Name' => 'Кресло', 'Price' => 1200, 'Amount' => 7],
    ['Name' => 'Монитор', 'Price' => 7600, 'Amount' => 8],
    ['Name' => 'Клавиатура', 'Price' => 500, 'Amount' => 5]
];

echo"<br>";
for ($i = 0; $i < count($tabl); $i++){
    foreach ($tabl[$i] as $key => $value){
        echo $value.",  ";
    }
    echo "<br>";
}



?>