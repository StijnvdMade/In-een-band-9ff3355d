<?php
$totaal;
$albums =  array("Hippity"=>2, "Hoppety"=>4, "Women"=>6, "Are"=>8, "Property"=>69);
$amount = count($albums);
echo("Het albumoverzicht: \n");
foreach($albums as $key => $keyvalue){
    echo $key . " price: $" . $keyvalue . PHP_EOL;
}
foreach($albums as $key => $keyvalue){$total+=$keyvalue . PHP_EOL;}
echo "Total Price $".$total . PHP_EOL;
echo "Average Price $".$total/$amount;
?>