<?php
// Null se variable ko khali karte hai

$age = 20;
$age = NULL; // Variable ko NULL ya null se khali kar diya

echo "Age: $age\n";

echo "Kya age null hai?: ";
var_dump(is_null($age));

// isset -> check karta hai ki koi variable exist karta hai aur uska value null nahi hai
var_dump(isset($age));

?>
