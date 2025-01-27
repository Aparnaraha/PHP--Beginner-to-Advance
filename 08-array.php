<?php
// var_dump() function ka use variable ke baare mein information dump karne ke liye hota hai.

// PHP mein array dynamic hote hain, jisme int, float, string, etc. ko mix kiya jaa sakta hai -> jaise Python mein tuple hota hai
$values = array (1, 2, 3, 4, 5, 6, 7, 8, 9, 8, 5, 'Cek');
var_dump($values);

$names = ["Dewa", "Putu", "Semadi"];
var_dump($names);

// Array ke index 0 ko update karna
$names[0] = "Desak";
var_dump($names);

// Position 3 par jo data hai, use delete karna
unset($names[3]);

// Array mein total items count karna
count($names); 

?>
