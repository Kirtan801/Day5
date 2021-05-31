<?php
//Associative array
//Key=>value
//Method1
$a[0]=39;
$a['P']="PHP";
$a['k']="Patel";
$a[9]="nine";
$a[20]="2020";

//Method 2
//Always use this method to create an array

$a=array(0=>10,
    "p"=>"PHP",
    9=>"nine",
    20=>2020);
//print Value
echo"P is for".$a['p'];

foreach ($a as $value) {
    echo"<br/>Value is $value";
}
foreach ($a as $key => $value) {
    echo"<br/>Key is<b>$key</b> and value is <b>$value</b>";
}

//3 inbuilt functions to debug an array

echo "<pre>";
print_r($a);
echo"<pre>";
echo"<pre>";
var_dump($a);
echo"<pre>";

?>

