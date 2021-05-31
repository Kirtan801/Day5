<?php
//1.count function 
 $arr=array('python','C','C++','Java','JS');
echo count($arr);
?>



<?php

//2.array_count_values()
$ar = array("apple","mango","banana","orange","apple","mango");
$newarr = array_count_values($ar);

foreach ($newarr as $key => $value){
    echo"<br/>$key - <strong>$value</strong><br/>";
}
?>




<?php
//3.array_sum()
$myarray5 = array(3,4,5,6,7);
echo  array_sum($myarray5);
echo "<br/>";
?>


<?php
//4.array_product()
$myarray6 = array(3,6,9,12,15);
echo array_product($myarray6);
echo"<br/>"
?>


<?php
//5.array_reverse()
$arr1 = array('a', 'b', 'c', 'd', 'e');
$revarr = array_reverse($arr1);
print_r($revarr);
echo"<br/>"
?>


 <?php
 //6.in_array()
$arr2 = array('cat', 'dog', 'mouse', 'horse', 'monkey');
$temp = in_array('monkey',$arr2);
echo $temp;
echo"<br/>"
?>


<?php
//7.array_rand()
$arr3 = array('star', 'moon', 'son', 'solar', 'satellite');
$indexofarray1 = array_rand($arr3);//Returns Array Index
echo $arr3[$indexofarray1];
echo"<br/>"
?>


<?php
//8.select multiple keys at random
$arr4 = array('chlorine', 'flourine', 'bromine', 'iodine', 'phosphine');
$indexofarray2 = array_rand($arr4,2);//Returns Array Index
foreach ($indexofarray2 as $key => $value)
{
echo "<br />$key - <strong>" . $arr4[$value] . "</strong>";
}
echo"<br/>";
?>

<?php
//9.array_unique()
$arr5 = array('ahmedabad', 'baroda','ahmedabad', 'vadodara', 'surat', 'surat');
print_r(array_unique($arr5));
echo"<br/>";
?>

<?php
//10.array_merge()
$arr6 = array('c','c++','android','java','php');
$arr7 = array(11,20,32,44,52);
$NewArr = array_merge($arr6,$arr7);
print_r($NewArr);
echo"<br/>";
?>



<?php
//11.array_search()
$myarr = array('a', 'd','k', 'j', 'p');
$check = array_search('k', $myarr);
echo $check; // Return Index
echo"<br/>";
?>

<?php
//12.range()
$arr8 = range("11", "20");
foreach($arr8 as $key => $value)
{
echo "<br /> $key - $value ";
}
echo"<br/>";
?>


<?php
//13.sort()
$arr9 = array(70,77,80,43,8,7);
sort($arr9);
print_r($arr9);
echo"<br/>";
?>

<?php
//14.rsort()
$arr10 = array(40,61,53,44,18,7);
rsort($arr10);
print_r($arr10);
echo"<br/>";
?>



<?php
//15.asort()
$arr11 = array(8,20,60,40,18,74);
asort($arr11);
print_r($arr11);
echo"<br/>";
?>


<?php
//16.ksort()
$arr12 = array(
"strawberry" => "Pink",
"Plum" => "Red",
"Mango" => "yellow");
ksort($arr12);
foreach ($arr12 as $key => $value) {
echo "<br />$key - $value ";
}
echo"<br/>";
?>


<?php
//17.ksort() key reversesort
$arr13 = array(
"strawberry" => "Pink",
"Plum" => "Red",
"Mango" => "yellow");
krsort($arr13);
foreach ($arr13 as $key => $value) {
echo "<br />$key - $value ";
}
echo"<br/>";
?>



<?php
//18.shubble()
$myArray11 = array("Cricket", "Swimming", "drawing", "soft Tennis",
"ludo");
shuffle($myArray11); // Shuffle the array
foreach ($myArray11 as $key => $value) {
echo "<br /> $value ";
}
echo"<br/>";
?>

<?php
//19.array_key_exists()
$arr14 = array("a" => "apollo", "b" => "baleno");
echo array_key_exists('a',$arr14);
echo"<br/>";
?>


<?php
//20.array_change_key_case()
$arr15 = array(
"strawberry" => "pink",
"plum" => "red",
"mango" => "yellow");
$uppercase = array_change_key_case($arr15,CASE_UPPER);
print_r($uppercase);
echo"<br/>";
?>


<?php
//21.array_combine
$arr16 = array("Bun" , "Apollo" , "Magnet");
$arr17 = array("Yellow","Red", "Green");
$NewVar = array_combine($arr16, $arr17);
print_r($NewVar);
echo"<br/>";
?>



<?php
//22.end()
$myarr18= array('hello', 'how','are', 'you', 'doing');
echo end($myarr18);
echo"<br/>";
?>



<?php
//23.compact()
$name = "kirtan";
$subject = "php";
$arr19 = compact("name", "subject");
print_r($arr19);
echo"<br/>";
?>



<?php
//24.array_flip()
$arr20 = array("a" => "apple", "b" => "ball", "c" => "carrom");
$fliparray = array_flip($arr20);
print_r($fliparray);
echo"<br/>";
?>


<?php
//25.array_diff()
$a=array("ambani","d","reliance","jio","php","antilia");
$b=array("ambani","d","jio","python");
$diff = array_diff($a, $b);
print_r($diff);
echo"<br/>";
?>





<?php
//26.array_intersect()
$arr1 = array(0=>"Sunday",1=>"Monday",2=>"Tuesday");
$arr2 = array(3=>"Tuesday",4=>"Sunday",5=>"Thursday");
print_r(array_intersect($arr1,$arr2));
echo"<br/>";
?>
 

<?php
//27.array_values()
$arr = array("i"=>"kirtan","want"=>"php","learn"=>"development");
$myarr = array_values($arr);
foreach($myarr as $key => $value) {
echo " <br />$key - $value";
echo"<br/>";
}
?>


<?php
//28.array_push()
$a=array("hi","do you like");
array_push($a,"java","php");
print_r($a);
echo"<br/>";
?>



<?php
//29.array_pop()
$a1 = array("my", "first", "php", "Project", "is");
array_pop($a1); //Remove
print_r($a1);
array_pop($a1); //Remove
print_r($a1);
echo"<br/>"
?>


<?php
//30.explode()
$mystring1 = "I Love Python Language";
$arr21= explode(" ",$mystring1);
print_r($arr21);
echo"<br/>"
?>


<?php
//31.implode()
$arr22 = array("i","love","php","language");
$mystring = implode(" ", $arr22);
echo $mystring;
echo"<br/>"
?>






