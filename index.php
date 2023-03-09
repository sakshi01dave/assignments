<?php

//$nm="Sakshi Dave";
//echo gettype($nm)."<br>";
//echo strlen($nm)."<br>";
//echo $nm[0]."<br>";

//echo strrev($nm)."<br>";
//echo strpos($nm, "Dave")."<br>";

//echo strtoupper($nm)."<br>";
//echo strtolower($nm)."<br>";

//echo ucfirst($nm)."<br>";

//$string = 'hello sakshi';
//echo str_replace("hello","princi","sakshi");


//program of leap year:

//$year = readline("enter the year:  ");
//if(($year %4==0 && $year %100!=0) || ($year %400==0))
//{
  //  echo"Leap Year";

//}
//else
//{
  //  echo "try again";
//}

$var = "parth pareshkumar parmar ";

$part = explode("  ", $var);
$str = $part[0]."  ";
for($i=1; $i<count($part); $i++)
{
    $str .= $part[$i][0]. ". ";
}
echo "$str";
















?>