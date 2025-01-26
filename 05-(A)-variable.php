<?php
// Variables wo cheezein hain jo aapke program mein data ko store karte hain aur unki values time ke saath change ho sakti hain
// PHP mein, data type declare karna zaroori nahi hota variables bnate time.
$name = "Rahul";
$age = "25";

echo "Name: $name\n";
echo "Age: $age\n";

// Variable variables
$name2 = "Kumar";
$$name2 = "Awesome";

echo "Name2: $name2\n";
?>
