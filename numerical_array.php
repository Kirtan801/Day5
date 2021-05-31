<?php
////numerical array
//Method1
$a[0] =15;
$a[1] = 26;
$a[2] = 34;
$a[3] = "K";
$a[4] = "40";

//Method 2
$a[] = 29;
$a[] = 30;
$a[] = "p";
$a[] = "9";

//Method 3
//Always use this method to create an array
$a = array(11,12,13,14,"K","python",12.70,"PHP");
//print Array value
echo$a[7];

//Print whole array
for($i=0;$i<count($a);$i++){
         echo"<br/>".$a[$i];
}

//3 Inbuilt functions to debug an Array
echo "<pre>";
print_r($a);
echo"<pre>";
echo"<pre>";
var_dump($a);
echo"<pre>";
var_dump($i, $a);
echo"<pre>";
?>
