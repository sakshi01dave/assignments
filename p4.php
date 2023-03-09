<?php
$var ="Sakshi Dharmendrabhai Dave" ;

$parts = explode("  ", $var);

$str = $parts[0]."  ";

for($i=1; $i<count($parts); $i++)

{

    $str .= $parts[$i][0]. ".   ";

}

echo $str;











?>  