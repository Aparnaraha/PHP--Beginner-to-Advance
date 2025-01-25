<?php

// `var_dump()` ek aisa inbuilt function h jis se variable ki type aur value dikhayi jaati hai

// var_dump() function ka use variable ke baare mein information dump karne ke liye hota hai.

echo "Decimal: ";
var_dump(1234);

echo "Floating point: ";
var_dump(12.3);

echo "Floating point with E Notation plus: ";
var_dump(12E4);

echo "Floating point with E Notation minus: ";
var_dump(12E-4);

echo "Hexadecimal: ";
var_dump(0x1A);

echo "Binary: ";
var_dump(1011);

echo "Underscore in number: ";
var_dump(1_234_567);

echo "Integer overflow 32-bit: ";
var_dump(2147483647);

// Jab value int ki capacity se zyada ho jaati hai 64-bit system pe, toh wo number float mein convert ho jaata hai
echo "Integer overflow 64-bit: ";
var_dump(92233720368547758071);

?>