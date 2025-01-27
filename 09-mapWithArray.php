<?php

// Array mein map implement karna, key = id, value = Dewa
$array1 = array(
    "id" => "Dewa",
    "name" => "Putu",
    "age" => 19,
);

var_dump($array1);

// Nested array ka example
$array2 = array(
    "id" => "Dewa",
    "name" => "Putu",
    "age" => 19,
    "address" => [
        "city" => "Tabanan",
        "country" => "Indonesia",
    ]
);

var_dump($array2);

?>
